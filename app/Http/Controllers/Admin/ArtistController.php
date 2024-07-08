<?php

namespace App\Http\Controllers\Admin;
use App\Models\City;
use App\Models\Artist;
use App\Models\Region;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $artists  = Artist::with(['music','banner','video_clips','country'])->get();
       
      
        return view('content.artist.index' , compact('artists'));
    }

    public function showSongs($id)
    {
        $artist = Artist::with(['music', 'banner', 'video_clips'])->find($id);
    
        if (!$artist) {
            return redirect()->back()->with('error', 'Artist not found');
        }
    
        return view('content.artist.total_music', compact('artist'));
    }
    

    
    public function showAlbums($id)
    {
        
        
        $artist = Artist::with(['music', 'banner', 'video_clips'])->find($id);

        if (!$artist) {
            return redirect()->back()->with('error', 'Artist not found');
        }
        return view('content.artist.total_album', compact('artist'));
    }
    
    public function showVideos($id)
    {
        
        $artist = Artist::with(['music', 'banner', 'video_clips'])->find($id);

        if (!$artist) {
            return redirect()->back()->with('error', 'Artist not found');
        }
        return view('content.artist.total_videos', compact('artist'));
    }
    

  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content.artist.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
      $data=  $request->validate([
            'name' => 'required|string',
            'country_id'=>'required|string' ,      
            'status'=>'required' ,      
            'gender' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

          ]); 
    
      $artist = new Artist();
      $artist->name = $request->name;
     
      $artist->gender = $request->gender;
      $artist->country_id = $request->country_id;
      $artist->status = $request->status;
      
      $artist->image = $request->image??'';

      if($request->hasFile('image')){
        $path  = $request->file('image')->store('/images/artist/' , 'public');
        $artist->image = $path;
      }

    if($artist->save()){
        return redirect()->route('artist.index')->with('success', 'Artist Has been inserted');
    }else{
        return redirect()->route('artist.index')->with('error', 'Failed to add artist');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function show(Artist $artist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artist = Artist::findorFail($id);
        return view('content.artist.edit' , compact('artist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id)
    {
        $artist = Artist::findorFail($id);
        $artist->first_name = $request->first_name;
        $artist->last_name = $request->last_name;
        $artist->dob= $request->dob;
        $artist->gender = $request->gender;
        $artist->image = $request->image??'';
        $artist->status = $request->status;
        $artist->city_id = $request->city;
        $artist->province_id= $request->province;
        
        // if($request->hasFile('image')){
        //    if(isset($artist->image)){
        //        $image_path  = public_path('storage/'.$artist->image);
        //        if(file_exists($image_path)){
        //            unlink($image_path);
        //        }
        //        $path = $request->file('image')->store('/images/artist' , 'public');
        //        $artist->image = $path;
        //    }
        // }

        if($artist->update()){
            return redirect()->route('artist.index')->with('success', 'Artist Has been Updated');

        }else{
            return redirect()->route('artist.index')->with('success', 'Artist not updated');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artist = Artist::findOrFail($id);
    
        // Check if the artist has any associated songs, albums, or video clips
        if ($artist->music()->exists() || $artist->banner()->exists() || $artist->video_clips()->exists()) {
            return redirect()->route('artist.index')->with('error', 'Artist cannot be deleted because it has associated songs, albums, or video clips.');
        }
    
        // Delete the artist's image if it exists
        if ($artist->image) {
            $image_path = public_path('storage/' . $artist->image);
            if (file_exists($image_path)) {
                unlink($image_path);
            }
        }
    
        // Delete the artist
        if ($artist->delete()) {
            return redirect()->route('artist.index')->with('success', 'Artist has been deleted.');
        } else {
            return redirect()->route('artist.index')->with('error', 'Artist could not be deleted.');
        }
    }
    
    public function status($id , $status){
        $artist = Artist::find($id);
        $artist->status = $status;
        if($artist->update()){
            return redirect()->route('artist.index')->with('success', 'Status Has been Updated');
        }else{
            return redirect()->route('artist.index')->with('error', 'Status is not changed');

        }
    }

    public function get_city($id){
        $province = Region::findorFail($id);
        return $city = City::where('region_id',$province->id)->get();
    }

    public function deleteArtistImage($id)
    {
        $music = Artist::find($id);
        if ($music && isset($music->image)) {
            $path = public_path('storage/' .$music->image);
            if (file_exists($path)) {
                unlink($path);
            }
    
            // Remove the image filename from the model attribute
            $music->image = null;
            $music->save();
        }
        
        return [
            'status' => true
        ];
    }
}

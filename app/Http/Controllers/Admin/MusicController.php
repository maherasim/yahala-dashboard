<?php

namespace App\Http\Controllers\Admin;
use App\Models\Music;
use App\Models\Artist;
use Illuminate\Http\Request;
use App\Models\MusicCategory;
use App\Models\Country;
use App\Http\Controllers\Controller;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
   {
        
        // phpinfo();
        // exit();

        $type  = $request->segments()[0];
        $music  = Music::where('type',$type)->with('music_category')->get();
        $music_category  = MusicCategory::get();
        $artists = Artist::get();
        return view('content.music.index' , compact('music' , 'music_category' , 'artists' , 'type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
     {
         //     return view('content.music.create' , compact('music_category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     
     
     public function storekrlo(Request $request)
{
    // Ensure required fields are present
    if (empty($request->artists_id) || empty($request->status) || !is_array($request->audio) || !is_array($request->title) || count($request->audio) == 0 || count($request->audio) != count($request->title)) {
        return redirect()->back()->with('error', 'Invalid input data.');
    }

    // Ensure the artist exists in the database
    $artist = \App\Models\Artist::find($request->artists_id);
    if (!$artist) {
        return redirect()->back()->with('error', 'Selected artist does not exist.');
    }

    // Ensure status is valid
    if (!in_array($request->status, [0, 1])) {
        return redirect()->back()->with('error', 'Invalid status.');
    }

    $successCount = 0;
    for ($i = 0; $i < count($request->audio); $i++) {
        $music = new Music();
        $music->artists_id = $request->artists_id;
        $music->status = $request->status;
        $music->title = $request->title[$i];
        $music->audio = $request->audio[$i]; // Store each audio file separately
        
        if ($music->save()) {
            $successCount++;
        }
    }

    if ($successCount === count($request->audio)) {
        return redirect()->back()->with('success', 'All music files were successfully created');
    } elseif ($successCount > 0) {
        return redirect()->back()->with('warning', 'Some music files were successfully created');
    } else {
        return redirect()->back()->with('error', 'No music files were created successfully');
    }
}

     
     /**
     * Display the specified resource.
     *
     * @param  \App\Models\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function show(Music $music)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $music = Music::findorFail($id);
        $music_category = MusicCategory::get();
        return view('content.music.edit' , compact('music_category' , 'music'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $music = Music::findorFail($id);
        $music->name = $request->title;
        $music->category_id = $request->category_id;
        $music->artist_id = $request->artist_id;
        $music->audio = $request->audio_paths ?? [];
        $music->status = $request->status;
        if($music->update()){
            return redirect()->back()->with('success', 'Music Has been Updated');

        }else{
            return redirect()->back()->with('success', 'Music not updated');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $ringtone = Music::find($id);
        if(isset($ringtone->audio)){
           $img_path = public_path('storage/'.$ringtone->audio);
           if(file_exists($img_path)){
             unlink($img_path);
           }
        }
        if($ringtone->destroy($ringtone->id)){
         return redirect()->back()->with('success' , 'Song was Deleted successfully');
 
        }else{
         return redirect()->back()->with('success' , 'Song was not  Deleted ');
 
        }
    }

    public function status($id , $status){
        $music = Music::find($id);

        $music->status = $status;
        if($music->update()){
            return redirect()->route('music.index')->with('success', 'Status Has been Updated');
        }else{
            return redirect()->route('music.index')->with('error', 'Status is not changed');

        }
    }

    public function deleteMusic(Request $request, $id)
    {
        $music = Music::find($id);
        $music->image = array_filter($music->audio, function ($path) use ($request) {
            return !($path === $request->path);
        });
        $music->save();
        unlink(public_path('storage/' . $request->path));
        return [
            'status' => true
        ];
    }

    public function pricing()
    {
      return view('content.music.pricing');
    }
    
     public function video()
     {
        return view('content.video_clips.view');
      }
      
         public function country()
     {
            $countries = Country::orderBy("name", "ASC")->get();
        return view('content.music.country',compact('countries'));
      }
      
     
  
}

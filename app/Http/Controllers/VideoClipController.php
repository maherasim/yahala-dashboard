<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\VideoClip;
use Illuminate\Http\Request;
use App\Models\MusicCategory;

class VideoClipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
   {
        $video  = VideoClip::with('music_category')->get();
        $music_category  = MusicCategory::get();
        $artists = Artist::get();
        return view('content.video_clips.index' , compact('video' , 'music_category' , 'artists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
     {
         //     return view('content.video_clips.create' , compact('music_category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->all());
        if (empty($request->artists_id) || empty($request->status) || !is_array($request->video) || count($request->video) == 0) {
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
        foreach ($request->video as $index => $videoFile) {
            $videoClip = new VideoClip();
            $videoClip->artists_id = $request->artists_id;
            $videoClip->status = $request->status;
            $videoClip->video = $videoFile;
            $videoClip->title = $request->video_titles[$index]; // Store the title for each video
    
            if ($videoClip->save()) {
                $successCount++;
            }
        }
    
        if ($successCount === count($request->video)) {
            return redirect()->back()->with('success', ' video clips were successfully created');
        } elseif ($successCount > 0) {
            return redirect()->back()->with('warning', 'Some video clips were not saved successfully');
        } else {
            return redirect()->back()->with('error', 'No video clips were saved');
        }
    }
    
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Music  $music
     * @return \Illuminate\Http\Response
     */
    public function show(VideoClip $music)
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
        $video = VideoClip::findorFail($id);
        $music_category = MusicCategory::get();
        return view('content.video_clips.edit' , compact('music_category' , 'video'));
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
      
        $video = VideoClip::findorFail($id);
        $video->name = $request->title;
        $video->category_id = $request->category_id;
        $video->artist_id = $request->artist_id;
        $video->video = $request->video_paths ?? [];
        $video->status = $request->status;        
        if($video->update()){
            return redirect()->back()->with('success', 'Video Has been Updated');

        }else{
            return redirect()->back()->with('success', 'Video not updated');

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
         $ringtone = VideoClip::find($id);
         if(isset($ringtone->video)){
            $img_path = public_path('storage/'.$ringtone->video);
            if(file_exists($img_path)){
              unlink($img_path);
            }
         }
         if($ringtone->destroy($ringtone->id)){
          return redirect()->back()->with('success' , 'Video Clip was Deleted successfully');
  
         }else{
          return redirect()->back()->with('success' , 'Video Clip was not  Deleted ');
  
         }
     }


    public function status($id , $status){
        $video = VideoClip::find($id);
       
        $video->status = $status;
        if($video->update()){
            return redirect()->route('video-clips.index')->with('success', 'Status Has been Updated');
        }else{
            return redirect()->route('video-clips.index')->with('error', 'Status is not changed');

        }
    }

    public function deleteVideo(Request $request, $id)
    {
        $video = VideoClip::find($id);
        $video->video = array_filter($video->video, function ($path) use ($request) {
            return !($path === $request->path); 
        });
        $video->save();
        unlink(public_path('storage/' . $request->path));
        return [
            'status' => true
        ];
    }
}

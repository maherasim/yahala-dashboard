<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
 //dd($request->all());
        $ringtone  = new Banner();
        $ringtone->artists_id = $request->artists_id;
        $ringtone->status = $request->status;
        $ringtone->banner_title = $request->banner_title;
        $ringtone->audio = $request->audio[0] ?? null;
        $ringtone->banner = $request->banner ;
        // if($request->has('ringtone')){
        //     $path = $request->file('ringtone')->store('/images/ringtone/','public');
        //     $ringtone->ringtone_path = $path;
        // }
        if($ringtone->save()){
            return redirect()->back()->with('success' , 'Album was successfully created');
        }else{
            return redirect()->back()->with('success' , 'Album was not created successfully');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $banner = Banner::find($id);
    
        if (!$banner) {
            return redirect()->back()->with('error', 'Banner not found');
        }
    
        // Check and delete associated banner file
        if (!empty($banner->banner)) {
            $bannerPath = public_path('storage/' . $banner->banner);
    
            if (file_exists($bannerPath)) {
                unlink($bannerPath); // Delete the banner file
            } else {
                // Handle file not found or already deleted
            }
        }
    
        // Delete the banner record from database
        if ($banner->delete()) {
            return redirect()->back()->with('success', 'Banner was deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to delete banner');
        }
    }
    

}

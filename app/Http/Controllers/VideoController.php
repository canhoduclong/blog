<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime,File,Input,DB; 
use App\video;
class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $video = video::paginate(10); 
        return view('backend.video.list', ['data'=> $video] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.video.add' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $video = new video();
        $video->title = $request->title;;
        $video->keyword = $request->keyword;
        $video->description = $request->description;
        $video->content = $request->content;
        $video->save();
        return redirect('admin/video');
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
        $video = video::find($id);  
        return view('backend.video.edit',['data'=>$video]);
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
        $video = video::find($id);
        $video->title = $request->title;;
        $video->keyword = $request->keyword;
        $video->description = $request->description;
        $video->content = $request->content;
        $video->save();
        return redirect('admin/video');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $video = video::find($id);
        $video->delete();
        print_r($video);
        return redirect()->route('listvideo')->with(['message'=> 'Successfully deleted!!']);
    }
}

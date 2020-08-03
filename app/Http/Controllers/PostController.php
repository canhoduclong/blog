<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime,File,Input,DB; 
use App\Post;
class PostController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = post::paginate(10); 
        return view('backend.post.list', ['data'=> $post] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.post.add' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new post();
        $post->title = $request->title;;
        $post->keyword = $request->keyword;
        $post->description = $request->description;
        $post->content = $request->content;
        $post->save();
        return redirect('admin/post');
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
        $post = post::find($id);  
        return view('backend.post.edit',['data'=>$post]);
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
        $post = post::find($id);
        $post->title = $request->title;;
        $post->keyword = $request->keyword;
        $post->description = $request->description;
        $post->content = $request->content;
        $post->save();
        return redirect('admin/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $post = post::find($id);
        $post->delete(); 
        return redirect()->route('listpost')->with(['message'=> 'Successfully deleted!!']);
    }
}

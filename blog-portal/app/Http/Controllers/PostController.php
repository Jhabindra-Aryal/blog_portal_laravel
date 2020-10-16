<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag; 
use App\Models\Post; 

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // for show the first page
    public function index()
    {
          $tag=Tag::all();
          $post=Post::all();
        return view('post_blog',compact('tag','post'));
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
        $arr=[];
        $data= request()->validate([
            'title'=>'required',
            'content'=>'required',
            
            ]);
            $post=new post;
            $post->title=$request->title;
            $post->content=$request->content;


//*************************** */
            $post->tagid=json_encode($request->tag_id);

//*************************** */

            $post->save();
            //for keeping the tags in post as an array
                $post->tags()->sync($request->tag_id);
            
            
            
            return back();
            }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($post_id)
    {
     $post =Post::find($post_id);
   
     return view('post',compact('post'));

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
    public function destroy($id)
    {
        //
    }
}

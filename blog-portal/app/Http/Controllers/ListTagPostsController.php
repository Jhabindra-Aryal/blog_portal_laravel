<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Post;

class ListTagPostsController extends Controller
{
    // for listing all the post and tags in home page
     public function list(){
        $tag=Tag::all();
        $post=Post::all();
        return view('blog_post',compact('tag','post'));
    }
    // displaying all the posts of tag
    public function showPost($tag_id){
        $arr=[];
        $tag=Tag::find($tag_id);
        $postList=$tag->posts;
      $postTitle=json_decode($postList); 
      for($x=0; $x< count($postTitle);$x++){
          array_push($arr,$postTitle[$x]);
      } 
      return view('postlist',compact('arr','tag'));
    }
}

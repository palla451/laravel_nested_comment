<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($id)
    {
        $post = Post::findOrFail($id);

     //   $replies[''] = $post->comments->where('parent_id', '<>', 0);


        $comments = $post->comments->where('parent_id','=',0);

        return view('posts.show',compact('comments','post'));

      //  return $comments;


     //   return view('posts.show',compact('post','comments','replies'));
    }



}

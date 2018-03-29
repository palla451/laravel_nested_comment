<?php

use App\Comment;
namespace App\Http\Controllers;


use App\Comment;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{

    public function newComment(Comment $comment, Request $request, Post $post)
    {
        $comment->body = $request->body;
        $comment->user_id = Auth::id();
        $comment->post_id = $post->id;
        $comment->parent_id = 0;

        $comment->save();

        return back();
    }

    public function replyComment(Comment $comment, Post $post, Request $request)
    {
        $comment->user_id = Auth::id();
        $comment->post_id = $post->id;
        $comment->parent_id = $request->parent_id;
        $comment->body = $request->body;

        $comment->save();

        return back();
    }
}

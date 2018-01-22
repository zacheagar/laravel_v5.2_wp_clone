<?php

namespace App\Http\Controllers;


use App\Post;

use App\Comment;

class CommentsController extends Controller
{
  
    public function store($postid){
        
     $post = Post::find($postid);  
       $post->addComment(request('body','user_id'));
        
        return back();
    }
}

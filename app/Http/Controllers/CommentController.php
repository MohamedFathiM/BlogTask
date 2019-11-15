<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function store(){
            if(auth()->check()){
                $this -> validate(request(),[
                    'comment' => 'required',
                ]);
                
                $comment=new Comment;
                $comment->body = request('comment');
                $comment->user_id = request('user_id');
                $comment->post_id = request('post_id');
                $comment->save();
                return redirect() ->back();

            }
        return redirect('login');
    }
}

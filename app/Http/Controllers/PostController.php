<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{

    //to show all posts
    public function index(){
            $posts = Post::paginate(4);
            return view('BlogPages.index',compact('posts'));
    }

    //show the post details 
    public function show($id){
        $post = Post::findOrFail($id);
        return view('BlogPages.post',compact('post'));
    }


    //
}

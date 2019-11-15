<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class DashboardController extends Controller
{

    //save image 
    public function image($file){
            
        $extention = $file->getClientOriginalExtension();
        $sha1 = sha1($file->getClientOriginalName());
        $filename  = time().'_'.$sha1.'.'.$extention;
        $file->move('img/post_img/',$filename);
        return $filename;
}


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(\Auth::check()){
            $posts = Post::where('user_id',auth()->id())->paginate(4);
            return view('dash.posts.index',compact('posts'));
        }
    }


    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dash.posts.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' =>'required',
            'breif' => 'required|max:255',
            'body' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg,gif,bmp',
        ]);
        $post = new Post ; 
        $post-> create([
            'title' => request('title'),
            'breif' => request('breif'),
            'body' => request('body'),
            'user_id' =>request('user_id'),
            'image' => $this->image(request('image'))
        ]);

        return back()->with('message','sucessfully Added');
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
        $post = Post::findOrFail($id);
        if(\Auth::id() == $post->user_id){
            return view('dash.posts.edit',compact('post'));
        }else{
            return back();
        }
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
        $post = Post::findOrFail($id);
        $request -> validate([
            'title' =>'required',
            'breif' => 'required|max:255',
            'body' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg,gif,bmp',
        ]);
            //delete the current image if request has image
        if(request('image')){
            $image_path = public_path() . '/img/post_img/'.$post->image;  
            if(file_exists($image_path)) {
                $request->image  = $this->image(request('image'));
                @unlink($image_path);
            }
        }else{
            $request -> image = $post->image;
        }

        $post->update([
            'title' => request('title'),
            'breif' => request('breif'),
            'body' => request('body'),
            'user_id' =>request('user_id'),
            'image' => $request->image,
        ]);
        

        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
            $post = Post::findOrFail($id);
            $post ->delete() ; 
            return back();
        
    }
}

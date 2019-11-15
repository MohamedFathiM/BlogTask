@extends('layouts.master')
@section('content')
<div class="container">
        <div style="height:100px;"></div>
        @include('inc.errors')
<form action="{{route('posts.update',$post->id)}}" method="POST" enctype="multipart/form-data">
    @csrf 
    {{method_field('PATCH')}}
            <input type="hidden" name="user_id" value="{{Auth::id()}}">
        <div class="form-group">
          <label for="title">Title</label>
        <input type="text" class="form-control" id="title" value="{{$post->title}}" name="title" placeholder="Enter Title">
        </div>
        <div class="form-group">
          <label for="brief">Breif</label>
        <textarea class="form-control" name="breif"  placeholder="Enter Breif" rows=>{{$post->breif}}</textarea>
        </div>
        <div class="form-group">
                <label for="content">Content</label>
               <textarea class="form-control" name="body" placeholder="Enter Content" rows="6">{{$post->body}}</textarea>
        </div>
        <img src="{{$post->image}}" width="300" height="300">
        <div class="form-group">
                <input type="file" class="form-control-file" name="image" id="image">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
      </form>
    </div>
    <div style="height:100px;"></div>
@endsection
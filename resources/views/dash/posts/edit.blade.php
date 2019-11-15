@extends('layouts.master')
@section('content')
<div class="container">
        <div style="height:100px;"></div>
<form action="posts/{{$post->id}}" method="POST" enctype="multipart/form-data">
    @csrf 
    {{method_field('PUT')}}
            <input type="hidden" name="user_id" value="Auth::id()">
        <div class="form-group">
          <label for="title">Email address</label>
          <input type="Title" class="form-control" id="title" name="title" placeholder="Enter Title">
        </div>
        <div class="form-group">
          <label for="brief">Breif</label>
         <textarea class="form-control" name="breif" placeholder="Enter Breif" rows=></textarea>
        </div>
        <div class="form-group">
                <label for="content">Content</label>
               <textarea class="form-control" name="content" placeholder="Enter Content" rows="6"></textarea>
        </div>
        <img src="" width="100" height="100">
        <div class="form-group">
                <input type="file" class="form-control-file" name="image" id="image">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
      </form>
    </div>
    <div style="height:100px;"></div>
@endsection
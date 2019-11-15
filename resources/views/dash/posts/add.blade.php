@extends('layouts.master')
@section('content')
<div class="container">
        <div style="height:100px;"></div>
        @include('inc.errors')
<form action="/posts" method="POST" enctype="multipart/form-data">
    @csrf 
            <input type="hidden" name="user_id" value="{{Auth::id()}}">
        <div class="form-group">
          <label for="title">Email address</label>
          <input type="Title" class="form-control" id="title" name="title" value="{{old('title')}}" placeholder="Enter Title">
        </div>
        <div class="form-group">
          <label for="brief">Breif</label>
         <textarea class="form-control" name="breif" placeholder="Enter Breif"  rows="3">{{old('breif')}}</textarea>
         
        </div>
        <div class="form-group">
                <label for="content">Content</label>
               <textarea class="form-control" name="body" placeholder="Enter Content"  rows="6"> {{old('content')}}</textarea>
        </div>
        <div class="form-group">
                <label for="iamge">Image</label>
                <input type="file" class="form-control-file" name="image" id="image">
        </div>
        <button type="submit" class="btn btn-success">Add Post</button>
      </form>
    </div>
    <div style="height:100px;"></div>
@endsection
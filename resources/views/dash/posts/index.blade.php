@extends('layouts.master')
@section('content')
<div class="container">

    <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Breif</th>
                <th scope="col">image</th>
                <th scope="col">Control</th>
                
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td style="width:150px;">{{$post -> title}}</td>
                    <td style="width:500px;text-align:justify;">{{$post->breif}}</td>
                    <td><img src="{{$post->image}}" width=50 height=50></td>
                    <td class="d-flex">
                    <a href="{{route('posts.edit',$post->id)}}" class="btn btn-primary"> Edit </a>
                            &nbsp;
                        <a href="{{route('posts.destroy',$post->id)}}" class="btn btn-danger"> Delete </a> 
                    </td>
                </tr>
                
            @endforeach
            <ul class="d-flex justify-content-center">
                {{$posts->links()}}
            </ul>
           
            </tbody>
        </table>
    </div>
@endsection
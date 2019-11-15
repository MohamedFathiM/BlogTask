@extends('layouts.master')

@section('content')
<div class="container">
        <div class="row">
          <!-- Latest Posts -->
          <main class="post blog-post col-lg-8"> 
            <div class="container">

                  {{------------Post Details ---------------}}
                  
<div class="post-single">
    <div class="post-thumbnail"><img src="{{asset('img/post_img').'/'.$post->image}}" alt="..." class="img-fluid"></div>
            <div class="post-details">
            
              {{-----------post meta data ------------}}
            <h1>{{$post -> title}}<a href="#"><i class="fa fa-bookmark-o"></i></a></h1>
              <div class="post-footer d-flex align-items-center flex-column flex-sm-row"><a href="#" class="author d-flex align-items-center flex-wrap">
              <div class="avatar"><img src="{{asset('img/user_img') . '/'. $post -> user -> image}}" alt="..." class="img-fluid"></div>
              <div class="title"><span>{{$post->user->name}}</span></div></a>
                <div class="d-flex align-items-center flex-wrap">       
                <div class="date"><i class="icon-clock"></i> {{$post->created_at->diffForHumans()}}</div>
                  <div class="comments meta-last"><i class="icon-comment"></i>@if($post->comments->count()>0){{$post->comments->count()}}@else 0 @endif</div>
                </div>
              </div>
              {{----------content of post-----------}}
              
              @if(\Auth::check() && $post->user_id === \Auth::id())
              <hr><br>
              <h3>Control You Post</h3>
                <hr>
                <div class="d-flex justify-items-center">
                  <a href="{{route('posts.edit',$post->id)}}" class="btn btn-primary"> Edit </a>
                          &nbsp;
                        <form method="POST" action="{{route('posts.destroy' ,[$post->id])}}">
                            {{ @csrf_field() }}
                            {{ method_field('DELETE') }}
                              <button   onclick="return confirm('Are you sure? Delete Post and its Comments')" type="submit" class="btn btn-danger">Delete</button>
                        </form>  
                      </div>
              @endif
              <div class="post-body">
              <p class="lead">{{$post->breif}}</p>
                <p>{{$post->body}}</p>
                
              </div>
              
              @php 
                $post_id = $post -> id ;
                $prev = $post_id -1 ; 
                $next = $post_id + 1 ; 

              @endphp
              {{-----------------------previous and next post------------------------------}}
              @if(!\Auth::Check())
            <div class="posts-nav d-flex justify-content-between align-items-stretch flex-column flex-md-row"><a href="{{$prev}}" class="prev-post text-left d-flex align-items-center">
                  <div class="icon prev"><i class="fa fa-angle-left"></i></div>
                  <div class="text"><strong class="text-primary">Previous Post </strong>
                  <h6>@if(App\Post::find($prev)){{App\Post::findOrFail($prev)->title}}@endif</h6>
                  </div></a><a href="{{$next}}" class="next-post text-right d-flex align-items-center justify-content-end">
                  <div class="text"><strong class="text-primary">Next Post </strong>
                    <h6>@if(App\Post::find($next)){{App\Post::findOrFail($next)->title}}@endif</h6>
                  </div>
                  <div class="icon next"><i class="fa fa-angle-right">   </i></div></a></div>
    
                @endif
              <div class="post-comments">
                <header>
                <h3 class="h6">Post Comments<span class="no-of-comments">{{$post->comments->count()}}</span></h3>
                </header>
                  
                {{--comments --------------}}
                @if($post->comments->count()>0)
                @foreach($post->comments->reverse() as $comment)
                  @include('inc.comment')
                @endforeach
                @endif
              
              
              <div class="add-comment">
                <header>
                  <h3 class="h6">Leave a reply</h3>
                </header>
                <form action="/comment" method="POST" class="commenting-form">
                  @csrf
                  <div class="row">
                    <input type="hidden" value="{{\Auth::id()}}" name="user_id">
                    <input type="hidden" value="{{$post->id}}" name="post_id">
                    <div class="form-group col-md-12">
                      <textarea name="comment" id="usercomment" placeholder="Type your comment" class="form-control"></textarea>
                    </div>
                    <div class="form-group col-md-12">
                      <button type="submit" name="addComment" class="btn btn-secondary">Submit Comment</button>
                    </div>
                  </div>
                </form>
                @include('inc.errors')
              </div>
            </div>
          </div>

                  {{------------Post Details ---------------}}


            </div>
        </main>
        </div>
</div>
@endsection
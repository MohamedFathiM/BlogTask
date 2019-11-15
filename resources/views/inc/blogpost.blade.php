 <!-- post -->

 <div class="post col-xl-6">
 <div class="post-thumbnail"><a href="post/{{$post->id}}"><img src="{{asset('img/post_img').'/'.$post->image}}" alt="..." class="img-fluid"></a></div>
        <div class="post-details">
          <div class="post-meta d-flex justify-content-between">
          <div class="date meta-last">{{$post->created_at ->dayName. ' | '.$post->created_at->monthName}}</div>
          </div><a href="post/{{$post->id}}">
          <h3 class="h4">{{$post->title}}</h3></a>
          <p class="text-muted">{{$post->breif}}</p>
          <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
          <div class="avatar"><img src="{{asset('img/user_img'.'/' .$post->user->image)}}" alt="..." class="img-fluid"></div>
          <div class="title"><span>{{$post->user->name}}</span></div></a>
          <div class="date"><i class="icon-clock"></i> {{$post->created_at->diffForHumans()}}</div>
          <div class="comments meta-last"><i class="icon-comment"></i>{{$post->comments->count()}}</div>
          </footer>
        </div>
      </div>

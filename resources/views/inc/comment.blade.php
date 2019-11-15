<div class="comment">
        <div class="comment-header d-flex justify-content-between">
          <div class="user d-flex align-items-center">
          <div class="image"><img src="{{asset('img/user_img').'/' . $comment->user->image}}" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title"><strong>{{$comment->user->name}}</strong><span class="date">{{$comment->created_at->diffForHumans()}}</span></div>
          </div>
        </div>
        <div class="comment-body">
        <p>{{$comment->body}}</p>
        </div>
</div>
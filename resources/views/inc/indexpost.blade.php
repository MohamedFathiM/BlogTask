<section class="featured-posts no-padding-top intro">
        <div class="container">
        
          {{------------------Post number one -----------------}}
          <!-- Post-->
          <div class="row d-flex align-items-stretch">
            <div class="text col-lg-7">
              <div class="text-inner d-flex align-items-center">
                <div class="content">
                  <header class="post-header">
                  <a href="post/{{$post->id}}">
                   <h2 class="h4">{{$post->title}}</h2></a>
                  </header>
                  <p>{{$post->breif}}.</p>
                  <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                      <div class="avatar"><img src="{{ asset('img\user_img') . '/' .$post->user->image }}" alt="..." class="img-fluid"></div>
                  <div class="title"><span>{{ $post -> user ->name }}</span></div></a>
                  <div class="date"><i class="icon-clock"></i> {{$post -> created_at ->diffForHumans()}}</div>
                  <div class="comments"><i class="icon-comment"></i>
                    @if($post->comments->count() >0)
                        {{$post ->comments->count()}}
                    @else
                        0
                    @endif
                  
                  </div>
                  </footer>
                </div>
              </div>
            </div>
            <div class="image col-lg-5"><img src="{{ asset('img/post_img') . '/' . $post->image }}" alt="..."></div>
          </div>
         
          
      {{---------Post number two------------}}
          
          <!-- Post        -->
      
         
          
        </div>
</section>
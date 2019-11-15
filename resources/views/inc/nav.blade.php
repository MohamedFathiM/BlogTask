<!-- Navbar Brand -->
<div class="navbar-header d-flex align-items-center justify-content-between">
        <!-- Navbar Brand --><a href="/" class="navbar-brand">Bootstrap Blog</a>
        <!-- Toggle Button-->
        <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span></span><span></span><span></span></button>
      </div>
      @if(\Auth::check() xor Request::is('posts','posts/*'))
         <a href="posts" class="btn btn-info ml-5" style='display:@if(Request::is('post/*')) none @else block @endif'>Control Your Posts</a>
      @else
    <a href="{{route('posts.create')}}" class="btn btn-success" > Add New Post </a>
      @endif

      
      <!-- Navbar Menu -->
      <div id="navbarcollapse" class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">

           
                <li class="nav-item"><a href="/" class="nav-link {{ Request::is('/') ? 'active' :''}} ">Home</a>
                </li>
                    @if(Request::is('posts','posts/*','post/*'))
                        @else
                        <li class="nav-item"><a href="blog" class="nav-link {{ Request::is('blog') ? 'active' :'' }}">Blog</a>
                        </li>
                   @endif
                {{--  <li class="nav-item"><a href="post" class="nav-link {{ Request::is('post') ? 'active' :'' }}">Post</a>
                </li>  --}}

                @guest
                <li class="nav-item {{Request::is('login') ? 'active' : '' }}" >
                    <a class="nav-link" href="{{ url('/login') }}" style="color:green;">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item {{Request::is('register') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/register') }}" style="color:green;">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
            <li class="nav-item">
            <img src="{{asset('img/user_img') . '/' .Auth::user()->image}}" class="rounded-circle" width="40" >
            </li>
                <li class="nav-item dropdown " >
                    <a style="color:green;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Hello {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
        
                    <div class="dropdown-menu dropdown-menu-left " id="dropMenu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item " id="logout" href="{{ url('/logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
        
                        <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
               


          
    
        </ul>
        <div class="navbar-text"><a href="#" class="search-btn"><i class="icon-search-1"></i></a></div>
      </div>
    </div>
  </nav>
</header>
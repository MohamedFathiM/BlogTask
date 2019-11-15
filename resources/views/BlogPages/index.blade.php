@extends('layouts.master')

@section('content')
<section style="background: url(img/hero.jpg); background-size: cover; background-position: center center" class="hero">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <h1>Welcome To the Blog , login to Create posts </h1><a href="#" class="hero-link">Discover More</a>
        </div>
      </div><a href=".intro" class="continue link-scroll"><i class="fa fa-long-arrow-down"></i> Scroll Down</a>
    </div>
  </section>
  {{--  @if($posts->count() > 0)  --}}
    @foreach($posts as $post)
       @include('inc.indexpost')
       
    @endforeach
    <ul class="d-flex justify-content-center">
    {{$posts->links()}}
    </ul>
    
  {{--  @else
  <section class="featured-posts no-padding-top intro">
      <div class="container">
          <p>No Posts to view </p>
      </div>
    </section>
  @endif  --}}
<!-- Latest Posts -->
<section class="latest-posts"> 
   <div class="container">
    
     <div class="row">
         

       </div>
   </div>
</section>
@endsection
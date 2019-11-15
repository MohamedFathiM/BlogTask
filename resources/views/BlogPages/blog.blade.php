@extends('layouts.master')
@section('content')
    
<div class="row">
        <!-- Latest Posts -->
        <main class="posts-listing col-lg-12"> 
          <div class="container">
            <div class="row">
                @foreach ($posts as $post)
                   @include('inc.blogpost')
                @endforeach
            </div>
          </div>
              <!-- Pagination -->
            <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-template d-flex justify-content-center">
                      {{$posts->links()}}
                    </ul>
            </nav>
                </div>
              </main>

</div>

 @endsection
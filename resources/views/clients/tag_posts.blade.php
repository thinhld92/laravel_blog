@extends('clients.layouts.master')

@section('breadcrumb')
<!-- breadcrumb-area -->
<div class="breadcrumb-area">
  <div class="container">
      <div class="row">
          <div class="col-12">
              <div class="breadcrumb-content">
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="{{route('clients.home_page')}}">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">{{$tag->name}}</li>
                      </ol>
                  </nav>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- breadcrumb-area-end -->
    
@endsection


@section('main_content')
@include('clients.layouts.blocks.social_share')

<div class="col-xl-8 col-lg-7">
  <div class="blog-post-wrapper">
    @foreach ($posts as $post)
      <div class="latest__post-item">
        <div class="latest__post-thumb tgImage__hover">
          <a href="{{route('clients.single_post', $post)}}"><img src="{{$post->image}}" alt="img"></a>
        </div>
        <div class="latest__post-content">
          <ul class="tgbanner__content-meta list-wrap">
            <li class="category"><a href="{{route('clients.cat_posts', $post->category)}}">{{$post->category->name}}</a></li>
            <li><span class="by">By</span> <a href="{{route('clients.author_posts', $post->user)}}">{{$post->user->username}}</a></li>
            <li>{{$post->created_at->diffForHumans()}}</li>
          </ul>
          <h3 class="title tgcommon__hover"><a href="{{route('clients.single_post', $post)}}">{{$post->title}}</a></h3>
          <p>{{$post->description}}</p>
          <div class="latest__post-read-more">
              <a href="{{route('clients.single_post', $post)}}">Read More <i class="far fa-long-arrow-right"></i></a>
          </div>
        </div>
      </div>
    @endforeach
    <div class="d-flex justify-content-end">
      {{ $posts->links() }}
    </div>
  </div>
</div>
@endsection
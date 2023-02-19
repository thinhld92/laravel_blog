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
                          @foreach ($breadCrumb as $bread)
                          <li class="breadcrumb-item"><a href="{{route('clients.cat_posts', $bread)}}">{{$bread->name}}</a></li>
                          @endforeach
                          <li class="breadcrumb-item active" aria-current="page">{{$post->title}}</li>
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
  <div class="blog-details-wrap">
    <ul class="tgbanner__content-meta list-wrap">
        <li class="category"><a href="{{route('clients.cat_posts', $post->category)}}">{{$post->category->name}}</a></li>
        <li><span class="by">By</span> <a href="{{route('clients.author_posts', $post->user)}}">{{$post->user->username}}</a></li>
        <li>{{$post->created_at}}</li>
        {{-- <li>23 comments</li> --}}
    </ul>
    <h2 class="title">{{$post->title}}</h2>
    <div class="blog-details-thumb">
        <img src="{{$post->image}}" alt="">
    </div>
    <div class="blog-details-content">
      {!! $post->content  !!}
    </div>
    <div class="blog-details-bottom">
        <div class="row align-items-baseline">
            <div class="col-xl-6 col-md-7">
                <div class="blog-details-tags">
                    <ul class="list-wrap mb-0">
                      @foreach ($post->tags as $tag)
                        <li><a href="#">{{$tag->name}}</a></li>
                      @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-xl-6 col-md-5">
                <div class="blog-details-share">
                    <h6 class="share-title">Share Now:</h6>
                    <ul class="list-wrap mb-0">
                        <li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{\URL::current()}}&amp;src=sdkpreparse"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        {{-- <li><a href="#"><i class="fab fa-behance"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-avatar-wrap">
        <div class="blog-avatar-img">
            <a href="#"><i class="far fa-check"></i><img src="{{$post->user->avatar}}" alt="img"></a>
        </div>
        <div class="blog-avatar-content">
            <p>{{$post->user->profile_description}}</p>
            <h5 class="name">{{ucfirst($post->user->username)}}</h5>
            <span class="designation">{{$post->user->group->name}}</span>
        </div>
    </div>
    <div class="blog-prev-next-posts">
        <div class="row">
            <div class="col-xl-6 col-lg-8 col-md-6">
              @if ($previous_post)
                <div class="pn-post-item">
                    <div class="thumb">
                        <a href="{{route('clients.single_post', $previous_post)}}"><img src="{{$previous_post->thumbnail}}" alt="img"></a>
                    </div>
                    <div class="content">
                        <span>Prev Post</span>
                        <h5 class="title tgcommon__hover"><a href="{{route('clients.single_post', $previous_post)}}">{{$previous_post->title}}</a></h5>
                    </div>
                </div>
              @endif
            </div>
            <div class="col-xl-6 col-lg-8 col-md-6">
              @if ($next_post)
                <div class="pn-post-item next-post">
                    <div class="thumb">
                        <a href="{{route('clients.single_post', $next_post)}}"><img src="{{$next_post->thumbnail}}" alt="img"></a>
                    </div>
                    <div class="content">
                        <span>Next Post</span>
                        <h5 class="title tgcommon__hover"><a href="{{route('clients.single_post', $next_post)}}">{{$next_post->title}}</a></h5>
                    </div>
                </div>
              @endif
            </div>
        </div>
    </div>
    <div class="blog-prev-next-posts" id="facebook-comments-box">
      <h2 class="title">Comments</h2>
      <div class="fb-comments" data-href="{{\URL::current()}}" data-width="100%" data-numposts="10">
      </div>
    </div>
</div>

</div>
@endsection
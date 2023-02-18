@extends('clients.layouts.master')

@section('banner')
<section class="tgbanner__area-five pt-80 pb-50">
  <div class="container">
      <div class="row">
      @php
        if($hottest_posts->count() > 0){
          $first_post = $hottest_posts->get(0);
          $hottest_posts->forget(0);
        }
      @endphp
          <div class="col-lg-8">
              <div class="tgbanner__five-item big-post">
                  <div class="tgbanner__five-thumb tgImage__hover">
                      <a href="{{route('clients.cat_posts', $first_post->category)}}" class="tags">{{$first_post->category->name}}</a>
                      <a href="{{route('clients.single_post', $first_post)}}">
                          <img src="{{$first_post->image}}" alt="{{$first_post->image_caption}}">
                      </a>
                  </div>
                  <div class="tgbanner__five-content">
                      <ul class="tgbanner__content-meta list-wrap">
                          <li><span class="by">By</span> <a href="{{route('clients.author_posts', $first_post->user)}}">{{$first_post->user->username}}</a></li>
                          <li>{{$first_post->created_at->diffForHumans()}}</li>
                      </ul>
                      <h2 class="title tgcommon__hover"><a href="{{route('clients.single_post', $first_post)}}">{{$first_post->title}}</a></h2>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 d-flex flex-wrap d-lg-block gx-30">
            @foreach ($hottest_posts as $post)
            <div class="tgbanner__five-item small-post">
                <div class="tgbanner__five-thumb tgImage__hover">
                    <a href="{{route('clients.cat_posts', $post->category)}}" class="tags">{{$post->category->name}}</a>
                    <a href="{{route('clients.single_post', $post)}}">
                        <img src="{{$post->thumbnail}}" alt="{{$post->image_caption}}">
                    </a>
                </div>
                <div class="tgbanner__five-content">
                    <ul class="tgbanner__content-meta list-wrap">
                        <li><span class="by">By</span> <a href="{{route('clients.author_posts', $post->user)}}">{{$post->user->username}}</a></li>
                        <li>{{$post->created_at->diffForHumans()}}</li>
                    </ul>
                    <h2 class="title tgcommon__hover"><a href="{{route('clients.single_post', $post)}}">{{$post->title}}</a></h2>
                </div>
            </div>
            @endforeach
          </div>
      </div>
  </div>
</section>
@endsection


@section('popular')
<section class="popular__post-area lifestyle__popular-area white-bg section__hover-line pt-75 pb-75">
  <div class="container">
      <div class="section__title-wrap mb-40">
          <div class="row align-items-end">
              <div class="col-sm-6">
                  <div class="section__title">
                      <span class="section__sub-title">Popular</span>
                      <h3 class="section__main-title">Popular Post</h3>
                  </div>
              </div>
              <div class="col-sm-6">
                  <div class="section__read-more text-start text-sm-end">
                      <a href="blog.html">More Popular Post <i class="far fa-long-arrow-right"></i></a>
                  </div>
              </div>
          </div>
      </div>
      <div class="trending__slider">
          <div class="swiper-container popular-active">
              <div class="swiper-wrapper">
                @foreach ($popular_posts as $post)
                  <div class="swiper-slide">
                      <div class="trending__post">
                          <div class="trending__post-thumb tgImage__hover">
                              <a href="{{route('clients.cat_posts', $post->category)}}" class="tags">{{ $post->category->name }}</a>
                              <a href="{{route('clients.single_post', $post)}}" class="image"><img src="{{$post->thumbnail}}" alt="{{$post->image_caption}}"></a>
                          </div>
                          <div class="trending__post-content">
                              <h3 class="post--count">{{$loop->iteration}}</h3>
                              <h4 class="title tgcommon__hover"><a href="{{route('clients.single_post', $post)}}">{{$post->title}}</a></h4>
                          </div>
                      </div>
                  </div>
                @endforeach
              </div>
          </div>
      </div>
  </div>
</section>
@endsection

@section('main_content')
<div class="col-xl-9 col-lg-8">
<div class="section__title-wrap mb-40">
  <div class="row align-items-end">
      <div class="col-sm-6">
          <div class="section__title">
              <span class="section__sub-title">Latest</span>
              <h3 class="section__main-title">Latest News</h3>
          </div>
      </div>
      <div class="col-sm-6">
          <div class="section__read-more text-start text-sm-end">
              <a href="blog.html">More Latest Post <i class="far fa-long-arrow-right"></i></a>
          </div>
      </div>
  </div>
</div>
<div class="latest__post-wrap">
  @foreach ($latest_posts as $post)
    <div class="latest__post-item">
        <div class="latest__post-thumb tgImage__hover">
            <a href="{{route('clients.single_post', $post)}}"><img src="{{$post->thumbnail}}" alt="img"></a>
        </div>
        <div class="latest__post-content">
            <ul class="tgbanner__content-meta list-wrap">
                <li class="category"><a href="{{route('clients.cat_posts', $post->category)}}">{{$post->category->name}}</a></li>
                <li><span class="by">By</span> <a href="{{route('clients.author_posts', $post->user)}}">{{$post->user->username}}</a></li>
                <li>{{$post->created_at->diffForHumans()}}</li>
            </ul>
            <h3 class="title tgcommon__hover"><a href="{{route('clients.single_post', $post)}}">{{$post->title}}</a></h3>
            <p>{{$post->description}}</p>
            <ul class="post__activity list-wrap">
                <li><i class="fal fa-signal"></i> 1.5k</li>
                <li><a href="{{route('clients.single_post', $post)}}"><i class="fal fa-comment-dots"></i> 150</a></li>
                <li><i class="fal fa-share-alt"></i> 32</li>
            </ul>
        </div>
    </div>
  @endforeach

</div>
<div class="latest__post-more text-center">
  <a href="#" id="loadMore" class="btn"><span class="text">Load More</span> <i class="far fa-plus"></i></a>
</div>
</div>
@endsection
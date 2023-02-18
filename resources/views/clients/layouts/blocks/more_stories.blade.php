<section class="handpicked-post-area white-bg section__hover-line pt-75 pb-50">
  <div class="container">
      <div class="section__title-wrap mb-40">
          <div class="row align-items-end">
              <div class="col-sm-6">
                  <div class="section__title">
                      <span class="section__sub-title">Stories</span>
                      <h3 class="section__main-title">Good to know</h3>
                  </div>
              </div>
              <div class="col-sm-6">
                  <div class="section__read-more text-start text-sm-end">
                      <a href="blog.html">More stories <i class="far fa-long-arrow-right"></i></a>
                  </div>
              </div>
          </div>
      </div>
      <div class="row justify-content-center">
        @php
            if ($stories->count()) {
              $first_story = $stories->get(0);
              $stories->forget(0);
            }
        @endphp
          <div class="col-xl-6 col-lg-8">
            @if (isset($first_story))
              <div class="handpicked__item big-post">
                  <div class="handpicked__thumb tgImage__hover">
                      <a href="{{route('clients.single_post', $first_story)}}"><img src="{{$first_story->image}}" alt="img"></a>
                  </div>
                  <div class="handpicked__content">
                      <ul class="tgbanner__content-meta list-wrap">
                          <li class="category"><a href="{{route('clients.cat_posts', $first_story->category)}}">{{$first_story->category->name}}</a></li>
                          <li><span class="by">By</span> <a href="{{route('clients.single_post', $first_story)}}">{{$first_story->user->username}}</a></li>
                          <li>{{$first_story->created_at->diffForHumans()}}</li>
                      </ul>
                      <h2 class="title tgcommon__hover"><a href="{{route('clients.single_post', $first_story)}}">{{$first_story->title}}</a></h2>
                  </div>
              </div>
            @endif
          </div>
          <div class="col-xl-6">
              <div class="handpicked__sidebar-post">
                  <div class="row">
                    @foreach ($stories as $story)
                      <div class="col-xl-6 col-lg-4 col-md-6">
                          <div class="handpicked__item small-post">
                              <div class="handpicked__thumb tgImage__hover">
                                  <a href="{{route('clients.single_post', $story)}}"><img src="{{$story->thumbnail}}" alt="img"></a>
                              </div>
                              <div class="handpicked__content">
                                  <ul class="tgbanner__content-meta list-wrap">
                                      <li class="category"><a href="{{route('clients.cat_posts', $story->category)}}">{{ $story->category->name}}</a></li>
                                      <li><span class="by">By</span> <a href="{{route('clients.single_post', $story)}}">{{ $story->user->username}}</a></li>
                                  </ul>
                                  <h4 class="title tgcommon__hover"><a href="{{route('clients.single_post', $story)}}">{{$story->title}}</a></h4>
                              </div>
                          </div>
                      </div>
                    @endforeach
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
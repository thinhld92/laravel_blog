<div class="col-xl-3 col-lg-4 col-md-6">
<aside class="blog-sidebar">
  <div class="widget sidebar-widget">
      <div class="tgAbout-me">
          <div class="tgAbout-thumb">
              <img src="{{asset('clients/assets/img/others/about_trada.png')}}" alt="me">
          </div>
          <div class="tgAbout-info">
              <p class="intro">Hi there, I’m <span>Promickey</span></p>
              <span class="designation">Content Writer</span>
          </div>
          <div class="tgAbout-social">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-behance"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
      </div>
  </div>
  {{-- <div class="widget sidebar-widget widget_categories">
      <h4 class="widget-title">Trending Category</h4>
      <ul class="list-wrap">
          <li>
              <div class="thumb"><a href="blog.html"><img src="assets/img/category/side_category01.jpg" alt="img"></a></div>
              <a href="blog.html">technology</a>
              <span class="float-right">12</span>
          </li>
          <li>
              <div class="thumb"><a href="blog.html"><img src="assets/img/category/side_category02.jpg" alt="img"></a></div>
              <a href="blog.html">business</a>
              <span class="float-right">08</span>
          </li>
          <li>
              <div class="thumb"><a href="blog.html"><img src="assets/img/category/side_category03.jpg" alt="img"></a></div>
              <a href="blog.html">fitness</a>
              <span class="float-right">13</span>
          </li>
          <li>
              <div class="thumb"><a href="blog.html"><img src="assets/img/category/side_category04.jpg" alt="img"></a></div>
              <a href="blog.html">Gadgets</a>
              <span class="float-right">09</span>
          </li>
          <li>
              <div class="thumb"><a href="blog.html"><img src="assets/img/category/side_category05.jpg" alt="img"></a></div>
              <a href="blog.html">politics</a>
              <span class="float-right">15</span>
          </li>
      </ul>
  </div> --}}
  <div class="widget sidebar-widget">
      <div class="sidePost-active">
        @foreach ($main_popular_posts as $post)
          <div class="sidePost__item" data-background="{{$post->thumbnail}}">
              <div class="sidePost__content">
                  <a href="{{route('clients.cat_posts', $post->category)}}" class="tag">{{$post->category->name}}</a>
                  <h5 class="title tgcommon__hover"><a href="{{route('clients.single_post', $post)}}">{{$post->title}}</a></h5>
              </div>
          </div>
        @endforeach
      </div>
  </div>

  <div class="widget sidebar-widget">
    <h4 class="widget-title">Tags</h4>
    <div class="blog-details-tags">
      <ul class="list-wrap mb-0">
        @foreach ($main_tags as $tag)
          <li><a href="{{route('clients.tag_posts', $tag)}}">{{$tag->name}}</a></li>
        @endforeach
      </ul>
  </div>
  </div>
  {{-- <div class="widget sidebar-widget">
      <h4 class="widget-title">Instagram Feeds</h4>
      <div class="sidebarInsta__wrap">
          <div class="sidebarInsta__top">
              <div class="sidebarInsta__logo">
                  <img src="assets/img/instagram/insta_logo.png" alt="img">
              </div>
              <div class="sidebarInsta__info">
                  <h6 class="name"><a href="#">ins.co/sarso.co</a></h6>
                  <span class="designation">Code Supply Co.</span>
              </div>
          </div>
          <div class="sidebarInsta__slider-wrap">
              <div class="swiper-container sidebarInsta-active">
                  <div class="swiper-wrapper">
                      <div class="swiper-slide">
                          <a href="https://www.instagram.com/" target="_blank"><img src="assets/img/instagram/side_insta01.jpg" alt="img"></a>
                      </div>
                      <div class="swiper-slide">
                          <a href="https://www.instagram.com/" target="_blank"><img src="assets/img/instagram/side_insta02.jpg" alt="img"></a>
                      </div>
                      <div class="swiper-slide">
                          <a href="https://www.instagram.com/" target="_blank"><img src="assets/img/instagram/side_insta03.jpg" alt="img"></a>
                      </div>
                      <div class="swiper-slide">
                          <a href="https://www.instagram.com/" target="_blank"><img src="assets/img/instagram/side_insta04.jpg" alt="img"></a>
                      </div>
                  </div>
              </div>
              <div class="swiper-container sidebarInsta-active-2" dir="rtl">
                  <div class="swiper-wrapper">
                      <div class="swiper-slide">
                          <a href="https://www.instagram.com/" target="_blank"><img src="assets/img/instagram/side_insta05.jpg" alt="img"></a>
                      </div>
                      <div class="swiper-slide">
                          <a href="https://www.instagram.com/" target="_blank"><img src="assets/img/instagram/side_insta06.jpg" alt="img"></a>
                      </div>
                      <div class="swiper-slide">
                          <a href="https://www.instagram.com/" target="_blank"><img src="assets/img/instagram/side_insta07.jpg" alt="img"></a>
                      </div>
                      <div class="swiper-slide">
                          <a href="https://www.instagram.com/" target="_blank"><img src="assets/img/instagram/side_insta08.jpg" alt="img"></a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="sidebarInsta__bottom">
              <a href="https://www.instagram.com/" target="_blank" class="btn"><i class="fab fa-instagram"></i><span class="text">Follow Me</span></a>
          </div>
      </div>
  </div> --}}
</aside>
</div>
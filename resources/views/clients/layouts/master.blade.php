<!doctype html>
<html class="no-js" lang="en">
  @php
      $logo_image = 'clients/assets/img/logo/trada_logo.png';
      $logo_image = $main_logo ?? $logo_image;
      $logo_image = $category->image ?? $logo_image;
      $logo_image = $post->image ?? $logo_image;
      
  @endphp

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{$page_title ?? 'Cafeforex - Nơi góp nhặt những trải nghiệm tài chính cá nhân bổ ích nhất.'}}</title>
    <meta name="description" content="{{$meta_description ?? 'Cafeforex - Nơi góp nhặt những trải nghiệm tài chính cá nhân bổ ích nhất.'}}">
    <meta name="keywords" content="{{$meta_keyword ?? 'finance, tài chính, forex, chứng khoán'}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{$canonical ?? ''}}">
    {{-- <meta name="robots" content="index,follow"> --}}
    <meta name="author" content="{{$page_author ?? 'cafeforex'}}">
    <meta name="robots" content="noindex, nofollow">

    <meta property="og:url"           content="{{$canonical ?? ''}}" />
    <meta property="og:type"          content="website" />
    <meta property="og:site_name"     content="Cafeforex">
    <meta property="og:title"         content="{{$page_title ?? 'Cafeforex - Nơi góp nhặt những trải nghiệm tài chính cá nhân bổ ích nhất.'}}" />
    <meta property="og:description"   content="{{$meta_description ?? 'Cafeforex - Nơi góp nhặt những trải nghiệm tài chính cá nhân bổ ích nhất.'}}" />
    <meta property="og:image"         content="{{asset($logo_image)}}" />


    <link rel="shortcut icon" type="image/x-icon" href="{{$website->logo ?? asset('clients/assets/img/trada_favicon.png')}}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('clients/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('clients/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('clients/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('clients/assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('clients/assets/css/imageRevealHover.css')}}">
    <link rel="stylesheet" href="{{asset('clients/assets/css/swiper-bundle.css')}}">
    <link rel="stylesheet" href="{{asset('clients/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('clients/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('clients/assets/css/spacing.css')}}">
    <link rel="stylesheet" href="{{asset('clients/assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('clients/assets/custom.css')}}">
</head>

<body>
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v16.0" nonce="pS17YFiw"></script>

    <!-- preloader -->
    <div id="preloader">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
            </div>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll__top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    @include('clients.layouts.blocks.header')

   <!-- header-area-end -->


    <!-- main-area -->
    <main>
      <!-- breadcrumb-area -->
      @yield('breadcrumb')
      <!-- breadcrumb-area-end -->

        <!-- banner-area -->
      @yield('banner')
        <!-- banner-area-end -->

        <!-- popular-area -->
      @yield('popular')
        <!-- popular-area-end -->

        <!-- latest-post-area -->
        <section class="latest-post-area pt-80 pb-80">
            <div class="container">
                <div class="row justify-content-center">
                    {{-- <div class="col-xl-9 col-lg-8"> --}}
                      {{-- main-content --}}
                      @yield('main_content')
                      {{-- end main-content --}}
                    {{-- </div> --}}
                    {{-- <div class="col-xl-3 col-lg-4 col-md-6"> --}}
                      {{-- right sidebar --}}
                      @include('clients.layouts.blocks.right_sidebar')
                      {{-- end right sidebar --}}
                    {{-- </div> --}}
                </div>
            </div>
        </section>
        <!-- latest-post-area-end -->

        <!-- handpicked-post-area -->
        @include('clients.layouts.blocks.more_stories')
        <!-- handpicked-post-area-end -->

        <!-- newsletter-area -->
        {{-- @include('clients.layouts.blocks.new_letter') --}}
        <!-- newsletter-area-end -->

    </main>
    <!-- main-area-end -->


    <!-- footer-area -->
    @include('clients.layouts.blocks.footer')
    <!-- footer-area-end -->



    <!-- JS here -->
    <script src="{{asset('clients/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('clients/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('clients/assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('clients/assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('clients/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('clients/assets/js/jquery.marquee.min.js')}}"></script>
    <script src="{{asset('clients/assets/js/imageRevealHover.js')}}"></script>
    <script src="{{asset('clients/assets/js/swiper-bundle.js')}}"></script>
    {{-- <script src="{{asset('clients/assets/js/TweenMax.min.js')}}"></script> --}}
    <script src="{{asset('clients/assets/js/gsap.min.js')}}"></script>
    <script src="{{asset('clients/assets/js/slick.min.js')}}"></script>
    <script src="{{asset('clients/assets/js/ajax-form.js')}}"></script>
    <script src="{{asset('clients/assets/js/wow.min.js')}}"></script>
    <script src="{{asset('clients/assets/js/main.js')}}"></script>
</body>

</html>
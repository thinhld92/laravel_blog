<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Cafeforex - Nơi góp nhặt những trải nghiệm tài chính cá nhân bổ ích nhất.</title>

    <meta name="description" content="Cafeforex - Nơi góp nhặt những trải nghiệm tài chính cá nhân bổ ích nhất.">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Cafeforex - Nơi góp nhặt những trải nghiệm tài chính cá nhân bổ ích nhất.">
    <meta property="og:site_name" content="Dashmix">
    <meta property="og:description" content="Cafeforex - Nơi góp nhặt những trải nghiệm tài chính cá nhân bổ ích nhất.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{$website->logo ?? asset('clients/assets/img/trada_favicon.png')}}">
    {{-- <link rel="icon" type="image/png" sizes="192x192" href="{{asset('backend/assets/media/favicons/favicon-192x192.png')}}"> --}}
    {{-- <link rel="apple-touch-icon" sizes="180x180" href="{{asset('backend/assets/media/favicons/apple-touch-icon-180x180.png')}}"> --}}
    <!-- END Icons -->

    <link rel="stylesheet" id="css-main" href="{{asset('backend/assets/css/dashmix.min.css')}}">

  </head>

  <body>
    
    <div id="page-container">

      <!-- Main Container -->
      <main id="main-container">
        <!-- Page Content -->
        <div class="bg-image" style="background-image: url({{asset('backend/assets/media/photos/photo19@2x.jpg')}});">
          <div class="row g-0 justify-content-end bg-xwork-op">
            <!-- Main Section -->
            <div class="hero-static col-md-5 d-flex flex-column bg-body-extra-light">
              <!-- Header -->
              <div class="flex-grow-0 p-5">
                <a class="link-fx fw-bold fs-2" href="index.html">
                  <span class="text-dark">Cafe</span><span class="text-primary">forex</span>
                </a>
                <p class="text-uppercase fw-bold fs-sm text-muted mb-0">
                  {{-- Premium Dashboard UI --}}
                </p>
              </div>
              <!-- END Header -->

              <!-- Content -->
              <div class="flex-grow-1 d-flex align-items-center p-5 bg-body-light">
                <div class="w-100">
                  <p class="text-danger fs-4 fw-bold text-uppercase mb-2">
                    404 Error
                  </p>
                  <h1 class="fw-bold mb-2">
                    Page Not Found
                  </h1>
                  <p class="fs-4 fw-medium text-muted mb-5">
                    We are sorry but the page you are looking for was not found.
                  </p>
                  <a class="btn btn-lg btn-alt-danger" href="/">
                    <i class="fa fa-arrow-left opacity-50 me-1"></i> Back to Home
                  </a>
                </div>
              </div>
              <!-- END Content -->

              <!-- Footer -->
              <ul class="list-inline flex-gow-1 p-5 fs-sm fw-medium mb-0">
                <li class="list-inline-item">
                  <a class="text-muted" href="javascript:void(0)">
                    Dashboard
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="text-muted" href="javascript:void(0)">
                    Support
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="text-muted" href="javascript:void(0)">
                    Contact
                  </a>
                </li>
              </ul>
              <!-- END Footer -->
            </div>
            <!-- END Main Section -->
          </div>
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->
    </div>
    <!-- END Page Container -->

    <!--
      Dashmix JS

      Core libraries and functionality
      webpack is putting everything together at assets/_js/main/app.js
    -->
    <script src="{{asset('backend/assets/js/dashmix.app.min.js')}}"></script>
  </body>
</html>

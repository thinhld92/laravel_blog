<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>{{ $page_title ?? "Dashboard"}}</title>

    <meta name="description" content="Cafeforex - Nơi góp nhặt những trải nghiệm tài chính cá nhân bổ ích nhất.">
    <meta name="author" content="promickey">
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
    <link rel="shortcut icon" href="{{asset('clients/assets/img/trada_favicon.png')}}">
    {{-- <link rel="shortcut icon" href="{{asset('backend/assets/media/favicons/favicon.png')}}"> --}}
    {{-- <link rel="icon" type="image/png" sizes="192x192" href="{{asset('backend/assets/media/favicons/favicon-192x192.png')}}"> --}}
    {{-- <link rel="apple-touch-icon" sizes="180x180" href="{{asset('backend/assets/media/favicons/apple-touch-icon-180x180.png')}}"> --}}
    <!-- END Icons -->
  

    <!-- Stylesheets -->
    @yield('css')
    <!-- Dashmix framework -->
    <link rel="stylesheet" id="css-main" href="{{asset('/backend/assets/css/dashmix.min.css')}}">
    <link rel="stylesheet" id="css-main" href="{{asset('/backend/assets/css/custom/admin.css')}}">
    
    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/xwork.min.css"> -->
    <!-- END Stylesheets -->
  </head>

  <body>
    <!-- Page Container -->

    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">

      <!-- Sidebar -->
        @include('backend.layouts.blocks.sidebar')
      <!-- END Sidebar -->

      <!-- Header -->
        @include('backend.layouts.blocks.header')
      <!-- END Header -->

      <!-- Main Container -->
      <main id="main-container">
        <!-- Hero -->
        @section('hero')
          @include('backend.layouts.blocks.hero')
        @show
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
          @yield('content')
        </div>
        <!-- END Page Content -->
        <input type="hidden" id="successMessage" value="{{session('success')}}">
        <input type="hidden" id="errorMessage" value="{{session('error')}}">
      </main>
      <!-- END Main Container -->

      <!-- Footer -->
      @include('backend.layouts.blocks.footer')
      <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    
    <!--
      Dashmix JS

      Core libraries and functionality
      webpack is putting everything together at assets/_js/main/app.js
    -->
    <script src="{{asset('/backend/assets/js/dashmix.app.min.js')}}"></script>
    <script src="{{asset('/backend/assets/js/custom/admin.js')}}"></script>

    <!-- jQuery (required for jQuery Sparkline plugin) -->
    <script src="{{asset('/backend/assets/js/lib/jquery.min.js')}}"></script>

    <!-- Page JS Plugins -->
    {{-- <script src="assets/js/plugins/jquery-sparkline/jquery.sparkline.min.js"></script> --}}
    {{-- <script src="assets/js/plugins/chart.js/chart.min.js"></script> --}}

    <!-- Page JS Code -->
    {{-- <script src="assets/js/pages/be_pages_dashboard_v1.min.js"></script> --}}

    <!-- Page JS Helpers (jQuery Sparkline plugin) -->
    {{-- <script>Dashmix.helpersOnLoad(['jq-sparkline']);</script> --}}

    <!-- Page JS Plugins -->
    <script src="{{asset('backend/assets/js/plugins/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
    <!-- Page JS Helpers (BS Notify Plugin) -->
    <script>Dashmix.helpersOnLoad(['jq-notify']);</script>
    
    @yield('script')

    <script>
      const noticeList = {
        success: successTrigger,
        error: errorTrigger
      };

      function noticeTrigger(type) {
        return noticeList[type]();
      }

      function successTrigger() {
        const message = $('#successMessage').val();
        $('#successMessage').val('')
        Dashmix.helpers('jq-notify', {type: 'success', align: 'center', icon: 'fa fa-check me-1', message: message});
      }

      function errorTrigger() {
        const message = $('#errorMessage').val();
        $('#errorMessage').val('');
        Dashmix.helpers('jq-notify', {type: 'danger',  align: 'center', icon: 'fa fa-times me-1', message: message});
      }
    </script>

    @if (session('error'))
      <script>
        noticeTrigger('error');
      </script>
    @endif

    @if (session('success'))
      <script>
        noticeTrigger('success');
      </script>
    @endif


  </body>
</html>

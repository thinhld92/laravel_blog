<header class="header__style-six">
  <div class="header__top">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-4 col-md-6 col-sm-6 order-2 order-lg-0">
                  <div class="header__top-search">
                      <form action="#">
                          <input type="text" placeholder="Search here...">
                      </form>
                  </div>
              </div>
              <div class="col-lg-4 col-md-3 order-0 order-lg-2 d-none d-md-block">
                  <div class="header__top-logo logo text-lg-center">
                      <a href="/" class="logo-dark"><img src="{{asset('clients/assets/img/logo/trada_logo.png')}}" alt="Logo"></a>
                      <a href="/" class="logo-light"><img src="{{asset('clients/assets/img/logo/trada_logo.png')}}" alt="Logo"></a>
                  </div>
              </div>
              <div class="col-lg-4 col-md-3 col-sm-6 order-3 d-none d-sm-block">
                  <div class="header__top-right">
                      <ul class="list-wrap">
                          <li class="news-btn"><a href="#newsletter" class="btn"><span class="btn-text">subscribe</span></a></li>
                          {{-- <li class="lang">
                              <div class="dropdown">
                                  <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                      ENG
                                  </button>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                      <li><a class="dropdown-item" href="#">SPA</a></li>
                                      <li><a class="dropdown-item" href="#">GRE</a></li>
                                      <li><a class="dropdown-item" href="#">CIN</a></li>
                                      <li><a class="dropdown-item" href="#">CIN</a></li>
                                  </ul>
                              </div>
                          </li> --}}
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div id="header-fixed-height"></div>
{{-- main navbar --}}
@include('clients.layouts.blocks.navbar')
{{-- end main navbar --}}
</header>
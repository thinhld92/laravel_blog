

<div id="sticky-header" class="tg-header__area">
  <div class="container">
      <div class="row">
          <div class="col-12">
              <div class="tgmenu__wrap">
                  <nav class="tgmenu__nav">
                      <div class="logo d-block d-md-none">
                          <a href="index.html" class="logo-dark"><img src="{{asset('clients/assets/img/logo/logo.png')}}" alt="Logo"></a>
                          <a href="index.html" class="logo-light"><img src="{{asset('clients/assets/img/logo/w_logo.png')}}" alt="Logo"></a>
                      </div>
                      <div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-lg-flex">
                          <ul class="navigation">
                              <li class="active"><a href="/">Home</a></li>
                              
                              @foreach ($main_menus as $menu)
                                @if ($menu->recursiveCategories->count())
                                  <li class="menu-item-has-children"><a href="{{route('clients.cat_posts', $menu)}}">{{$menu->name}}</a>
                                    <ul class="sub-menu">
                                      @foreach ($menu->recursiveCategories as $sub_menu)
                                        @include('clients.layouts.blocks.subnav', ['sub_menu' => $sub_menu])
                                      @endforeach
                                    </ul>
                                  </li>
                                @else
                                  <li><a href="{{route('clients.cat_posts', $menu)}}">{{$menu->name}}</a></li>
                                @endif
                              @endforeach

                          </ul>
                      </div>
                      <div class="tgmenu__action">
                          <ul class="list-wrap">
                              <li class="mode-switcher">
                                  <nav class="switcher__tab">
                                      <span class="switcher__btn light-mode"><i class="flaticon-sun"></i></span>
                                      <span class="switcher__mode"></span>
                                      <span class="switcher__btn dark-mode"><i class="flaticon-moon"></i></span>
                                  </nav>
                              </li>
                              
                          </ul>
                      </div>
                  </nav>
                  <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
              </div>
              <!-- Mobile Menu  -->
              <div class="tgmobile__menu">
                  <nav class="tgmobile__menu-box">
                      <div class="close-btn"><i class="fas fa-times"></i></div>
                      <div class="nav-logo">
                          <a href="index.html" class="logo-dark"><img src="{{asset('clients/assets/img/logo/logo.png')}}" alt="Logo"></a>
                          <a href="index.html" class="logo-light"><img src="{{asset('clients/assets/img/logo/w_logo.png')}}" alt="Logo"></a>
                      </div>
                      <div class="tgmobile__search">
                          <form action="#">
                              <input type="text" placeholder="Search here...">
                              <button><i class="far fa-search"></i></button>
                          </form>
                      </div>
                      <div class="tgmobile__menu-outer">
                          <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                      </div>
                      <div class="social-links">
                          <ul class="list-wrap">
                              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                              <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                              <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                          </ul>
                      </div>
                  </nav>
              </div>
              <div class="tgmobile__menu-backdrop"></div>
              <!-- End Mobile Menu -->
          </div>
      </div>
  </div>
</div>
<nav id="sidebar" aria-label="Main Navigation">
  <!-- Side Header -->
  <div class="bg-header-dark">
    <div class="content-header bg-white-5">
      <!-- Logo -->
      <a class="fw-semibold text-white tracking-wide" href="index.html">
        <span class="smini-visible">
          D<span class="opacity-75">x</span>
        </span>
        <span class="smini-hidden">
          Cafe<span class="opacity-75">forex</span>
        </span>
      </a>
      <!-- END Logo -->

      <!-- Options -->
      <div>
        <!-- Toggle Sidebar Style -->
        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
        <!-- Class Toggle, functionality initialized in Helpers.dmToggleClass() -->
        <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on" onclick="Dashmix.layout('sidebar_style_toggle');Dashmix.layout('header_style_toggle');">
          <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
        </button>
        <!-- END Toggle Sidebar Style -->

        <!-- Dark Mode -->
        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
        <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#dark-mode-toggler" data-class="far fa" onclick="Dashmix.layout('dark_mode_toggle');">
          <i class="far fa-moon" id="dark-mode-toggler"></i>
        </button>
        <!-- END Dark Mode -->

        <!-- Close Sidebar, Visible only on mobile screens -->
        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
        <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout" data-action="sidebar_close">
          <i class="fa fa-times-circle"></i>
        </button>
        <!-- END Close Sidebar -->
      </div>
      <!-- END Options -->
    </div>
  </div>
  <!-- END Side Header -->

  <!-- Sidebar Scrolling -->
  <div class="js-sidebar-scroll">
    <!-- Side Navigation -->
    <div class="content-side">
      <ul class="nav-main">
        <li class="nav-main-item">
          <a class="nav-main-link" href="{{route('admin.dashboard')}}">
            <i class="nav-main-link-icon fa fa-location-arrow"></i>
            <span class="nav-main-link-name">Dashboard</span>
            <span class="nav-main-link-badge badge rounded-pill bg-primary">8</span>
          </a>
        </li>

        <li class="nav-main-heading">Base</li>
        {{-- groups --}}
        <li class="nav-main-item">
          <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
            <i class="nav-main-link-icon fa fa-group-arrows-rotate"></i>
            <span class="nav-main-link-name">Nhóm người dùng</span>
          </a>
          <ul class="nav-main-submenu">
            <li class="nav-main-item">
              <a class="nav-main-link" href="{{route('admin.groups.index')}}">
                <i class="nav-main-link-icon fa fa-people-line"></i>
                <span class="nav-main-link-name">List nhóm người dùng</span>
              </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link" href="{{route('admin.groups.create')}}">
                <i class="nav-main-link-icon fa fa-people-group"></i>
                <span class="nav-main-link-name">Thêm nhóm người dùng</span>
              </a>
            </li>
          </ul>
        </li>
        {{-- end groups --}}

        {{-- users --}}
        <li class="nav-main-item">
          <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
            <i class="nav-main-link-icon fa fa-users"></i>
            <span class="nav-main-link-name">Users</span>
          </a>
          <ul class="nav-main-submenu">
            <li class="nav-main-item">
              <a class="nav-main-link" href="{{route('admin.users.index')}}">
                <i class="nav-main-link-icon fa fa-users-gear"></i>
                <span class="nav-main-link-name">List Users</span>
              </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link" href="{{route('admin.users.create')}}">
                <i class="nav-main-link-icon fa fa-user-plus"></i>
                <span class="nav-main-link-name">Thêm User</span>
              </a>
            </li>
          </ul>
        </li>
        {{-- end users --}}

        {{-- categories --}}
        <li class="nav-main-item">
          <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
            <i class="nav-main-link-icon fa fa-book-skull"></i>
            <span class="nav-main-link-name">Danh Mục</span>
          </a>
          <ul class="nav-main-submenu">
            <li class="nav-main-item">
              <a class="nav-main-link" href="{{route('admin.categories.index')}}">
                <i class="nav-main-link-icon fa fa-book"></i>
                <span class="nav-main-link-name">List Danh Mục</span>
              </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link" href="{{route('admin.categories.create')}}">
                <i class="nav-main-link-icon fa fa-book-medical"></i>
                <span class="nav-main-link-name">Thêm Danh Mục</span>
              </a>
            </li>
          </ul>
        </li>
        {{-- end categories --}}

        {{-- Tags --}}
        <li class="nav-main-item">
          <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
            <i class="nav-main-link-icon fa fa-tags"></i>
            <span class="nav-main-link-name">Tag</span>
          </a>
          <ul class="nav-main-submenu">
            <li class="nav-main-item">
              <a class="nav-main-link" href="{{route('admin.tags.index')}}">
                <i class="nav-main-link-icon fa fa-hashtag"></i>
                <span class="nav-main-link-name">List Tag</span>
              </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link" href="{{route('admin.tags.create')}}">
                <i class="nav-main-link-icon fa fa-tag"></i>
                <span class="nav-main-link-name">Thêm Tag</span>
              </a>
            </li>
          </ul>
        </li>
        {{-- end Tags --}}

        {{-- posts --}}
        <li class="nav-main-item">
          <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
            <i class="nav-main-link-icon fa fa-blog"></i>
            <span class="nav-main-link-name">Bài viết</span>
          </a>
          <ul class="nav-main-submenu">
            <li class="nav-main-item">
              <a class="nav-main-link" href="{{route('admin.posts.index')}}">
                <i class="nav-main-link-icon fa fa-layer-group"></i>
                <span class="nav-main-link-name">Danh sách bài viết</span>
              </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link" href="{{route('admin.posts.create')}}">
                <i class="nav-main-link-icon fa fa-file-circle-plus"></i>
                <span class="nav-main-link-name">Thêm bài viết</span>
              </a>
            </li>
          </ul>
        </li>
        {{-- end posts --}}

        {{-- font_icon --}}
        <li class="nav-main-item">
          <a class="nav-main-link" aria-haspopup="true" aria-expanded="false" href="{{route('admin.font_icon')}}">
            <i class="nav-main-link-icon fa fa-font"></i>
            <span class="nav-main-link-name">Icon</span>
          </a>
        </li>
        {{-- end font_icon --}}

        {{-- setting --}}
        <li class="nav-main-item">
          <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
            <i class="nav-main-link-icon fa fa-gear"></i>
            <span class="nav-main-link-name">Cài đặt</span>
          </a>
          <ul class="nav-main-submenu">
            <li class="nav-main-item">
              <a class="nav-main-link" href="{{route('admin.webinfo.setting')}}">
                <i class="nav-main-link-icon fa fa-circle-info"></i>
                <span class="nav-main-link-name">Website Info</span>
              </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link" href="{{route('admin.socials.setting')}}">
                <i class="nav-main-link-icon fa fa-link"></i>
                <span class="nav-main-link-name">Socials Link</span>
              </a>
            </li>
          </ul>
        </li>
        {{-- end setting --}}

      </ul>
    </div>
    <!-- END Side Navigation -->
  </div>
  <!-- END Sidebar Scrolling -->
</nav>
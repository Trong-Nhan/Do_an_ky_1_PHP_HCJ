<!--
  
  =========================================================
  * Now UI Dashboard - v1.5.0
  =========================================================
  
  * Product Page: https://www.creative-tim.com/product/now-ui-dashboard
  * Copyright 2019 Creative Tim (http://www.creative-tim.com)
  
  * Designed by www.invisionapp.com Coded by www.creative-tim.com
  
  =========================================================
  
  * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
  
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8"/>
  <link rel="apple-touch-icon" sizes="76x76" href="{{url('public')}}/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="{{url('public')}}/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    @yield('title')
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
  <!-- CSS Files -->
  <link href="{{url('public')}}/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
  <link href="{{url('public')}}/assets/css/now-ui-dashboard.css" rel="stylesheet" />
  <link href="{{url('public')}}/assets/css/style.css" rel="stylesheet" />
  @yield('css')
  <script type="text/javascript">
    var base_url = function(){
      return "{{url('')}}";
    }

    var akey = function(){
      return 'wendwebsite';
    }
  </script>
</head>

<body class="">
  <?php 
    $user = Auth::user();
   ?>
  <div class="wrapper ">
    
    <div class="sidebar" data-color="blue">
      <!--Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"-->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          WT
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Admin Panel
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="{{'admin' == request()->path() ? 'active' : ''}}">
            <a href="{{route('admin.dashboard')}}">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          @if($user->can('admin.destination.index'))
          <li class="{{'admin/destination' == request()->path() ? 'active' : ''}}">
            <a href="{{route('admin.destination.index')}}">
              <i class="now-ui-icons location_pin"></i>
              <p>Destination</p>
            </a>
          </li>
          @endif
          @if($user->can('admin.package.index'))
          <li class="{{'admin/package' == request()->path() ? 'active' : ''}}">
            <a href="{{route('admin.package.index')}}">
              <i class="now-ui-icons business_briefcase-24"></i>
              <p>Package</p>
            </a>
          </li>
          @endif
          @if($user->can('admin.tour.index'))
          <li class="{{'admin/tour' == request()->path() ? 'active' : ''}}">
            <a href="{{route('admin.tour.index')}}">
              <i class="now-ui-icons location_map-big"></i>
              <p>Tour</p>
            </a>
          </li>
          @endif
          @if($user->can('admin.rating.index'))
          <li class="{{'admin/rating' == request()->path() ? 'active' : ''}}">
            <a href="{{route('admin.rating.index')}}">
              <i class="now-ui-icons location_map-big"></i>
              <p>Rating</p>
            </a>
          </li>
          @endif
          @if($user->can('admin.booking'))
          <li class="{{'admin/booking' == request()->path() ? 'active' : ''}}">
            <a href="{{route('admin.booking')}}">
              <i class="now-ui-icons location_bookmark"></i>
              <p>Booking</p>
            </a>
          </li>
          @endif
          @if($user->can('admin.role.index'))
          <li class="{{'admin/role' == request()->path() ? 'active' : ''}}">
            <a href="{{route('admin.role.index')}}">
              <i class="now-ui-icons education_paper"></i>
              <p>Role</p>
            </a>
          </li>
          @endif
          @if($user->can('admin.user.index'))
          <li class="{{'admin/user' == request()->path() ? 'active' : ''}}">
            <a href="{{route('admin.user.index')}}">
              <i class="now-ui-icons users_single-02"></i>
              <p>User List</p>
            </a>
          </li>
          @endif
          @if($user->can('admin.gallery.index'))
          <li class="{{'admin/gallery' == request()->path() ? 'active' : ''}}">
            <a href="{{route('admin.gallery.index')}}">
              <i class="now-ui-icons design_image"></i>
              <p>Gallery</p>
            </a>
          </li>
          @endif
          @if($user->can('admin.tag.index'))
          <li class="{{'admin/tag' == request()->path() ? 'active' : ''}}">
            <a href="{{route('admin.tag.index')}}">
              <i class="now-ui-icons design_image"></i>
              <p>Tag</p>
            </a>
          </li>
          @endif
          @if($user->can('admin.blog.index'))
          <li class="{{'admin/blog' == request()->path() ? 'active' : ''}}">
            <a href="{{route('admin.blog.index')}}">
              <i class="now-ui-icons design_image"></i>
              <p>Blog</p>
            </a>
          </li>
          @endif
          @if($user->can('admin.comment.index'))
          <li class="{{'admin/comment' == request()->path() ? 'active' : ''}}">
            <a href="{{route('admin.comment.index')}}">
              <i class="now-ui-icons design_image"></i>
              <p>Comment</p>
            </a>
          </li>
          @endif
          @if($user->can('admin.faq_category.index'))
          <li class="{{'admin/faq_category' == request()->path() ? 'active' : ''}}">
            <a href="{{route('admin.faq_category.index')}}">
              <i class="now-ui-icons design_image"></i>
              <p>Faq Category</p>
            </a>
          </li>
          @endif
          @if($user->can('admin.faq.index'))
          <li class="{{'admin/faq' == request()->path() ? 'active' : ''}}">
            <a href="{{route('admin.faq.index')}}">
              <i class="now-ui-icons design_image"></i>
              <p>Faq</p>
            </a>
          </li>
          @endif
          @if($user->can('admin.tourguide.index'))
          <li class="{{'admin/tourguide' == request()->path() ? 'active' : ''}}">
            <a href="{{route('admin.tourguide.index')}}">
              <i class="now-ui-icons design_image"></i>
              <p>Hướng Dẫn Viên</p>
            </a>
          </li>
          @endif
          @if($user->can('admin.file'))
          <li class="{{'admin/file-manager' == request()->path() ? 'active' : ''}}">
            <a href="{{route('admin.file')}}">
              <i class="now-ui-icons design-2_ruler-pencil"></i>
              <p>File Manager</p>
            </a>
          </li>
          @endif
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Table List</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }}
                </a>
                
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>
                
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </li>
             <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="now-ui-icons location_world"></i>
                <p>
                  <span class="d-lg-none d-md-block">Some Actions</span>
                </p>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>  -->
            <li class="nav-item">
              <a class="nav-link" href="#pablo">
                <i class="now-ui-icons users_single-02"></i>
                <p>
                  <span class="d-lg-none d-md-block">Account</span>
                </p>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    
    
    
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
      
      @yield('content')
      
      
    </div>
    
    
    <footer class="footer">
      <div class=" container-fluid ">
        <nav>
          <ul>
            <li>
              <a href="https://www.creative-tim.com">
                Creative Tim
              </a>
            </li>
            <li>
              <a href="http://presentation.creative-tim.com">
                About Us
              </a>
            </li>
            <li>
              <a href="http://blog.creative-tim.com">
                Blog
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright" id="copyright">
          &copy; <script>
            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
          </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
        </div>
      </div>
    </footer>
  </div>
</div>
<!--   Core JS Files   -->
<script src="{{url('public')}}/assets/js/core/jquery.min.js"></script>
<script src="{{url('public')}}/assets/js/core/popper.min.js"></script>
<script src="{{url('public')}}/assets/js/core/bootstrap.min.js"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script src="{{url('public')}}/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
<!-- Chart JS -->
<script src="{{url('public')}}/assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="{{url('public')}}/assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{url('public')}}/assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script> 

@yield('scripts')

</body>

</html>
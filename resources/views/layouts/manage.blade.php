<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" dir="{{ __('voyager::generic.is_rtl') == 'true' ? 'rtl' : 'ltr' }}">
   <head>
      <title>{{ Auth::user()->name }}-ийн хэсэг</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}"/>
      <meta name="assets-path" content="{{ route('voyager.voyager_assets') }}"/>
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
      <!-- Favicon -->
      <?php $admin_favicon = Voyager::setting('admin.icon_image', ''); ?>
      @if($admin_favicon == '')
      <link rel="shortcut icon" href="{{ voyager_asset('images/logo-icon.png') }}" type="image/png">
      @else
      <link rel="shortcut icon" href="{{ Voyager::image($admin_favicon) }}" type="image/png">
      @endif
      <!-- App CSS -->
      <link rel="stylesheet" href="{{ voyager_asset('css/app.css') }}">
      @yield('css')
      @if(__('voyager::generic.is_rtl') == 'true')
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css">
      <link rel="stylesheet" href="{{ voyager_asset('css/rtl.css') }}">
      @endif
      <!-- Few Dynamic Styles -->
      <style type="text/css">
         .voyager .side-menu .navbar-header {
         background:#ffb002
         border-color:#ffb002
         }
         .widget .btn-primary{
         border-color:#ffb002
         }
         .widget .btn-primary:focus, .widget .btn-primary:hover, .widget .btn-primary:active, .widget .btn-primary.active, .widget .btn-primary:active:focus{
         background:#ffb002
         }
         .voyager .breadcrumb a{
         color:#ffb002
         }
      </style>
      @if(!empty(config('voyager.additional_css')))<!-- Additional CSS -->
      @foreach(config('voyager.additional_css') as $css)
      <link rel="stylesheet" type="text/css" href="{{ asset($css) }}">
      @endforeach
      @endif
      @yield('head')
   </head>
   
   <body class="voyager @if(isset($dataType) && isset($dataType->slug)){{ $dataType->slug }}@endif">
  
      <?php
         if (\Illuminate\Support\Str::startsWith(Auth::user()->avatar, 'http://') || \Illuminate\Support\Str::startsWith(Auth::user()->avatar, 'https://')) {
             $user_avatar = Auth::user()->avatar;
         } else {
             $user_avatar = Voyager::image(Auth::user()->avatar);
         }
        ?>
      <div class="app-container">
         <div class="fadetoblack visible-xs"></div>
         <div class="row content-container">
            <!-- navbar here -->
            <nav class="navbar navbar-default navbar-fixed-top navbar-top">
               <div class="container-fluid">
                  <div class="navbar-header">
                     <button class="hamburger btn-link">
                     <span class="hamburger-inner"></span>
                     </button>
                     @section('breadcrumbs')
                     <ol class="breadcrumb hidden-xs">
                        @php
                        $segments = array_filter(explode('/', str_replace(route('voyager.dashboard'), '', Request::url())));
                        $url = route('voyager.dashboard');
                        @endphp
                        @if(count($segments) == 0)
                        <li class="active"><i class="voyager-boat"></i> {{ __('voyager::generic.dashboard') }}</li>
                        @else
                        <li class="active">
                        <a href="{{ url('/home') }}"><i class="voyager-boat"></i> {{ __('voyager::generic.dashboard') }}</a>
                        </li>
                        @endif
                     </ol>
                     @show
                  </div>
                  <ul class="nav navbar-nav @if (__('voyager::generic.is_rtl') == 'true') navbar-left @else navbar-right @endif">
                     <li class="dropdown profile">
                        <a href="#" class="dropdown-toggle text-right" data-toggle="dropdown" role="button"
                           aria-expanded="false"><img src="{{ $user_avatar }}" class="profile-img"> <span
                           class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-menu-animated">
                           <li class="profile-img">
                              <img src="{{ $user_avatar }}" class="profile-img">
                              <div class="profile-body">
                                 <h5>{{ Auth::user()->name }}</h5>
                                 <h6>{{ Auth::user()->email }}</h6>
                              </div>
                           </li>
                           <li class="divider"></li>
                           <?php $nav_items = config('voyager.dashboard.navbar_items'); ?>
                           @if(is_array($nav_items) && !empty($nav_items))
                           @foreach($nav_items as $name => $item)
                           <li {!! isset($item['classes']) && !empty($item['classes']) ? 'class="'.$item['classes'].'"' : '' !!}>
                           @if(isset($item['route']) && $item['route'] == 'voyager.logout')
                           <a class="btn btn-danger btn-block" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                           {{ __('Logout') }}
                           </a>
                           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                           </form>
                           @else
                           <a href="{{ isset($item['route']) && Route::has($item['route']) ? route($item['route']) : (isset($item['route']) ? $item['route'] : '#') }}" {!! isset($item['target_blank']) && $item['target_blank'] ? 'target="_blank"' : '' !!}>
                           @if(isset($item['icon_class']) && !empty($item['icon_class']))
                           <i class="{!! $item['icon_class'] !!}"></i>
                           @endif
                           {{__($name)}}
                           </a>
                           @endif
                           </li>
                           @endforeach
                           @endif
                        </ul>
                     </li>
                  </ul>
               </div>
            </nav>
            <!-- side here -->
            <div class="side-menu sidebar-inverse">
               <nav class="navbar navbar-default" role="navigation">
                  <div class="side-menu-container">
                     <div class="navbar-header">
                        <a class="navbar-brand" href="{{ route('voyager.dashboard') }}">
                           <div class="logo-icon-container">
                              <?php $admin_logo_img = Voyager::setting('admin.icon_image', ''); ?>
                              @if($admin_logo_img == '')
                              <img src="{{ voyager_asset('images/logo-icon-light.png') }}" alt="Logo Icon">
                              @else
                              <img src="{{ Voyager::image($admin_logo_img) }}" alt="Logo Icon">
                              @endif
                           </div>
                           <div class="title">User dashboard</div>
                        </a>
                     </div>
                     <!-- .navbar-header -->
                     <div class="panel widget center bgimage"
                        style="background-image:url({{ Voyager::image( Voyager::setting('admin.bg_image'), voyager_asset('images/bg.jpg') ) }}); background-size: cover; background-position: 0px;">
                        <div class="dimmer"></div>
                        <div class="panel-content">
                           <img src="{{ $user_avatar }}" class="avatar" alt="{{ Auth::user()->name }} avatar">
                           <h4>{{ ucwords(Auth::user()->name) }}</h4>
                           <p>{{ Auth::user()->email }}</p>
                           <a href="{{ route('voyager.profile') }}" class="btn btn-primary">{{ __('voyager::generic.profile') }}</a>
                           <div style="clear:both"></div>
                        </div>
                     </div>
                  </div>
                  <div id="adminmenu">

                  </div>
               </nav>
            </div>
            <!-- side ends here -->
            <!-- navbar ends here -->
            <script>
               (function(){
                       var appContainer = document.querySelector('.app-container'),
                           sidebar = appContainer.querySelector('.side-menu'),
                           navbar = appContainer.querySelector('nav.navbar.navbar-top'),
                           loader = document.getElementById('voyager-loader'),
                           hamburgerMenu = document.querySelector('.hamburger'),
                           sidebarTransition = sidebar.style.transition,
                           navbarTransition = navbar.style.transition,
                           containerTransition = appContainer.style.transition;
               
                       sidebar.style.WebkitTransition = sidebar.style.MozTransition = sidebar.style.transition =
                       appContainer.style.WebkitTransition = appContainer.style.MozTransition = appContainer.style.transition =
                       navbar.style.WebkitTransition = navbar.style.MozTransition = navbar.style.transition = 'none';
               
                       if (window.innerWidth > 768 && window.localStorage && window.localStorage['voyager.stickySidebar'] == 'true') {
                           appContainer.className += ' expanded no-animation';
                           loader.style.left = (sidebar.clientWidth/2)+'px';
                           hamburgerMenu.className += ' is-active no-animation';
                       }
               
                      navbar.style.WebkitTransition = navbar.style.MozTransition = navbar.style.transition = navbarTransition;
                      sidebar.style.WebkitTransition = sidebar.style.MozTransition = sidebar.style.transition = sidebarTransition;
                      appContainer.style.WebkitTransition = appContainer.style.MozTransition = appContainer.style.transition = containerTransition;
               })();
            </script>
            <!-- Main Content -->
            <div class="container-fluid">
               <div class="side-body padding-top">
                  @yield('page_header')
                  <div id="voyager-notifications"></div>
                  @yield('content')
               </div>
            </div>
         </div>
      </div>
      @include('voyager::partials.app-footer')
      <!-- Javascript Libs -->
      <script type="text/javascript" src="{{ voyager_asset('js/app.js') }}"></script>
   </body>
</html>
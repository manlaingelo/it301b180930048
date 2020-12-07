<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page_title', setting('site.title') . "  " . setting(''))</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="/css/animate.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="/css/bootstrap.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
    @yield('head')
	<!-- Theme style  -->
	<link rel="stylesheet" href="/css/style.css">
    
</head>
<body class="home">
    <div id="app">
    <nav class="fh5co-nav" role="navigation">
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-4">
						<div id="fh5co-logo"><a href="{{ url('/') }}">Fitness site</a></div>
					</div>
					<div class="col-xs-8 text-right menu-1">
						<ul>
							@guest
                            @if (Route::has('login'))
                                <li style="color:white;">
                                    <a href="{{ route('login') }}">{{ __('Нэвтрэх') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li>
                                    <a href="{{ route('register') }}">{{ __('Бүртгүүлэх') }}</a>
                                </li>
                            @endif
                        @else
                        <li>      
                        <div id="fh5co-logo"><a href="{{ url('/home') }}">   Сайн уу {{ Auth::user()->name }}<span>.</span></a></div>        
                        </li>
                        
                        @endguest
						</ul>
					</div>
				</div>

			</div>
		</div>
	</nav>
        <!-- <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #ffb002;">
            <div class="container" >
                <a class="navbar-brand" href="{{ url('/') }}">Fitness site
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     Left Side Of Navbar
                    <ul class="navbar-nav mr-auto">

                    </ul>

                     Right Side Of Navbar 
                    <ul class="navbar-nav ml-auto">
                         Authentication Links
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
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

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> -->
    </div>
    @yield('content')
    	<!-- jQuery -->
	<!-- Main -->
	<script src="js/main.js"></script>
    
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/jquery.sparkline.js"></script>

    </script>
</body>
</html>

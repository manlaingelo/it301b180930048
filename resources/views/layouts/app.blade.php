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
						<div id="fh5co-logo"><a href="{{ url('/') }}">Fitness site<span>.</span></a></div>
					</div>
					<div class="col-xs-8 text-right menu-1">
						<ul>
                        <li class="active"><a href="{{ url('/aboutus') }}">Бидний тухай</a></li>
							<li class="has-dropdown">
								<a href="{{ url('/services') }}">Үйлчилгээ</a>
								<ul class="dropdown">
									<li><a href="#">Дасгал хөдөлгөөн</a></li>
									<li><a href="#">Эрүүл хооллолт</a></li>
									<li><a href="#">Гэрээсээ</a></li>
								</ul>
							</li>
							<li><a href="{{ url('/contactus') }}">Бидэнтэй холбогдох</a></li>
							@guest
                            @if (Route::has('login'))
                                <li style="color:white;">
                                    <li class="btn-cta"><a href="{{ route('login') }}"><span>{{ __('Нэвтрэх') }}</span></a></li>
                                </li>
                            @endif	
                        @else
                        <li>      
                      <a href="{{ url('/home') }}">   Сайн уу {{ Auth::user()->name }}</a>
                        </li>
                        
                        @endguest
						</ul>
					</div>
				</div>

			</div>
		</div>
	</nav>
    </div>
    @yield('content')
    <footer id="fh5co-footer" role="contentinfo">
   <div class="container">
      <div class="row row-pb-md">
         <div class="col-md-4 fh5co-widget">
            <h3>Фитнесс сайтын тухай</h3>
            <p>Фитнесс сайт бол шинэ зууны фитнесийн гишүүнчлэл юм. Өдөр бүр шинэ хөдөлгөөн хийж, өөрийн биед таарсан фитнес болон спортын төрлийг олох боломжийг танд олгоно.</p>
            <p><a class="btn btn-primary btn-outline with-arrow" href="/aboutus">Дэлгэрэнгүй<i class="icon-arrow-right"></i></a></p>
         </div>
         <div class="col-md-3 col-sm-4 col-xs-6 col-md-push-1">
            <ul class="fh5co-footer-links">
               <li><a href="/aboutus"> БИДНИЙ ТУХАЙ</a></li>
               <li><a href="/services">ҮЙЛЧИЛГЭЭНИЙ НӨХЦӨЛ</a></li>
               <li><a href="/contactus">НУУЦЛАЛЫН НӨХЦӨЛ</a></li>
               <li><a href="/services">ТӨЛБӨРИЙН ТУХАЙ</a></li>
            </ul>
         </div>
         <div class="col-md-3 col-sm-4 col-xs-6 col-md-push-1">
            <ul class="fh5co-footer-links">
               <li><p>Танд ямар нэгэн асуулт байвал бидэнтэй утсаар эсхүл имэйлээр холбогдож болно.</p></li>
               <li><a href="#">b180930048@must.edu.mn</a></li>
               <li><a href="#">#1301, 13 ДАВХАР, СЭНТРАЛ ТАУЭР, ИХ ЭЗЭН ЧИНГИС ХААНЫ НЭРЭМЖИТ ТАЛБАЙ 2, СҮХБААТАР ДҮҮРЭГ, УЛААНБААТАР, МОНГОЛ УЛС, 14200</a></li>
            </ul>
         </div>
      </div>
      <div class="row copyright">
         <div class="col-md-12 text-center">
            <p>
               b180930048 munkhmanlai
            </p>
         </div>
      </div>
   </div>
</footer>
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
</body>
</html>

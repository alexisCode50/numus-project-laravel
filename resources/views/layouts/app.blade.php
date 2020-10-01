{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
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
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

</body>
</html>
 --}}


 <!DOCTYPE html>
<html dir="ltr" >
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="Somos una inmobiliaria ubicada al norte de Mérida, Yucatán">
<!-- css file -->
<link rel="stylesheet" href="{{ asset('cliente/assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('cliente/assets/css/style.css') }}">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="{{ asset('cliente/assets/css/responsive.css')}}">
<!-- Title -->
<title>Numus | Inicio</title>
<!-- Favicon -->
<link href="{{ asset('cliente/assets/images/icon_black.svg')}}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="{{ asset('cliente/assets/images/icon_black.svg')}}" sizes="128x128" rel="shortcut icon" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="wrapper">


	<!-- Main Header Nav -->
	<header class="header-nav menu_style_home_one navbar-scrolltofixed stricky main-menu">
		<div class="container-fluid p0">
		    <!-- Ace Responsive Menu -->
		    <nav>
		        <!-- Menu Toggle btn-->
		        <div class="menu-toggle">
		            <img class="nav_logo_img img-fluid" src="{{ asset('cliente/assets/images/logo_black.png')}}" alt="header-logo.png">
		            <button type="button" id="menu-btn">
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		        </div>
		        <a href="#" class="navbar_brand float-left dn-smd">
		            <img class="logo1 img-fluid" src="{{ asset('cliente/assets/images/logo_black.png')}}" alt="header-logo.png" style="height: 40px;padding-left: 20px;">
		            <img class="logo2 img-fluid" src="{{ asset('cliente/assets/images/logo_black.png')}}" alt="header-logo2.png" style="height: 40px;padding-left: 20px;">
		            <span></span>
		        </a>
		        <!-- Responsive Menu Structure-->
		        <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
		        <ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">

		           <li class="last">
		                <a href="page-contact.html"><span class="title">Inicio</span></a>
		            </li>
		            <li class="last">
		                <a href="page-contact.html"><span class="title">Nosotros</span></a>
		            </li>
		            <li class="last">
		                <a href="page-contact.html"><span class="title">Propiedades</span></a>
		            </li>
		            <li class="last">
		                <a href="page-contact.html"><span class="title">How to buy</span></a>
		            </li>
		            <li class="last">
		                <a href="page-contact.html"><span class="title">Contacto</span></a>
                    </li>

                    <a href="#" class="btn flaticon-user" data-toggle="modal" data-target=".bd-example-modal-lg"> <span class="dn-lg"></span></a>

		        </ul>
		    </nav>
		</div>
	</header>
	<!-- Modal -->


	<!-- Main Header Nav For Mobile -->
	<div id="page" class="stylehome1 h0">
		<div class="mobile-menu">
			<div class="header stylehome1">
				<div class="main_logo_home2 text-center">
		            <img class="nav_logo_img img-fluid mt20" src="{{ asset('cliente/assets/images/logo_black.png')}}" style="max-width: 40%;" alt="header-logo2.png">

				</div>
				<ul class="menu_bar_home2">
	                <li class="list-inline-item list_s"><a href="page-register.html"><span class="flaticon-user"></span></a></li>
					<li class="list-inline-item"><a href="#menu"><span></span></a></li>
				</ul>
			</div>
		</div><!-- /.mobile-menu -->
		<nav id="menu" class="stylehome1">
			<ul>
				<li><span>Inicio</span></li>
				<li><span>Nosotros</span></li>
				<li><span>Propiedades</span></li>
				<li><span>How to buy</span></li>
				<li><a href="page-contact.html">Contact</a></li>

			</ul>
		</nav>
	</div>

    @yield('content')

	<!-- Our Footer -->
	<section class="footer_one">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 pr0 pl0">
					<div class="footer_about_widget">
                        <img src="{{ asset('cliente/assets/images/logo_white.png')}}" alt=""> <br><br>

						<p>We’re reimagining how you buy, sell and rent. It’s now easier to get into a place you love. So let’s do this, together.</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
					<div class="footer_about_widget">

					</div>
				</div>

				<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
					<div class="footer_contact_widget">
						<h4>Contáctanos</h4>
						<ul class="list-unstyled">
							<li><a href="#">numus-inmobiliaria@hotmail.com</a></li>
							<li><a href="#">Colonia Itzimna</a></li>
							<li><a href="#">CP: 96233.</a></li>
							<li><a href="#">9991 123 1234</a></li>
							<li><a href="#">9992 123 1234</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Footer Bottom Area -->
	<section class="footer_middle_area pt40 pb40">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-xl-6">
					<div class="copyright-widget text-left">
						<p>© 2020 Numus - Desarrollado por Búho Solutions.</p>
					</div>
				</div>
				<div class="col-lg-6 col-xl-6">
					<div class="copyright-widget text-right">
						<ul class="mb30">

							<li class="list-inline-item"><a href="#"><i class="fa fa-facebook" style="color: #5277a3"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fa fa-twitter" style="color: #5277a3"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fa fa-whatsapp" style="color: #5277a3"></i></a></li>

						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
<a class="scrollToHome" href="#"><i class="flaticon-arrows"></i></a>
</div>
<!-- Wrapper End -->
<script type="text/javascript" src="{{ asset('cliente/assets/js/jquery-3.3.1.js')}}"></script>
<script type="text/javascript" src="{{ asset('cliente/assets/js/jquery-migrate-3.0.0.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('cliente/assets/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('cliente/assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('cliente/assets/js/jquery.mmenu.all.js')}}"></script>
<script type="text/javascript" src="{{ asset('cliente/assets/js/ace-responsive-menu.js')}}"></script>
<script type="text/javascript" src="{{ asset('cliente/assets/js/bootstrap-select.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('cliente/assets/js/isotop.js')}}"></script>
<script type="text/javascript" src="{{ asset('cliente/assets/js/snackbar.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('cliente/assets/js/simplebar.js')}}"></script>
<script type="text/javascript" src="{{ asset('cliente/assets/js/parallax.js')}}"></script>
<script type="text/javascript" src="{{ asset('cliente/assets/js/scrollto.js')}}"></script>
<script type="text/javascript" src="{{ asset('cliente/assets/js/jquery-scrolltofixed-min.js')}}"></script>
<script type="text/javascript" src="{{ asset('cliente/assets/js/jquery.counterup.js')}}"></script>
<script type="text/javascript" src="{{ asset('cliente/assets/js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('cliente/assets/js/slider.js')}}"></script>
<script type="text/javascript" src="{{ asset('cliente/assets/js/timepicker.js')}}"></script>
<!-- Custom script for all pages -->
<script type="text/javascript" src="{{ asset('cliente/assets/js/script.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM&callback=initMap"type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('cliente/assets/js/googlemaps1.js')}}"></script>
<script type="text/javascript" src="{{ asset('cliente/assets/js/googlemaps2.js')}}"></script>
</body>
</html>

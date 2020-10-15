<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="keywords" content="">
<meta name="robots" content="index"/>
<meta name="description" content="Somos una inmobiliaria ubicada al norte de Mérida, Yucatán">
<!-- css file -->
<link rel="stylesheet" href="{{ asset('cliente/assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('cliente/assets/css/style.css') }}">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="{{ asset('cliente/assets/css/responsive.css')}}">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
<!-- Title -->
<title>Numus | @yield('title')</title>
<!-- Favicon -->
<link href="{{ asset('cliente/assets/images/icon_black.svg')}}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="{{ asset('cliente/assets/images/icon_black.svg')}}" sizes="128x128" rel="shortcut icon" />

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
		            <img class="nav_logo_img img-fluid" src="{{ asset('cliente/assets/images/logo_black.svg')}}" alt="header-logo.png">
		            <button type="button" id="menu-btn">
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		        </div>
		        <a href="#" class="navbar_brand float-left dn-smd">
		            <img class="logo1 img-fluid" src="{{ asset('cliente/assets/images/logo_black.svg')}}" alt="header-logo.png" style="height: 40px;padding-left: 20px;">
		            <img class="logo2 img-fluid" src="{{ asset('cliente/assets/images/logo_black.svg')}}" alt="header-logo2.png" style="height: 40px;padding-left: 20px;">
		            <span></span>
		        </a>
		        <!-- Responsive Menu Structure-->
		        <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
		        <ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">

		           <li class="last">
		                <a href="{{ route('home', App::getLocale()) }}"><span class="title">@lang('home.nav_home')</span></a>
		            </li>
		            <li class="last">
		                <a href="{{ route('about', App::getLocale()) }}"><span class="title">@lang('home.nav_company')</span></a>
		            </li>
		            <li class="last">
		                <a href="{{ route('search', App::getLocale()) }}"><span class="title">@lang('home.nav_properties')</span></a>
		            </li>
		            <li class="last">
		                <a href="{{ route('howtobuy', App::getLocale()) }}"><span class="title">How to buy</span></a>
		            </li>
		            <li class="last">
		                <a href="{{ route('contact', App::getLocale()) }}"><span class="title">@lang('home.nav_contact')</span></a>
                    </li>
                    <li class="last" style="margin-right: -25px">
		                <a href="/es"><span class="title"><img class="logo2 img-fluid" src="{{ asset('cliente/assets/images/mexico_25px.png')}}"> </span></a>
                    </li>
                    <li class="last">
		                <a href="/en"><span class="title"><img class="logo2 img-fluid" src="{{ asset('cliente/assets/images/usa_25px.png')}}"></span></a>
                    </li>

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
		            <img class="nav_logo_img img-fluid mt20" src="{{ asset('cliente/assets/images/logo_black.svg')}}" style="max-width: 40%;" alt="header-logo2.png">

				</div>
				<ul class="menu_bar_home2">
	                <li class="list-inline-item list_s"></a></li>
					<li class="list-inline-item"><a href="#menu"><span></span></a></li>
				</ul>
			</div>
		</div><!-- /.mobile-menu -->
		<nav id="menu" class="stylehome1">
			<ul>
				<li><span><a href="{{ route('home', App::getLocale()) }}">@lang('home.nav_home')</a></span></li>
				<li><span><a href="{{ route('about', App::getLocale()) }}">@lang('home.nav_company')</a></span></li>
				<li><span><a href="{{ route('search', App::getLocale()) }}">@lang('home.nav_properties')</a></span></li>
				<li><span><a href="{{ route('howtobuy', App::getLocale()) }}">How to buy</a></span></li>
				<li><span><a href="{{ route('contact', App::getLocale()) }}">@lang('home.nav_contact')</a></span></li>

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

						<p>@lang('home.footer_text')</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
					<div class="footer_about_widget">

					</div>
				</div>

				<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
					<div class="footer_contact_widget">
						<h4>@lang('home.footer_contact_us')</h4>
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
						<p>© 2020 Numus - @lang('home.footer_developer') <a href="https://www.buho-solutions.com/" style="color: rgb(255, 120, 124);" target="_blank">Búho Solutions</a> .</p>
					</div>
				</div>
				<div class="col-lg-6 col-xl-6">
					<div class="copyright-widget text-right">
						<ul class="mb30">

							<li class="list-inline-item"><a href="#"><i class="fa fa-facebook" style="color: #5277a3"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fa fa-twitter" style="color: #5277a3"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-whatsapp" style="color: #5277a3"></i></a></li>
                            <li class="list-inline-item"><a href="{{ route('admin') }}"><i class="btn flaticon-user" style="color: #5277a3"></i> </a></li>

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

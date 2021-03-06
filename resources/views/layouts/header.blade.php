<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ trans('global.title_home') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="public/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="public/css/animate.css">
    
    <link rel="stylesheet" href="public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="public/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="public/css/magnific-popup.css">

    <link rel="stylesheet" href="public/css/aos.css">

    <link rel="stylesheet" href="public/css/ionicons.min.css">

    <link rel="stylesheet" href="public/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="public/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="public/css/flaticon.css">
    <link rel="stylesheet" href="public/css/icomoon.css">
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center" style="background-color: #efe1e1 !important;">
			<h1 id="colorlib-logo"><a href="index.html"><img src="public/images/logo.png" alt="Ngoc Thuy Spa"/></a></h1>
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					@foreach($menus as $menu)
						@if($menu->name == "Home")
							<li class="colorlib-active"><a href="{{ $menu->url }}">{{ $menu->name }}</a></li>
						@else
							<li><a href="{{ $menu->url }}">{{ $menu->name }}</a></li>
						@endif
					@endforeach

					@if(Auth::user() && Auth::user()->email)
						<li><a href="{{ route('logout') }}">{{ trans('global.logout') }}</a></li>
					@else	
						<li><a href="{{ route('login') }}">{{ trans('global.login') }}</a></li>
					@endif

					@if(!Auth::user())
						<li><a href="{{ route('register') }}">{{ trans('global.register') }}</a></li>
					@endif
				</ul>
			</nav>

			<div class="colorlib-footer">
				<h3>Follow Us Here!</h3>
				<div class="d-flex justify-content-center">
					<ul class="d-flex align-items-center">
						<li class="d-flex align-items-center jusitfy-content-center"><a href="#"><i class="icon-facebook"></i></a></li>
						<li class="d-flex align-items-center jusitfy-content-center"><a href="#"><i class="icon-twitter"></i></a></li>
						<li class="d-flex align-items-center jusitfy-content-center"><a href="#"><i class="icon-instagram"></i></a></li>
						<li class="d-flex align-items-center jusitfy-content-center"><a href="#"><i class="icon-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
		</aside>
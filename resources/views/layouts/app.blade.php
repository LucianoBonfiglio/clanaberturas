<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
    <title>Clan Aberturas</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/custom.css">
	<script src="js/modernizr.js"></script> <!-- Modernizr -->

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    {!! htmlScriptTagJsApi(['lang' => 'es']) !!}

</head>

<body id="page-top" class="politics_version">

	<div class="fat-nav">
        <div class="fat-nav__wrapper">
            <ul>
                <li><a class="js-scroll-trigger" href="#page-top">Home</a></li>
                <li><a class="js-scroll-trigger" href="#quienes-somos">Quienes Somos</a></li>
                <li><a class="js-scroll-trigger" href="#galeria">Galeria</a></li>
                <li><a class="js-scroll-trigger" href="#servicios">Servicios</a></li>
				<li><a class="js-scroll-trigger" href="#ofertas">Ofertas</a></li>
				<li><a class="js-scroll-trigger" href="#contacto">Contactenos</a></li>
            </ul>
        </div>
    </div>

<nav class="navbar navbar-dark fixed-top" id="mainNav">
    <div class="container-fluid">
        <a class="bt-menu" href="#page-top">
            <img class="img-fluid-logo" src="img/logo.png" alt="" /><h2>Clan Aberturas</h2>
        </a>    
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <h3><a href="{{ route('login') }}">{{ __('Ingreso') }}</a></h3>
                    </li>
                @endif
                
                @else
                <h3>
                    <li class="nav-item dropdown">
                        <a href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div aria-labelledby="navbarDropdown">
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a href="{{ route('home') }}">{{ __('Panel de Control') }}</a>
                                </li>
                            @endif
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Salir') }} 
                            </a>
                </h3>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                @endguest
        </ul>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <div class="fat-nav">
        <div class="fat-nav__wrapper">
            <ul>
                <li><a class="js-scroll-trigger" href="#page-top">Home</a></li>
                <li><a class="js-scroll-trigger" href="#quienes-somos">Quienes Somos</a></li>
                <li><a class="js-scroll-trigger" href="#galeria">Galeria</a></li>
                <li><a class="js-scroll-trigger" href="#servicios">Servicios</a></li>
                <li><a class="js-scroll-trigger" href="#ofertas">Ofertas</a></li>
                <li><a class="js-scroll-trigger" href="#contacto">Contactenos</a></li>
            </ul>
        </div>
    </div>  
</nav>

	
    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
	<!-- Camera Slider -->
	<script src="js/jquery.mobile.customized.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script> 
	<script src="js/parallaxie.js"></script>
	<script src="js/headline.js"></script>
	<script src="js/jquery.appear.min.js"></script>
	<script src="js/skill.bars.jquery.js"></script>
	<script src="js/responsiveslides.min.js"></script>
	<!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.fatNav.min.js"></script>
	<script src="js/main.js"></script>
    <script src="js/custom.js"></script>

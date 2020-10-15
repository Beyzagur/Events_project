<!doctype html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <title>Events</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{asset('img/favicon.png')}}" rel="icon">
    <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900"
        rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('lib/nivo-slider/css/nivo-slider.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/owl.transitions.css')}}" rel="stylesheet">
    <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/venobox/venobox.css')}}" rel="stylesheet">

    <!-- Nivo Slider Theme -->
    <link href="{{asset('css/nivo-slider-theme.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- Responsive Stylesheet File -->
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">

    <!-- =======================================================
      Theme Name: eBusiness
      Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
      Author: BootstrapMade.com
      License: https://bootstrapmade.com/license/
    ======================================================= -->
</head>

<body data-spy="scroll" data-target="#navbar-example">

<div id="preloader"></div>

<header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">

                    <!-- Navigation -->
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- Brand -->
                            <a class="navbar-brand page-scroll sticky-logo" href="/">
                                <h1><span>E</span>vents</h1>
                                <!-- Uncomment below if you prefer to use an image logo -->
                                <!-- <img src="img/logo.png" alt="" title=""> -->
                            </a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1"
                             id="navbar-example">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active">
                                    <a class="page-scroll" href="#home">Ana Sayfa</a>
                                </li>
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Etkinlikler<span
                                            class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <div class="multi-column-dropdown">
                                            <ul>
                                                <li><a href={{route('festival')}}>Festival</a></li>
                                                <li><a href={{route('konferans')}}>Konferans</a></li>
                                                <li><a href={{route('konser')}}>Konser</a></li>
                                                <li><a href={{route('müze')}}>Müze</a></li>
                                                <li><a href={{route('sahne')}}>Sahne</a></li>
                                                <li><a href={{route('sergi')}}>Sergi</a></li>
                                                <li><a href={{route('webinar')}}>Webinar</a></li>
                                                <li><a href=#>Daha fazlası</a></li>
                                            </ul>
                                        </div>

                                    </ul>
                                </li>

                                <li>
                                    <a class="page-scroll" href="#contact">İletişim</a>
                                </li>

                                <li class="dropdown"><a href="#" class="fa fa-user" class="dropdown-toggle"
                                                        data-toggle="dropdown"> Giriş<span
                                            class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href='{{route('login')}}' class="fa fa-key"> Giriş Yap</a></li>
                                        <li><a href='{{route('register')}}' class="fa fa-user-plus"> Kayıt Ol</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                        <!-- navbar-collapse -->
                    </nav>
                    <!-- END: Navigation -->
                </div>
            </div>
        </div>
    </div>
    <!-- header-area end -->
</header>
<!-- header end -->

<!-- Start Slider Area -->
<div id="home" class="slider-area">
    <div class="bend niceties preview-2">
        <div id="ensign-nivoslider" class="slides">
            <img src="{{asset('img/slider/Eğitim4.jpg')}}" alt title="#slider-direction-2" style="width: 1519px; visibility: hidden"/>
            <img src="{{asset('img/slider/Eğlencee2.jpg')}}" alt title="#slider-direction-1" style="width: 1519px; visibility: hidden"/>
            <img src="{{asset('img/slider/sahnesanaatt.jpg')}}" alt title="#slider-direction-3" style="width: 1519px; visibility: hidden"/>
        </div>

        <!-- direction 1 -->
        <div id="slider-direction-1" class="slider-direction slider-one">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="slider-content">
                            <!-- layer 1 -->
                            <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                <h2 class="title1">Tüm etkinliklere güncel olarak ulaşabileceğiniz </h2>
                            </div>
                            <!-- layer 2 -->
                            <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                <h1 class="title2">Eğitim ve eğlencenin buluşma adresi </h1>
                            </div>
                            <!-- layer 3 -->
                            <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                <a class="ready-btn right-btn page-scroll" href="/etkinliklerr">Tüm Etkinlikler</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- direction 2 -->
        <div id="slider-direction-2" class="slider-direction slider-two">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="slider-content text-center">
                            <!-- layer 1 -->
                            <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                <h2 class="title1">Tüm etkinliklere güncel olarak ulaşabileceğiniz </h2>
                            </div>
                            <!-- layer 2 -->
                            <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                <h1 class="title2">Eğitim ve eğlencenin buluşma adresi </h1>
                            </div>
                            <!-- layer 3 -->
                            <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                <a class="ready-btn right-btn page-scroll" href="/etkinliklerr">Tüm Etkinlikler</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- direction 3 -->
        <div id="slider-direction-3" class="slider-direction slider-two">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="slider-content">
                            <!-- layer 1 -->
                            <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                <h2 class="title1">Tüm etkinliklere güncel olarak ulaşabileceğiniz </h2>
                            </div>
                            <!-- layer 2 -->
                            <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                <h1 class="title2">Eğitim ve eğlencenin buluşma adresi </h1>
                            </div>
                            <!-- layer 3 -->
                            <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                <a class="ready-btn right-btn page-scroll" href="/etkinliklerr">Tüm Etkinlikler</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Slider Area -->
<div id="about" class="about-area area-padding">
    <div class="container">
        @yield('content')
    </div>
</div>


<footer>
    <div class="footer-area-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="copyright text-center">
                        <p>
                            &copy; Copyright <strong>eBusiness</strong>. All Rights Reserved
                        </p>
                    </div>
                    <div class="credits">
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="{{{asset('lib/jquery/jquery.min.js')}}}"></script>
<script src="{{{asset('lib/bootstrap/js/bootstrap.min.js')}}}"></script>
<script src="{{{asset('lib/owlcarousel/owl.carousel.min.js')}}}"></script>
<script src="{{{asset('lib/venobox/venobox.min.js')}}}"></script>
<script src="{{{asset('lib/knob/jquery.knob.js')}}}"></script>
<script src="{{{asset('lib/wow/wow.min.js')}}}"></script>
<script src="{{{asset('lib/parallax/parallax.js')}}}"></script>
<script src="{{{asset('lib/easing/easing.min.js')}}}"></script>
<script src="{{{asset('lib/nivo-slider/js/jquery.nivo.slider.js')}}}" type="text/javascript"></script>
<script src="{{{asset('lib/appear/jquery.appear.js')}}}"></script>
<script src="{{{asset('lib/isotope/isotope.pkgd.min.js')}}}"></script>

<!-- Contact Form JavaScript File -->
<script src="{{{asset('contactform/contactform.js')}}}"></script>

<script src="{{{asset('js/mainn.js')}}}"></script>
</body>

</html>

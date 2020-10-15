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
                                    <a class="page-scroll" href="/">Ana Sayfa</a>
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
                                @if(\Illuminate\Support\Facades\Auth::check())
                                <li class="dropdown"><a href="#" class="fa fa-user" class="dropdown-toggle"
                                                        data-toggle="dropdown"> {{\Illuminate\Support\Facades\Auth::user()->name}}
                                        <span
                                            class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href='{{route('profile.show')}}' > Profili Düzenle</a>
                                        </li>
                                        <li><a href='{{route('admin_panel')}}' > Admin Paneli</a>
                                        </li>
                                    </ul>
                                </li>
                                @else
                                    <li class="dropdown"><a href="#" class="fa fa-user" class="dropdown-toggle"
                                                            data-toggle="dropdown"> Giriş<span
                                                class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href='{{route('login')}}' class="fa fa-key"> Giriş Yap</a></li>
                                            <li><a href='{{route('register')}}' class="fa fa-user-plus"> Kayıt Ol</a></li>
                                        </ul>
                                    </li>
                                @endif

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

<!-- End Slider Area -->
<div id="about" class="about-area area-padding ">
    <div class="container " style="margin-top: 3rem ">

        @foreach($events as $event)
        <div class="card" style="width: 18rem; position: relative; float: left; margin-right: 2rem">
            <img src="{{asset('uploads/events/')."/".$event->photo}}" class="card-img-top" alt="{{$event->name}}" width="200px" height="100px">
            <div class="card-body">
                <h5 class="card-title">{{$event->name}}</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Tarih: {{$event->date}}</li>
                <li class="list-group-item">Saat: {{$event->time}}</li>
                <li class="list-group-item">Yer: {{$event->place}}</li>
                <li class="list-group-item">Fiyat: {{$event->price.' ₺'}}</li>
                <li class="list-group-item">
                    <a href="{{route('bilet_al')}}" class="card-link">Bilet Al</a>
                </li>

            </ul>

        </div>
        @endforeach
    </div>
</div>




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

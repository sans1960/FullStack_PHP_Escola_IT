<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('panel/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('panel/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('panel/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('panel/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('panel/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
     <link href="{{ asset('panel/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('panel/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('panel/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('panel/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('panel/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('panel/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('panel/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('panel/css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="#">
                            <img src="{{asset('panel/images/reserve.jpg')}}" width="50" alt="CoolAdmin" />
                        </a>
                    </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <li class="has-sub">
                                <a href="{{route('home')}}">
                                    <i class="fas fa-home"></i>Home
                                    <span class="bot-line"></span>
                                </a>

                            </li>
                            <li>
                                <a href="{{ route('categorias.index')}}">
                                    <i class="far fa-folder"></i>
                                    <span class="bot-line"></span>Categorias</a>
                            </li>
                            <li>
                                <a href="{{route('galerias.index')}}">
                                    <i class="fas fa-images"></i>
                                    <span class="bot-line"></span>Galerias</a>
                            </li>
                            <li class="has-sub">
                                <a href="{{ route('clientes.index')}}">
                                    <i class="far fa-user"></i>
                                    <span class="bot-line"></span>Clientes</a>

                            </li>
                            <li class="has-sub">
                                <a href="{{ route('reservas.index')}}">
                                    <i class="zmdi zmdi-calendar-check zmdi-hc-lg"></i>
                                    <span class="bot-line"></span>Reservas</a>

                            </li>
                        </ul>
                    </div>
                    <div class="header__tool">

                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">

                                <div class="content">
                                    <a class="js-acc-btn" href="#"> {{ Auth::user()->name }}</a>
                                </div>
                                <div class="account-dropdown js-dropdown">

                                    <div class="account-dropdown__footer">
                                        <a class="" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->
        <header class="header-mobile header-mobile-2 d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="{{asset('panel/images/reserve.jpg')}}" width="30" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="{{route('home')}}">
                                <i class="fas fa-home"></i> Home</a>

                        </li>
                        <li>
                            <a href="{{ route('categorias.index')}}">
                                <i class="far fa-folder"></i>Categorias</a>
                        </li>
                        <li>
                            <a href="{{route('galerias.index')}}">
                                <i class="fas fa-images"></i>Galerias</a>
                        </li>
                        <li>
                            <a href="{{ route('clientes.index')}}">
                                <i class="far fa-user"></i>Clientes</a>
                        </li>

                        <li>
                            <a href="{{ route('reservas.index')}}">
                                <i class="zmdi zmdi-calendar-check "></i> Reservas</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>
        <div class="sub-header-mobile-2 d-block d-lg-none">
            <div class="header__tool">

                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">

                        <div class="content">
                            <a class="js-acc-btn" href="#"> {{ Auth::user()->name }}</a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">


                            </div>

                            <div class="account-dropdown__footer">
                                <a class="" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 {{ __('Logout') }}
                             </a>

                             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                 @csrf
                             </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END HEADER MOBILE -->

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">


            @yield('content')


            <!-- COPYRIGHT-->
            <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2021 All rights reserved. Template by Booking Systems</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END COPYRIGHT-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{asset('panel/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('panel/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('panel/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('panel/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('panel/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('panel/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('panel/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('panel/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('panel/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('panel/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('panel/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('panel/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('panel/vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{asset('panel/js/main.js')}}"></script>


</body>

</html>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title>JE Refrigeración | @yield('title')</title>
    <link rel="icon" href="{{asset('images/je/icon.png')}}" type="image/png" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- 
        ==================================================    
        CSS Files
        ================================================== 
    -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css" id="bootstrap">
    <link rel="stylesheet" href="{{asset('css/plugins.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/color.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/wsp.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('fonts/font-awesome/css/font-awesome.css')}}" type="text/css">

    @yield('styles')

    <!-- color scheme -->
    <link rel="stylesheet" href="css/colors/je.css" type="text/css" id="colors">
</head>

<body class="has-menu-bar">
    <a href="https://wa.me/5211234567890?text=Me%20gustaría%20saber%20el%20precio%20del%20coche" class="whatsapp"
        target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
    <div id="wrapper">
        <!-- header begin -->
        <header class="header-fullwidth transparent" style="background-color: rgb(0 0 0 / 50%);">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

                        <div class="de-flex">
                            <div class="de-flex-col">
                                <!-- logo begin -->
                                <div id="logo">
                                    <a href="{{  url('/') }}">
                                        <img class="logo" src="images/je/icon.png" alt="" width="40px">
                                    </a>
                                </div>
                                <!-- logo close -->
                            </div>

                            <div class="de-flex-col">

                                <ul id="mainmenu">
                                    <li><a class="{{ Request::segment(1) === 'inicio' ? 'active' : null }}"
                                            href="{{  url('/') }}">Inicio</a></li>
                                    <li><a class="{{ Request::segment(1) === 'nosotros' ? 'active' : null }}"
                                            href="{{  url('/nosotros') }}">Nosotros</a></li>
                                    <li><a class="{{ Request::segment(1) === 'servicios' ? 'active' : null }}"
                                            href="{{  url('/servicios') }}">Servicios</a></li>
                                    <li><a class="{{ Request::segment(1) === 'contacto' ? 'active' : null }}"
                                            href="{{  url('contacto') }}">Contacto</a></li>
                                </ul>
                            </div>

                            <div class="de-flex-col">
                                <div class="d-extra">
                                    <a class="btn-main" href="">Contáctenos</a>
                                </div>
                                <div id="menu-btn"></div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->
    </div>
    <!-- menu overlay close -->

    <!-- content begin -->
    <div id="content" class="no-bottom no-top">

        @yield('content')
        <footer class="no-top pl20 pr20">
            <div class="subfooter">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">&copy; Copyright {{now()->year }} - JE Refrigeración SAC by <span
                                class="id-color"><a href="http://wa.me/+51978994510" target="_blank">Omar
                                    Silva</a></span></div>
                        <div class="col-md-6 text-right">
                            <div class="social-icons">
                                <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                                <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                                <a href="#"><i class="fa fa-dribbble fa-lg"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" id="back-to-top"></a>
        </footer>

    </div>

    <!-- Javascript Files
    ================================================== -->
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/designesia.js')}}"></script>
    @yield('scripts')
</body>

</html>
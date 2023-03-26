<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Administrador JE | @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />

    <!-- datepicker -->
    <link href="{{asset('admin/libs/air-datepicker/css/datepicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- jvectormap -->
    <link href="{{asset('admin/libs/jqvmap/jqvmap.min.css')}}" rel="stylesheet" />

    <link rel="icon" href="{{asset('images/je/icon.png')}}" type="image/png" sizes="16x16">

    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/css/app.min.css')}}" rel="stylesheet" type="text/css" />

</head>

<body data-topbar="colored">

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="{{asset('admin/images/logo-sm-dark.png')}}" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{asset('admin/images/logo-dark.png')}}" alt="" height="20">
                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="{{asset('admin/images/logo-sm-light.png')}}" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{asset('admin/images/logo-light.png')}}" alt="" height="20">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect"
                        id="vertical-menu-btn">
                        <i class="mdi mdi-backburger"></i>
                    </button>
                </div>

                <div class="d-flex">

                    <div class="dropdown d-inline-block d-lg-none ml-2">
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                            aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..."
                                            aria-label="Recipient's username">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i
                                                    class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user"
                                src="{{asset('admin/images/users/avatar-1.jpg')}}" alt="Header Avatar">
                            <span class="d-none d-sm-inline-block ml-1">{{ Session::get('user')}}</span>
                            <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i
                                    class="mdi mdi-logout font-size-16 align-middle mr-1"></i> Logout</a>
                        </div>
                    </div>

                </div>
            </div>

        </header>

        <div class="vertical-menu">

            <div data-simplebar class="h-100">
                <div id="sidebar-menu">
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Menu</li>

                        <li class="mm-active">
                            <a href="dashboard" class="waves-effect active">
                                <div class="d-inline-block icons-sm mr-1">
                                    <i class="uim uim-airplay"></i>
                                </div>
                                <span>Servicios</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main-content">

            <div class="page-content">
                @yield('content')
            </div>
            <!-- End Page-content -->


            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            2020 © JE Refrigeracion SAC.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-right d-none d-sm-block">
                                Creado por <i class="mdi mdi-heart text-danger"></i> by Omarojeda95
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-tabs-custom rightbar-nav-tab nav-justified" role="tablist">
                <li class="nav-item">
                    <a class="nav-link py-3 active" data-toggle="tab" href="#chat-tab" role="tab">
                        <i class="mdi mdi-message-text font-size-22"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-3" data-toggle="tab" href="#tasks-tab" role="tab">
                        <i class="mdi mdi-format-list-checkbox font-size-22"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-3" data-toggle="tab" href="#settings-tab" role="tab">
                        <i class="mdi mdi-settings font-size-22"></i>
                    </a>
                </li>
            </ul>

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="{{asset('admin/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('admin/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('admin/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{asset('admin/libs/air-datepicker/js/datepicker.min.js')}}"></script>
    <script src="{{asset('admin/libs/air-datepicker/js/i18n/datepicker.en.js')}}"></script>
    <script src="{{asset('admin/libs/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('admin/libs/jquery-knob/jquery.knob.min.js')}}"></script>
    <script src="{{asset('admin/libs/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('admin/libs/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
    <script src="{{asset('admin/libs/dropzone/min/dropzone.min.js')}}"></script>
    <script src="{{asset('admin/js/app.js')}}"></script>
    @yield('scripts')
</body>

<!-- Mirrored from themesdesign.in/xoric/layouts/blue/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Jan 2023 20:14:53 GMT -->

</html>
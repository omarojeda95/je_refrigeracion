<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Administrador JE | @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="icon" href="{{asset('images/je/icon.png')}}" type="image/png" sizes="16x16">

    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    @yield('styles')
</head>

<body class="bg-primary bg-pattern">
    @yield('content')
    <!-- JAVASCRIPT -->
    <script src="{{asset('admin/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('admin/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('admin/libs/node-waves/waves.min.js')}}"></script>

    <script src="{{asset('admin/js/app.js')}}"></script>
    @yield('scripts')
</body>

</html>
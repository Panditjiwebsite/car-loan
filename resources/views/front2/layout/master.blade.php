<!doctype html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Members Area Home Page</title>
    <!-- Required meta tags -->

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Mobland - Mobile App Landing Page Template">
    <meta name="keywords" content="HTML5, bootstrap, mobile, app, landing, ios, android, responsive">

    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset(env('ASSETS_PATH').'front2/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset(env('ASSETS_PATH').'front2/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset(env('ASSETS_PATH').'front2/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset(env('ASSETS_PATH').'front2/css/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ asset(env('ASSETS_PATH').'front2/css/style.css') }}">

    
    <link rel="stylesheet" href="{{ asset(env('ASSETS_PATH').'front2/css/owl.carousel.css') }}">
    
    <script src="{{ asset(env('ASSETS_PATH').'front2/js/v2/dist/tealiumlib.min8e33.js') }}"></script>

    <script src="{{ asset(env('ASSETS_PATH').'front2/js/v2/dist/eventtrackinglib.minb036.js') }}"></script>

    <link rel="stylesheet" href="{{ asset(env('ASSETS_PATH').'front2/js/v2/dist/site05ac.css') }}" />
    
    <noscript>
        <link rel="stylesheet" href="{{ asset(env('ASSETS_PATH').'front2/js/v2/dist/noscript.css') }}">
    </noscript>
    <link rel="icon" sizes="16X16" href="{{ asset(env('ASSETS_PATH').'front2/images/favicon.ico') }}">


</head>
<body data-spy="scroll" data-target="#navbar" data-offset="30">

@yield('content')


    <!-- jQuery and Bootstrap -->
    <script src="{{ asset(env('ASSETS_PATH').'front2/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset(env('ASSETS_PATH').'front2/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Plugins JS -->
    <script src="{{ asset(env('ASSETS_PATH').'front2/js/owl.carousel.min.js') }}"></script>
    <!-- Custom JS -->
    <script src="{{ asset(env('ASSETS_PATH').'front2/js/script.js') }}"></script>
    <script src="{{ asset(env('ASSETS_PATH').'front2/js/js-src/lazysizese7c8.js') }}" ></script>
    <script src="{{ asset(env('ASSETS_PATH').'front2/js/v2/dist/all-v26818.js') }}" ></script>
    
@yield('lastOneFooter')

    <!-- {{ URL::to("/")}}/front2/images/logo.png -->
</body>
</html>
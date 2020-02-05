<!DOCTYPE html>
<html lang="en">
<head>
  <title>CarFinance @yield('title')</title>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Mobland - Mobile App Landing Page Template">
    <meta name="keywords" content="HTML5, bootstrap, mobile, app, landing, ios, android, responsive">

    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    
    @include('front.layouts.includes.styles')
    
    <link rel="icon" sizes="16X16" href="{{ asset(env('ASSETS_PATH').'front/images/favicon.ico') }}"> 
</head>


<!--Wrapper Start-->
<body data-spy="scroll" data-target="#navbar" data-offset="30">
  <!--Header Section Start-->
  @include('front.layouts.includes.quote_header')
  <!--/Header Section End--> 
  
  <!--How it works Section Satrt-->

  @yield('content')
  <!--Features Section End--> 
  
  <!--Footer -->
  @include('front.layouts.includes.footer')
  <!--End Footer-->
  
</div>
<!--/Wrapper End--> 

<!-- BEGIN # MODAL LOGIN -->
 
    <!-- END # MODAL LOGIN -->

  @include('front.layouts.includes.scripts')
</body>
</html>
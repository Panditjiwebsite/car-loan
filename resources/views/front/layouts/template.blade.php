<!DOCTYPE html>
<html lang="en">
<head>
  <title>Car Finance @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Mobland - Mobile App Landing Page Template">
    <meta name="keywords" content="HTML5, bootstrap, mobile, app, landing, ios, android, responsive">

    @include('front.layouts.includes.style')
    
    <link rel="icon" sizes="16X16" href="{{ asset(env('ASSETS_PATH').'front/images/favicon.ico') }}"> 
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="30">

  <!-- Content -->
  @yield('content')
  <!-- Content end -->

  <!--Footer -->
  @include('front.layouts.includes.footer')
  <!--End Footer-->
  
  @include('front.layouts.includes.script')
</body>
</html>
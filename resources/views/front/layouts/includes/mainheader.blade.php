<!-- Navigation start -->
<!-- Navigation in Mobile start -->
<div class="mobile-menu">
        <div class="mobile-menu-inner">
            <ul>
                <li><a href="{{ url('') }}">Home</a></li>
                <li><a href="{{ url('about-us') }}">About us</a></li>
                <li><a href="{{url('our-process')}}">Our process </a></li>
                <li><a href="{{url('finance-calculator')}}">Finance Calculator</a></li>
                <li><a href="{{url('faq')}}">FAQ</a></li>
                <li><a href="{{url('contact-us')}}">Contact us</a></li>
            </ul>
        </div>
    </div>
<!-- Navigation in Mobile end -->

    <!-- Navigation in Desktop start -->
    <div class="header-bar-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="site-logo">
                        <a href="index.php"><img src="{{ asset(env('ASSETS_PATH').'assets/img/logo.png')}}" alt=""></a>
                        <span class="menu-open">Menu<i class="fa fa-bars"></i></span>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="header-top-right-ingo">

                    </div>
                </div>
                                <div class="col-md-4">
                    <div class="header-top-right-ingo">
                        <a href="">Retrieve a quote</a>
                        <a href="{{ url('login') }}">Login</a>
                    </div>
                </div>
            </div>
            <div class="row d-none d-md-block">
                <div class="col-lg-12">
                    <div class="main-menu">
                        <ul>
                        <li><a href="{{ url('') }}">Home</a></li>
                        <li><a href="{{ url('about-us') }}">About us</a></li>
                        <li><a href="{{url('our-process')}}">Our process </a></li>
                        <li><a href="{{url('finance-calculator')}}">Finance Calculator</a></li>
                        <li><a href="{{url('faq')}}">FAQ</a></li>
                        <li><a href="{{url('contact-us')}}">Contact us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navigation in Desktop end -->
<!-- Navigation end -->
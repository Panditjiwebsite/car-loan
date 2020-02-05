

<!doctype html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>SSign In – My CarFinance 247</title>
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Mobland - Mobile App Landing Page Template">
    <meta name="keywords" content="HTML5, bootstrap, mobile, app, landing, ios, android, responsive">

    <!-- Font -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset(env('ASSETS_PATH').'front2/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset(env('ASSETS_PATH').'front2/css/font-awesome.min.css') }}">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{ asset(env('ASSETS_PATH').'front2/css/themify-icons.css') }}">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="{{ asset(env('ASSETS_PATH').'front2/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset(env('ASSETS_PATH').'front2/css/owl.theme.default.min.css') }}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset(env('ASSETS_PATH').'front2/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset(env('ASSETS_PATH').'front2/css/owl.carousel.css') }}">

    <script src="{{ asset(env('ASSETS_PATH').'front2/js/v2/dist/tealiumlib.min8e33.js') }}"></script>

    <script src="{{ asset(env('ASSETS_PATH').'front2/js/v2/dist/eventtrackinglib.minb036.js') }}"></script>

    <link rel="stylesheet" href="{{ asset(env('ASSETS_PATH').'front2/js/v2/dist/site05ac.css') }}">

    <noscript>
        <link rel="stylesheet" href="{{ asset(env('ASSETS_PATH').'front2/js/v2/dist/noscript.css') }}">
    </noscript>
    <link rel="icon" sizes="16X16" href="{{ asset(env('ASSETS_PATH').'front2/images/favicon.ico') }}">
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="30">

    <!-- Nav Menu -->

    <div class="nav-menu fixed-top ">
        <div class="container text-center py-3">
            <div class="row">
                <div class="col-md-12 mt-2 pr-2 mb-2"><a href="index.html"><img src="{{ asset(env('ASSETS_PATH').'front2/images/logo-1.svg') }}" width="150" class="img-fluid" alt="logo"></a></div>
            </div>
        </div>
    </div>


    <div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-5 col-lg-offset-3" >
           
            <ul class="nav activenone nav-tabs text-center">
                <li class="col-6" style="padding-right:0;padding-left: 0 "><a data-toggle="tab" class="active" href="#signin">Sign in</a></li>
                <!--<li class="col-6" style="padding-right:0;padding-left: 0 "><a data-toggle="tab" href="#signup">Register</a></li>-->
            </ul>

            <div class="tab-content shadorem">
                <div id="signin" class="tab-pane fade in active fadelost">

                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif

                <form action="{{url('login')}}" method="POST">
                        <div class="form-group">
                            <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
                            @csrf
                            <input type="email" required name="email" placeholder="Enter Email" class="form-control">
                        </div>
                        <div class="form-group">

                            <div class="input-group">
                            <input type="password" required name="user_password" placeholder="Enter Password" id="user_password" class="form-control" data-toggle="password">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-eye"></i></span>
                              </div>
                        
                        </div
                        <div class="form-group">
                            <label class="text-right text-primary forget">Forgot your password?</label>
                        </div>
                        <div class="form-group">
                            <!-- <button type="submit" class="btn btn-primary mt-3 mb-2 btn-md faceb "><b>Sign in</b></button> -->
                            <input type="submit" name="submit" class="btn btn-primary mt-3 mb-2 btn-md faceb" value="Sign in">
                        </div>
                    </form>

                </div>
                <div id="signup" class="tab-pane fade">
                    <form role="Form" method="POST" action="" accept-charset="UTF-8">
                        <div class="form-group">
                            <input type="text" name="email" placeholder="Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Application Ref.Number" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary mt-3 mb-2 btn-md faceb "><b>Register</b></button>
                        </div>
                    </form>
                </div>
            </div>

            <p><img src="{{ asset(env('ASSETS_PATH').'front2/images/Trustpilot_brandmark_gr-blk_RGB.svg') }}" width="120">&nbsp;<img src="{{ asset(env('ASSETS_PATH').'front2/images/Trustpilot_ratings_5star-RGB.svg') }}" width="120">&nbsp;<strong>9.2</strong>  out of 10 </p>
        </div>

        <div class="col-lg-7 text-right">
            <img src="{{ asset(env('ASSETS_PATH').'front2/images/login-banner.svg') }}" class="img-fluid" width="400">
        </div>
    </div>
</div>

<a id="back-to-top" href="#" class="btn btn-skyblue btn-lg back-to-top" role="button"><i class="fa fa-chevron-up"></i></a>
    <hr>




    <!--footer div start here-->
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-8 col-sm-12">
                <div class="row">
                    <div class="col-md-12">
                        <a href="#" class="btn btn-primary mb-2 btn-lg   mt-4">Contact us</a>
                        <a href="#" class="btn btn-primary mb-2 btn-lg  mt-4">Careers</a>
                        <a href="#" class="btn btn-primary mb-2 btn-lg  mt-4">Complaint </a>
                        <a href="#" class="btn btn-primary mb-2 btn-lg  mt-4">Press office</a>
                    </div>
                </div>

                <div class="my-3">
                    <div class="footer-nav">
                        <a href="#" class="m-2">Terms &amp; conditions</a><span>|</span>
                        <a href="#" class="m-2">Privacy Policy</a><span>|</span>
                        <a href="#" class="m-2">Cookie policy</a><span>|</span>
                        <a href="#" class="m-2">Acceptable use policy</a>
                    </div>
                </div>

                <p class="card-textadd">
                    CarFinance247<br>
                    Universal Square<br>
                    Devonshire Street North<br>
                    Manchester<br>
                    M12 6JH
                </p>

                <p class="card-textadd">*This approval is subject to the lender recognising a need for any further information, having any concerns or discovering any discrepancies in documentation you provide to us. In such situations, they also then have the right to request additional information, change the lending amount or ultimately decline the request for finance if not fully satisfied. CarFinance 247 is a trading name of CarFinance 247 Limited, a credit broker and insurance intermediary, and 247 Money Group Limited (247 Money), a lender. Both companies are part of the 247 group of companies. </p>

                <p class="card-textadd">CarFinance 247 is authorised and regulated by the Financial Conduct Authority under reference number: 653019. Registered office: Universal Square, Devonshire Street North, Manchester, M12 6JH. Registered in England. Company registration no. 06035525. Data Protection Registration Number Z1897658. </p>

                <p class="card-textadd">247 Money is authorised and regulated by the Financial Conduct Authority. Registered office: Universal Square, Devonshire Street North, Manchester, M12 6JH. Registered in England. Company registration no. 10989530. Data Protection Registration Number ZA456831.  </p>

                <p class="card-textadd">All finance is subject to status and income. Written quotations on request. CarFinance 247 can introduce you to a limited number of finance providers, including 247Money, based upon your credit rating and will receive commission for such introductions. </p>

                <p class="card-textadd"> We do not charge a fee for arranging the finance, however some of our lenders may charge a fee. Your account manager can provide more information on this.  </p>

                <P class="card-textadd"> This site uses cookies so that we can provide you with the best user experience. By continuing to use the site you are consenting for cookies to be used. Further information on cookies and how you can disable them is available here.</P>
                
            </div>

            <div class="col-lg-4">
                <div class="social-icons mt-4">
                <a href="https://www.youtube.com/Carfinance247couk"><img src="{{ asset(env('ASSETS_PATH').'front2/images/social-play.png') }}" class="img-fluid" width="200"></a>
                <a href="https://www.instagram.com/carfinance247/"><img src="{{ asset(env('ASSETS_PATH').'front2/images/social-facebook.png') }}" class="img-fluid" width="200"></a>
                <a href="https://twitter.com/carfinance247"><img src="{{ asset(env('ASSETS_PATH').'front2/images/social-instagrame.png') }}" class="img-fluid" width="200"></a>
                <a href="https://www.facebook.com/carfinance247/"><img src="{{ asset(env('ASSETS_PATH').'front2/images/social-tweeter.png') }}" class="img-fluid" width="200"></a>
                </div>
            </div>
        </div>


    </div>
    <!--footer div end here-->




    
    

    <!-- jQuery and Bootstrap -->
    <script src="{{ asset(env('ASSETS_PATH').'front2/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset(env('ASSETS_PATH').'front2/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Plugins JS -->
    <script src="{{ asset(env('ASSETS_PATH').'front2/js/owl.carousel.min.js') }}"></script>
    <!-- Custom JS -->
    <script src="{{ asset(env('ASSETS_PATH').'front2/js/script.js') }}"></script>

    <script type="text/javascript" src="{{ asset(env('ASSETS_PATH').'front2/js/bootstrap-show-password.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $(window).scroll(function () {
                if ($(this).scrollTop() > 50) {
                    $('#back-to-top').fadeIn();
                } else {
                    $('#back-to-top').fadeOut();
                }
            });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 400);
            return false;
        });
    });
</script>
</body>
</html>

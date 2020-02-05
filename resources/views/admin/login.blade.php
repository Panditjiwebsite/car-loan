<?php $adminURL = config('constants.ADMIN_URL'); 
?>
<!DOCTYPE html>
<html lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">  

        <title>CarFinance | Login</title>
        <meta name="description" content="CarFinance Login page">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
            WebFont.load({
                google: {
                    "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
                },
                active: function() {
                    sessionStorage.fonts = true;
                }
            });
        </script>
        <link href="{{ asset(env('ASSETS_PATH').'assets/css/login-3.css') }}" rel="stylesheet" type="text/css" />
   
        <link href="{{ asset(env('ASSETS_PATH').'assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
        
        <link rel="shortcut icon" href="{{ asset(env('ASSETS_PATH').'assets/media/logos/favicon.ico') }}" />
        <script> var ADMIN_URL = '<?php echo $adminURL; ?>'; </script>
    </head>
    <body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

        <!-- begin:: Page -->
        <div class="kt-grid kt-grid--ver kt-grid--root">
            <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v3 kt-login--signin" id="kt_login">
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url('{{ asset(env('ASSETS_PATH').'assets/media/bg/bg-3.jpg') }}');">
                    <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
                        <div class="kt-login__container">
                            <div class="kt-login__logo">
                                <h2>Car Finance</h2>
                                <!--<a href="#">
                                    <!--<img style="width: 100px; height: 100px;" src="{{ asset(env('ASSETS_PATH').'assets/media/logos/logo-5.png') }}">
                                </a>-->
                            </div>
                            <div class="kt-login__signin">
                                <div class="kt-login__head">
                                    <h3 class="kt-login__title">Sign In To Admin</h3>
                                </div>

                               {{ Form::open(array('url' => '', 'class' => 'kt-form')) }}
                                    <div class="input-group">
                                        <input class="form-control" type="text" placeholder="Email" name="email" autocomplete="off">
                                    </div>
                                    <div class="input-group">
                                        <input class="form-control" type="password" placeholder="Password" name="password">
                                    </div>
                                    <div class="row kt-login__extra">
                                        <div class="col">
                                            <label class="kt-checkbox">
                                                <input type="checkbox" name="remember"> Remember me
                                                <span></span>
                                            </label>
                                        </div>
                                        <div class="col kt-align-right">
                                            <a href="javascript:;" id="kt_login_forgot" class="kt-login__link">Forget Password ?</a>
                                        </div>
                                    </div>
                                    <div class="kt-login__actions">
                                        <button id="kt_login_signin_submit" class="btn btn-brand btn-elevate kt-login__btn-primary">Sign In</button>
                                    </div>
                                {{ Form::close() }}
                            </div>
                            <div class="kt-login__forgot">
                                <div class="kt-login__head">
                                    <h3 class="kt-login__title">Forgotten Password ?</h3>
                                    <div class="kt-login__desc">Enter your email to reset your password:</div>
                                </div>
                               {{ Form::open(array('url' => '', 'class' => 'kt-form')) }}
                                    <div class="input-group">
                                        <input class="form-control" type="text" placeholder="Email" name="email" id="kt_email" autocomplete="off">
                                    </div>
                                    <div class="kt-login__actions">
                                        <button id="kt_login_forgot_submit" class="btn btn-brand btn-elevate kt-login__btn-primary">Request</button>&nbsp;&nbsp;
                                        <button id="kt_login_forgot_cancel" class="btn btn-light btn-elevate kt-login__btn-secondary">Cancel</button>
                                    </div>
                                {{ Form::close() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var KTAppOptions = {
                "colors": {
                    "state": {
                        "brand": "#5d78ff",
                        "dark": "#282a3c",
                        "light": "#ffffff",
                        "primary": "#5867dd",
                        "success": "#34bfa3",
                        "info": "#36a3f7",
                        "warning": "#ffb822",
                        "danger": "#fd3995"
                    },
                    "base": {
                        "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                        "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
                    }
                }
            };
        </script>
        <script src="{{ asset(env('ASSETS_PATH').'assets/vendors/general/jquery/dist/jquery.js') }}" type="text/javascript"></script>
        <script src="{{ asset(env('ASSETS_PATH').'assets/vendors/general/popper.js/dist/umd/popper.js') }}" type="text/javascript"></script>
        <script src="{{ asset(env('ASSETS_PATH').'assets/vendors/general/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset(env('ASSETS_PATH').'assets/vendors/general/js-cookie/src/js.cookie.js') }}" type="text/javascript"></script>
        <script src="{{ asset(env('ASSETS_PATH').'assets/vendors/general/sticky-js/dist/sticky.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset(env('ASSETS_PATH').'assets/vendors/general/jquery-form/dist/jquery.form.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset(env('ASSETS_PATH').'assets/vendors/general/block-ui/jquery.blockUI.js') }}" type="text/javascript"></script>
        <script src="{{ asset(env('ASSETS_PATH').'assets/vendors/general/jquery-validation/dist/jquery.validate.js') }}" type="text/javascript"></script>
        <script src="{{ asset(env('ASSETS_PATH').'assets/vendors/general/jquery-validation/dist/additional-methods.js') }}" type="text/javascript"></script>
        <script src="{{ asset(env('ASSETS_PATH').'assets/vendors/custom/js/vendors/jquery-validation.init.js') }}" type="text/javascript"></script>
        <script src="{{ asset(env('ASSETS_PATH').'assets/js/scripts.bundle.js') }}" type="text/javascript"></script>
       <script src="{{ asset(env('ASSETS_PATH').'assets/js/login-general.js') }}" type="text/javascript"></script>
    </body>
</html>


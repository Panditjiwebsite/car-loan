<meta charset="utf-8" />
<title>CarFinance | Login Page</title>
<meta name="description" content="Login page">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
<!-- <link rel="shortcut icon" href="{{ asset(env('ASSETS_PATH').'assets/media/logos/favicon.ico') }}" /> -->
<link href="{{ asset(env('ASSETS_PATH').'assets/app/custom/login/login-v2.default.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset(env('ASSETS_PATH').'assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset(env('ASSETS_PATH').'assets/vendors/general/tether/dist/css/tether.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset(env('ASSETS_PATH').'assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset(env('ASSETS_PATH').'assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset(env('ASSETS_PATH').'assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset(env('ASSETS_PATH').'assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset(env('ASSETS_PATH').'assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset(env('ASSETS_PATH').'assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset(env('ASSETS_PATH').'assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset(env('ASSETS_PATH').'assets/vendors/general/select2/dist/css/select2.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset(env('ASSETS_PATH').'assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset(env('ASSETS_PATH').'assets/vendors/general/nouislider/distribute/nouislider.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset(env('ASSETS_PATH').'assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset(env('ASSETS_PATH').'assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset(env('ASSETS_PATH').'assets/vendors/general/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset(env('ASSETS_PATH').'assets/vendors/general/summernote/dist/summernote.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset(env('ASSETS_PATH').'assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset(env('ASSETS_PATH').'assets/vendors/general/animate.css/animate.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset(env('ASSETS_PATH').'assets/vendors/general/toastr/build/toastr.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset(env('ASSETS_PATH').'assets/vendors/general/morris.js/morris.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset(env('ASSETS_PATH').'assets/vendors/general/sweetalert2/dist/sweetalert2.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset(env('ASSETS_PATH').'assets/vendors/general/socicon/css/socicon.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset(env('ASSETS_PATH').'assets/vendors/custom/vendors/line-awesome/css/line-awesome.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset(env('ASSETS_PATH').'assets/vendors/custom/vendors/flaticon/flaticon.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset(env('ASSETS_PATH').'assets/vendors/custom/vendors/flaticon2/flaticon.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset(env('ASSETS_PATH').'assets/vendors/custom/vendors/fontawesome5/css/all.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset(env('ASSETS_PATH').'assets/demo/default/base/style.bundle.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset(env('ASSETS_PATH').'assets/demo/default/skins/header/base/light.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset(env('ASSETS_PATH').'assets/demo/default/skins/header/menu/light.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset(env('ASSETS_PATH').'assets/demo/default/skins/brand/dark.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset(env('ASSETS_PATH').'assets/demo/default/skins/aside/dark.css') }}" rel="stylesheet" type="text/css" />
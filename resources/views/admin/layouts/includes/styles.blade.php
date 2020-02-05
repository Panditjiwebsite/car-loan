<base href="../">
<meta charset="utf-8" />
<title>CarFinance | Admin - @yield('title')</title>
<meta name="description" content="CarFinance Admin Panel">
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

<link href="{{ asset(env('ASSETS_PATH').'assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" type="text/css" />

<link href="{{ asset(env('ASSETS_PATH').'assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css') }}" rel="stylesheet" type="text/css" />


<link href="{{ asset(env('ASSETS_PATH').'assets/vendors/general/socicon/css/socicon.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset(env('ASSETS_PATH').'assets/vendors/custom/vendors/line-awesome/css/line-awesome.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset(env('ASSETS_PATH').'assets/vendors/custom/vendors/flaticon/flaticon.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset(env('ASSETS_PATH').'assets/vendors/custom/vendors/flaticon2/flaticon.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset(env('ASSETS_PATH').'assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset(env('ASSETS_PATH').'assets/css/project/style.bundle.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset(env('ASSETS_PATH').'assets/vendors/general/sweetalert2/dist/sweetalert2.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset(env('ASSETS_PATH').'assets/vendors/croppie/croppie.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset(env('ASSETS_PATH').'assets/css/editor.css') }}" rel="stylesheet" type="text/css" />

<link rel="shortcut icon" href="{{ asset(env('ASSETS_PATH').'assets/image/favicon.ico') }}" />>

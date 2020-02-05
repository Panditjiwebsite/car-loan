<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#2c77f4",
						"light": "#ffffff",
						"dark": "#282a3c",
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

		<!-- end::Global Config -->

		<!--begin:: Global Mandatory Vendors -->
		<script src="{{ asset(env('ASSETS_PATH').'assets/vendors/general/jquery/dist/jquery.js') }}" type="text/javascript"></script>
		<script src="{{ asset(env('ASSETS_PATH').'assets/js/jquery.min.js') }}"></script>
		<script src="{{ asset(env('ASSETS_PATH').'assets/vendors/general/popper.js/dist/umd/popper.js') }}" type="text/javascript"></script>
		<script src="{{ asset(env('ASSETS_PATH').'assets/vendors/general/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset(env('ASSETS_PATH').'assets/vendors/general/js-cookie/src/js.cookie.js') }}" type="text/javascript"></script>
		<script src="{{ asset(env('ASSETS_PATH').'assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset(env('ASSETS_PATH').'assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js') }}" type="text/javascript"></script>
		<script src="{{ asset(env('ASSETS_PATH').'assets/vendors/general/sticky-js/dist/sticky.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset(env('ASSETS_PATH').'assets/vendors/croppie/croppie.js') }}" type="text/javascript"></script>
		<script src="{{ asset(env('ASSETS_PATH').'assets/js/nicEdit-latest.js') }}" type="text/javascript"></script>
	
		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		
		<script src="{{ asset(env('ASSETS_PATH').'assets/vendors/general/block-ui/jquery.blockUI.js') }}" type="text/javascript"></script>
		
		
		
		<script src="{{ asset(env('ASSETS_PATH').'assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js') }}" type="text/javascript"></script>
		
		<script src="{{ asset(env('ASSETS_PATH').'assets/vendors/general/owl.carousel/dist/owl.carousel.js') }}" type="text/javascript"></script>

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="{{ asset(env('ASSETS_PATH').'assets/js/project/scripts.bundle.js') }}" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Scripts(used by this page) -->
		<!--<script src="{{ asset(env('ASSETS_PATH').'assets/js/project/dashboard.js') }}" type="text/javascript"></script> -->

		<!--end::Page Scripts -->
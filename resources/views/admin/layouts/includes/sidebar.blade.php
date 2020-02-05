<?php $adminURL = config('constants.ADMIN_URL'); ?>
<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">

	<!-- begin:: Aside -->
	<div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">
		<div class="kt-aside__brand-logo">
			<h2>CarFinance</h2>
			<!--<a href="#">
				<img alt="Logo" style="height:50px; width:50px" src="{{ asset(env('ASSETS_PATH').'assets/media/logos/logo-5.png') }}">
			</a>-->
		</div>
		<div class="kt-aside__brand-tools">
			<button class="kt-aside__brand-aside-toggler" id="kt_aside_toggler"><span></span></button>
		</div>
	</div>

	<!-- end:: Aside -->

	<!-- begin:: Aside Menu -->
	<?php  if(!isset($id)){ $id = ''; } ?>
	<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
		<div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1">
			<ul class="kt-menu__nav ">
				<li class="kt-menu__item {{ (request()->is($adminURL.'dashboard')) ? ' kt-menu__item--open' : '' }}" aria-haspopup="true"><a href="{{ url($adminURL.'dashboard') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-dashboard"></i><span class="kt-menu__link-text">Dashboard</span></a></li>

				<li class="kt-menu__item {{ (request()->is($adminURL.'listusers') || request()->is($adminURL.'usersdetails/'.$id) || request()->is($adminURL.'usersedit/'.$id) || request()->is($adminURL.'listfriend/'.$id) || request()->is($adminURL.'listvisit/'.$id)) ? ' kt-menu__item--open' : '' }}" aria-haspopup="true"><a href="{{ url($adminURL.'listusers') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-user"></i><span class="kt-menu__link-text">User</span></a></li>
				
				<li class="kt-menu__item {{ (request()->is($adminURL.'listdealers') || request()->is($adminURL.'dealerdit/'.$id)||  request()->is($adminURL.'adddealer')) ? ' kt-menu__item--open' : '' }}" aria-haspopup="true"><a href="{{ url($adminURL.'listdealers') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-car"></i><span class="kt-menu__link-text">Car Dealers</span></a>
				</li>

				<li class="kt-menu__item {{ (request()->is($adminURL.'listcars') || request()->is($adminURL.'cardetails/'.$id) || request()->is($adminURL.'caredit/'.$id)||  request()->is($adminURL.'addcars')) ? ' kt-menu__item--open' : '' }}" aria-haspopup="true"><a href="{{ url($adminURL.'listcars') }}" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-car"></i><span class="kt-menu__link-text">Cars</span></a></li>
				
			</ul>
		</div>
	</div>

	<!-- end:: Aside Menu -->
</div>
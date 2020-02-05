<?php $adminURL = config('constants.ADMIN_URL'); ?>
<?php $usersData = DB::table('users')->first(); ?>
<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

<!-- begin:: Header Menu -->
<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
<div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">

</div>

<!-- end:: Header Menu -->

<!-- begin:: Header Topbar -->
<div class="kt-header__topbar">
	<!--begin: User Bar -->
	<div class="kt-header__topbar-item kt-header__topbar-item--user">
		<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
			<div class="kt-header__topbar-user">
				<span class="kt-header__topbar-welcome kt-hidden-mobile">Hi,</span>
				<span class="kt-header__topbar-username kt-hidden-mobile">{{ isset($usersData->first_name) ? $usersData->first_name : '' }}</span>
				
			</div>
		</div>
		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">

			<!--begin: Head -->
			<div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url(../assets/media/misc/bg-1.jpg)">
				<div class="kt-user-card__avatar">
					<a href="{{ url($adminURL.'change-password') }}" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon-lock kt-font-danger"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title kt-font-bold">
                                Change Password
                            </div>
                            <div class="kt-notification__item-time">
                                Change Your Password
                            </div>
                        </div>
                    </a>
				</div>
				<!-- <div class="kt-user-card__name">
					Sean Stone
				</div> -->
				
			</div>

			<!--end: Head -->

			<!--begin: Navigation -->
			<div class="kt-notification">
														
				<div class="kt-notification__custom">
					<a href="{{ url($adminURL.'logout') }}" class="btn btn-label-brand btn-sm btn-bold">Sign Out</a>
				</div>
			</div>

			<!--end: Navigation -->
		</div>
	</div>

	<!--end: User Bar -->
</div>

<!-- end:: Header Topbar -->
</div>
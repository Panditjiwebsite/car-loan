<?php $current_user_data = Session::get('user_data'); ?>
<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

	<!-- begin: Header Menu -->
	<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
	<div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
		<div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-default ">
			<ul class="kt-menu__nav ">
				<li class="kt-menu__item  kt-menu__item--active " aria-haspopup="true"><a href="javascript:void(0)" class="kt-menu__link " ><span class="kt-menu__link-text">
					@yield('subpage')</span></a></li>
			</ul>
		</div>
	</div>
<div class="kt-header__topbar">
<!--begin: User Bar -->
<div class="kt-header__topbar-item kt-header__topbar-item--user">
	<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
		<div class="kt-header__topbar-user">
			<?php 
			if(!empty($current_user_data['profile_image'])){ ?>
			<img alt="Pic" class="kt-radius-100" src=" {{ url('public/uploads/user-pic/users').'/'.$current_user_data['profile_image'] }}" />
			<?php }else{ ?>
			<!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
			<span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold"><?php echo strtoupper($current_user_data['first_name'][0]); ?></span>
			<?php } ?>
		</div>
	</div>
	<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">

		<!--begin: Head -->
		<div class="kt-user-card kt-user-card--skin-light kt-notification-item-padding-x">
			<div class="kt-user-card__avatar">
				<?php 
			if(!empty($current_user_data['profile_image'])){ ?>
			<img alt="Pic" class="kt-radius-100" src="{{ url('public/uploads/user-pic/users').'/'.$current_user_data['profile_image'] }}" />
			<?php }else{ ?>
			<!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
			<span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold"><?php echo strtoupper($current_user_data['first_name'][0]); ?></span>
			<?php } ?>
			</div>
			<div class="kt-user-card__name">
				<?php echo ucfirst($current_user_data['first_name']).' '.ucfirst($current_user_data['last_name']); ?>
			</div>
			
		</div>

		<!--end: Head -->

		<!--begin: Navigation -->
		<div class="kt-notification">
			<a href="{{ url(env('ADMIN_URL').'update-profile') }}" class="kt-notification__item">
				<div class="kt-notification__item-icon">
					<i class="flaticon2-calendar-3 kt-font-success"></i>
				</div>
				<div class="kt-notification__item-details">
					<div class="kt-notification__item-title kt-font-bold">
						My Profile
					</div>
					<div class="kt-notification__item-time">
						Update Profile and more
					</div>
				</div>
			</a>
			<a href="{{ url(env('ADMIN_URL').'change-password') }}" class="kt-notification__item">
				<div class="kt-notification__item-icon">
					<i class="flaticon2-rocket-1 kt-font-danger"></i>
				</div>
				<div class="kt-notification__item-details">
					<div class="kt-notification__item-title kt-font-bold">
						Change Password
					</div>
					<div class="kt-notification__item-time">
						Password Changes and more
					</div>
				</div>
			</a>
			<div class="kt-notification__custom kt-space-between">
				<a href="{{ $adminURL.'logout' }}" class="btn btn-label btn-label-brand btn-sm btn-bold">Sign Out</a>
				
			</div>
		</div>

		<!--end: Navigation -->
	</div>
</div>
<!--end: User Bar -->
</div>
</div>
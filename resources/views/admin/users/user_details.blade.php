@extends('admin.layouts.template')

@section('content')
<?php //pr($usersname);die; ?>

<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

						<!-- begin:: Subheader -->
						<div class="kt-subheader   kt-grid__item" id="kt_subheader">
							<div class="kt-subheader__main">
								<h3 class="kt-subheader__title">
									USERS {{ (count($users)) }}  </h3>
								<span class="kt-subheader__separator kt-hidden"></span>
								
							</div>

						</div>

						<!-- end:: Subheader -->

						<!-- begin:: Content -->
						<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
							
							<div class="kt-portlet kt-portlet--mobile">
								
								<div class="kt-portlet">
										
										<!--begin::Form-->
										<div class=" mt-5 p-4">

      <div class="row">
        
    <div class="col-xl-12">

				<!--begin:: Widgets/Sale Reports-->
<div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
	<div class="kt-portlet__head">
		
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title" style="font-size: 22px;">
				{{ isset($usersname->first_name) ? $usersname->first_name : '' }} <span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill" style="vertical-align: middle;">{{ isset($usersname->status) ? $usersname->status : '' }}</span>
				
			</h3>
		</div>
		
	</div>
	<div class="kt-portlet__body">
				<!--begin::Widget 11-->
		<div class="kt-widget11">

			<div class="row">
				<div class="col-xl-12">
					<div class="row">
					<div class="col-md-4">
						
						<div class="row">
							<div class="col-sm-6">Email</div>
							<div class="col-sm-6">{{ isset($usersname->email) ? $usersname->email : '' }}</div>
							<div class="col-sm-6">Subscription</div>
							<div class="col-sm-6">{{ isset($usersname->subscription_title) ? $usersname->subscription_title : '' }}</div>
						</div>
						
					</div>

					<div class="col-md-4">
						<div class="row">
							<div class="col-sm-6">{{ isset($usersname->user_type) ? $usersname->user_type : '' }}</div>
							<div class="col-sm-6">{{ isset($users) ? count($users) : '' }}</div>
							<div class="col-sm-6">Registered since</div>
							<div class="col-sm-6">{{ isset($usersname->ucreated_at) ? $usersname->ucreated_at : '' }}</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="row">
							<div class="col-sm-6">Total Revenue</div>
							<div class="col-sm-6">{{ isset($usersname->price) ? $usersname->price : '' }}</div>
						</div>
					</div>

				</div>
				</div>	
			</div>
			
		</div>

		<!--End::Tab Content-->
	</div>
</div>
									<!--end:: Widgets/Sale Reports-->
</div>

<div class="col-xl-12">

<!--begin:: Widgets/Sale Reports-->

<div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				{{ isset($usersname->user_type) ? $usersname->user_type : '' }}
			</h3>
		</div>
	</div>
	<div class="kt-portlet__body">

		<!--Begin::Tab Content-->
		<div class="kt-widget11">

	<div class="row">
		<div class="col-xl-12">
			<div class="row">
				<div class="col-md-6">
					<div class="row" style="background: #ccc;padding: 10px">
						<div class="col-md col">Date Added</div>
						<div class="col-md col">Name</div>
						<div class="col-md col">Age</div>
					</div>
					
					@if(isset($users) && $users)
						@foreach($users as $user)
						<div class="row" style="padding: 10px">
							<div class="col-md col">{{ $user->created_at }}</div>
							<div class="col-md col">{{ $user->first_name }}</div>
							<div class="col-md col">{{ $user->dob }}</div>
						</div>
						@endforeach
					@endif
				</div>
			</div>
		</div>

		
	</div>
					
				</div>

		<!--End::Tab Content-->
	</div>
</div>

									<!--end:: Widgets/Sale Reports-->
</div>

           
      </div>
    </div>
									</div>
							</div>
						</div>

						<!-- end:: Content -->
					</div>
					
@stop
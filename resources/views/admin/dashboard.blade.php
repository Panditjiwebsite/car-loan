@extends('admin.layouts.template')
@section('title','Dashboard')
@section('page','Dashboard')
@section('subpage','')
@section('content')

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
<?php $adminURL = config('constants.ADMIN_URL'); 
?>

		<div class="kt-portlet kt-portlet--mobile">
			
			<div class="kt-portlet">
				
				<!--begin::Form-->
				 @if(session('success_msg'))
                <div class="row align-items-center">
                    
                    <div class="col-xl-4 order-1 order-xl-2 kt-align-right">
                        
                       
                            <div class="m-form__content">
                                <div class="m-alert m-alert--icon alert alert-success" role="alert">
                                    <div class="m-alert__icon">
                                        <i class="la la-check"></i>
                                    </div>
                                    <div class="m-alert__text">
                                        {{ session('success_msg') }}
                                    </div>
                                    <div class="m-alert__close">
                                        <button type="button" class="close" data-close="alert" aria-label="Close"></button>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                </div>
                @endif
                @if(session('error_msg'))
                <div class="row align-items-center">
                    
                    <div class="col-xl-4 order-1 order-xl-2 kt-align-right">
                        
                       
                            <div class="m-form__content">
                                <div class="m-alert m-alert--icon alert alert-danger" role="alert">
                                    <div class="m-alert__icon">
                                        <i class="la la-check"></i>
                                    </div>
                                    <div class="m-alert__text">
                                        {{ session('error_msg') }}
                                    </div>
                                    <div class="m-alert__close">
                                        <button type="button" class="close" data-close="alert" aria-label="Close"></button>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                </div>
                @endif
				<div class=" mt-5 p-4">

					<div class="row">
						<div class="col-md-3">
							<div class="card mb-4 shadow-sm d-flex justify-content-center">
								<!--a href="{{ url($adminURL.'listcars') }}"-->
									<div class="card-body ">
										<p class="card-text" style="text-transform: capitalize;"><h4>TOTAL CARS</h4></p>
										<div class="card-text-line"></div>
										<a href="{{ url($adminURL.'listcars') }}"><h1 style="margin:10px 0;font-size: 40px;"><img src="{{asset(env('ASSETS_PATH').'assets/media/img/active-sky.png') }}" alt="" class="img-fluid" style="margin: 0 20px 0 0; height:75px; width:75px">{{ isset($carDataCount) ? $carDataCount : '' }}</h1></a>
									</div>
								<!--/a-->
							</div>
						</div>
						<div class="col-md-3">
							<div class="card mb-4 shadow-sm d-flex justify-content-center">
								<!--a href="{{ url($adminURL.'listcars') }}"-->
									<div class="card-body ">
										<p class="card-text" style="text-transform: capitalize;"><h4>TOTAL DEALERS</h4></p>
										<div class="card-text-line"></div>
										<a href="{{ url($adminURL.'listdealers') }}"><h1 style="margin:10px 0;font-size: 40px;"><img src="{{asset(env('ASSETS_PATH').'assets/media/img/active-sky.png') }}" alt="" class="img-fluid" style="margin: 0 20px 0 0; height:75px; width:75px">{{ isset($dealerDataCount) ? $dealerDataCount : '' }}</h1></a>
									</div>
								<!--/a-->
							</div>
						</div>
						<!-- <div class="col-md-3">
							<div class="card mb-4 shadow-sm d-flex justify-content-center">
								
									<div class="card-body ">
										<p class="card-text" style="text-transform: capitalize;"><h4>ACTIVE USERS</h4></p>
										<div class="card-text-line"></div>
										<h1 style="margin:10px 0;font-size: 40px;"><img src="{{asset(env('ASSETS_PATH').'assets/media/img/active-green.png') }}" alt="" class="img-fluid" style="margin: 0 20px 0 0; height:75px; width:75px">{{ isset($userActiveDataCount) ? $userActiveDataCount : '' }}</h1>
									</div>
								
							</div>
						</div>
						 -->

						
					</div>
				</div>
			</div>
		</div>
	
<!-- end:: Content -->
</div>				

<!--page content Section End--> 
							
</div>
@stop
@section('script_after_footer')
	<script src="{{ asset(env('ASSETS_PATH').'assets/vendors/general/raphael/raphael.js') }}" type="text/javascript"></script>
		<script src="{{ asset(env('ASSETS_PATH').'assets/vendors/general/morris.js/morris.js') }}" type="text/javascript"></script>
		<script src="{{ asset(env('ASSETS_PATH').'assets/vendors/general/chart.js/dist/Chart.bundle.js') }}" type="text/javascript"></script>
@stop
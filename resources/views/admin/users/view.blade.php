@extends('admin.layouts.template')
@section('title','User View')
@section('page','User')
@section('subpage','View')
@section('content')
<style>
.col-sm-6{
	font-size: 14px;
	padding: 3px;
}
</style>
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
	<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
		<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
			<div class="kt-portlet kt-portlet--mobile">
				<div class="kt-portlet">
					
				      <div class="row">
    					<div class="col-xl-12">
							<div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
								<div class="kt-portlet__head">
									<div class="kt-portlet__head-label">
										<h3 class="kt-portlet__head-title" style="font-size: 22px;">
											{{ isset($userData->first_name) ? $userData->first_name : $userData->name }} {{ isset($userData->last_name) ? ' '.$userData->last_name.' ' : ' ' }}<span class="kt-badge kt-badge--{{ (($userData->status == 'ACTIVE') ? 'success' : 'warning') }} kt-badge--inline kt-badge--pill" style="vertical-align: middle;">{{ isset($userData->status) ? $userData->status : '' }}</span>
										</h3>
									</div>
		
								</div>
								<div class="kt-portlet__body">
											<!--begin::Widget 11-->
									<div class="kt-widget11">

										<div class="row">
											<div class="col-xl-12">
												<div class="row">
												<div class="col-md-6">
													
													<div class="row">
														<div class="col-sm-6 font-weight-bold">I would like to borrow</div>
														<div class="col-sm-6">&pound;{{ isset($userData->borrow_money) ? $userData->borrow_money : '' }}</div>

														<div class="col-sm-6 font-weight-bold">I want to finance a</div>
														<div class="col-sm-6">{{ isset($userData->vehicle_type) ? $userData->vehicle_type : '' }}</div>

														<div class="col-sm-6 font-weight-bold">Email</div>
														<div class="col-sm-6">{{ isset($userData->email) ? $userData->email : '' }}</div>
														<div class="col-sm-6 font-weight-bold">Phone</div>
														<div class="col-sm-6">{{ isset($userData->phone) ? $userData->phone : '' }}</div>
														<div class="col-sm-6 font-weight-bold">DOB</div>
														<div class="col-sm-6">

															@if(isset($userData->dob))
																@if($userData->dob != '')
																	{{ appDateFormat($userData->dob)}}
																@endif
																
															@endif

															

														</div>
														<div class="col-sm-6 font-weight-bold">Marital status</div>
														<div class="col-sm-6">
                                                       @if(isset($userData->marital_status))
																@if($userData->marital_status == 'married')
																	{{ 'Married' }}
																@endif
																@if($userData->marital_status == 'single')
																	{{ 'Single' }}
																@endif
																@if($userData->marital_status == 'cohabiting')
																	{{ 'Cohabiting' }}
																@endif
																@if($userData->marital_status == 'civil_partnership')
																	{{ 'Civil Partnership' }}
																@endif
																@if($userData->marital_status == 'divorced')
																	{{ 'Divorced' }}
																@endif
																@if($userData->marital_status == 'separated')
																	{{ 'Separated' }}
																@endif
																@if($userData->marital_status == 'widowed')
																	{{ 'Widowed' }}
																@endif
															@endif



														</div>

														<div class="col-sm-6 font-weight-bold">Driving Licence Type</div>
														<div class="col-sm-6">
															@if(isset($userData->dl_type))
																@if($userData->dl_type == 'full_uk_licence')
																	{{ 'Full UK Licence' }}
																@endif
																@if($userData->dl_type == 'provisional_licence')
																	{{ 'Provisional Driving Licence' }}
																@endif
																@if($userData->dl_type == 'eu_licence')
																	{{ 'EU Licence' }}
																@endif
																@if($userData->dl_type == 'international_licenece')
																	{{ 'International Licence' }}
																@endif
																@if($userData->dl_type == 'no_lincence')
																	{{ 'No Licence' }}
																@endif
															@endif
														</div>

														<div class="col-sm-6 font-weight-bold">User Type</div>
														<div class="col-sm-6">{{ isset($userData->user_type) ? $userData->user_type : '' }}</div>
														<div class="col-sm-6 font-weight-bold">Registered since</div>
														<div class="col-sm-6">{{ isset($userData->created_at) ? $userData->created_at : '' }}</div>
														</div>
														
													</div>
													
												</div>

											
												</div>	
												
											</div>
											
										</div>
										
									</div>
									<br />
									<div class="kt-portlet__body">
											<!--begin::Widget 11-->
									<div class="kt-widget11">
									<div class="row">
										<div class="col-xl-12">
											<div class="row">
												<h4>Address Details</h4>
												
											</div>
											
										</div>
										<div class="col-xl-12">
											<div class="row">
												<div class="col-md-6">
													
													<div class="row">
														<div class="col-sm-6 font-weight-bold">Flat or Unit Number</div>
														<div class="col-sm-6">
															{{ isset($userData->flat_no) ? $userData->flat_no : 'N/A' }}</div>
															<div class="col-sm-6 font-weight-bold">Building Name</div>
														<div class="col-sm-6">
															{{ isset($userData->building_name) ? $userData->building_name : 'N/A' }}</div>
														<div class="col-sm-6 font-weight-bold">Building Number</div>
														<div class="col-sm-6">
															{{ isset($userData->building_no) ? $userData->building_no : 'N/A' }}</div>
															<div class="col-sm-6 font-weight-bold">Street</div>
														<div class="col-sm-6">
															{{ isset($userData->street) ? $userData->street : 'N/A' }}</div>
														<div class="col-sm-6 font-weight-bold">Locality</div>
														<div class="col-sm-6">
															{{ isset($userData->locality) ? $userData->locality : 'N/A' }}</div>
															<div class="col-sm-6 font-weight-bold">Town or city</div>
														<div class="col-sm-6">
															{{ isset($userData->city) ? $userData->city : 'N/A' }}</div>
															<div class="col-sm-6 font-weight-bold">County</div>
														<div class="col-sm-6">
															{{ isset($userData->country) ? $userData->country : 'N/A' }}</div>

														<div class="col-sm-6 font-weight-bold">Postcode</div>
														<div class="col-sm-6">
															{{ isset($userData->postal_code) ? $userData->postal_code : 'N/A' }}</div>

														<div class="col-sm-6 font-weight-bold">Residential status</div>
														<div class="col-sm-6">

															@if(isset($userData->rental_status))
																@if($userData->rental_status == 'tenant')
																	{{ 'Private Tenant' }}
																@endif
																@if($userData->rental_status == 'owner')
																	{{ 'Home Owner' }}
																@endif
																@if($userData->rental_status == 'conciltenant')
																	{{ 'Council Tenant' }}
																@endif
																@if($userData->rental_status == 'livingwithparents')
																	{{ 'Living With Parents' }}
																@endif


																@if($userData->rental_status == 'tenantsec')
																	{{ 'Private Tenant' }}
																@endif
																@if($userData->rental_status == 'ownersec')
																	{{ 'Home Owner' }}
																@endif
																@if($userData->rental_status == 'conciltenantsec')
																	{{ 'Council Tenant' }}
																@endif
																@if($userData->rental_status == 'livingwithparentssec')
																	{{ 'Living With Parents' }}
																@endif
																
															@endif


														</div>	

														<div class="col-sm-6 font-weight-bold">Time at this address</div>
														<div class="col-sm-6">Year
															{{ isset($userData->address_year) ? $userData->address_year : '' }}</div>
															<div class="col-sm-6">Month
															{{ isset($userData->address_month) ? $userData->address_month : '' }}</div>
		
													</div>
													
												</div>
	
												
											</div>
											
										</div>
										
									</div>
									
									<br />
									
									<div class="row">
										<div class="col-xl-12">
											<div class="row">
												<h4>Your employment</h4>
												
											</div>
											
										</div>
											<div class="col-md-6">
													
													<div class="row">
														<div class="col-sm-6 font-weight-bold">Current Employment</div>
														<div class="col-sm-6">
														
															@if(isset($userData->employee_status))
																@if($userData->employee_status == 'employeefulltime')
																	{{ 'Employee Full Time' }}
																@endif
																@if($userData->employee_status == 'selfemployeed')
																	{{ 'Self-Employeed' }}
																@endif
																@if($userData->employee_status == 'employeeparttime')
																	{{ 'Employee Part Time' }}
																@endif
																@if($userData->employee_status == 'disability')
																	{{ 'Disability' }}
																@endif


																@if($userData->employee_status == 'retired')
																	{{ 'Retired' }}
																@endif
																@if($userData->employee_status == 'subcontractor')
																	{{ 'Sub-Contractor' }}
																@endif
																@if($userData->employee_status == 'agencyworker')
																	{{ 'Agency Worker' }}
																@endif
																@if($userData->employee_status == 'homemaker')
																	{{ 'Home Maker' }}
																@endif

																@if($userData->employee_status == 'notemployee')
																	{{ 'Not Employeed' }}
																@endif
																@if($userData->employee_status == 'armedforces')
																	{{ 'Armed Forces' }}
																@endif
																@if($userData->employee_status == 'student')
																	{{ 'Student' }}
																@endif
																@if($userData->employee_status == 'contractworker')
																	{{ 'Contract Worker' }}
																@endif
																@if($userData->employee_status == 'nonprofessionalcarer')
																	{{ 'Non-Professional Carer' }}
																@endif
																
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
</div>
					
@stop
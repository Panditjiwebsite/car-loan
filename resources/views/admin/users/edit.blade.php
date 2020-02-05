@extends('admin.layouts.template')
@section('title','Edit User')
@section('page','User')
@section('subpage','Edit')
@section('content')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
    <!-- begin:: Content -->
    <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__body">
               
        
                <tbody id="myTable">
                    <div class="m-content">
    
                        {{ Form::open(array('url' => config('constants.ADMIN_URL').'usersupdate/'.$id, 'class' => 'm-form--label-align-right', 'method' => 'post', 'id' => 'm_form_employee', 'files' => false)) }}
                        
                        {{ Form::hidden('id', (isset($id) ? $id : '')) }}
                        
                    
                    
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group m-form__group">
                                <label for="FirstName">First Name*</label>
                                
                                {{ Form::text('first_name', (isset($userData->first_name) ? $userData->first_name : ''), ['class' => 'form-control m-input', 'placeholder' => "First Name", 'required' => 'required']) }}
                                
                            </div>
                        </div><div class="col-sm-6">
                            <div class="form-group m-form__group">
                                <label for="LastName">Last Name*</label>
                                
                                {{ Form::text('last_name', (isset($userData->last_name) ? $userData->last_name : ''), ['class' => 'form-control m-input', 'placeholder' => "Last Name", 'required' => 'required']) }}
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group m-form__group">
                                <label for="Email">Email*</label>
                                
                                {{ Form::email('email', (isset($userData->email) ? $userData->email : ''), ['class' => 'form-control m-input', 'placeholder' => "Email", 'required' => 'required']) }}
                                
                            </div>
                        </div><div class="col-sm-6">
                            <div class="form-group m-form__group">
                                <label for="Phone">Phone</label>
                                
                                {{ Form::tel('phone', (isset($userData->phone) ? $userData->phone : ''), ['class' => 'form-control m-input', 'placeholder' => "Phone", 'required' => 'required']) }}
                                
                            </div>
                        </div>
                    </div>
                   
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group m-form__group">
                                <label for="Gender">Gender*</label>
                                                    
                       
                            {{ Form::select('gender', $genderData, (isset($userData->gender) ? $userData->gender : ''), ['placeholder' => 'Gender', 'class' => 'form-control m_selectpicker', 'data-live-search' => 'true' , 'required' => 'required']) }} 
                            
                            </div>          
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group m-form__group">
                                <label for="DOB">DOB*</label>
                                
                                {{ Form::text('dob', (isset($userData->dob) ? $userData->dob : ''), array('id' => 'datepicker','placeholder' => "Date of Birth", 'required' => 'required','class' => 'form-control m-input')) }}
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group m-form__group">
                                <label for="Password">Password</label>
                                                    
                            {{ Form::password('password', ['placeholder' => 'New Password', 'class' => 'form-control m-input']) }} 
                            
                            </div>          
                        </div>
                        
                    </div>
                    
                    <div class="m-portlet__foot">
                        <div class="row align-items-center">
                            <div class="col-lg-6 m--valign-middle">
                                <span class="m--margin-left-10">
                                  
                                    <a href="{{ url('admin/listusers') }}" class="btn btn-brand">
                                        Back
                                    </a>
                                </span>
                            </div>
                            <div class="col-lg-6 m--align-right">
                                <button type="submit" class="btn btn-brand">
                                    Submit
                                </button>
                                
                            </div>
                        </div>
                    </div>
                    {{ Form::close() }}
    
                    </div>
                </tbody>
                


                <!--end: Datatable -->
            </div>
        </div>
    </div>

    <!-- end:: Content -->
</div>
</div>
@stop
@section('script_after_footer')
<link href="{{ asset(env('ASSETS_PATH').'assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ asset(env('ASSETS_PATH').'assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
@stop
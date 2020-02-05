<?php $URL = config('constants.ADMIN_URL').'savechangepassword'; ?>
@extends('admin.layouts.template')
@section('title','Change Password')
@section('page','User')
@section('subpage','Change Password')
@section('content')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
    <!-- begin:: Content -->
    <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">   
        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__body">
                       
                <!--begin: Datatable -->
                    @if(session('success_msg'))
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
                    @endif
                    @if(session('error_msg'))
                        <div class="m-form__content">
                            <div class="m-alert m-alert--icon alert alert-error" role="alert" style="color:red;">
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
                    @endif

                    <div class="m-content">
                    {{ Form::open(array('url' => $URL, 'class' => 'm-form m-form--fit m-form--label-align-right', 'method' => 'post', 'id' => 'm_form_1', 'files' => true)) }}
        
                    <div class="m-portlet__body">
                <!-- old password -->
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                        Old Password *
                    </label>
                    <div class="col-lg-6 col-md-9 col-sm-12">
                        <div class="m-typeahead">
                            <input class="form-control m-input" id="opassword" type="password" name="opassword" placeholder="Old Password" required="required">
                        </div>
                    </div>
                </div>

                <!-- password -->
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                        Password *
                    </label>
                    <div class="col-lg-6 col-md-9 col-sm-12">
                        <div class="m-typeahead">
                            <input class="form-control m-input" id="password" type="password" name="password" placeholder="Password" required="required">
                        </div>
                    </div>
                </div>

                <!-- confirm password -->
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                        Confirm Password *
                    </label>
                    <div class="col-lg-6 col-md-9 col-sm-12">
                        <div class="m-typeahead">
                            <input class="form-control m-input" id="cpassword" type="password" name="cpassword" placeholder="Confirm Password" required="required">
                        </div>
                    </div>
                </div>
            </div>

            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions">
                    <div class="row">
                        <div class="col-lg-9 ml-lg-auto">
                            <button type="submit" class="btn btn-success">
                                Submit
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        <!-- </form> -->
        {{ Form::close() }}
                    
                   
                    </div>
           
                


                <!--end: Datatable -->
            </div>
        </div>
    </div>

    <!-- end:: Content -->
</div>
</div>
@stop
@section('script_after_footer')
<script type="text/javascript">
$(document).ready(function(){
    var FormWidgets = function () {
        var validator;       
        var initValidation = function () {
            validator = $( "#m_form_1" ).validate({
                rules: {
                    opassword: {
                        required: true
                    },
                    password: {
                        required: true
                    },
                    cpassword: {
                        required: true,
                        equalTo: "#password"
                    },
                },

                //display error alert on form submit  
                invalidHandler: function(event, validator) {             
                    var alert = $('#m_form_1_msg');
                    alert.removeClass('m--hide').show();
                    mApp.scrollTo(alert, -200);
                },
                submitHandler: function (form) {
                    form[0].submit(); // submit the form
                }
            });       
        }
        return {
            // public functions
            init: function() {
                initValidation();
            }
        };
    }();

    jQuery(document).ready(function() {    
        FormWidgets.init();
    });
});
</script>

@stop





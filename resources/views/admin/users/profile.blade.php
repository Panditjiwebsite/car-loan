@extends('admin.layouts.template')
@section('title','Edit Profile')
@section('page','Update')
@section('subpage','Profile')
@section('content')
<link href="{{ asset(env('ASSETS_PATH').'assets/css/croppie.css') }}" rel="stylesheet" type="text/css" />
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
    <!-- begin:: Content -->
    <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__body">
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
        
                <tbody id="myTable">
                    <div class="m-content">
    
                        {{ Form::open(array('url' => config('constants.ADMIN_URL').'saveprofile', 'class' => 'm-form--label-align-right', 'method' => 'post', 'id' => 'm_form_employee', 'files' => false)) }}
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
                                
                                {{ Form::number('phone', (isset($userData->phone) ? $userData->phone : ''), ['class' => 'form-control m-input', 'placeholder' => "Phone", 'required' => 'required']) }}
                                
                            </div>
                        </div>
                    </div>
                   
                    
                    
                    <div class="row">
                        
                            <label class="col-lg-2 col-form-label">Upload Image: (Size x*y) </label>
                            <div class="col-lg-3">
                                <div class="custom-file form-group m-form__group">
                                    <input type="file" name="" class="custom-file-input" id="upload_image" accept="image/*" onchange="fileChange()" required/>
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                    
                                    
                                    <input type="hidden" name="image" id="image" value="{{ (isset($userData->profile_image))?$userData->profile_image:'' }}">
                                    
                                </div>
                                
                                <div id="uploadimageModal" class="modal" role="dialog">
                                <div class="modal-dialog" style="max-width: 400px;">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Upload & Crop Image</h4>
                                            <button type="button" class="close" style="float:right" data-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12 text-center">
                                                      <div id="image_demo"></div>
                                                </div>
                                               

                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 text-center">
                                                      <button class="btn btn-success crop_image" type="button">Crop & Upload Image</button>
                                                </div>
                                               

                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>


                            </div>
                            <div class="col-lg-6" id="uploaded_image">
                               
                               <?php if(isset($userData->profile_image)){ ?>  
                                <img src="{{ url('public/uploads/user-pic/users').'/'.$userData->profile_image }}" alt="Image" height="100px" width="100px"> 
                                <?php } ?>
                            </div>

                        
                    </div>
                    <div class="m-portlet__foot">
                        <div class="row align-items-center">
                            
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



<script>

 function fileChange(e){
  var ext = event.target.files[0].type.split('/')[1];
  var extArray = ['png', 'jpeg','jpg']
  if(extArray.indexOf(ext) == -1){
    alert("Please Select Valid Image");
    event.target.value = '';
  }
}



    jQuery(document).ready(function() {
        $image_crop = $('#image_demo').croppie({
            enableExif: true,
            viewport: {
              width:250,
              height:250,
              type:'square' //circle
            },
            boundary:{
              width:250,
              height:250
            }
        });

        $('#upload_image').on('change', function(){
            var reader = new FileReader();
            reader.onload = function (event) {
              $image_crop.croppie('bind', {
                url: event.target.result
              }).then(function(){
                console.log('jQuery bind complete');
              });
            }
            reader.readAsDataURL(this.files[0]);
            $('#uploadimageModal').modal('show');
        });


       $('.crop_image').click(function(event){
        var token = '{{ csrf_token() }}';
        $image_crop.croppie('result', {
          type: 'canvas',
          size: 'viewport'
        }).then(function(response){
          $.ajax({
            url: ADMIN_URL + 'uploadprofileimage',
            type: "POST",
            data:{"_token": token,"photo_name": response},
            success:function(data)
            {
              $('#uploadimageModal').modal('hide');
              $('#uploaded_image').html(data);
              var image =  $('#image_name').attr('data-id');
              $('#image').val(image);
            }
          });
        })
      });
   });
</script>
@stop
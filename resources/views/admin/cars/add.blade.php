@extends('admin.layouts.template') @section('title','Add Cars') @section('page','Cars') @section('subpage','Add') @section('content')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
        <!-- begin:: Content -->
        <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__body">

                    <tbody id="myTable">
                        <div class="m-content">

                            {{ Form::open(array('url' => config('constants.ADMIN_URL').'saveCars', 'class' => 'm-form--label-align-right', 'method' => 'post', 'id' => 'm_form_car', 'files' => false)) }}

                            <div class="row">
                                <label class="col-lg-2 col-form-label">Car Image: (Size x*y) </label>
                                <div class="col-sm-4">
                                    <div class="form-group m-form__group">

                                        <input type="file" name="" class="custom-file-input" id="upload_image" accept="image/*" required/>

                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                        <input type="hidden" name="car_pic" id="image" value="">
                                        <div id="uploaded_image"></div>

                                    </div>

                                </div>&nbsp;&nbsp;&nbsp;

                                <div id="uploadimageModal" class="modal" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"></button>
                                                <h4 class="modal-title">Upload & Crop Image</h4>
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

                                <!--brand pic -->
                                <label class="col-form-label">Car Brand:* </label>&nbsp;&nbsp;&nbsp;
                                <div class="col-sm-4">

                                    <div class="form-group m-form__group">

                                        <input type="file" name="" class="custom-file-input" id="brand_image" accept="image/*" required/>

                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                        <input type="hidden" name="brand_pic" id="brandimage" value="">
                                        <div id="uploadedbrand_image"></div>

                                    </div>

                                </div>

                                <div id="branduploadimageModal" class="modal" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"></button>
                                                <h4 class="modal-title">Upload & Crop Image</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-12 text-center">
                                                        <div id="brandimage_demo"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 text-center">
                                                        <button class="btn btn-success crop_image1" type="button">Crop & Upload Image</button>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>




                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group m-form__group">
                                        <label for="exampleInputEmail1">Dealer*</label>
                                        {{ Form::select('dealer_id',$dealers, null, ['placeholder' => 'Select Dealer', 'class' => 'form-control m_selectpicker', 'data-live-search' => 'true','required']) }}
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group m-form__group">
                                        <label for="Title">Name*</label>

                                        {{ Form::text('car_name','', ['class' => 'form-control m-input', 'placeholder' => "Car Name", 'required' => 'required']) }}

                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group m-form__group">
                                        <label for="Title">Model*</label>

                                        {{ Form::text('car_model','', ['class' => 'form-control m-input', 'placeholder' => "Car Model", 'required' => 'required']) }}

                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group m-form__group">
                                        <label for="Title">Type*</label>

                                        {{ Form::text('car_type','', ['class' => 'form-control m-input', 'placeholder' => "Car Type", 'required' => 'required']) }}

                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group m-form__group">
                                        <label for="Title">Price*</label>

                                        {{ Form::text('car_price','', ['class' => 'form-control m-input', 'placeholder' => "Car Price", 'required' => 'required']) }}

                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group m-form__group">
                                        <label for="Title">Company*</label>

                                        {{ Form::text('car_company','', ['class' => 'form-control m-input', 'placeholder' => "Car Company", 'required' => 'required']) }}

                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group m-form__group">
                                        <label for="Title">Engine Capacity*</label>

                                        {{ Form::text('car_engine_capacity','', ['class' => 'form-control m-input', 'placeholder' => "Car Engine Capacity", 'required' => 'required']) }}

                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-sm-12">
                                    <div class="form-group m-form__group">
                                        <label for="Title">Car Description*</label>

                                        {!! Form::textarea('caption', null, ['class'=>'form-control','required']) !!}

                                    </div>
                                </div>

                            </div>

                            <div class="m-portlet__foot">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 m--valign-middle">
                                        <span class="m--margin-left-10">
                                    <button type="submit" class="btn btn-brand" id="SubmIt">
                                        Submit
                                    </button>
                                </span>
                                        <span class="m--margin-left-10">
                                    or
                                    <a href="{{ url(config('constants.ADMIN_URL').'listcars') }}" class="m-link m--font-bold">
                                        Cancel
                                    </a>
                                </span>
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
@stop @section('script_after_footer')
<script type="text/javascript">
    bkLib.onDomLoaded(function() {
        nicEditors.allTextAreas()
    });
</script>

<script>
    $(document).ready(function() {




        $image_crop = $('#image_demo').croppie({
            enableExif: true,
            viewport: {
                width: 200,
                height: 200,
                type: 'square' //circle
            },
            boundary: {
                width: 300,
                height: 300
            }
        });

        $('#upload_image').on('change', function() {

            var reader = new FileReader();
            reader.onload = function(event) {
                $image_crop.croppie('bind', {
                    url: event.target.result
                }).then(function() {
                    console.log('jQuery bind complete');
                });
            }
            reader.readAsDataURL(this.files[0]);
            $('#uploadimageModal').modal('show');
        });

        $('.crop_image').click(function(event) {
            var token = '{{ csrf_token() }}';
            $image_crop.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function(response) {
                $.ajax({
                    url: "{{url(config('constants.ADMIN_URL').'carImage') }}",
                    type: "POST",
                    data: {
                        "car_pic": response,
                        "_token": token
                    },
                    success: function(data) {
                        $('#uploadimageModal').modal('hide');
                        $('#uploaded_image').html(data);
                        var image = $('#image_name').attr('data-id');
                        $('#image').val(image);
                    }
                });
            })
        });


        ///////////////////////////////////////////////////////////////////
        $bimage_crop = $('#brandimage_demo').croppie({
            enableExif: true,
            viewport: {
                width: 200,
                height: 200,
                type: 'square' //circle
            },
            boundary: {
                width: 200,
                height: 200
            }
        });

        $('#brand_image').on('change', function() {

            var breader = new FileReader();
            breader.onload = function(event) {
                $bimage_crop.croppie('bind', {
                    url: event.target.result
                }).then(function() {
                    console.log('jQuery bind complete');
                });
            }
            breader.readAsDataURL(this.files[0]);
            $('#branduploadimageModal').modal('show');
        });

        $('.crop_image1').click(function(event) {
            var token = '{{ csrf_token() }}';
            $bimage_crop.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function(response) {
                $.ajax({
                    url: "{{url(config('constants.ADMIN_URL').'brandImage') }}",
                    type: "POST",
                    data: {
                        "brand_pic": response,
                        "_token": token
                    },
                    success: function(data) {
                        $('#branduploadimageModal').modal('hide');
                        $('#uploadedbrand_image').html(data);
                        var bimage = $('#bimage_name').attr('data-id');
                        $('#brandimage').val(bimage);
                    }
                });
            })
        });

    });
</script>

@stop

@extends('admin.layouts.template')
@section('title','Edit Dealer')
@section('page','Dealer')
@section('subpage','Edit')
@section('content')
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
        
                <tbody id="myTable">
                    <div class="m-content">
    
                        {{ Form::open(array('url' => config('constants.ADMIN_URL').'saveDealer', 'class' => 'm-form--label-align-right', 'method' => 'post', 'id' => 'm_form_dealer', 'files' => false)) }}

                    {{ Form::hidden('id', (isset($dealerData['id']) ? $dealerData['id'] : '')) }}
                    
                    
                    <?php if(!empty($dealerData['dealer_pic'])) { ?> 
                    <div class="row">
                            <div class="col-sm-6">
                                    <div class="form-group m-form__group">
                                        <label for="exampleInputEmail1"> Dealer Image</label>
                                        <img class="img-thumbnail"  id="blah" src="{{url('public/uploads/dealer-pic/dealer').'/'.$dealerData['dealer_pic']}}" alt="your image" style="margin-left:90px;"/>
                              <input class="btn btn-brand" type="button" name="" value="Remove" id="remove" data-id="{{$dealerData->id}}" data-token={{csrf_token()}}>
                                        
                                    </div>
                                    
                                </div>     

                    </div>
                <?php }else{ ?>
                    <div class="row">
                            <label class="col-lg-2 col-form-label">Upload Image: (Size x*y) </label>
                            <div class="col-sm-4">
                                <div class="form-group m-form__group">
                                       
                                 <input type="file" name="" class="custom-file-input" id="upload_image" onchange="fileChange()" accept="image/*" required/>

                                 <label class="custom-file-label" for="customFile">Choose file</label>
                                    
                                    <div id="uploaded_image"></div>
                                    <input type="hidden" name="dealer_pic" id="image" value="">
                                    
                                </div>
                                
                            </div>
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
                           
                </div>
            <?php }?>


                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group m-form__group">
                                <label for="Title">Name*</label>
                                {{ Form::text('name', (isset($dealerData->name) ? $dealerData->name : ''), ['class' => 'form-control m-input', 'placeholder' => "Dealer Name",'id'=>'dealer_name','required' => 'required']) }}
                               
                                
                            </div>
                        </div>
                        
                    
                        <div class="col-sm-6">
                            <div class="form-group m-form__group">
                                <label for="Title">Phone*</label>
                                {{ Form::text('phone', (isset($dealerData->phone) ? $dealerData->phone : ''), ['class' => 'form-control m-input', 'placeholder' => "Phone Number",'id'=>'phone','required' => 'required']) }}
                            </div>
                        </div>
                        
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group m-form__group">
                                <label for="Title">Locality*</label>
                              
                                {{ Form::text('location', (isset($dealerData->location) ? $dealerData->location : ''), ['class' => 'form-control m-input', 'placeholder' => "Dealer Location",'id'=>'location','required' => 'required']) }}
                                
                            </div>
                        </div>
                        
                   
                        <div class="col-sm-6">
                            <div class="form-group m-form__group">
                                <label for="Title">City*</label>
                             
                                {{ Form::text('city', (isset($dealerData->city) ? $dealerData->city : ''), ['class' => 'form-control m-input', 'placeholder' => "City Name",'id'=>'city','required' => 'required']) }}
                                
                            </div>
                        </div>
                        
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group m-form__group">
                                <label for="Title">Country*</label>
                           
                                {{ Form::text('country', (isset($dealerData->country) ? $dealerData->country : ''), ['class' => 'form-control m-input', 'placeholder' => "Country Name",'id'=>'country','required' => 'required']) }}
                                
                            </div>
                        </div>
                        
                   
                        <div class="col-sm-6">
                            <div class="form-group m-form__group">
                                <label for="Title">Postal Code*</label>
                               
                                {{ Form::text('postal_code', (isset($dealerData->postal_code) ? $dealerData->postal_code : ''), ['class' => 'form-control m-input', 'placeholder' => "Postal Code",'id'=>'postal_code','required' => 'required']) }}
                                
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
                                    <a href="{{ url(config('constants.ADMIN_URL').'listdealers') }}" class="m-link m--font-bold">
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
@stop
@section('script_after_footer')


<script src="{{ asset(env('ASSETS_PATH').'assets/vendors/general/sweetalert2/dist/sweetalert2.min.js') }}"></script>


<script type="text/javascript">

    bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
                 
    </script>
<script>
    
    function fileChange(e){
  var ext = event.target.files[0].type.split('/')[1];
  var extArray = ['png', 'jpeg','jpg']
  if(extArray.indexOf(ext) == -1){
    alert("Please Select Valid Image");
    event.target.value = '';
  }
}
    
    $(document).ready(function(){
    
    $image_crop = $('#image_demo').croppie({
    enableExif: true,
    viewport: {
      width:200,
      height:200,
      type:'square' //circle
    },
    boundary:{
      width:300,
      height:300
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
        url:"{{url(config('constants.ADMIN_URL').'dealerImage') }}",
        type: "POST",
        data:{"dealer_pic": response,"_token": token},
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
  
  ///remove image
  $('#remove').on('click', function(e){
            var id = $(this).attr('data-id');    
            var token = $(this).attr('data-token');     
            var ths = $(this);
            swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!'
            }).then(function (result) {
                if (result.value) {
                    if (id != '') {
                        $.ajax({
                            type: 'post',
                            url: ADMIN_URL + "deletedealerimage",
                            data: 'id=' + id + '&_token=' + token,
                            success: function (data) {
                                location.reload();
                                
                            }
                        })
                    }
                    swal.fire(
                        'Deleted!',
                        'Dealer Image has been Deleted.',
                        'success'
                    )
                }
            });
        });



    });
</script>

@stop
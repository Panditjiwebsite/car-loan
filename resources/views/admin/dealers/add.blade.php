@extends('admin.layouts.template')
@section('title','Add Dealer')
@section('page','Dealers')
@section('subpage','Add')
@section('content')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
    <!-- begin:: Content -->
    <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__body">
               
        
                <tbody id="myTable">
                    <div class="m-content">
    
                        {{ Form::open(array('url' => config('constants.ADMIN_URL').'saveDealer', 'class' => 'm-form--label-align-right', 'method' => 'post', 'id' => 'm_form_dealer', 'files' => false)) }}
                    

                    <div class="row">
                            <label class="col-lg-2 col-form-label">Upload Image: (Size x*y) </label>
                            <div class="col-sm-4">
                                <div class="form-group m-form__group">
                                    
                                    <input type="file" name="" class="custom-file-input" id="upload_image" accept="image/*" onchange="fileChange()" required/>
                                  
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                    <input type="hidden" name="dealer_pic" id="image" value="">
                                    <div id="uploaded_image"></div>

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


                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group m-form__group">
                                <label for="Title">Name*</label>
                                
                                {{ Form::text('name','', ['class' => 'form-control m-input dealer','onblur' => 'check_name()','placeholder' => "Dealer Name", 'required' => 'required']) }}
                                 <div id="emCheck"></div>
                            </div>
                        </div>
                        
                    
                        <div class="col-sm-6">
                            <div class="form-group m-form__group">
                                <label for="Title">Phone*</label>
                                
                                {{ Form::text('phone','', ['class' => 'form-control m-input', 'placeholder' => "Phone Number", 'required' => 'required']) }}
                                
                            </div>
                        </div>
                        
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group m-form__group">
                                <label for="Title">Locality*</label>
                                
                                {{ Form::text('location','', ['class' => 'form-control m-input', 'placeholder' => "Dealer Location", 'required' => 'required']) }}
                                
                            </div>
                        </div>
                        
                   
                        <div class="col-sm-6">
                            <div class="form-group m-form__group">
                                <label for="Title">City*</label>
                                
                                {{ Form::text('city','', ['class' => 'form-control m-input', 'placeholder' => "City Name", 'required' => 'required']) }}
                                
                            </div>
                        </div>
                        
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group m-form__group">
                                <label for="Title">Country*</label>
                                
                                {{ Form::text('country','', ['class' => 'form-control m-input', 'placeholder' => "Country Name", 'required' => 'required']) }}
                                
                            </div>
                        </div>
                        
                    
                        <div class="col-sm-6">
                            <div class="form-group m-form__group">
                                <label for="Title">Postal Code*</label>
                                
                                {{ Form::text('postal_code','', ['class' => 'form-control m-input', 'placeholder' => "Postal Code", 'required' => 'required']) }}
                                
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


<script>

function fileChange(e){
  var ext = event.target.files[0].type.split('/')[1];
  var extArray = ['png', 'jpeg','jpg']
  if(extArray.indexOf(ext) == -1){
    alert("Please Select Valid Image");
    event.target.value = '';
  }
}



function check_name(){
    //alert(1);
    $('#emCheck').html('');
    $('#SubmIt').prop('disabled', false);
    var dealer = $('.dealer').val();
    var token = '{{ csrf_token() }}';
    if(dealer != ''){
        $.ajax({
            type: 'post',
            url: "{{ url(config('constants.ADMIN_URL').'ajaxCheckName') }}",
            data: 'dealer=' + dealer + '&_token=' + token,
            beforeSend: function() {
                $('#Spiner').addClass('m-loader m-loader--primary m-loader--right');
            },
            success: function (data) {
                
                $('#Spiner').removeClass('m-loader m-loader--primary m-loader--right');
                if(data != 0){
                    var err = '<div class="form-control-feedback" style="color:#f4516c">This dealer already exists.</div>';
                    $('#emCheck').html(err);
                    $('#SubmIt').prop('disabled', true);
                }
            }
        })
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

  //////////////////////////dealer already exists////////////////////////

});
</script>

@stop
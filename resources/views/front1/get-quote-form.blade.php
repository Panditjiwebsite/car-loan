@extends('front.layouts.quotetemplate')
@section('content')
<!--your data start here-->
<div class="section" id="myDIV">
  <form action="{{url('savedetails')}}" method="post">
    {{ csrf_field() }}
   <div class="container">
      <div class="row" style="border-bottom: 1px solid #aaa;">
         <h2 class="mb-0 colorcode mb-5 pl-3 heading-quota">
          <i class="fa fa-user">
            
          </i> Your Details</h2>
         <!--<button type="button" class="btn btn-info btn-lg" id="edit1" onclick="displaye('edit1')" style="float:right;display:none;"><b>Edit</b>-->
         </button>
         <div class="col-md-12" id="details">
            <div class="form-row">
               <div class="form-group col-md-4">
                  <label for="inputC1ity"><b>I would like to borrow</b></label>
               </div>
               <div class="form-group col-md-4">
                  
                  <input type="text" class="form-control" id="borrow_money" placeholder="" name="borrow_money" value={{$amount}} onclick="show_borrow_money()">
               </div>
               <div class="form-group col-md-4">
                  <label for="inputCity" class="btnclick" id="borrow_money_button" onclick="hide_borrow_money()">I'm not sure yet</label>
                  <!--  <input type="text" class="form-control" id="inputCity" placeholder="I'm not sure yet"> -->
               </div>
            </div>
            <div class="form-row ptagsmall">
               <div class=" col-md-4">
               </div>
               <span>This can be changed after approval. </span>
            </div>
            <div class="form-row">
               <div class="form-group col-md-4">
                  <label for="inputCity"><b>I want to finance a</b></label>
               </div>
               <div class="col">
                  <label id="car" onclick="active1('car')" class="btnclick active1">Car</label>
               </div>
               <div class=" col">
                  <label id="van" onclick="active1('van')"  class="btnclick">Van</label>
               </div>
               <div class=" col">
                  <label id="bike" onclick="active1('bike')" class="btnclick">Bike</label>
               </div>
               <input type="hidden" id="financeto" name="vehicle_type" value="car">
            </div>
            <div class="form-row">
               <div class="form-group col-md-4">
                  <label for="inputCity"><b>Title</b></label>
               </div>
               <div class=" col">
                  <label class="btnclick" id="mr" onclick="active2('mr')">Mr</label>
               </div>
               <div class="form-group col">
                  <label class="btnclick" id="mrs" onclick="active2('mrs')">Mrs</label>
               </div>
               <div class="form-group col">
                  <label class="btnclick" id="ms" onclick="active2('ms')">Ms</label>
               </div>
               <div class="form-group col">
                  <label class="btnclick" id="miss" onclick="active2('miss')">Miss</label>
               </div>
                <input type="hidden" id="title" name="title" value="">
            </div>
            <div class="form-row">
               <div class="form-group col-md-4">
                  <label for="inputCity"><b>First Name</b></label>
               </div>
               <div class="form-group col">
                  <input type="text" class="form-control" name="first_name" value="">
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-md-4">
                  <label for="inputCity"><b>Last Name</b></label>
               </div>
               <div class="form-group col">
                  <input type="text" class="form-control" id="last_name" name="last_name" value="">
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-md-4">
                  <label for="inputCity"><b>Email</b></label>
               </div>
               <div class="form-group col">
                  <input type="text" class="form-control" id="email" name="email" value="">
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-md-4">
                  <label for="inputCity"><b>Phone Number</b></label>
               </div>
               <div class="form-group col">
                  <input type="text" class="form-control" id="phone" name="phone" value="">
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-md-4">
                  <label for="inputCity"><b>Date of Birth</b></label>
               </div>
               <div class="form-group col">
                  <select id="inputState" class="form-control" name="day" id="day">
                     <option selected value="">Day</option>
                     <?php for($i=1;$i<=31;$i++){?>
                     <option value="{{$i}}">{{$i}}</option>
                   <?php }?>
                  </select>
               </div>
               <div class="form-group col">
                  <select id="inputState" class="form-control" name="month" id ="month">
                    <option selected value="">Month</option>
                     <?php for($i=1;$i<=12;$i++){?>
                      <option value="{{$i}}">{{date( 'M', strtotime( "$i/12/10" ) )}}</option>
                    <?php }?>
                  </select>
               </div>
               <div class="form-group col">
                  <select id="inputState" class="form-control" name="year" id="year">
                     <option selected value="">Year</option>
                     <?php for($i=1920;$i<=2001;$i++){?>
                      <option value="{{$i}}">{{$i}}</option>
                    <?php }?>
                  </select>
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-md-4">
                  <label for="inputCity"><b>Marital status</b></label>
               </div>
               <div class="form-group col">
                  <label class=" btnclick " id="married" onclick="active3('married')">Married</label>
               </div>
               <div class="clearfix"></div>
               <div class="form-group col">
                  <label class=" btnclick " id="single" onclick="active3('single')">Single</label>
               </div>
               <input type="hidden" id="marital_status" name="marital_status" value="">
               <div class="form-group col">
                  <label class="btnclick " id="more" onclick="active4('more')">More...</label>
                  <!-- Repeater Html Start -->
                  <!-- Repeater Items -->

                  <div class="row mt-3" id="status" style="display:none">
                     <!-- Repeater Content -->
                     <div class="col-md-12 ">
                        <div class="item-content">
                           <div class="form-group">
                              <label class=" btnclick " id="cohabiting" onclick="active3('cohabiting')">Cohabiting</label>
                           </div>
                           <div class="form-group">
                              <label class=" btnclick " id="civil_partnership" onclick="active3('civil_partnership')">Civil Partnership</label>
                           </div>
                           <div class="form-group">
                              <label class="btnclick" id="divorced" onclick="active3('divorced')">Divorced</label>
                           </div>
                           <div class="form-group">
                              <label class="btnclick" id="separated" onclick="active3('separated')">Separated</label>
                           </div>
                           <div class="form-group">
                              <label class="btnclick" id="widowed" onclick="active3('widowed')">Widowed</label>
                           </div>
                           
                        </div>
                     </div>
                  </div>
                   
               </div>
               <!-- Repeater End -->
            </div>
            <div class="form-row">
               <div class="form-group col-md-4">
                  <label for="inputCity"><b>Driving Licence Type</b></label>
               </div>
               <div class="form-group col">
                  <label class=" btnclick " onclick="active5('full_uk_licence')" id="full_uk_licence" >Full UK Driving Licence</label>
               </div>
               <input type="hidden" id="dl_type" name="dl_type" value="">
               <div class="form-group col">
                  <label class=" btnclick " onclick="active6('more_licence')" id="more_licence">More...</label>
                      <div class="row mt-3" id="dltype" style="display:none">
                     <!-- Repeater Content -->
                     <div class="col-md-12 ">
                        <div class="item-content">
                           <div class="form-group">
                              <label class=" btnclick " id="provisional_licence" onclick="active5('provisional_licence')">Provisional Driving Licence</label>
                           </div>
                           <div class="form-group">
                              <label class=" btnclick " id="eu_licence" onclick="active5('eu_licence')">EU Licence</label>
                           </div>
                           <div class="form-group">
                              <label class=" btnclick " id="international_licenece" onclick="active5('international_licenece')">International Licence</label>
                           </div>
                           <div class="form-group">
                              <label class=" btnclick " id="no_lincence" onclick="active5('no_lincence')">No Licence</label>
                           </div>
                            
                        </div>
                     </div>
                  </div>
                   
               </div>

            </div>
            <div class="form-row">
               <div class="form-group col-md-4">
                  <label for="inputCity">&nbsp;</label>
               </div>
               <div class="form-group col-md-2">
                  <button type="button" class="btn btn-primary next btn-lg" id="first" onclick="display1('first')"><b>Next</b></button>
               </div>
            </div>
         </div>
      </div>
      <div class="section sectionlowform" id="myDIV">
         <div class="container">
            <div class="row" style="border-bottom: 1px solid #aaa;">
               <h2 class="mb-0 colorcode mb-5 pl-3 heading-quota"><i class="fa fa-home"></i>  Your address</h2>
               <div class="col-md-12" style="display: none;" id="address">
                  <div id="pincode"> 
                  <div class="form-row" >
                     <div class="form-group col-md-4">
                        <label for="inputC1ity"><b>My current postcode is</b></label>
                     </div>
                     <div class="form-group col-md-4">
                        <input type="text" class="form-control" id="postal_code" name="postal_code">
                     </div>
                     <div class="form-group col-md-4">
                        <button for="inputCity" class="btnclick active1" id="findaddress">Find Address</button>
                        <!--  <input type="text" class="form-control" id="inputCity" placeholder="I'm not sure yet"> -->
                     </div>
                  </div>
                  <div class="form-row ptagsmall">
                     <div class=" col-md-4">
                     </div>
                     <span>Don't know the postcode? <a href="#" style="color: #1399d5!important;" id="manualaddress" onclick="showform('manualaddress')">Enter address manually.</a>  </span>
                  </div>
                </div>

                    <div class="form-row">
                       <div class="form-group  col-md-4">
                              
                        </div>
                            
                        <div class="form-group  col-md-4" id="fid">
                               <select class="form-control col" id="addresses" name ="addresses" required>
                            
                        </select>
                        </div>
                  </div>

                   <div id="addform" style="display: none;">
                   <div class="form-row">
                            <div class="form-group col-md-4">
                              <label for="inputCity"><b>Flat or Unit Number</b></label>
                          </div>
                            <div class="form-group col">
                              <input type="text" class="form-control" id="flat_no" name="flat_no" >
                          </div>
                  </div>
                  
                   <div class="form-row">
                            <div class="form-group col-md-4">
                              <label for="inputCity"><b>Building Name</b></label>
                          </div>
                            <div class="form-group col">
                              <input type="text" class="form-control" id="building_name" name="building_name">
                          </div>
                  </div>
                  
                  <div class="form-row">
                            <div class="form-group col-md-4">
                              <label for="inputCity"><b>Building Number</b></label>
                          </div>
                            <div class="form-group col">
                              <input type="text" class="form-control" id="building_no" name="building_no">
                          </div>
                  </div>
                  
                   <div class="form-row">
                            <div class="form-group col-md-4">
                              <label for="inputCity"><b>Street</b></label>
                          </div>
                            <div class="form-group col">
                              <input type="text" class="form-control" id="street" name="street">
                          </div>
                  </div>
                  
                  <div class="form-row">
                            <div class="form-group col-md-4">
                              <label for="inputCity"><b>Locality</b></label>
                          </div>
                            <div class="form-group col">
                              <input type="text" class="form-control" id="locality" name="locality">
                          </div>
                  </div>
                  
                  <div class="form-row">
                            <div class="form-group col-md-4">
                              <label for="inputCity"><b>Town or city</b></label>
                          </div>
                            <div class="form-group col">
                              <input type="text" class="form-control" id="city" name="city">
                          </div>
                  </div>
                  
                  <div class="form-row">
                            <div class="form-group col-md-4">
                              <label for="inputCity"><b>County</b></label>
                          </div>
                            <div class="form-group col">
                              <input type="text" class="form-control" id="country" name="country">
                          </div>
                  </div>
                  
                   <div class="form-row">
                            <div class="form-group col-md-4">
                              <label for="inputCity"><b>Postcode</b></label>
                          </div>
                            <div class="form-group col">
                              <input type="text" class="form-control" id="postal_code" name="postal_code">
                          </div>
                  </div>
                  </div>
                  
                  <!---- -->
                  <div class="form-row">
                     <div class="form-group col-md-4">
                        <label for="inputCity"><b>Time at this address</b></label>
                     </div>
                     <div class="form-group col">
                        <select id="inputState" class="form-control" id="address_year" name="address_year">
                           <option selected value="">Year</option>
                           <?php for($i=0; $i<=14; $i++) {?>
                           <option value="{{$i}}">{{$i}}</option>
                         <?php }?>
                        </select>
                     </div>
                     <div class="form-group col">
                        <select id="inputState" class="form-control" id="address_month" name="address_month">
                           <option selected value="">Month</option>
                            <?php for($i=0; $i<=11; $i++) {?>
                           <option value="{{$i}}">{{$i}}</option>
                         <?php }?>
                        </select>
                     </div>
                  </div>
                  <div class="form-row">
                     <div class="form-group col-md-4">
                        <label for="inputCity" ><b>Residential status</b></label>
                     </div>
                     <div class="form-group col">
                        <label class=" btnclick " id="tenant" onclick="active10('tenant')">Private Tenant</label>
                     </div>
                     <div class="clearfix"></div>
                     <div class="form-group col">
                        <label class=" btnclick " id="owner" onclick="active10('owner')">Home Owner</label>
                     </div>
                     <div class="form-group col">
                        <label class="btnclick" id="moreoptions" onclick="active11('moreoption')">More...</label>
                        <div class="row mt-3" id="option" style="display:none">
                           <div class="col-md-12 ">
                              <div class="item-content">
                                 <div class="form-group">
                                    <label class=" btnclick " id="conciltenant" onclick="active10('conciltenant')">Council Tenant</label>
                                 </div>
                                 <div class="form-group">
                                    <label class=" btnclick " id="livingwithparents" onclick="active10('livingwithparents')">Living With Parents</label>
                                 </div>
                                 <input type="hidden" name="rental_status" id="rental_status" value="">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="form-row">
                     <div class="form-group col-md-4">
                        <label for="inputCity">&nbsp;</label>
                     </div>
                     <div class="form-group col-md-2">
                        <button type="button" class="btn btn-primary next btn-lg" id="second" onclick="employee('second')"><b>Next</b></button>
                     </div>
                  </div>
               </div>
                           </div>
         </div>
      </div>
      <div class="section sectionlowform" id="myDIV">
         <div class="container">
            <div class="row">
               <h2 class="mb-0 colorcode mb-5 pl-3 heading-quota"><i class="fa fa-user-plus"></i>  Your employment</h2>
               <div class="col-md-12" style="display: none;" id="empdetails">
                  <div class="form-row">
                     <div class="form-group col-md-4">
                        <label for="inputCity"><b>Current Employment</b></label>
                     </div>
                     <div class="form-group">
                        <select class="form-control" id="employee_status" name ="employee_status" required>
                           <option selected value="">Select current employment status...</option>
                           <option value="employeefulltime">Employee Full Time</option>
                           <option value="selfemployeed">Self-Employeed</option>
                           <option value="employeeparttime">Employee Part Time</option>
                           <option value="disability">Disability</option>
                           <option value="retired">Retired</option>
                           <option value="subcontractor">Sub-Contractor</option>
                           <option value="agencyworker">Agency Worker</option>
                           <option value="homemaker">Home Maker</option>
                           <option value="notemployee">Not Employeed</option>
                           <option value="armedforces">Armed Forces</option>
                           <option value="student">Student</option>
                           <option value="contractworker">Contract Worker</option>
                           <option value="nonprofessionalcarer">Non-Professional Carer </option>
                        </select>
                     </div>
                  </div>
                  <div class="form-row mt-3" style="border-top: 1px solid #aaa;border-bottom: 1px solid #aaa;">
                     <div class="form-group col-md-12">
                        <label for="inputCity" style="color: #1399d5;height:28px;"><b>Terms & Conditions</b></label>
                     </div>
                     <div class="form-group col-md-12">
                        <label for="inputCity">I have read and agree to Carfinance247 Limited's <a href="#" style="color: #1399d5!important;">terms & conditions</a><input type="checkbox" id="color-1" name="color" value="color-1" checked>  </label>
                     </div>
                  </div>
                  <div class="form-row mt-3" >
                     <div class="form-group col-md-12">
                        <label for="inputCity" style="color: #1399d5;height:28px;"><b>Contact Preferences</b></label>
                     </div>
                     <div class="form-group col-md-12 mt-3">
                        <label class="low">Please ensure your contact details are correct as we'll keep you up to date with the progress of your application by phone, email and SMS.</label>
                        <label class="low">For future marketing purposes we may contact you from time to time by post, and if you give your agreement below, by email & SMS regarding our finance & insurance options. We may also contact you for research purposes.</label>
                     </div>
                     <div class="form-group col-md-12 col-xs-12 mt-3">
                        <label class="low">Please select the appropriate option if you would like to receive information by:</label>
                        <div class="container">
                           <div class="row">
                              <div class="col-3">Email<br>
                                 <input type="radio" checked="checked"  name="notifybyemail" id="notifybyemaily">Yes
                                 <input type="radio" checked="checked" name="notifybyemail" id="notifybyemailn">No
                              </div>
                              <div class="col-3">SMS<br>
                                 <input type="radio" checked="checked" name="notifybysms" id="notifybysmsy">Yes
                                 <input type="radio" checked="checked" name="notifybysms" id="notifybysmsn">No
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="form-group col-md-12 mt-3">
                        <label class="low">If we are unable to obtain a suitable financing option for you, we may pass your information to a <a href="#" style="color: #1399d5!important;">selected car dealership</a> (in accordance with our <a href="#" style="color: #1399d5!important;">privacy policy</a>), who may also contact you, to provide an alternative vehicle financing solution based upon the information provided in your application. If you are happy for us to pass your information on in this manner, please tick this box </label><input type="checkbox" class="checkpersonal" id="financial_info" name="financial_info"> 
                     </div>
                  </div>
                  <div class="form-row">
                     <div class="form-group col-md-4 ">
                        <label for="inputCity">&nbsp;</label>
                     </div>
                     <div class="form-group col-md-4">
                        <button type="submit" class="btn btn-primary next btn-lg" id="submit" name="submit"><b>Finish</b></button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
 </form>
</div>
 <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<script type="text/javascript">

    function active1(el){
      document.getElementById("car").classList.remove('active1');
      document.getElementById("van").classList.remove('active1');
      document.getElementById("bike").classList.remove('active1');
      document.getElementById(el).classList.add('active1');
      document.getElementById('financeto').value = el;
      document.getElementById('gg').style.display = "none";
    }

    function active2(el){
      document.getElementById("mr").classList.remove('active1');
      document.getElementById("mrs").classList.remove('active1');
      document.getElementById("ms").classList.remove('active1');
      document.getElementById(el).classList.add('active1');
      document.getElementById('title').value = el;
      //document.getElementById('gg').style.display = "none";
    }

    function active3(el){
      document.getElementById("single").classList.remove('active1');
      document.getElementById("married").classList.remove('active1');
      document.getElementById("cohabiting").classList.remove('active1');
      document.getElementById("civil_partnership").classList.remove('active1');
      document.getElementById("divorced").classList.remove('active1');
      document.getElementById("separated").classList.remove('active1');
      document.getElementById("widowed").classList.remove('active1');
      document.getElementById(el).classList.add('active1');
      document.getElementById('marital_status').value = el;
      
    }

    function active4(){
      document.getElementById("more").classList.add('active1');
      document.getElementById("status").style.display = "block";
      
    }

    function active5(el){
      document.getElementById("full_uk_licence").classList.remove('active1');
      document.getElementById("provisional_licence").classList.remove('active1');
      document.getElementById("eu_licence").classList.remove('active1');
      document.getElementById("international_licenece").classList.remove('active1');
      document.getElementById("no_lincence").classList.remove('active1');
      document.getElementById(el).classList.add('active1');
      document.getElementById('dl_type').value = el;
    }

     function active6(){
      document.getElementById("more_licence").classList.add('active1');
      document.getElementById("dltype").style.display = "block";
      
    }

     function active10(el){
      document.getElementById("tenant").classList.remove('active1');
      document.getElementById("owner").classList.remove('active1');
      document.getElementById("conciltenant").classList.remove('active1');
      document.getElementById("livingwithparents").classList.remove('active1');
      document.getElementById(el).classList.add('active1');
      
      document.getElementById('rental_status').value = el;
      
    }

    function active11(){
      document.getElementById("moreoptions").classList.add('active1');
      document.getElementById("option").style.display = "block";
      
    }


    function hide_borrow_money(){
     document.getElementById('borrow_money').value = ""; 
     document.getElementById('borrow_money_button').classList.add('active1');
     
    
    }
    function show_borrow_money(){
     document.getElementById('borrow_money').value = "7500";
     document.getElementById("borrow_money_button").classList.remove('active1'); 
    }

    function display1(){
       document.getElementById("details").style.display = "none";
     document.getElementById("address").style.display = "block"; 
      
    
     

    }

    function displaye(){
     document.getElementById("address").style.display = "none"; 
     document.getElementById("details").style.display = "block";
     document.getElementById("edit1").style.display = "none";
     document.getElementById("addressform").style.display = "none";
    }

    function showform()
    {
      document.getElementById("details").style.display = "none"; 
      document.getElementById("pincode").style.display = "none"; 
      document.getElementById("addform").style.display = "block";
     }

     function employee()
    {
      var addresses =document.getElementById("address").value;
      alert(addresses);
      document.getElementById("address").style.display = "none"; 
      document.getElementById("empdetails").style.display = "block";
     }

$(document).ready(function(){
 $('select[name="addresses"]').hide();  
$('#findaddress').click(function(){

 var postalcode = $('#postal_code').val();
 var token = '{{ csrf_token() }}';

 $.ajax({
        url:"{{url(('/').'findaddress') }}",
        type: "POST",
        data:{"postalcode":postalcode,"_token": token},
        dataType: 'json',
       success: function(data) {
                   $('select[name="addresses"]').show();
                    console.log(data);
                    $('select[name="addresses"]').empty();
                    $('select[name="addresses"]').append('<option value="" selected>Please select Address ..</option>');
                    $.each(data, function(key, value) {console.log(value);
                        $('select[name="addresses"]').append('<option value="'+ value.address +'">'+ value.address +'</option>');
                    });
                }
      });

});
});

  </script>
@stop

 @section('js_footer_after_content')

 @stop




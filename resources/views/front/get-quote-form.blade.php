@extends('front.layouts.quotetemplate')
@section('content')
<!--your data start here-->
<style>
    .error {
        color: #ff0000;
    }
</style>


<div class="section" id="myDIV">
    <form action="{{url('savedetails')}}" method="post" id="carform">
        {{ csrf_field() }}
        <div class="container">
            <div class="row" style="border-bottom: 1px solid #aaa;">
                <h2 class="mb-0 colorcode mb-5 pl-3 heading-quota float-left">
          <i class="fa fa-user">
          
          </i> Your Details <button type="button" id="first_button" class="btn btn-primary next btn-lg float-right"><b>Edit</b></button></h2>
                <!--<button type="button" class="btn btn-info btn-lg" id="edit1" onclick="displaye('edit1')" style="float:right;display:none;"><b>Edit</b>-->
        
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <li style="color:red;">{{$error}}</li>
                                @endforeach
                            @endif
         
                </button>
                <div class="col-md-12 frm" id="details">
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
                            <label id="van" onclick="active1('van')" class="btnclick">Van</label>
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
                            <input type="text" class="form-control" name="first_name" value="" id="first_name">
                            

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
                            <input type="text" class="form-control" id="email" name="email" value="" onblur="check_email();">
                            <div id="emCheck"></div>
                            
                           
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
                            <select class="form-control" name="day" id="day">
                                <option selected value="">Day</option>
                                <?php for($i=1;$i<=31;$i++){?>
                                    <option value="{{$i}}">{{$i}}</option>
                                    <?php }?>
                            </select>
                            
                        </div>
                        <div class="form-group col">
                            <select class="form-control" name="month" id="month">
                                <option selected value="">Month</option>
                                <?php for($i=1;$i<=12;$i++){?>
                                    <option value="{{$i}}">{{date( 'M', strtotime( "$i/12/10" ) )}}</option>
                                    <?php }?>
                            </select>
                           
                        </div>
                        <div class="form-group col">
                            <select class="form-control" name="year" id="year">
                                <option selected value="">Year</option>
                                <?php 
                                $current_year = date('Y');
                                for($i=1920;$i<=$current_year-18;$i++){?>
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
                            <label class="btnclick" id="married" onclick="active3('married')">Married</label>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group col">
                            <label class="btnclick" id="single" onclick="active3('single')">Single</label>
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
                            <label class=" btnclick " onclick="active5('full_uk_licence')" id="full_uk_licence">Full UK Driving Licence</label>
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
                            <button type="button" class="btn btn-primary next btn-lg" id="first"><b>Next</b></button>
                        </div>
                    </div>
                </div>

            </div>

            <div class="section sectionlowform" id="myDIV">
                <div class="container">
                    <div class="row" style="border-bottom: 1px solid #aaa;">
                        <h2 class="mb-0 colorcode mb-5 pl-3 heading-quota"><i class="fa fa-home"></i>  Your address <button type="button" id="second_button" class="btn btn-primary next btn-lg float-right"><b>Edit</b></h2>

                        <div class="col-md-12 frm" style="display: none;" id="pinsearch">

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputC1ity"><b>My current postcode is</b></label>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" id="postal_code" name="postal_code">
                                    <input type="hidden" id="addr_address_one" name="addr_address_one"  value="">
                                    <input type="hidden" id="addr_address_two" name="addr_address_two"  value="">
                                    <input type="hidden" id="addr_address_three" name="addr_address_three"  value="">
                                    <input type="hidden" id="addr_town_or_city" name="addr_town_or_city"  value="">
                                    <input type="hidden" id="getaddress_latitude" name="getaddress_latitude"  value="">
                                    <input type="hidden" id="getaddress_longitude" name="getaddress_longitude"  value="">
                                    <input type="hidden" id="addr_country" name="addr_country" value="">
                                    <div id="pinerror" style="color:#f4516c"></div>
                                </div>

                                <div class="form-group col-md-4">
                                    <button for="inputCity" class="btnclick active1" id="findaddress" type="button">Find Address</button>

                                    <!--  <input type="text" class="form-control" id="inputCity" placeholder="I'm not sure yet"> -->
                                </div>
                            </div>
                            <div class="form-row ptagsmall">
                                <div class=" col-md-4">
                                </div>
                                <!-- 
                                    <span>Don't know the postcode? <a href="#" style="color: #1399d5!important;" id="manualaddress" onclick="showform();">Enter address manually.</a>  </span> 
                                -->
                            </div>

                            <div class="form-row">
                                <div class="form-group  col-md-4">

                                </div>

                                <div class="form-group  col-md-4" id="fid">
                                    <select class="form-control col" id="addresses" name="addresses">

                                    </select>
                                </div>
                            </div>

                            <!---- -->
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputCity"><b>Time at this address</b></label>
                                </div>
                                <div class="form-group col">
                                    <select id="inputState" class="form-control" id="address_year" name="addressyear">
                                        <option selected value="">Year</option>
                                        <?php for($i=0; $i<=14; $i++) {?>
                                            <option value="{{$i}}">{{$i}}</option>
                                            <?php }?>
                                    </select>
                                </div>
                                <div class="form-group col">
                                    <select id="inputState" class="form-control" id="address_month" name="addressmonth">
                                        <option selected value="">Month</option>
                                        <?php for($i=0; $i<=11; $i++) {?>
                                            <option value="{{$i}}">{{$i}}</option>
                                            <?php }?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputCity"><b>Residential status</b></label>
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
                                                    <label class="btnclick" id="conciltenant" onclick="active10('conciltenant')">Council Tenant</label>
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
                                    <button type="button" class="btn btn-primary next btn-lg" id="second"><b>Next</b></button>
                                </div>
                            </div>
                        </div>
                        <!--first form-->

                        <!------------------------->
                        <div class="col-md-12 frm" style="display: none;" id="address">

                            <div class="form-row field">
                                <div class="form-group col-md-4">
                                    <label for="inputCity"><b>Flat or Unit Number</b></label>
                                </div>
                                <div class="form-group col">
                                    <input type="text" class="form-control" id="flat_no" name="flat_no" value="">
                                </div>
                            </div>

                            <div class="form-row field">
                                <div class="form-group col-md-4">
                                    <label for="inputCity"><b>Building Name</b></label>
                                </div>
                                <div class="form-group col">
                                    <input type="text" class="form-control" id="building_name" name="building_name" value="">
                                </div>
                            </div>

                            <div class="form-row field">
                                <div class="form-group col-md-4">
                                    <label for="inputCity"><b>Building Number</b></label>
                                </div>
                                <div class="form-group col">
                                    <input type="text" class="form-control" id="building_no" name="building_no" value="">
                                </div>
                            </div>

                            <div class="form-row field">
                                <div class="form-group col-md-4">
                                    <label for="inputCity"><b>Street</b></label>
                                </div>
                                <div class="form-group col">
                                    <input type="text" class="form-control" id="street" name="street" value="">
                                </div>
                            </div>

                            <div class="form-row field">
                                <div class="form-group col-md-4">
                                    <label for="inputCity"><b>Locality</b></label>
                                </div>
                                <div class="form-group col">
                                    <input type="text" class="form-control" id="locality" name="locality" value="">
                                </div>
                            </div>

                            <!-- <div class="form-row field">
                                <div class="form-group col-md-4">
                                    <label for="inputCity"><b>Town or city</b></label>
                                </div>
                                <div class="form-group col">
                                    <input type="text" class="form-control" id="city" name="city" value="">
                                </div>
                            </div> -->

                            <!-- <div class="form-row field">
                                <div class="form-group col-md-4">
                                    <label for="inputCity"><b>County</b></label>
                                </div>
                                <div class="form-group col">
                                    <input type="text" class="form-control" id="country" name="country" value="">
                                </div>
                            </div> -->

                            <!-- <div class="form-row field">
                                <div class="form-group col-md-4">
                                    <label for="inputCity"><b>Postcode</b></label>
                                </div>
                                <div class="form-group col">
                                    <input type="text" class="form-control" id="postal_codesec" name="postal_code" value="">
                                </div>
                            </div> -->

                            <!---- -->
                            <div class="form-row field">
                                <div class="form-group col-md-4">
                                    <label for="inputCity"><b>Time at this address</b></label>
                                </div>
                                <div class="form-group col">
                                    <select id="inputState" class="form-control" id="address_yearsec" name="address_year">
                                        <option selected value="">Year</option>
                                        <?php for($i=0; $i<=14; $i++) {?>
                                            <option value="{{$i}}">{{$i}}</option>
                                            <?php }?>
                                    </select>
                                </div>
                                <div class="form-group col field">
                                    <select id="inputState" class="form-control" id="address_monthsec" name="address_month">
                                        <option selected value="">Month</option>
                                        <?php for($i=0; $i<=11; $i++) {?>
                                            <option value="{{$i}}">{{$i}}</option>
                                            <?php }?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row field">
                                <div class="form-group col-md-4">
                                    <label for="inputCity"><b>Residential status</b></label>
                                </div>
                                <div class="form-group col">
                                    <label class=" btnclick " id="tenantsec" onclick="active('tenantsec')">Private Tenant</label>
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group col">
                                    <label class=" btnclick " id="ownersec" onclick="active('ownersec')">Home Owner</label>
                                </div>
                                <div class="form-group col">
                                    <label class="btnclick" id="moreoptionsec" onclick="active56('moreoptionsec')">More...</label>
                                    <div class="row mt-3" id="optionsec" style="display:none">
                                        <div class="col-md-12 ">
                                            <div class="item-content">
                                                <div class="form-group">
                                                    <label class=" btnclick " id="conciltenantsec" onclick="active('conciltenantsec')">Council Tenant</label>
                                                </div>
                                                <div class="form-group">
                                                    <label class=" btnclick " id="livingwithparentssec" onclick="active('livingwithparentssec')">Living With Parents</label>
                                                </div>
                                                <input type="hidden" name="rental_status" id="rental_statussec" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            

                            <div class="form-row field" id="editableadd">
                                <div class="form-group col-md-4">
                                    <label for="inputCity"><b>Current address</b></label>
                                </div>
                                <div class="form-group col">
                                   <div id="savedaddress"></div>
                                </div>
                            </div>



                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputCity">&nbsp;</label>
                                </div>
                                <div class="form-group col-md-2">
                                    <button type="button" class="btn btn-primary next btn-lg" id="third"><b>Next</b></button>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="section sectionlowform" id="myDIV">
                <div class="container">
                    <div class="row">
                        <h2 class="mb-0 colorcode mb-5 pl-3 heading-quota"><i class="fa fa-user-plus"></button></i>  Your employment </h2>
                        <div class="col-md-12 frm" style="display: none;" id="empdetails">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputCity"><b>Current Employment</b></label>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" id="employee_status" name="employee_status" required>
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
                                    <label for="inputCity" style="color: #1399d5;height:32px;"><b>Terms & Conditions</b></label>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputCity">I have read and agree to Carfinance247 Limited's <a href="#" style="color: #1399d5!important;">terms & conditions</a>
                                        <input type="checkbox" id="color-1" name="color" value="color-1" checked style="opacity:1;"> </label>
                                </div>
                            </div>
                            <div class="form-row mt-3">
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
                                            <div class="col-3">Email
                                                <br>
                                                <input type="radio" checked="checked" name="notifybyemail" value="1" id="notifybyemaily">Yes
                                                <input type="radio" checked="checked" name="notifybyemail" value="0" id="notifybyemailn">No
                                            </div>
                                            <div class="col-3">SMS
                                                <br>
                                                <input type="radio" checked="checked" name="notifybysms" value="1" id="notifybysmsy">Yes
                                                <input type="radio" checked="checked" name="notifybysms" value="0" id="notifybysmsn">No
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12 mt-3">
                                    <label class="low">If we are unable to obtain a suitable financing option for you, we may pass your information to a <a href="#" style="color: #1399d5!important;">selected car dealership</a> (in accordance with our <a href="#" style="color: #1399d5!important;">privacy policy</a>), who may also contact you, to provide an alternative vehicle financing solution based upon the information provided in your application. If you are happy for us to pass your information on in this manner, please tick this box <input type="checkbox" class="checkpersonal" style="opacity:1;" id="financial_info" required value="1" checked name="financial_info"></label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4 ">
                                    <label for="inputCity">&nbsp;</label>
                                </div>
                                <div class="form-group col-md-4">
                                    <button type="submit" class="btn btn-primary next btn-lg" id="submit"><b>Finish</b></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- emploayess status -->
        </div>
</div>
</form>
</div>

@stop 

@section('js_footer_after_content')

<script type="text/javascript">
    function active1(el) {
        document.getElementById("car").classList.remove('active1');
        document.getElementById("van").classList.remove('active1');
        document.getElementById("bike").classList.remove('active1');
        document.getElementById(el).classList.add('active1');
        document.getElementById('financeto').value = el;
        document.getElementById('gg').style.display = "none";
    }

    function active2(el) {
        document.getElementById("mr").classList.remove('active1');
        document.getElementById("mrs").classList.remove('active1');
        document.getElementById("ms").classList.remove('active1');
        document.getElementById(el).classList.add('active1');
        document.getElementById('title').value = el;
        //document.getElementById('gg').style.display = "none";
    }

    function active3(el) {
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

    function active4() {
        document.getElementById("more").classList.add('active1');
        document.getElementById("status").style.display = "block";

    }

    function active5(el) {
        document.getElementById("full_uk_licence").classList.remove('active1');
        document.getElementById("provisional_licence").classList.remove('active1');
        document.getElementById("eu_licence").classList.remove('active1');
        document.getElementById("international_licenece").classList.remove('active1');
        document.getElementById("no_lincence").classList.remove('active1');
        document.getElementById(el).classList.add('active1');
        document.getElementById('dl_type').value = el;
    }

    function active6() {
        document.getElementById("more_licence").classList.add('active1');
        document.getElementById("dltype").style.display = "block";

    }

    function active10(el) {
        document.getElementById("tenant").classList.remove('active1');
        document.getElementById("owner").classList.remove('active1');
        document.getElementById("conciltenant").classList.remove('active1');
        document.getElementById("livingwithparents").classList.remove('active1');
        document.getElementById(el).classList.add('active1');

        document.getElementById('rental_status').value = el;

    }

    function active11() {
        document.getElementById("moreoptions").classList.add('active1');
        document.getElementById("option").style.display = "block";

    }

    function active(el) {
        document.getElementById("tenantsec").classList.remove('active1');
        document.getElementById("ownersec").classList.remove('active1');
        document.getElementById("conciltenantsec").classList.remove('active1');
        document.getElementById("livingwithparentssec").classList.remove('active1');
        document.getElementById(el).classList.add('active1');

        document.getElementById('rental_statussec').value = el;

    }

    function active56() {
        document.getElementById("moreoptionsec").classList.add('active1');
        document.getElementById("optionsec").style.display = "block";

    }

    function hide_borrow_money() {
        document.getElementById('borrow_money').value = "";
        document.getElementById('borrow_money_button').classList.add('active1');

    }

    function show_borrow_money() {
        document.getElementById('borrow_money').value = "7500";
        document.getElementById("borrow_money_button").classList.remove('active1');
    }

    ///////////////////////////////////////////////////////////////////////////////////
    function check_email() {
        $('#emCheck').html('');
        $('#first').prop('disabled', false);
        var email = $('#email').val();
        var token = '{{ csrf_token() }}';
        if (email != '') {
            $.ajax({
                type: 'post',
                url: "{{url(('/').'checkemail') }}",
                data: 'email=' + email + '&_token=' + token,
                beforeSend: function() {
                    $('#Spiner').addClass('m-loader m-loader--primary m-loader--right');
                },
                success: function(data) {
                    $('#Spiner').removeClass('m-loader m-loader--primary m-loader--right');
                    if (data != 0) {
                        var err = '<div class="form-control-feedback" style="color:#f4516c">This email already exists.</div>';
                        $('#emCheck').html(err);
                        $('#first').prop('disabled', true);
                    }
                }
            })
        }
    }

    ///////////////////////////////////////////////////////////////////////////////////////////
    $(document).ready(function() {  
        $("#first_button").hide();
        $("#second_button").hide();
        $("#editableadd").hide();
        $('select[name="addresses"]').hide().prop('required', false);
        $('#findaddress').click(function() {

            var postalcode = $('#postal_code').val();
            var token = '{{ csrf_token() }}';
            if (postalcode != '') {
                $.ajax({
                    // url: "{{url(('/').'findaddress') }}",
                    url: "https://api.getaddress.io/find/"+postalcode+"?api-key="+"{{ env('GET_ADDRESS_API') }}"+"&expand=true",
                    type: "GET",
                    data: {
                        "postalcode": postalcode,
                        "_token": token
                    },
                    dataType: 'json',
                    success: function(location_list_obj) {
                        console.log(location_list_obj);
                        if (location_list_obj != '') {
                            
                            // get all address fron API
                            getaddress_latitude = location_list_obj['latitude'];
                            getaddress_longitude = location_list_obj['longitude'];
                            location_list = location_list_obj['addresses'];
                            // console.log(location_list);

                            $('select[name="addresses"]').show();
                            // console.log(location_list);
                            $('select[name="addresses"]').empty();
                            $('select[name="addresses"]').append('<option id="locationDropdown" value="" selected>Please select Address ..</option>');

    var i;
    for (i = 1; i <= location_list.length; i++) {


        if (location_list[i]['line_1'] != "") {
            // get address 1
            if (location_list[i]['line_1'] != "") {
                var line_1 = location_list[i]['line_1'];
                var line_1_without_space = line_1.replace(/ /g, "_");
            } else {
                var line_1 = "";
            }
            // get address 2
            if (location_list[i]['line_2'] != "") {
                var line_2 = ", " + location_list[i]['line_2'];
                var line_2_without_space = line_2.replace(/ /g, "_");
            } else {
                var line_2 = "";
            }
            // get address 3
            if (location_list[i]['line_3'] != "") {
                var line_3 = ", " + location_list[i]['line_3'];
                var line_3_without_space = line_3.replace(/ /g, "_");
            } else {
                var line_3 = "";
            }
            // get address 4
            if (location_list[i]['line_4'] != "") {
                var line_4 = ", " + location_list[i]['line_4'];
                var line_4_without_space = line_4.replace(/ /g, "_");
            } else {
                var line_4 = "";
            }
            // get town_or_city
            if (location_list[i]['town_or_city'] != "") {
                var town_or_city = ", " + location_list[i]['town_or_city'];
                var town_or_cityvv = location_list[i]['town_or_city'];
                var town_or_city_without_space = town_or_cityvv.replace(/ /g, "_");
            } else {
                var town_or_city = "NULL";
            }
            // country
            if (location_list[i]['country'] != "") {
                var country = ", " + location_list[i]['country'];
                var countryvv = location_list[i]['country'];
                var country_without_space = countryvv.replace(/ /g, "_");
            } else {
                var country = "NULL";
            }

            // append full address
            $('select[name="addresses"]').append("<option id=" + "locationDropdown" + " latitude="+ getaddress_latitude +" longitude="+getaddress_longitude+" address_one=" + line_1_without_space + " address_two=" + line_2_without_space + " address_three=" + line_3_without_space + " town_or_city=" + town_or_city_without_space + " country=" + country_without_space + " value=" + line_1_without_space + ">" + line_1 + line_2 + line_3 + line_4 + town_or_city + "</option>");
        }
    }




                        } else {
                            $("#pinerror").html('pincode is not Find.');
                            
                        }
                    }

                });
            }
        });

// Click location dropdown button and than set value in hidden input field
$(document).ready(function(){
    $("select#addresses").change(function() {
        var addr_value = $(this).children("option:selected").attr("value");
        var addr_address_one = $(this).children("option:selected").attr("address_one");
        addr_address_one = addr_address_one.replace('undefined', ' ');
        addr_address_one = addr_address_one.replace(/,/g, '');
        addr_address_one = addr_address_one.replace(/_/g, ' ');

        var addr_address_two = $(this).children("option:selected").attr("address_two");
        addr_address_two = addr_address_two.replace('undefined', ' ');
        addr_address_two = addr_address_two.replace(/,/g, '');
        addr_address_two = addr_address_two.replace(/_/g, ' ');

        var addr_address_three = $(this).children("option:selected").attr("address_three");
        addr_address_three = addr_address_three.replace('undefined', ' ');
        addr_address_three = addr_address_three.replace(/,/g, '');
        addr_address_three = addr_address_three.replace(/_/g, ' ');

        var addr_town_or_city = $(this).children("option:selected").attr("town_or_city");
        addr_town_or_city = addr_town_or_city.replace('undefined', ' ');
        addr_town_or_city = addr_town_or_city.replace(/,/g, '');
        addr_town_or_city = addr_town_or_city.replace(/_/g, ' ');

        var addr_country = $(this).children("option:selected").attr("country");
        addr_country = addr_country.replace('undefined', ' ');
        addr_country = addr_country.replace(/,/g, '');
        addr_country = addr_country.replace(/_/g, ' ');

        var addr_latitude = $(this).children("option:selected").attr("latitude");
        addr_latitude = addr_latitude.replace('undefined', 'NOT FOUND');

        var addr_longitude = $(this).children("option:selected").attr("longitude");
        addr_longitude = addr_longitude.replace('undefined', 'NOT FOUND');

        // save this value in Database
        $("#addr_address_one").val(addr_address_one);
        $("#addr_address_two").val(addr_address_two);
        $("#addr_address_three").val(addr_address_three);
        $("#addr_town_or_city").val(addr_town_or_city);
        $("#addr_country").val(addr_country);
        $("#getaddress_latitude").val(addr_latitude);
        $("#getaddress_longitude").val(addr_longitude);

        // console final address
        console.log(addr_value);
        console.log(addr_address_one);
        console.log(addr_address_two);
        console.log(addr_address_three);
        console.log(addr_town_or_city);
        console.log(addr_country);
        console.log(addr_latitude);
        console.log(addr_longitude);

    });

});

        ///////////////////////////////////////////////////////////////////////////////////////////////
        var v = $("#carform").validate({
            // Specify validation rules
            rules: {
                title: {
                    required: true
                },
                first_name: {
                    required: true,
                    minlength: 2
                },
                last_name: {
                    required: true,
                    minlength: 2
                },
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true,
                    minlength: 10,
                    maxlength: 10,
                    number: true
                },
                day: {
                    required: true
                },
                month: {
                    required: true
                },
                year: {
                    required: true
                },

                postal_code: {
                    required: true,
                    minlength:5
                },
                addresses: {
                    required: true,
                },
                address_year: {
                    required: true
                },

                address_month: {
                    required: true
                },
                flat_no: {
                    required: '#building_name:blank'
                },
                building_name: {
                    required: '#flat_no:blank'
                },
                color:{
                     required: true,
                }

            },

            messages: {

                first_name: {
                    required: "Please enter first name",
                    minlength: "Your first name must consist of at least 2 characters"
                },
                last_name: {
                    required: "Please enter last name",
                    minlength: "Your last name must consist of at least 2 characters"
                },

                email: "Please enter a valid email address",
               
                phone: {
                    required: "Please enter phone number",
                    minlength: "Your last phone number must consist of at least 10 digits",

                },
                postal_code: {
                    required: "Please enter postal code",
                    minlength: "Your last postal code number must consist of at least 5 digits",

                },
                day: "Please select day",
                month: "Please select month",
                year: "Please select year",
             }

        });

        // form next prev
        $("#first").click(function() {
            if (v.form()) {

                $(".frm").hide("fast");
                $("#first_button").show();
                $("#pinsearch").show();
               
            }
        });

        // form second 
         // form next prev
        $("#second").click(function() {
            if (v.form()) {
                
                $(".frm").hide("fast");
                $("#first_button").show();
                $("#address").show();
                $(".field").show();
                $("#editableadd").hide();
            }
        });

        //form last
         $("#third").click(function() {
            if (v.form()) {

                $(".frm").hide("fast");
                $("#second_button").show();
                $("#empdetails").show();
            }
        });
         
        $("#first_button").click(function() {
             $(".frm").hide("fast");
             $("#second_button").hide();
             $("#details").show();
        });


        $("#second_button").click(function() {
             $(".frm").hide("fast");
             $("#address").show();
             $("#second_button").hide();
             $(".field").hide();
             $("#editableadd").show();

             var pincode = $("#postal_codesec").val();
             var year = $("#address_yearsec option:selected").val();
             var month = $("#address_monthsec option:selected").val();
             if(pincode !=''){
             $("#savedaddress").html('<span>' + pincode + '</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button id="showadd" class="btn btn-info btn-sm" type="button">Edit</button>');
             }
        
        
           $("#showadd").click(function() {
                 $(".field").show();
                 $("#address").show();
                 $("#second_button").hide();
                 $("#editableadd").hide();
           });


        });






    });
</script>

@stop
@extends('front2/layout/master')

@section('content')
    <!-- Nav Menu -->
    @include('front2/layout/navbar')
    <!-- Nav Menu -->
   
    <!-- car search div start here-->
    <div class="container mb-5">
        <div class="row mb-4">
            <div class="col-lg-4 mb-5">
                <form class="resetborder" id="filterForm">
                  <div class="form-row mt-3">
                    <div class="form-group col-md-6">
                      <label class="carsearch" for="f_postcode">Postcode</label>
                      <input type="text" class="form-control" id="f_postcode" name="f_postcode" placeholder="SK96EG">
                  </div>
                  <div class="form-group col-md-6">
                      <label class="carsearch" for="inputPassword4">Distance</label>
                      <select class="form-control" id="f_distance" name="f_distance">
                                <option value="national" disabled>National</option>
                                <option value="10">10 Miles</option>
                                <option value="15">15 Miles</option>
                                <option value="20">20 Miles</option>
                                <option value="25">25 Miles</option>
                                <option value="30">30 Miles</option>
                                <option value="35">35 Miles</option>
                                <option value="40">40 Miles</option>
                                <option value="45">45 Miles</option>
                                <option value="50">50 Miles</option>
                                <option value="55">55 Miles</option>
                                <option value="60">60 Miles</option>
                                <option value="70">70 Miles</option>
                                <option value="80">80 Miles</option>
                                <option value="90">90 Miles</option>
                                <option value="100">100 Miles</option>
                                <option value="200">200 Miles</option>
                      </select>
                  </div>
              </div>
              <div class="form-row">
                    <div class="form-group col-md-6">
                      <label class="carsearch" for="inputEmail4">Price</label>
                      <select class="form-control" id="f_first_price" name="f_first_price">
                                <option value="2000">£2,000</option>
                                <option value="2500">£2,500</option>
                                <option value="3000">£3,000</option>
                                <option value="3500">£3,500</option>
                                <option value="4000">£4,000</option>
                                <option value="4500">£4,500</option>
                                <option value="5000">£5,000</option>
                                <option value="6000">£6,000</option>
                                <option value="7000">£7,000</option>
                                <option value="8000">£8,000</option>
                                <option value="9000">£9,000</option>
                                <option value="10000">£10,000</option>
                                <option value="11000">£11,000</option>
                                <option value="12000">£12,000</option>
                                <option value="13000">£13,000</option>
                                <option value="14000">£14,000</option>
                                <option value="15000">£15,000</option>
                                <option value="16000">£16,000</option>
                                <option value="17000">£17,000</option>
                                <option value="18000">£18,000</option>
                                <option value="19000">£19,000</option>
                                <option value="20000">£20,000</option>
                                <option value="22500">£22,500</option>
                                <option value="25000">£25,000</option>
                                <option value="27500">£27,500</option>
                                <option value="30000">£30,000</option>
                                <option value="35000">£35,000</option>
                                <option value="40000">£40,000</option>
                                <option value="above_40000" disabled>Above £40,000</option>
                      </select>
                  </div>
                  <div class="form-group col-md-6">
                      <label class="carsearch" for="inputPassword4">&nbsp;</label>
                      <select class="form-control" id="f_second_price" name="f_second_price">
                                <option value="upToAny" disabled>Up To: Any</option>
                                <option value="2000">Up To: £2,000</option>
                                <option value="2500">Up To: £2,500</option>
                                <option value="3000">Up To: £3,000</option>
                                <option value="3500">Up To: £3,500</option>
                                <option value="4000">Up To: £4,000</option>
                                <option value="4500">Up To: £4,500</option>
                                <option value="5000" selected>Up To: £5,000</option>
                                <option value="6000">Up To: £6,000</option>
                                <option value="7000">Up To: £7,000</option>
                                <option value="8000">Up To: £8,000</option>
                                <option value="9000">Up To: £9,000</option>
                                <option value="10000">Up To: £10,000</option>
                                <option value="11000">Up To: £11,000</option>
                                <option value="12000">Up To: £12,000</option>
                                <option value="13000">Up To: £13,000</option>
                                <option value="14000">Up To: £14,000</option>
                                <option value="15000">Up To: £15,000</option>
                                <option value="16000">Up To: £16,000</option>
                                <option value="17000">Up To: £17,000</option>
                                <option value="18000">Up To: £18,000</option>
                                <option value="19000">Up To: £19,000</option>
                                <option value="20000">Up To: £20,000</option>
                                <option value="22500">Up To: £22,500</option>
                                <option value="25000">Up To: £25,000</option>
                                <option value="27500">Up To: £27,500</option>
                                <option value="30000">Up To: £30,000</option>
                                <option value="35000">Up To: £35,000</option>
                                <option value="40000">Up To: £40,000</option>
                                <option value="null" disabled>Above £40,000</option>
                      </select>
                  </div>
                  <div class="form-group col-md-12">
                    <label class="carsearch" for="inputEmail4">Make and model</label>
                    <button type="button" class="btn btn-primary mb-2 btn-md faceb " data-toggle="modal" data-target="#exampleModalScrollable"><b>Makes</b></button>
                    <button type="button" class="btn btn-primary findoutmod mb-2 btn-md faceb "><b>Models</b></button>
                </div>
              </div>
            <div class="form-row">
                    <div class="form-group col-md-6">
                      <label class="carsearch" for="inputEmail4">Age</label>
                      <select class="form-control" id="f_first_age" name="f_first_age">
                                <option value="" >Any age</option>
                                <option value="1">1 Years</option>
                                <option value="2">2 Years</option>
                                <option value="3">3 Years</option>
                                <option value="4">4 Years</option>
                                <option value="5">5 Years</option>
                                <option value="6">6 Years</option>
                                <option value="7">7 Years</option>
                                <option value="8">8 Years</option>
                                <option value="9">9 Years</option>
                                <option value="10">10 Years</option>
                                <option value="11">11 Years</option>
                                <option value="12">12 Years</option>
                                <option value="13">13 Years</option>
                      </select>
                  </div>
                  <div class="form-group col-md-6">
                      <label class="carsearch" for="inputPassword4">&nbsp;</label>
                      <select class="form-control" id="f_second_age" name="f_second_age">
                                <option value="1">Up To: 1 Years</option>
                                <option value="2">Up To: 2 Years</option>
                                <option value="3">Up To: 3 Years</option>
                                <option value="4">Up To: 4 Years</option>
                                <option value="5">Up To: 5 Years</option>
                                <option value="6">Up To: 6 Years</option>
                                <option value="7">Up To: 7 Years</option>
                                <option value="8">Up To: 8 Years</option>
                                <option value="9">Up To: 9 Years</option>
                                <option value="10">Up To: 10 Years</option>
                                <option value="11">Up To: 11 Years</option>
                                <option value="12">Up To: 12 Years</option>
                                <option value="13">Up To: 13 Years</option>
                      </select>
                  </div>
                  
              </div>
            <div class="form-row">
                    <div class="form-group col-md-6 mb-2">
                      <label class="carsearch" for="inputEmail4">Mileage</label>
                      <select class="form-control" id="f_first_mileage" name="f_first_mileage">
                            <option value="anyMileage" disabled>Any mileage</option>
                            <option value="10000">10000</option>
                            <option value="20000">20000</option>
                            <option value="30000">30000</option>
                            <option value="40000">40000</option>
                            <option value="50000">50000</option>
                            <option value="60000">60000</option>
                            <option value="70000">70000</option>
                            <option value="80000">80000</option>
                            <option value="90000">90000</option>
                            <option value="100000">100000</option>
                            <option value="110000">110000</option>
                            <option value="120000">120000</option>
                      </select>
                  </div>
                  <div class="form-group col-md-6 ">
                      <label class="carsearch" for="inputPassword4">&nbsp;</label>
                      <select class="form-control" id="f_second_mileage" name="f_second_mileage"> 
                            <option value="anyMileage" disabled>Any mileage</option>
                            <option value="10000">Up To: 10000</option>
                            <option value="20000">Up To: 20000</option>
                            <option value="30000">Up To: 30000</option>
                            <option value="40000">Up To: 40000</option>
                            <option value="50000">Up To: 50000</option>
                            <option value="60000">Up To: 60000</option>
                            <option value="70000">Up To: 70000</option>
                            <option value="80000">Up To: 80000</option>
                            <option value="90000">Up To: 90000</option>
                            <option value="100000">Up To: 100000</option>
                            <option value="110000">Up To: 110000</option>
                            <option value="120000">Up To: 120000</option>
                      </select>
                  </div>
                  <div class="form-group col-md-12">

                   <label class="carsearch headinfcolo text-center show-btn " for="inputEmail4" id="hidebutton">More filters, colour, engine size etc</label>
                    
                    <div class="form-row">
                       
                     
                    <div class="form-group col-6 more-filter" style="display: none;" >
                      <label class="carsearch" for="inputEmail4">Fuel type</label>
                      
                        <button class="btn btn-primary selebtn mb-2 btn-lg modalbt mt-1 active">Any</button>
                        <button class="btn btn-primary selebtn mb-2 btn-lg modalbt mt-1 ">Diesel</button>
                        <button class="btn btn-primary selebtn mb-2 btn-lg modalbt mt-1 ">LPG</button>


                  </div>
                  <div class="form-group col-6 more-filter" style="display: none;">
                      <label class="carsearch" for="inputPassword4">&nbsp;</label>
                      <button class="btn btn-primary selebtn mb-2 btn-lg modalbt mt-1" >Bio</button>
                      <button class="btn btn-primary selebtn mb-2 btn-lg modalbt mt-1">Electric</button>
                      <button class="btn btn-primary selebtn mb-2 btn-lg modalbt mt-1">Petrol</button>
                  </div>
              </div>


              <div class="form-row">
                    <div class="form-group col-md-6 more-filter" style="display: none;">
                      <label class="carsearch" for="inputEmail4">Colour</label>
                      <select class="form-control">
                                <option value="">Any colour</option>
                                <option value="2">Black</option>
                                <option value="1">Blue</option>
                                <option value="6">Green</option>
                                <option value="4">Red</option>
                                <option value="3">Silver</option>
                                <option value="5">White</option>
                                <option value="7">Yellow</option>
                      </select>
                  </div>
                  <div class="form-group col-md-6 more-filter" style="display: none;">
                      <label class="carsearch" for="inputPassword4">Engine size</label>
                      <select class="form-control">
                               <option value=",">Any</option>
                                <option value="0.8,1.0">0.8L - 1.0L</option>
                                <option value="1.0,1.2">1.0L - 1.2L</option>
                                <option value="1.2,1.4">1.2L - 1.4L</option>
                                <option value="1.4,1.8">1.4L - 1.8L</option>
                                <option value="1.8,2.0">1.8L - 2.0L</option>
                                <option value="2.0,3.0">2.0L - 3.0L</option>
                                <option value="3.0,">3.0L and above </option>
                      </select>
                  </div>
              </div>

              <div class="form-row">
                    <div class="form-group col-md-6 more-filter" style="display: none;">
                      <label class="carsearch" for="inputEmail4">Transmission</label>
                      <select class="form-control">
                                <option value="">Any</option>
                                <option value="1">Automatic</option>
                                <option value="2">Manual</option>
                      </select>
                  </div>
                  <div class="form-group col-md-6 more-filter" style="display: none;">
                      <label class="carsearch" for="inputPassword4">Body style</label>
                      <select class="form-control">
                               <option value="">Any</option>
                                <option value="6">4x4</option>
                                <option value="8">City-car</option>
                                <option value="5">Convertible</option>
                                <option value="1">Coupe</option>
                                <option value="2">Estate</option>
                                <option value="3">Hatchback</option>
                                <option value="7">MPV</option>
                                <option value="4">Saloon</option>
                      </select>
                  </div>
              </div>


              <div class="form-row">
                    <div class="form-group col-md-6 more-filter" style="display: none;">
                      <label class="carsearch" for="inputEmail4">Doors</label>
                      <select class="form-control">
                                <option value="">Any</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                      </select>
                  </div>
                  
              </div>
              <label class="carsearch headinfcolo text-center hide-btn" for="inputEmail4" id="hidebtn" style="display: none;">Less filters</label>

                    <button type="button" id="searchFiltersBtn" class="btn btn-primary mt-3 mb-2 btn-md faceb "><b>Search</b></button>

                  </div>

                  <div class="form-group resebutton col-md-12">
                    <button type="Reset" class="btn btn-pri2mary mt-0 mb-3 btn-md resetbtn "><b><img src="{{ asset(env('ASSETS_PATH').'front2/images/Shape.svg') }}">&nbsp;Reset</b></a>
                  </div>

                  <div class="form-group savesreach col-md-12">
                    <button type="button" class="btn btn-pr2imary mt-0 mb-2 btn-md resetbtnsearch "><b><img src="{{ asset(env('ASSETS_PATH').'front2/images/icon_save_search_purple.svg') }}">&nbsp;Save search</b></button>
                  </div>

              </div>
</form>
            </div>

            <div class="col-lg-8 ">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-sm-12 col-lg-8"><h3 class="colorcode mb-4" id="total_cars_records"></h3></div>
                            <!-- <div class="col-xs-12 col-lg-4 mb-4"><div class="dropdown pl-5">
                              <button class="btn btn-primary distance dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Distance
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Price High</a>
                                <a class="dropdown-item" href="#">Price Low</a>
                                <a class="dropdown-item" href="#">Mileage</a>
                                <a class="dropdown-item" href="#">Age</a>
                            </div>
                        </div></div> -->

                        <div class="col-xs-12 col-lg-4 mb-4">

                            <select class="form-control distance">
                              <option value="">Distance </option>
                              <option>Price High</option>
                              <option>Price Low</option>
                              <option>Mileage</option>
                              <option>Age</option>
                          </select>
                      </div>
                        </div>
                        
                    <ul class="list-unstyled" id="carListSection">

                        <!--

                           <li class="media pt-4 mb-3">
                            <a href="#"><img src="{{ asset(env('ASSETS_PATH').'front2/images/1.png') }}" class="mr-3 img-fluid" alt="car" width="300"></a>
                            <a href="#" class="pictur"><img src="{{ asset(env('ASSETS_PATH').'front2/images/photo-camera.svg') }}" width="15">&nbsp;21</a>
                            <div class="media-body">
                              <h5 class="mt-0 mb-1">ASTON MARTIN VANTAGE</h5>
                              <p>V12 ZAGATO (1 of 150)</p>
                              <h3 class="mt-2">£2,700,000</h3>
                              <p>
                                <span><img src="{{ asset(env('ASSETS_PATH').'front2/images/icon_calendar.svg') }}" width="15">2013</span>
                                <span><img src="{{ asset(env('ASSETS_PATH').'front2/images/icon_transmission.svg') }}" width="15">Manual</span>
                                <span><img src="{{ asset(env('ASSETS_PATH').'front2/images/icon_speedo.svg') }}" width="15">600 Miles</span>
                                <span><img src="{{ asset(env('ASSETS_PATH').'front2/images/icon_fuel.svg') }}" width="15">Petrol</span>
                            </p>
                              <p class="maplo mt-0"><i class="fa fa-map-marker"></i>&nbsp;Enter your postcode for distance</p>
                              <button class="btn btn-primary savefor mb-2   mt-2"><img src="{{ asset(env('ASSETS_PATH').'front2/images/heart(2).svg') }}" width="16">&nbsp;Save for later</button>
                          </div>
                      </li>
                     -->

          </ul>

        <!-- <ul class="pagination-custom text-center mt-3">
            <li class="pag-link"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
            <li id="1" class="carPagination pag-link current"><span>1</span></li>
            <li id="2" class="carPagination pag-link"><a href="#">2</a></li>
            <li id="3" class="carPagination pag-link"><a href="#">3</a></li>
            <li id="4" class="carPagination pag-link"><a href="#">4</a></li>
            <li id="5" class="carPagination pag-link"><a href="#">5</a></li>
            <li class="pag-link"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
        </ul> -->


        <ul class="pagination-custom text-center mt-3" id="customPagination">
            <li class="pag-link"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
            <!-- <li id="1" class="carPagination pag-link current"><span>1</span></li> -->
            <li id="1" class="carPagination pag-link"><a href="#">1</a></li>
            <li id="2" class="carPagination pag-link"><a href="#">2</a></li>
            <li id="3" class="carPagination pag-link"><a href="#">3</a></li>
            <li id="4" class="carPagination pag-link"><a href="#">4</a></li>
            <li id="5" class="carPagination pag-link"><a href="#">5</a></li>
            <li class="pag-link"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
        </ul>


                    </div>

                </div>
            </div>
        </div>
    </div>    
    <!-- car search div end here-->

<hr>


    <!--footer div start here-->
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-8 col-sm-12">
                <div class="row">
                    <div class="col-md-12">
                        <a href="#" class="btn btn-primary mb-2 btn-lg   mt-4">Contact us</a>
                        <a href="#" class="btn btn-primary mb-2 btn-lg  mt-4">Careers</a>
                        <a href="#" class="btn btn-primary mb-2 btn-lg  mt-4">Complaint </a>
                        <a href="#" class="btn btn-primary mb-2 btn-lg  mt-4">Press office</a>
                    </div>
                </div>

                <div class="my-3">
                    <div class="footer-nav">
                        <a href="#" class="m-2">Terms &amp; conditions</a><span>|</span>
                        <a href="#" class="m-2">Privacy Policy</a><span>|</span>
                        <a href="#" class="m-2">Cookie policy</a><span>|</span>
                        <a href="#" class="m-2">Acceptable use policy</a>
                    </div>
                </div>

                <p class="card-textadd">
                    CarFinance247<br>
                    Universal Square<br>
                    Devonshire Street North<br>
                    Manchester<br>
                    M12 6JH
                </p>

                <p class="card-textadd">*This approval is subject to the lender recognising a need for any further information, having any concerns or discovering any discrepancies in documentation you provide to us. In such situations, they also then have the right to request additional information, change the lending amount or ultimately decline the request for finance if not fully satisfied. CarFinance 247 is a trading name of CarFinance 247 Limited, a credit broker and insurance intermediary, and 247 Money Group Limited (247 Money), a lender. Both companies are part of the 247 group of companies. </p>

                <p class="card-textadd">CarFinance 247 is authorised and regulated by the Financial Conduct Authority under reference number: 653019. Registered office: Universal Square, Devonshire Street North, Manchester, M12 6JH. Registered in England. Company registration no. 06035525. Data Protection Registration Number Z1897658. </p>

                <p class="card-textadd">247 Money is authorised and regulated by the Financial Conduct Authority. Registered office: Universal Square, Devonshire Street North, Manchester, M12 6JH. Registered in England. Company registration no. 10989530. Data Protection Registration Number ZA456831.  </p>

                <p class="card-textadd">All finance is subject to status and income. Written quotations on request. CarFinance 247 can introduce you to a limited number of finance providers, including 247Money, based upon your credit rating and will receive commission for such introductions. </p>

                <p class="card-textadd"> We do not charge a fee for arranging the finance, however some of our lenders may charge a fee. Your account manager can provide more information on this.  </p>

                <P class="card-textadd"> This site uses cookies so that we can provide you with the best user experience. By continuing to use the site you are consenting for cookies to be used. Further information on cookies and how you can disable them is available here.</P>
                
            </div>

            <div class="col-lg-4">
                <div class="social-icons mt-4">
                <a href="https://www.youtube.com/Carfinance247couk"><img src="{{ asset(env('ASSETS_PATH').'front2/images/social-play.png') }}" class="img-fluid" width="200"></a>
                <a href="https://www.instagram.com/carfinance247/"><img src="{{ asset(env('ASSETS_PATH').'front2/images/social-facebook.png') }}" class="img-fluid" width="200"></a>
                <a href="https://twitter.com/carfinance247"><img src="{{ asset(env('ASSETS_PATH').'front2/images/social-instagrame.png') }}" class="img-fluid" width="200"></a>
                <a href="https://www.facebook.com/carfinance247/"><img src="{{ asset(env('ASSETS_PATH').'front2/images/social-tweeter.png') }}" class="img-fluid" width="200"></a>
                </div>
            </div>
        </div>


    </div>
    <!--footer div end here-->


    <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal modaldown fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modalwidt   modal-dialog-scrollable" role="document">
    <div class="modal-content text-left">
      <div class="modal-header">
        <h4 class="modal-title fontsmall text-center" id="exampleModalScrollableTitle">Select make(s)</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body modalleft">
        <div class="col"><input type="checkbox" class="largerCheckbox">Abarth</div>
        <div class="col"><input type="checkbox">AC</div>
        <div class="col"><input type="checkbox">Aixam</div>
        <div class="col"><input type="checkbox">Alfa Romeo</div>
        <div class="col"><input type="checkbox">Alpine</div>
        <div class="col"><input type="checkbox">Asia</div>
        <div class="col"><input type="checkbox">Aston Martin</div>
        <div class="col"><input type="checkbox">Audi</div>
        <div class="col"><input type="checkbox">Austin</div>
        <div class="col"><input type="checkbox">Bentley</div>
        <div class="col"><input type="checkbox">BMW</div>
        <div class="col"><input type="checkbox">Bristol</div>
        <div class="col"><input type="checkbox">Abarth</div>
        <div class="col"><input type="checkbox">AC</div>
        <div class="col"><input type="checkbox">Aixam</div>
        <div class="col"><input type="checkbox">Alfa Romeo</div>
        <div class="col"><input type="checkbox">Alpine</div>
        <div class="col"><input type="checkbox">Asia</div>
        <div class="col"><input type="checkbox">Aston Martin</div>
        <div class="col"><input type="checkbox">Audi</div>
        <div class="col"><input type="checkbox">Austin</div>
        <div class="col"><input type="checkbox">Bentley</div>
        <div class="col"><input type="checkbox">BMW</div>
        <div class="col"><input type="checkbox">Bristol</div>

      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
@endsection


@section('lastOneFooter')

<script type="text/javascript">
// How Many Car record display in VIEW
var perPageNumber = 10;


// Remove Old Car Record
function removeOldCarList(){
  var i;
  for(i=0; i <= perPageNumber; i++){
    $("#carboarder").remove();
  }
} // removeOldCarList - end



// Remove Not Found MSG
function removeNotFoundMsg(){
  var i;
  for(i=0; i <= perPageNumber; i++){
    $("#carboarder_notfound_msg").remove();
  }
}
</script>



<script type="text/javascript">
    $('.selebtn').click(function(e) {
    e.preventDefault(); //prevent the link from being followed
    $('.selebtn').removeClass('selected active');
    $(this).addClass('selected');
});
</script>

<script type="text/javascript">hidebtn
$(document).ready(function(){
    // Hide displayed paragraphs
    $(".hide-btn").click(function(){
        $(".more-filter").hide("slow");
        $("#hidebutton").show("slow");
        $("#hidebtn").hide("slow");
    });
    
    // Show hidden paragraphs
    $(".show-btn").click(function(){
        $(".more-filter").show("slow");
        $("#hidebutton").hide("slow");
        $("#hidebtn").show("slow");
    });
});
</script>



<script type="text/javascript">
/***************** [ Default car search ] ******************/
$(document).ready(function(){

// Default Pagination
var data = {perPage: perPageNumber, page: '1'}

  $.ajax(
    {
      type:"GET",
      data: data,
      url: "{{ url('default-car-list') }}",
      success: function(result){
    // Car list in OBJ
    var car_data = result;
    // Car list in Array(data)
    car_data_arr = car_data['data'];
    console.log(result);
    // array length
    var car_list_length = car_data['data'].length;

      // IF Result Not Found - append not found message
      if(parseInt(car_list_length) == 0){
          // Call Remove Old Car List
          removeOldCarList();

          // Call Remove Not Found MSG
          removeNotFoundMsg();

          $('#carListSection').append("<span id='carboarder_notfound_msg'>NOT FOUND</span>");
  }

    var i;
    for (i = 0; i < car_list_length; i++) {

      // Single Single car Data
      var car_id = car_data_arr[i]['id'];
      var dealer_id = car_data_arr[i]['dealer_id'];
      var car_dealer = car_data_arr[i]['dealer'];
      var car_name = car_data_arr[i]['car_name'];
      var car_model = car_data_arr[i]['car_model'];
      var car_type = car_data_arr[i]['car_type'];
      var car_price = car_data_arr[i]['car_price'];
      var car_pic = car_data_arr[i]['car_pic'];
      var brand_pic = car_data_arr[i]['brand_pic'];
      var car_company = car_data_arr[i]['car_company'];
      var car_engine_capacity = car_data_arr[i]['car_engine_capacity'];
      var car_caption = car_data_arr[i]['caption'];
      var car_description = car_data_arr[i]['car_description'];
      var badge_engine_cc = car_data_arr[i]['badge_engine_cc'];
      var engine_power_bph = car_data_arr[i]['engine_power_bph'];
      var top_speed = car_data_arr[i]['top_speed'];
      var CO2_in_g_km = car_data_arr[i]['CO2_in_g_km'];
      var EC_combined = car_data_arr[i]['EC_combined'];
      var EC_extra_urban = car_data_arr[i]['EC_extra_urban'];
      var EC_urban = car_data_arr[i]['EC_urban'];
      var price = car_data_arr[i]['price'];
      var monthly_price = car_data_arr[i]['monthly_price'];
      var mileage = car_data_arr[i]['mileage'];
      var year = car_data_arr[i]['year'];
      var fuel_type = car_data_arr[i]['fuel_type'];
      var transmission = car_data_arr[i]['transmission'];
      var body_type = car_data_arr[i]['body_type'];
      var colour = car_data_arr[i]['colour'];
      var doors = car_data_arr[i]['doors'];
      var engine_size = car_data_arr[i]['engine_size'];
      // Total car record
      var total_records = result['meta']['total']+" Results";

      // Single car image
      car_picArr = car_pic.split(',');
      car_picSingle = car_picArr[0];

      var webUrl = window.location.origin;
      var html1 ='';

      html1 +='<li class="media pt-4 mb-3333" id="carboarder">';
      html1 +='<a href="#"><img src='+webUrl+"/newcarloan/public/uploads/car-pic/cars/"+car_picSingle+' class="mr-3 img-fluid" alt="car" width="300"></a>';
      //html1 += '<a href="#" class="pictur"><img src="{{ asset(env('ASSETS_PATH').'front2/images/photo-camera.svg') }}" width="15">&nbsp;21</a>';
      html1 +='<div class="media-body">';
      html1 +='<h5 class="mt-0 mb-1">'+car_name+" ("+car_id+")"+'</h5>';
      html1 +='<p>'+car_model+' '+car_name+'</p>';
      html1 +='<h3 class="mt-2">£'+price+'</h3>';
      html1 +='<p>';
      html1 +='<span><img src="{{ asset(env('ASSETS_PATH').'front2/images/icon_calendar.svg') }}" width="15">'+year+'</span>';
      html1 +='<span><img src="{{ asset(env('ASSETS_PATH').'front2/images/icon_transmission.svg') }}" width="15">'+transmission+'</span>';
      html1 +='<span><img src="{{ asset(env('ASSETS_PATH').'front2/images/icon_speedo.svg') }}" width="15">'+top_speed+'</span>';
      html1 +='<span><img src="{{ asset(env('ASSETS_PATH').'front2/images/icon_fuel.svg') }}" width="15">'+fuel_type+'</span>';
      html1 +='</p>';
      html1 +='<p class="maplo mt-0"><i class="fa fa-map-marker"></i>&nbsp;Enter your postcode for distance</p>';
      html1 +='<button id='+car_id+' class="save_car_member_section btn btn-primary savefor mb-2 mt-2"><img src="{{ asset(env('ASSETS_PATH').'front2/images/heart(2).svg') }}" width="16">&nbsp;Save for later</button>';
      html1 +='</div>';
      html1 +='</li>';
      $('#carListSection').append(html1);

    }  // For Loop End

    // Total Car Record
    $("#total_cars_records").append(total_records);

    // // Dynamic Pagination
    // var pagination = '';
    // pagination += '<li class="pag-link"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>';
    // pagination += '<li id="1" class="carPagination pag-link current"><span>1</span></li>';
    // pagination += '<li id="2" class="carPagination pag-link"><a href="#">2</a></li>';
    // pagination += '<li id="3" class="carPagination pag-link"><a href="#">3</a></li>';
    // pagination += '<li id="4" class="carPagination pag-link"><a href="#">4</a></li>';
    // pagination += '<li id="5" class="carPagination pag-link"><a href="#">5</a></li>';
    // pagination += '<li class="pag-link"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>';
    // $('#customPagination').append(pagination);


  } // ajax success function - end
  
  });

}); // document ready - end

</script>


<script type="text/javascript">
  // Pagination to get data
  $(".carPagination").click(function(){

    // Get click paginationID
    var paginationID = parseInt(this.id);
    // alert(paginationID);

// Pagination
var data = {perPage: perPageNumber, page: paginationID}

$.ajax(
  {
    type:"GET",
    data: data,
    url: "{{ url('default-car-list') }}",
    success: function(result){

          // If result get than remove old car list
          // Call Remove Old Car List
          removeOldCarList();

          // Call Remove Not Found MSG
          removeNotFoundMsg();


  // Car list in OBJ
  var car_data = result;
  // Car list in Array(data)
  car_data_arr = car_data['data'];
  console.log(result);
  // array length
  var car_list_length = car_data['data'].length;

    // IF Result Not Found - append not found message
    if(parseInt(car_list_length) == 0){
          // Remove Old Record
          // Call Remove Old Car List
          removeOldCarList();

          // Call Remove Not Found MSG
          removeNotFoundMsg();

          $('#carListSection').append("<span id='carboarder_notfound_msg'>NOT FOUND</span>");
  }

  var i;
  for (i = 0; i < car_list_length; i++) {

    // Single Single car Data
    var car_id = car_data_arr[i]['id'];
    var dealer_id = car_data_arr[i]['dealer_id'];
    var car_dealer = car_data_arr[i]['dealer'];
    var car_name = car_data_arr[i]['car_name'];
    var car_model = car_data_arr[i]['car_model'];
    var car_type = car_data_arr[i]['car_type'];
    var car_price = car_data_arr[i]['car_price'];
    var car_pic = car_data_arr[i]['car_pic'];
    var brand_pic = car_data_arr[i]['brand_pic'];
    var car_company = car_data_arr[i]['car_company'];
    var car_engine_capacity = car_data_arr[i]['car_engine_capacity'];
    var car_caption = car_data_arr[i]['caption'];
    var car_description = car_data_arr[i]['car_description'];
    var badge_engine_cc = car_data_arr[i]['badge_engine_cc'];
    var engine_power_bph = car_data_arr[i]['engine_power_bph'];
    var top_speed = car_data_arr[i]['top_speed'];
    var CO2_in_g_km = car_data_arr[i]['CO2_in_g_km'];
    var EC_combined = car_data_arr[i]['EC_combined'];
    var EC_extra_urban = car_data_arr[i]['EC_extra_urban'];
    var EC_urban = car_data_arr[i]['EC_urban'];
    var price = car_data_arr[i]['price'];
    var monthly_price = car_data_arr[i]['monthly_price'];
    var mileage = car_data_arr[i]['mileage'];
    var year = car_data_arr[i]['year'];
    var fuel_type = car_data_arr[i]['fuel_type'];
    var transmission = car_data_arr[i]['transmission'];
    var body_type = car_data_arr[i]['body_type'];
    var colour = car_data_arr[i]['colour'];
    var doors = car_data_arr[i]['doors'];
    var engine_size = car_data_arr[i]['engine_size'];
    // Total car record
    var total_records = result['meta']['total']+" Results";

    // Single car image
    car_picArr = car_pic.split(',');
    car_picSingle = car_picArr[0];

    var webUrl = window.location.origin;
    var html1 ='';

    html1 +='<li class="media pt-4 mb-3333" id="carboarder">';
    html1 +='<a href="#"><img src='+webUrl+"/newcarloan/public/uploads/car-pic/cars/"+car_picSingle+' class="mr-3 img-fluid" alt="car" width="300"></a>';
    //html1 += '<a href="#" class="pictur"><img src="{{ asset(env('ASSETS_PATH').'front2/images/photo-camera.svg') }}" width="15">&nbsp;21</a>';
    html1 +='<div class="media-body">';
    html1 +='<h5 class="mt-0 mb-1">'+car_name+" ("+car_id+")"+'</h5>';
    html1 +='<p>'+car_model+' '+car_name+'</p>';
    html1 +='<h3 class="mt-2">£'+price+'</h3>';
    html1 +='<p>';
    html1 +='<span><img src="{{ asset(env('ASSETS_PATH').'front2/images/icon_calendar.svg') }}" width="15">'+year+'</span>';
    html1 +='<span><img src="{{ asset(env('ASSETS_PATH').'front2/images/icon_transmission.svg') }}" width="15">'+transmission+'</span>';
    html1 +='<span><img src="{{ asset(env('ASSETS_PATH').'front2/images/icon_speedo.svg') }}" width="15">'+top_speed+'</span>';
    html1 +='<span><img src="{{ asset(env('ASSETS_PATH').'front2/images/icon_fuel.svg') }}" width="15">'+fuel_type+'</span>';
    html1 +='</p>';
    html1 +='<p class="maplo mt-0"><i class="fa fa-map-marker"></i>&nbsp;Enter your postcode for distance</p>';
    html1 +='<button id='+car_id+' class="save_car_member_section btn btn-primary savefor mb-2 mt-2"><img src="{{ asset(env('ASSETS_PATH').'front2/images/heart(2).svg') }}" width="16">&nbsp;Save for later</button>';
    html1 +='</div>';
    html1 +='</li>';
    $('#carListSection').append(html1);

  }  // For Loop End

  // Total Car Record   ---      Hide for temp
  // $("#total_cars_records").append(total_records);

} // ajax success function - end

});
    

  }); // .carPagination click


</script>





<script type="text/javascript">
// Search By Filters

// Button Click in Search Filtter
$("#searchFiltersBtn").click(function(){
 var enterFormData = $("#filterForm").serializeArray();


  // Default Pagination
  var data = {perPage: perPageNumber, page: '1', formData: enterFormData}

    $.ajax(
      {
        type:"GET",
        data: data,
        url: "{{ url('default-car-list') }}",
        success: function(result){
          console.log(result);

          // If result get than remove old car list
          // Call Remove Old Car List
          removeOldCarList();

          // Call Remove Not Found MSG
          removeNotFoundMsg();


  // Car list in OBJ
  var car_data = result;
  // Car list in Array(data)
  car_data_arr = car_data['data'];
  console.log(result);
  // array length
  var car_list_length = car_data['data'].length;

  // IF Result Not Found - append not found message
  if(parseInt(car_list_length) == 0){
          // Call Remove Old Car List
          removeOldCarList();

          // Call Remove Not Found MSG
          removeNotFoundMsg();

    $('#carListSection').append("<span id='carboarder_notfound_msg'>NOT FOUND</span>");
  }

  var i;
  for (i = 0; i < car_list_length; i++) {

    // Single Single car Data
    var car_id = car_data_arr[i]['id'];
    var dealer_id = car_data_arr[i]['dealer_id'];
    var car_dealer = car_data_arr[i]['dealer'];
    var car_name = car_data_arr[i]['car_name'];
    var car_model = car_data_arr[i]['car_model'];
    var car_type = car_data_arr[i]['car_type'];
    var car_price = car_data_arr[i]['car_price'];
    var car_pic = car_data_arr[i]['car_pic'];
    var brand_pic = car_data_arr[i]['brand_pic'];
    var car_company = car_data_arr[i]['car_company'];
    var car_engine_capacity = car_data_arr[i]['car_engine_capacity'];
    var car_caption = car_data_arr[i]['caption'];
    var car_description = car_data_arr[i]['car_description'];
    var badge_engine_cc = car_data_arr[i]['badge_engine_cc'];
    var engine_power_bph = car_data_arr[i]['engine_power_bph'];
    var top_speed = car_data_arr[i]['top_speed'];
    var CO2_in_g_km = car_data_arr[i]['CO2_in_g_km'];
    var EC_combined = car_data_arr[i]['EC_combined'];
    var EC_extra_urban = car_data_arr[i]['EC_extra_urban'];
    var EC_urban = car_data_arr[i]['EC_urban'];
    var price = car_data_arr[i]['price'];
    var monthly_price = car_data_arr[i]['monthly_price'];
    var mileage = car_data_arr[i]['mileage'];
    var year = car_data_arr[i]['year'];
    var fuel_type = car_data_arr[i]['fuel_type'];
    var transmission = car_data_arr[i]['transmission'];
    var body_type = car_data_arr[i]['body_type'];
    var colour = car_data_arr[i]['colour'];
    var doors = car_data_arr[i]['doors'];
    var engine_size = car_data_arr[i]['engine_size'];
    // Total car record
    var total_records = result['meta']['total']+" Results";

    // Single car image
    car_picArr = car_pic.split(',');
    car_picSingle = car_picArr[0];

    var webUrl = window.location.origin;
    var html1 ='';

    html1 +='<li class="media pt-4 mb-3333" id="carboarder">';
    html1 +='<a href="#"><img src='+webUrl+"/newcarloan/public/uploads/car-pic/cars/"+car_picSingle+' class="mr-3 img-fluid" alt="car" width="300"></a>';
    //html1 += '<a href="#" class="pictur"><img src="{{ asset(env('ASSETS_PATH').'front2/images/photo-camera.svg') }}" width="15">&nbsp;21</a>';
    html1 +='<div class="media-body">';
    html1 +='<h5 class="mt-0 mb-1">'+car_name+" ("+car_id+")"+'</h5>';
    html1 +='<p>'+car_model+' '+car_name+'</p>';
    html1 +='<h3 class="mt-2">£'+price+'</h3>';
    html1 +='<p>';
    html1 +='<span><img src="{{ asset(env('ASSETS_PATH').'front2/images/icon_calendar.svg') }}" width="15">'+year+'</span>';
    html1 +='<span><img src="{{ asset(env('ASSETS_PATH').'front2/images/icon_transmission.svg') }}" width="15">'+transmission+'</span>';
    html1 +='<span><img src="{{ asset(env('ASSETS_PATH').'front2/images/icon_speedo.svg') }}" width="15">'+top_speed+'</span>';
    html1 +='<span><img src="{{ asset(env('ASSETS_PATH').'front2/images/icon_fuel.svg') }}" width="15">'+fuel_type+'</span>';
    html1 +='</p>';
    html1 +='<p class="maplo mt-0"><i class="fa fa-map-marker"></i>&nbsp;Enter your postcode for distance</p>';
    html1 +='<button id='+car_id+' class="save_car_member_section btn btn-primary savefor mb-2 mt-2"><img src="{{ asset(env('ASSETS_PATH').'front2/images/heart(2).svg') }}" width="16">&nbsp;Save for later</button>';
    html1 +='</div>';
    html1 +='</li>';
    $('#carListSection').append(html1);

  }  // For Loop End

  // Total Car Record   ---      Hide for temp
  $("#total_cars_records").empty();
  $("#total_cars_records").append(total_records);

        }    // Ajax Success - End

      });    // Ajax function - End

});  // searchFiltersBtn button - end
</script>


<script>
// Save Car in DB
 $(document).ready(function(){
      $(document).on('click', '.save_car_member_section' ,function(){
          var btncarid = this.id;
          var data = {carid: btncarid}

          $.ajax(
                {
                  type:"GET",
                  data: data,
                  url: "{{ url('member/save-car-member') }}",
                  success: function(result){
                    // console.log(result);
                    alert(result);
                  }
                });

      });
 });



</script>


@php
  echo URL::current();
@endphp

@endsection
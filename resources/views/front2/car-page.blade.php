@extends('front2/layout/master')

@section('content')
        <!-- Nav Menu -->
@include('front2/layout/navbar')
    <!-- Nav Menu -->
   
    <!--car apge div start here-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="cars.html">Cars</a></li>
                    <li class="breadcrumb-item"><a href="car-search.html">Car search</a></li>
                    <li class="breadcrumb-item"><a href="car-search.html">Search results</a> </li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="car-page.html">ASTON MARTIN, VANTAGE</a></li>
                </ol>
            </nav>
            </div>
        </div>
    </div>
    <!--car apge div end here-->

    <!--images gallery div start here-->
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:960px;overflow:hidden;visibility:hidden;background-color:#24262e;">

        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="{{ asset(env('ASSETS_PATH').'front2/images/photo-camera.svg') }}" width="15" />

        </div>

        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0;width:720px;height:480px;overflow:hidden;">

            <div>
                <img data-u="image" src="{{ asset(env('ASSETS_PATH').'front2/images/004.jpg') }}" />
                <img data-u="thumb" src="{{ asset(env('ASSETS_PATH').'front2/images/004-s99x66.jpg') }}" />
            </div>
            <div>
                <img data-u="image" src="{{ asset(env('ASSETS_PATH').'front2/images/005.jpg') }}" />
                <img data-u="thumb" src="{{ asset(env('ASSETS_PATH').'front2/images/005-s99x66.jpg') }}" />
            </div>
            <div>
                <img data-u="image" src="{{ asset(env('ASSETS_PATH').'front2/images/006.jpg') }}" />
                <img data-u="thumb" src="{{ asset(env('ASSETS_PATH').'front2/images/006-s99x66.jpg') }}" />
            </div>
            <div>
                <img data-u="image" src="{{ asset(env('ASSETS_PATH').'front2/images/007.jpg') }}" />
                <img data-u="thumb" src="{{ asset(env('ASSETS_PATH').'front2/images/007-s99x66.jpg') }}" />
            </div>
            <div>
                <img data-u="image" src="{{ asset(env('ASSETS_PATH').'front2/images/008.jpg') }}" />
                <img data-u="thumb" src="{{ asset(env('ASSETS_PATH').'front2/images/008-s99x66.jpg') }}" />
            </div>
            <div>
                <img data-u="image" src="{{ asset(env('ASSETS_PATH').'front2/images/009.jpg') }}" />
                <img data-u="thumb" src="{{ asset(env('ASSETS_PATH').'front2/images/009-s99x66.jpg') }}" />
            </div>
            <div>
                <img data-u="image" src="{{ asset(env('ASSETS_PATH').'front2/images/010.jpg') }}" />
                <img data-u="thumb" src="{{ asset(env('ASSETS_PATH').'front2/images/010-s99x66.jpg') }}" />
            </div>
            <div>
                <img data-u="image" src="{{ asset(env('ASSETS_PATH').'front2/images/013.jpg') }}" />
                <img data-u="thumb" src="{{ asset(env('ASSETS_PATH').'front2/images/013-s99x66.jpg') }}" />
            </div>
            <div>
                <img data-u="image" src="{{ asset(env('ASSETS_PATH').'front2/images/014.jpg') }}" />
                <img data-u="thumb" src="{{ asset(env('ASSETS_PATH').'front2/images/014-s99x66.jpg') }}" />
            </div>
            <div>
                <img data-u="image" src="{{ asset(env('ASSETS_PATH').'front2/images/015.jpg') }}" />
                <img data-u="thumb" src="{{ asset(env('ASSETS_PATH').'front2/images/015-s99x66.jpg') }}" />
            </div>
            <div>
                <img data-u="image" src="{{ asset(env('ASSETS_PATH').'front2/images/016.jpg') }}" />
                <img data-u="thumb" src="{{ asset(env('ASSETS_PATH').'front2/images/016-s99x66.jpg') }}" />
            </div>
            <div>
                <img data-u="image" src="{{ asset(env('ASSETS_PATH').'front2/images/017.jpg') }}" />
                <img data-u="thumb" src="{{ asset(env('ASSETS_PATH').'front2/images/017-s99x66.jpg') }}" />
            </div>
            <div>
                <img data-u="image" src="{{ asset(env('ASSETS_PATH').'front2/images/018.jpg') }}" />
                <img data-u="thumb" src="{{ asset(env('ASSETS_PATH').'front2/images/018-s99x66.jpg') }}" />
            </div>
            <div>
                <img data-u="image" src="{{ asset(env('ASSETS_PATH').'front2/images/018.jpg') }}" />
                <img data-u="thumb" src="{{ asset(env('ASSETS_PATH').'front2/images/018-s99x66.jpg') }}" />
            </div>
        </div>
                    
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort101" style="position:absolute;right:0px;top:0px;width:240px;height:480px;background-color:#000;" data-autocenter="2" data-scale-left="0.75">
            <div data-u="slides">
                <div data-u="prototype" class="p" style="width:99px;height:66px;">
                    <div data-u="thumbnailtemplate" class="t"></div>
                    <svg viewbox="0 0 16000 16000" class="cv">
                        <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                        <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                        <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                    </svg>
                </div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora093" style="width:50px;height:50px;top:0px;left:0px;" data-autocenter="2">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                <polyline class="a" points="7777.8,6080 5857.8,8000 7777.8,9920 "></polyline>
                <line class="a" x1="10142.2" y1="8000" x2="5857.8" y2="8000"></line>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora093" style="width:50px;height:50px;top:0px;right:250px;" data-autocenter="2">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                <polyline class="a" points="8222.2,6080 10142.2,8000 8222.2,9920 "></polyline>
                <line class="a" x1="5857.8" y1="8000" x2="10142.2" y2="8000"></line>
            </svg>
        </div>
    </div>
     <div class="jssora094">
           <p><img src="{{ asset(env('ASSETS_PATH').'front2/images/photo-camera.svg') }}" width="15">21</p>  

        </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!--images gallery div end here-->


    <!--aston div start here-->
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="aston">
                   <h3>ASTON MARTIN VATAGE V12 ZAGATO (1 of 150)</h3>
                </div>
            </div>
        </div>
    </div>
    <!--aston div end here-->

       <!--aston div start here-->
    <div class="container mb-5">
        <div class="row text-center mb-5">
            <div class="col">Price<br><span class="booktest"><small>£</small>2,700,000</span></div>
            <div class="col"><button type="button" class="btn btn-primary mt-3 mb-2 btn-md fac2eb callmesave "><span style="float: left;margin: 0 -17px 0 -16px;"><img src="{{ asset(env('ASSETS_PATH').'front2/images/like.svg') }}" width="16"></span><b>Saved</b></button></div>
            <div class="col"><button type="button" class="btn btn-primary mt-3 mb-2 btn-md faceb "><b>Book a test drive</b></button></div>
            <div class="col"><button type="button" class="btn btn-primary mt-3 mb-2 btn-md callme "><b>Call me about this car</b></button></div>
        </div>
        <hr>
    </div>
    <!--aston div end here-->


    <!--keyfacts div start here-->
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-12 text-center"><h3 class="colorcode mb-4">Key facts</h3></div>
        </div>
        <div class="row">
        <div class="col-lg-2 col-3">
          <div class="card mb-4 shadow-sm text-center d-block">
            <img src="{{ asset(env('ASSETS_PATH').'front2/images/icon_calendar.svg') }}" width="30">
            <div class="card-body svgiconsmall">
              <p class="card-textkeyfact">2013 </p>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-3">
          <div class="card mb-4 shadow-sm text-center d-block">
            <img src="{{ asset(env('ASSETS_PATH').'front2/images/icon_transmission.svg') }}" width="30">
            <div class="card-body svgiconsmall">
              <p class="card-textkeyfact">Manual </p>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-3">
          <div class="card mb-4 shadow-sm text-center d-block">
            <img src="{{ asset(env('ASSETS_PATH').'front2/images/Combined Shape.svg') }}" width="30">
            <div class="card-body svgiconsmall">
              <p class="card-textkeyfact">Coupe </p>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-3">
          <div class="card mb-4 shadow-sm text-center d-block">
            <img src="{{ asset(env('ASSETS_PATH').'front2/images/icon_speedo.svg') }}" width="30">
            <div class="card-body svgiconsmall">
              <p class="card-textkeyfact">600 Miles </p>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-3">
          <div class="card mb-4 shadow-sm text-center d-block">
            <img src="{{ asset(env('ASSETS_PATH').'front2/images/icon_engine.svg') }}" width="30">
            <div class="card-body svgiconsmall">
              <p class="card-textkeyfact">6.0L </p>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-3">
          <div class="card mb-4 shadow-sm text-center d-block">
            <img src="{{ asset(env('ASSETS_PATH').'front2/images/icon_fuel.svg') }}" width="30">
            <div class="card-body svgiconsmall">
              <p class="card-textkeyfact">Petrol </p>
            </div>
          </div>
        </div>
      </div>
        <hr>
    </div>
    <!--keyfacts div end here-->


    <!--summery page div start here-->
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-12">
            <h3 class="text-center colorcode mb-4">Summary</h3>
            <p class="card-textadd mb-4">20 Inch Front & 21 Inch Rear Alloys - Leirion Forged High Gloss Black With Central Locking Foot Plate In Carbon Fibre WMA Sat Nav & Infotainment System DAB digital radio 7x7 Park Assistance Rear Parking Sensors With Rear View Camera Electric and Heated Seats Interior Carbon Fibre Detailing Visibility Package LED Light Package SVJ Contrast Stitching SVJ Interior Logo In Coloured Stitching SVJ Decals Front Lifting System Alcantara / Leather In Nero Cosmus - Giallo Sensonum Premium Sound System Tracker Fitted Paint Protection Film (PPF)</p>
            </div>
        </div>
        <hr>
    </div>    
    <!--summery page div  end here-->


    <!--car-finance trusted div start here-->
    <div class="container">
        <div class="row mb-2">
            <div class="col-md-12  mb-3 ">
                <p class="text-center"><img src="{{ asset(env('ASSETS_PATH').'front2/images/logo.png') }}" class=" img-fluid text-center"></p>
                <p class="trusted text-center">All cars we finance are checked to ensure:</p>
                    <ul class="list-inline  lifont py-2">
                        <li class="list-inline-item listit"><i class="fa fa-check checkcolo"></i>No outstanding finance</li>
                        <li class="list-inline-item listit"><i class="fa fa-check checkcolo"></i>No history of theft</li>
                        <li class="list-inline-item listit"><i class="fa fa-check checkcolo"></i>Has not been written-off</li>
                        <li class="list-inline-item listit"><i class="fa fa-check checkcolo"></i>Sold by one of our trusted dealers</li>
                    </ul>
                <p class="trusteds text-center">Vehicle reference no. 15273935/38538</p>
            </div>
        </div>
    </div>
    <!--car-finance trusted div end here-->

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
@endsection

@section('lastOneFooter')

<script type="text/javascript">
      $('#slideone').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay: true,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})

        </script>

        <script type="text/javascript">
            $(document).ready(function() {
    $('[id^=detail-]').hide();
    $('.toggle').click(function() {
        $input = $( this );
        $target = $('#'+$input.attr('data-toggle'));
        $target.slideToggle();
        if($input.find('.col-md-2 i').attr('class')=="fa fa-chevron-down pull-right")
        {
             $input.find('.col-md-2 i').removeClass('fa-chevron-down'); 
             $input.find('.col-md-2 i').addClass('fa-chevron-up');
        }
        else if($input.find('.col-md-2 i').attr('class')=="fa pull-right fa-chevron-up")
        {
             $input.find('.col-md-2 i').removeClass('fa-chevron-up'); 
             $input.find('.col-md-2 i').addClass('fa-chevron-down');     
        }
         else if($input.find('.col-md-2 i').attr('class')=="fa pull-right fa-chevron-down")
        {
             $input.find('.col-md-2 i').removeClass('fa-chevron-down'); 
             $input.find('.col-md-2 i').addClass('fa-chevron-up');
        }

        else if($input.find('.col-md-2 i').attr('class')=="fa pull-right fa-chevron-down")
        {
             $input.find('.col-md-2 i').removeClass('fa-chevron-down'); 
             $input.find('.col-md-2 i').addClass('fa-chevron-up');
        }
       
    });
});
        </script>
@endsection
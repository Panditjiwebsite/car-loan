@extends('front2/layout/master')

@section('content')

    <!-- Nav Menu -->
    @include('front2/layout/navbar')
    <!-- Nav Menu -->

    <hr>


    <!--lookinf for div start here-->
    <div class="container-fluid bg-secondary purplecol py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center ">
                    <p class="lokin">Still looking for a car?</p>
                    <a href="car-search.html" class="btn btn-primary mb-2 btn-lg looking mt-5"><img src="{{ asset(env('ASSETS_PATH').'front2/images/magnifying-glass.svg') }}" width="25">Find a car</a>
                    <a href="add-car.html" class="btn btn-primary mb-2 btn-lg sky mt-5">I have found a car</a>
                </div>
            </div>
        </div>
    </div>
    <!--lookinf for div end here-->



    <!--saved car div start here-->
    
        <div class="container py-5">
            <div class="row">
                <div class="col-md-12">
                    <a href="#" style="text-decoration: none;">
                    <h3 class="colorcode mb-4">My saved cars (1)</h3>
                    <img src="{{ asset(env('ASSETS_PATH').'front2/images/1.png') }}" class="img-fluid"></a>
                    <p class="text-left mt-2"><b>ASTON MARTIN VANTAGE</b></p>
                    <p class="text-left mt-0 text-primary"><strong>     £2,700,000 21.61 Miles away from M4 7AJ </strong></p>
                
                </div>
            </div>
        </div>
   
    <!--saved car div end here-->


    <div class="container mb-3">
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme" id="slideone">
                    <div class="item"><a href="car-search.html"><img src="{{ asset(env('ASSETS_PATH').'front2/images/1.png') }}"></a><h4>ASTON MARTIN VANTAGE</h4><p>£2,700,000-</p></div>
                    <div class="item"><a href="car-search.html"><img src="{{ asset(env('ASSETS_PATH').'front2/images/1.png') }}"></a><h4>ASTON MARTIN VANTAGE</h4><p>£2,700,000-</p></div>
                    <div class="item"><a href="car-search.html"><img src="{{ asset(env('ASSETS_PATH').'front2/images/1.png') }}"></a><h4>ASTON MARTIN VANTAGE</h4><p>£2,700,000-</p></div>
                    <div class="item"><a href="car-search.html"><img src="{{ asset(env('ASSETS_PATH').'front2/images/1.png') }}"></a><h4>ASTON MARTIN VANTAGE</h4><p>£2,700,000-</p></div>
                    <div class="item"><a href="car-search.html"><img src="{{ asset(env('ASSETS_PATH').'front2/images/1.png') }}"></a><h4>ASTON MARTIN VANTAGE</h4><p>£2,700,000-</p></div>
                    <div class="item"><a href="car-search.html"><img src="{{ asset(env('ASSETS_PATH').'front2/images/1.png') }}"></a><h4>ASTON MARTIN VANTAGE</h4><p>£2,700,000-</p></div>
                    <div class="item"><a href="car-search.html"><img src="{{ asset(env('ASSETS_PATH').'front2/images/1.png') }}"></a><h4>ASTON MARTIN VANTAGE</h4><p>£2,700,000-</p></div>
                    <div class="item"><a href="car-search.html"><img src="{{ asset(env('ASSETS_PATH').'front2/images/1.png') }}"></a><h4>ASTON MARTIN VANTAGE</h4><p>£2,700,000-</p></div>
                    <div class="item"><a href="car-search.html"><img src="{{ asset(env('ASSETS_PATH').'front2/images/1.png') }}"></a><h4>ASTON MARTIN VANTAGE</h4><p>£2,700,000-</p></div>
                    <div class="item"><a href="car-search.html"><img src="{{ asset(env('ASSETS_PATH').'front2/images/1.png') }}"></a><h4>ASTON MARTIN VANTAGE</h4><p>£2,700,000-</p></div>
                    <div class="item"><a href="car-search.html"><img src="{{ asset(env('ASSETS_PATH').'front2/images/1.png') }}"></a><h4>ASTON MARTIN VANTAGE</h4><p>£2,700,000-</p></div>
                    <div class="item"><a href="car-search.html"><img src="{{ asset(env('ASSETS_PATH').'front2/images/1.png') }}"></a><h4>ASTON MARTIN VANTAGE</h4><p>£2,700,000-</p></div>
                </div>
            </div>
        </div>
    </div>

    
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
            items:4
        }
    }
})

        </script>
@endsection
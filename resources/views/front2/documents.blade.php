@extends('front2/layout/master')

@section('content')

    <!-- Nav Menu -->
    @include('front2/layout/navbar')
    <!-- Nav Menu -->

<!--document div start here-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="colorcode mb-4">Documents</h3>
            <p class="card-textdocu">Your finance application is on hold.</p>
            <p class="card-textdocu">If you’re looking to proceed, we just need you to get back in touch and we can do the rest. You could be behind the wheel of your new vehicle in no time at all! Please give us a call on 0333 247 1247 to reopen your application or simply apply <a href="#" class="card-texthere">here</a> . </p>
        </div>
    </div>
</div>
<!--document div end here-->


<!--doc-->
<div class="container mt-4">
  <div class="row ">
    <div class="col-sm-2 widthimga" style="cursor: no-drop;">
          <div class=" imageone text-center" id="documentPhoneId">We'll<br> request this<br> soon</div>
    </div>
    
      <div class="col-sm-2 widthimga" style="cursor: no-drop;padding-right: 0;padding-left: 0">
          <div class=" imageone2 text-center">We'll<br> request this<br> soon</div>
      </div>

      <div class="col-sm-2 widthimga" style="cursor: no-drop;">
          <div class=" imageone3 text-center">We'll<br> request this<br> soon</div>
      </div>

    </div>
  </div>
</div>
<!--doc-->


<!-- 
88     88  88 888888ba   88888888b 
88     88  88 88     8b  88        
88aaaaa88  88 88     88  88aaaa    
88     88  88 88     88  88        
88     88  88 88     8P  88        
88     88  88 8888888P   88888888P
[ THIS SECTION HIDE FOR TEMPORARY ]
-->


<!--appnow div start here-->
<!-- <div class="section ">
    <div class="container purpleco py-5">
        <div class="row ">
            <div class="col-md-12 ">
                <div class="documentapp">
                <h3>Download our app now</h3>
                <ul class="list-unstyled mb-1">
                    <li><i class="fa fa-square"></i>Live updates on your application</li>
                    <li><i class="fa fa-square"></i>Chat directly with your dedicated Customer Service Specialist</li>
                    <li><i class="fa fa-square"></i>Search over 130,000 quality used cars</li>
                </ul>
                <a href="#" class="btn btn-primary mb-2 btn-lg sky refer mt-4">Search Now</a>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!--appnow div end here-->

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

            <p class="card-textadd">We do not charge a fee for arranging the finance, however some of our lenders may charge a fee. Your account manager can provide more information on this.  </p>

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
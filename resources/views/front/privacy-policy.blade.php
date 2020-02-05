@extends('front.layouts.template')
@section('title', ' privacy-policy')

@section('content')
@include('front.layouts.includes.mainheader')
    <!--Page content end-->

<!--CTA panel start-->
<div class="section section2low ">

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="looking-quota text-center">
            <h2 style="color: #ffffff; font-weight: bold;">Looking to start your journey?</h2>
            <div class="getquota">
                <a href="quote-request.php" style="text-decoration: none;">
                <h3 style="font-weight: bold;color: #149ad3; padding-bottom: 0px!important;">Get a quote</h3>
                <p class="cta-text" style="padding-top: 0px;">No impact on your credit score</p>
            </a>
            </div>

            <p class="cta-text-p">Applying only takes a couple of minutes<br> and won't affect your credit score</p>

            </div>
        </div>
    </div>
</div>

</div>
<!-- // end .section -->

<!--Call Back-form start-->
<div class="section text-center ">

  <div class="container">
      <div class="row ">
          <div class="col-lg-12 ">
              <div class="looking-2quota text-center">
                  <form class="form-imline">
                    <div class="form-row callback">
                       <h2 class=" col-sm-12 col-xs-12 col-lg-3 mb-0 text-center colorcode mb-5 mt-3" style="font-size: 25px">ARRANGE A CALL BACK</h2>
                       <div class="col-sm-12 col-xs-12 col-lg-3 mb-2">
                        <input type="text" class="form-control col-form-label-lg" placeholder="Your Name">
                    </div>
                    <div class="col-sm-12 col-xs-12 col-lg-3 mb-2">
                        <input type="text" class="form-control col-form-label-lg" placeholder="Mobile number">
                    </div>
                    <div class="text-left">
                       <button type="submit" id="call-me-back" style="background-color: #1399d5!important; color: white; margin-top: 5px!important;" class="btn btn-primary mb-2 btn-lg sky">Call Back</button>
                   </div>
               </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>


<!--Call Back-form end-->



@stop

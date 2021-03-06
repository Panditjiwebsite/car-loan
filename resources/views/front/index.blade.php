@extends('front.layouts.template')
@section('title', ' Home')

@section('content')
@include('front.layouts.includes.mainheader')
@include('front.layouts.includes.homebanner')

  <!--calcuator start-->
  <div class=" section sectionlow80">
<div class="container mt-30-sm mt-0-lg">
        <div class="row justify-content-md-center">
          
        <div class="col-sm-12 ">
              <div class="o-calculator-container mt-5" data-component="calculator-panel">
    <div class="o-calculator-container-col--1 pl-30-md pt-50-md pr-30-md pb-30-md pl-50-lg pt-60-lg pr-50-lg pb-50-lg">
        <div class="mt-30-sm mt-0-md">
            <span for="borrowAmount" class="c-field__label c-field__label--sm mb-10-md">Amount to borrow</span>

            <div class="c-borrow-widget mb-15-sm" data-show-buttons="false">
                <button class="c-borrow-widget__btn c-btn c-btn--primary c-btn--icon" aria-label="Decrease borrow amount" onclick="alterCalcAmount(false);">
                    <svg width="25" height="4" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 2h21" stroke="#fff" stroke-width="3" fill="none" fill-rule="evenodd" stroke-linecap="round"></path>
                    </svg>
                </button>
                <div class="c-borrow-widget__amount">
                    <div class="c-field__group">
                        <span class="c-field__addon c-field__addon--left">&pound;</span>
                        <input type="text" value="7500" id="borrowAmount" name="borrowAmount" inputmode="numeric" lang="en-150" pattern="[0-9]*" class="c-field__input"
                            min="2000" max="40000" step="100" data-js-amount-input>
                    </div>
                </div> 
                <button class="c-borrow-widget__btn c-btn c-btn--primary c-btn--icon" aria-label="Increase borrow amount" onclick="alterCalcAmount(true);">
                    <svg width="25" height="25" viewBox="0 0 25 24" xmlns="http://www.w3.org/2000/svg">
                        <g stroke="#fff" stroke-width="3" fill="none" fill-rule="evenodd" stroke-linecap="round">
                            <path d="M2 11.95h21M12.5 2v19.95"></path>
                        </g>
                    </svg>
                </button>
            </div>
            <input type="range" class="c-slider" name="borrowAmount" aria-label="Amount to borrow" data-js-borrow-slider>
        </div>

        <div class="mt-30-sm">
            <div class="c-payback-widget mb-10-sm">
                <span class="c-field__label c-field__label--sm mb-10-md">To pay over</span>
                <input type="text" placeholder="4 years" class="d-none">
                <div class="c-payback-widget__label">
                    <span data-js-year>4</span> <span data-js-year-text>Years</span>
                </div>
            </div>
            <input type="range" class="c-slider" min="1" max="7" step="1" value="4" name="year" autocomplete="off" aria-label="Years to pay over" data-js-year-slider>
        </div>

        <div class="mt-30-sm mt-35-md mb-50-sm mb-20-md">
            <div class="c-credit-profile-widget">
                <div class="c-credit-profile-widget__label">
                    <span for="creditProfile" class="c-field__label c-field__label--sm alagfont c-field__label--no-margin">Assuming your credit profile is</span>
                </div>
            </div>
        </div>
        <div class="c-credit-profile-widget__dropdown">
            <div class="c-field__wrapper">
                <select class="c-field__input--xs c-field__input--dropdown" name="creditProfile" id="creditProfile" data-js-credit-profile="">
                    <option value="excellent" selected="selected">Excellent</option>
                    <option value="good">Good</option>
                    <option value="fair">Fair</option>
                    <option value="bad">Bad</option>
                </select>
                <span class="c-field__icon-dropdown c-field__icon-dropdown--xs"></span>
            </div>
        </div>
    </div>

    <div class="o-calculator-container-col--2 pl-30-md pt-50-md pr-30-md pb-30-md pl-50-lg pt-80-lg pr-50-lg pb-50-lg pb-50-sm pt-25-sm pb-0-md pt-0-md" >
        <div class="c-summary-breakdown">
            <div class="c-summary-breakdown-row--1 mt-25-sm mt-0-md">
                <div class="c-summary-breakdown-row--2">
                <table class="c-summary-breakdown__table">
                    <tr>
                        <td class="c-summary-breakdown__table-label--total" style="border-bottom: none;">
                            <span data-js-total-term>48</span>
                            <span>monthly</span>
                            payments of
                        </td>
                    </tr>

                    <tr>
                        <td class="c-summary-breakdown__table-calc--total pb-5 "  style="border-bottom:2px #4a4a4a solid;">
                            <span class="c-summary-breakdown__table-calc-sign">&pound;</span>
                            <span class="c-summary-breakdown__table-calc-pound" data-js-pounds>245</span>
                            <span class="c-summary-breakdown__table-calc-pence" data-js-pence>98</span>
                        </td>
                    </tr>
                </table>
            </div>
                <table class="c-summary-breakdown__table mt-5">
                    <tr>
                        <td class="c-summary-breakdown__table-label"><b>Best available rate</b></td> 
                        <td class="c-summary-breakdown__table-label"><b>Total cost of credit</b></td> 
                        <td class="c-summary-breakdown__table-label"><b>Total repayment</b></td> 
                    </tr>

                    <tr>
                       
                        <td class="c-summary-breakdown__table-calc">
                            <span data-js-best-available-rate>XX</span>% APR
                        </td>
                        <td class="c-summary-breakdown__table-calc">
                            &pound; <span data-js-total-cost-of-credit>XXX.XX</span>
                        </td>
                        <td class="c-summary-breakdown__table-calc">
                            &pound; <span data-js-total-repayment>XX,XX.XX</span>
                        </td>
                    </tr>
                    
                  
                </table>
            </div>
            
            <div class="c-summary-breakdown-row--3 mt-5">
                <a href="quoteRequest" style="color: #fff!important;font-size:48px"  class="c-btn c-btn--primary c-btn--stacked c-btn--fluid c-summary-breakdown__btn btn__cta-f-font btn__cta-f-padding-10-15" data-js-apply>
                    Get a quote
                </a>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
</div>
</div>

<!--caculator-->      


<!--title above image-->
<div class="section">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="bo2x-icon text-center">
               <h3 style="color: #4a4a4a;"><b>What makes us diffrent to anyone else  </b></h3>
               <p class="mt-5" style="color: #4a4a4a;">We work with a panel of lenders to find the right car loan option for you. We know that no two customers are alike, and so we’ll look at your individual circumstances to find a car finance deal that suits you. </p>
               <p class="mb-4" style="color: #4a4a4a;">With more lenders, comes more choice, which is why we work with a panel of lenders to find car loans for people with a range </p>
            </div>
         </div>
      </div>
   </div>
</div>
<!--title above image-->
<!--3 image section-->
<div class="section sectionlow">
   <div class="container">
      <div class="row">
         <div class="col-md-4">
            <div class="car2d mb-4 shadow-sm">
               <img src="{{ url('front/images/makes-images-2.png') }}" class="img-fluid" height="300" >
               <div class="card-body text-center">
                  <p class="card-text">saving you money on car insurance</p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="ca2rd mb-4 shadow-sm">
               <img src="{{ url('front/images/makes-images-1.png') }}" class="img-fluid" height="300" >
               <div class="card-body text-center">
                  <p class="card-text">No-deposit choose from any reputable dealer</p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="car2d mb-4 shadow-sm">
               <img src="{{ url('front/images/makes-images-3.png') }}" class="img-fluid" height="300" >
               <div class="card-body text-center">
                  <p class="card-text">Free dash cam for all our drivers </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--3images section-->

<!--List of what to do-->
<div class="section">
   <div class="container">
      <div class="row mb-2">
         <div class="col-md-12">
            <h2 class="mb-0 text-center colorcode mb-5">The smarter way of financing your next car  </h2>
            <div class="row no-gutters bo2rder rounded overflow-hidden flex-md-row mb-4 pt-5 shadow-sm h-md-250 position-relative">
               <div class="col-auto d-none d-lg-block mt-3">
                  <img src="{{ url('front/images/smarter-images-1.png') }}" class="img-fluid" class="img-fluid" width="500">
               </div>
               <div class="col p-4 d-flex flex-column position-static">
                  <p class="card-text2">1. Apply online, quick and easy</p>
                  <p class="card-text2 mb-auto">Helping get you the best car finance rate suited to your needs and situation is what we’re here to do.
                     We have access to a large panel of lenders to help get you the best car finance rate.Shop for a car with a budget in mind from the comfort of your own home.
                  </p>
               </div>
            </div>
            <div class="row no-gutters bo2rder rounded overflow-hidden flex-md-row mb-4 pt-5 shadow-sm h-md-250 position-relative">
               <div class="col p-4 d-flex flex-column position-static">
                  <p class="card-text2">2. We take care of everything </p>
                  <p class="card-text2 mb-auto">You’ll be assigned a personal car finance specialist who will be there to do all the leg work. Answering any questions you may have and importantly making sure the process is fast and stress free. </p>
               </div>
               <div class="col-auto d-none d-lg-block mt-0">
                  <img src="{{ url('front/images/smarter-images-2.png') }}" class="img-fluid" class="img-fluid" width="500">
               </div>
            </div>
            <div class="row no-gutters bo2rder rounded overflow-hidden flex-md-row mb-4 pt-5 shadow-sm h-md-250 position-relative">
               <div class="col-auto d-none d-lg-block ">
                  <img src="{{ url('front/images/smarter-images-3.png') }}" class="img-fluid" class="img-fluid" width="500">
               </div>
               <div class="col p-4 d-flex flex-column position-static">
                  <p class="card-text2">3. Time to pick your new ride</p>
                  <p class="card-text2 mb-auto">You can find your perfect car from any one of our trusted dealers, we’ll do the leg work, making sure we carry out all the essential checks to make sure everything run smoothly from start to finish!  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>




<!--plist section-->




<!--page content end-->



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
                      <p class="cta-text" style="">No impact on your credit score</p>
                  </a>
                  </div>

                  <p class="cta-text-p">Applying only takes a couple of minutes<br> and won't affect your credit score</p>

                  </div>
              </div>
          </div>
      </div>

  </div>
<!--CTA panel end-->


<!--Carosel area-->
<div class="section sectionlow">
      <div class="container">

        <div class="row mt-5">
          <div class="col-md-6 mx-auto text-center section-heading sectiheading">
            <h2 lass="text-center" style="color: #4a4a4a;">Best first car deals</h2>
          </div>
        </div>
<!--carosel-->
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
                             <button type="submit" id="call-me-back" style="background-color: #1399d5!important; color: white; margin-top: 0px!important;" class="btn btn-primary mb-2 btn-lg sky">Call Back</button>
                         </div>
                     </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>






<!--Call Back-form end-->

   <div class="section sectionboot80">
        <div class="container">
            <h2 class="mb-0 text-center colorcode mb-5">FAQ - OUR EXPERTS HAVE THE ANSWERS</h2>
    <div class="panel panel-default">
        <ul class="list-group">
            <li class="list-group-item">
                <div class="row toggle" id="dropdown-detail-1" data-toggle="detail-1" >
                    <div class="col-md-10 ">
                        What is car finance?
                    </div>
                    <div class="col-md-2 text-right"><i class="fa fa-chevron-right"></i></div>
                </div>
                <div id="detail-1">
                    <hr></hr>
                    <div class="container">
                        <div class="fluid-row mt-3">

                <dd>
                    placeholder
                </dd>
                        </div>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="row toggle" id="dropdown-detail-2" data-toggle="detail-2">
                    <div class="col-md-10">
                        Why come to GoCarLoans for vehicle finance?
                    </div>
                    <div class="col-md-2 text-right"><i class="fa fa-chevron-right pull-right"></i></div>
                </div>
                <div id="detail-2">
                    <hr></hr>
                    <div class="container">
                        <div class="fluid-row mt-3">
                          <dt>

                </dt>
                <dd>
                    placeholder.
                </dd>
                        </div>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="row toggle" id="dropdown-detail-3" data-toggle="detail-3">
                    <div class="col-md-10">
                        Can i get car finance if I have bad credit?
                    </div>
                    <div class="col-md-2 text-right"><i class="fa fa-chevron-right pull-right"></i></div>
                </div>
                <div id="detail-3">
                    <hr></hr>
                    <div class="container">
                        <div class="fluid-row mt-3">

                <dd>
                    placeholder
                </dd>
                        </div>
                    </div>
                </div>
            </li>

            <li class="list-group-item">
                <div class="row toggle" id="dropdown-detail-4" data-toggle="detail-4">
                    <div class="col-md-10">
                        Why don't GoCarLoans charge any fees?
                    </div>
                    <div class="col-md-2 text-right"><i class="fa fa-chevron-right pull-right"></i></div>
                </div>
                <div id="detail-4">
                    <hr></hr>
                    <div class="container">
                        <div class="fluid-row mt-3">

                <dd>
                    placeholder
                </dd>
                        </div>
                    </div>
                </div>
            </li>

            <li class="list-group-item">
                <div class="row toggle" id="dropdown-detail-5" data-toggle="detail-5">
                    <div class="col-md-10">
                        What vehicle can I buy with car finance from Go Car Loans?
                    </div>
                    <div class="col-md-2 text-right"><i class="fa fa-chevron-right pull-right"></i></div>
                </div>
                <div id="detail-5">
                    <hr></hr>
                    <div class="container">
                        <div class="fluid-row mt-3">

                <dd>
                    placeholder
                </dd>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
    </div>


@stop

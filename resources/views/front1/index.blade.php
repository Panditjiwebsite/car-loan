
@extends('front.layouts.template')
@section('content')

<div class="col-sm-12">
         <!--begin: Search Form -->
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
<div class="container mt-30-sm mt-0-lg">
   <div class="row justify-content-md-center">

         <!-- <p class="text-center" style="color: #4a4a4a;font-size: 25px;line-height: 35px">Start your journey to getting your new car the easy way with our car finance calculator . 
            Work out what your monthly repayments might look like below.</p>
            
            <p class="text-center"><span style="font-weight: bold;font-size:30px;margin-bottom: 15px;color: #4a4a4a;">Car finance made easy!</span></p> -->
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
                        <span for="creditProfile" class="c-field__label c-field__label--sm c-field__label--no-margin">Assuming your credit profile is</span>
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
                           <td class="c-summary-breakdown__table-label">Best available rate</td>
                           <td class="c-summary-breakdown__table-calc">
                              <span data-js-best-available-rate>XX</span>% APR
                           </td>
                        </tr>
                        <tr>
                           <td class="c-summary-breakdown__table-label">Total cost of credit</td>
                           <td class="c-summary-breakdown__table-calc">
                              &pound; <span data-js-total-cost-of-credit>XXX.XX</span>
                           </td>
                        </tr>
                        <tr>
                           <td class="c-summary-breakdown__table-label">
                              Total repayment
                           </td>
                           <td class="c-summary-breakdown__table-calc">
                              &pound; <span data-js-total-repayment>XX,XX.XX</span>
                           </td>
                        </tr>
                     </table>
                  </div>
                  <div class="c-summary-breakdown-row--3 mt-5">
                     <a href="{{('quoteRequest')}}" style="color: #fff!important" data-ga-item data-ga-label="Clicked-Apply-Loan-Summary-" data-ga-action="Clicked Apply" data-ga-category="" data-ga-event="Apply" class="c-btn c-btn--primary c-btn--stacked c-btn--fluid c-summary-breakdown__btn btn__cta-f-font btn__cta-f-padding-10-15" data-js-apply>
                     Get a quote
                     <span>No impact on your credit score</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--caculator-->
<!-- // end .section -->
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
<!-- // end .section -->
<div class="section sectionlow">
   <div class="container">
      <div class="row">
         <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
               <img src="{{ asset(env('ASSETS_PATH').'front/images/makes-images-2.png')}}" class="img-fluid" height="300" >
               <div class="card-body text-center">
                  <p class="card-text">saving you money on car insurance</p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
               <img src="{{ asset(env('ASSETS_PATH').'front/images/makes-images-1.png')}}" class="img-fluid" height="300" >
               <div class="card-body text-center">
                  <p class="card-text">No-deposit choose from any reputable dealer</p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
               <img src="{{ asset(env('ASSETS_PATH').'front/images/makes-images-3.png')}}" class="img-fluid" height="300" >
               <div class="card-body text-center">
                  <p class="card-text">Free dash cam for all our drivers </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="section">
   <div class="container">
      <div class="row mb-2">
         <div class="col-md-12">
            <h2 class="mb-0 text-center colorcode mb-5">The smarter way of financing your next car  </h2>
            <div class="row no-gutters bo2rder rounded overflow-hidden flex-md-row mb-4 pt-5 shadow-sm h-md-250 position-relative">
               <div class="col-auto d-none d-lg-block mt-3">
                  <img src="{{ asset(env('ASSETS_PATH').'front/images/smarter-images-1.png')}}" class="img-fluid" class="img-fluid" width="500">
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
                  <img src="{{asset(env('ASSETS_PATH').'front/images/smarter-images-2.png')}}" class="img-fluid" class="img-fluid" width="500">
               </div>
            </div>
            <div class="row no-gutters bo2rder rounded overflow-hidden flex-md-row mb-4 pt-5 shadow-sm h-md-250 position-relative">
               <div class="col-auto d-none d-lg-block ">
                  <img src="{{asset(env('ASSETS_PATH').'front/images/smarter-images-3.png')}}" class="img-fluid" class="img-fluid" width="500">
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

<div class="section">
   <div class="container">
      <div class="row">
         <div class="col-md-6 mx-auto text-center section-heading sectiheading">
            <h2 class="mb-0 text-center colorcode mb-5">Join Our Next Adventure</h2>
         </div>
      </div>
      
      
      <div class="owl-carousel owl-theme mt-4" id="slideone">
         @if(isset($carslist) && $carslist)
            @foreach($carslist as $carData)
           
         <div class="item">
            <a href="#" style="text-decoration: none;">
               <img src="{{url('public/uploads/car-pic/cars').'/'.$carData->car_pic }}" alt="Image" style="width: 300px;">
               <h4>{{$carData->car_name}}</h4>
               <p>{!! $carData->caption !!}</p>
               <p><b>From £ {{$carData->car_price}}</b></p>
            </a>
         </div>
         @endforeach
         @endif
   

      </div>
   </div>
</div>

<!-- // end .section -->
<div class="section sectionlow">
   <div class="container lig2ht-bg">
      <div class="row">
         <div class="col-lg-12" style="padding: 40px">
            <div class="looking-quota text-center">
               <h2 style="color: #4a4a4a;">Looking to start your journey?</h2>
               <div class="getquota">
                  <a href="{{('quoteRequest')}}" style="color: #fff!important" data-ga-item data-ga-label="Clicked-Apply-Loan-Summary-" data-ga-action="Clicked Apply" data-ga-category="" data-ga-event="Apply" data-js-apply style="text-decoration: none;" >
                     <h3 style="font-weight: bold;color: #149ad3">Get a quote</h3>
                     <p style="color:#149ad3">No impact on your credit score</p>
                  </a>
               </div>
               <p class="mb-4">Applying only takes a couple of minutes<br> and won't affect your credit score</p>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- // end .section -->
<!-- // end .section -->
<div class="section ">
   <div class="container ">
      <div class="row">
         <div class="col-lg-12" style="background-color: #f4fa2fd;padding: 20px">
            <div class="looking-2quota text-center">
               <h2 class="mb-0 text-center colorcode mb-5">Arrange a call Back</h2>
               <form>
                  <div class="form-row">
                     <div class="col-sm-12 col-xs-12 col-lg-4 mb-2">
                        <input type="text" class="form-control col-form-label-lg" placeholder="Your Name">
                     </div>
                     <div class="col-sm-12 col-xs-12 col-lg-4 mb-2">
                        <input type="text" class="form-control col-form-label-lg" placeholder="Mobile number">
                     </div>
                     <div class="col-sm-12 col-xs-12 col-lg-4 mb-2">
                        <button type="submit" class="btn btn-primary mb-2 btn-lg sky">Call Back</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- // end .section -->
<div class="section" style="padding: 0 0 80px 0">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h3 class="text-center mb-5" style="color: #4a4a4a;font-weight: bold;">FAQ-OUR EXPERTS HAVE THE ANSWERS</h3>
            <div class="faq-wrapper">
               <input id="question1" type="checkbox" name="toggle" class="question" />
               <label for="question1">
                  <p>What is car finance?</p>
               </label>
               <section id="answer1">
                  <p>
                     The answer is 42.
                  </p>
               </section>
               <input id="question2" type="checkbox" name="toggle" class="question" />
               <label for="question2">
                  <p>Why come to GocartLoan for vehicle finance?</p>
               </label>
               <section id="answer2">
                  <p>
                     You don't. Simple.
                  </p>
               </section>
               <input id="question3" type="checkbox" name="toggle" class="question" />
               <label for="question3">
                  <p>Can I get car finance if I have bad credit?</p>
               </label>
               <section id="answer3">
                  <p>
                     Yes, and it looks good. Pretty awesome, eh?
                  </p>
               </section>
               <input id="question4" type="checkbox" name="toggle" class="question" />
               <label for="question4">
                  <p>Why don't GoCarLoan charge any fess?</p>
               </label>
               <section id="answer4">
                  <p>
                     But this wasn't the answer you were looking for.
                  </p>
               </section>
               <input id="question4" type="checkbox" name="toggle" class="question" />
               <label for="question4">
                  <p>What vehicle can I buy with car finance from Zuto?</p>
               </label>
               <section id="answer4">
                  <p>
                     But this wasn't the answer you were looking for.
                  </p>
               </section>
            </div>
         </div>
      </div>
   </div>
</div>
@stop
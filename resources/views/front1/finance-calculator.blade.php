@extends('front.layouts.mastertemplate')
@section('content')
    <header class=" mt-5">
        <div class="container ">
            <h1>Time to calculate!</h1>
            <a href="get-quote-form.html" style="text-decoration: none;font-size: 20px;font-weight: bold;" class="tagline"><span style="font-size: 30px;font-weight: bold;">Get a quote</span><br>no impact on your credit score  </a>
        </div>

        <div class="img-holder mt-3"><img src="{{asset(env('ASSETS_PATH').'front/images/calculator-banner.png') }}" alt="phone" class="img-fluid"></div>         

         </div>

    </header>

<!--     <div class="client-logos my-5">
        <div class="container text-center">
            <img src="images/client-logos.png" alt="client logos" class="img-fluid">
        </div>
    </div> -->


    <!--caculator-->

<div class="container mt-30-sm mt-0-lg">
    <div class="row justify-content-md-center">
          
        <div class="col-sm-12 mt-5">
<p class="text-center" style="color: #4a4a4a;font-size: 25px;line-height: 35px">Start your journey to getting your new car the easy way with our car finance calculator . Work out what your monthly repayments might look like below.</p>

<p class="text-center"><span style="font-weight: bold;font-size:37px;margin-bottom: 15px;color: #4a4a4a;">Car finance made easy!</span></p>
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
                <a href="get-quote-form.html" style="color: #fff!important"  class="c-btn c-btn--primary c-btn--stacked c-btn--fluid c-summary-breakdown__btn btn__cta-f-font btn__cta-f-padding-10-15">
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
    <div class="section sect2ionlow mt-3" style="padding: 80px 0 40px 0">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bo2x-icon text-center">
                    <h3 style="color: #4a4a4a;"><b>Our car finance calculator explained </b></h3>
                    <p class="mt-5" style="color: #4a4a4a;">We work with a panel of lenders to find the right car loan option for you. We know that no two customers are alike, and so we’ll look at your individual circumstances to find a car finance deal that suits you. </p>

                    <p class="mb-4" style="color: #4a4a4a;">With more lenders, comes more choice, which is why we work with a panel of lenders to find car loans for people with a range </p>
                   
                    </div>
                </div>
            </div>
            <div class="perspective-phone">
                <img src="images/cloud.png" alt="perspective phone" class="img-fluid">
            </div>
        </div>

    </div>
    <!-- // end .section -->



      <!-- // end .section -->
    <div class="section sectionlow">

        <div class="container light-bg">
            <div class="row">
                <div class="col-lg-12" style="padding: 40px">
                    <div class="looking-quota text-center">
                    <h2 style="color: #4a4a4a;">Looking to start your journey?</h2>
                    <div class="getquota">
                        <a href="get-quote-form.html" style="text-decoration: none;">
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
    <div class="section text-center">

        <div class="container">
            <div class="row ">
                <div class="col-lg-12 ">
                    <div class="looking-2quota text-center">
                         <h2 class="mb-0 text-center colorcode mb-5">Arrange a call Back</h2>

                        <form>
  <div class="form-row callback">
   
    <div class="col-sm-12 col-xs-12 col-lg-4 mb-2">
      <input type="text" class="form-control col-form-label-lg" placeholder="Your Name">
    </div>
    <div class="col-sm-12 col-xs-12 col-lg-4 mb-2">
      <input type="text" class="form-control col-form-label-lg" placeholder="Mobile number">
    </div>
    <div class="text-left">
       <button type="submit" class="btn btn-primary mb-2 btn-lg s2ky">Call Back</button>
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
                    <h3 class="text-center mb-5" style="color: #4a4a4a;font-weight: bold;">FAQ - Our experts have the answers
</h3>
                    <div class="faq-wrapper">
                        <input id="question1" type="checkbox" name="toggle" class="question" />
                        
                        <label for="question1">

                            <p>I need to buy my car quickly. When will i get a decision on my loan?</p>
                        </label>

                        <section id="answer1">
                            <p>
                              The answer is 42.
                          </p>
                      </section>

                      <input id="question2" type="checkbox" name="toggle" class="question" />
                      <label for="question2">

                        <p>Will i have to wait long to pick up my new car?</p>
                    </label>

                    <section id="answer2">
                        <p>
                          You don't. Simple.
                      </p>
                  </section>

                  <input id="question3" type="checkbox" name="toggle" class="question" />
                  <label for="question3">

                    <p>Can I pay off my car ﬁnance early?</p>
                </label>

                <section id="answer3">
                    <p>
                      Yes, and it looks good. Pretty awesome, eh?
                  </p>
              </section>

              <input id="question4" type="checkbox" name="toggle" class="question" />
              <label for="question4">
                <p>Can I get ﬁnance if I have bad credit?</p>
            </label>

            <section id="answer4">
                <p>
                  But this wasn't the answer you were looking for.
              </p>
          </section>


          <input id="question4" type="checkbox" name="toggle" class="question" />
          <label for="question4">

            <p>Can I buy a car from any dealership? </p>
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
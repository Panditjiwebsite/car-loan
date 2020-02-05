
@extends('front.layouts.mastertemplate')
@section('content')

 <header class="bg-gradient mt-5">
        <div class="container ">
            <div class="aboutheading">       
                <h2>About Us</h2>
            </div>                     
       
        <div class="img-holder mt-3"><img src="{{asset(env('ASSETS_PATH').'front/images/aboutus.png') }}" alt="phone" class="img-fluid" width="650"></div>       

         </div>

    </header>
    
    <!-- // end .section -->
    <div class="section sectionlow">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
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
                <div class="bo2x-icon text-center">
                    <h3 style="color: #4a4a4a;"><b>Who we are </b></h3>
                    <p class="mt-4" style="color: #4a4a4a;">Our approach to lending is underpinned by our focus on achieving good customer outcomes.  A large part of our approval decision is based on assessing how much a customer can afford  to spend on a ﬁnance repayment each month, and this ensures that our customers are  comfortable with their ﬁnance agreement. Our expert credit team are committed to providing  a service to meet the changing needs of our customers.</p>

                    <p class="mb-4" style="color: #4a4a4a;">we have helped dealers and consumers and built a panel of lenders, dedicated to delivering the best borrowing experience for all our customers.</p>
                   
                    </div>

                    <div class="bo2x-icon text-center mt-5">
                    <h3 style="color: #4a4a4a;"><b>What we do</b></h3>
                    <p class="mt-4" style="color: #4a4a4a;">Connecting our customers with a lender that can provide them with the best possible outcome is our goal and with relationships with dealers throughout the UK the process really couldn’t be any simpler. We continue to give back to our customers through our rewards system making every successful application our clients complete gives back money towards their insurance and dash cams to help lower it.</p>

                    <p class="mb-4" style="color: #4a4a4a;">We understand the difﬁculties life brings, that is why we provide affordable monthly payment options to give our customers the ﬂexibility to work within their budget. </p>
                   
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- // end .section -->


    <!-- // end .section -->
    <div class="section sectionlow mt-5">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bo2x-icon text-center">
                    <h3 style="color: #4a4a4a;"><b>Our Principals </b></h3>
                    <h6 class="subheading mt-5">TECHNOLOGY</h6>
                    <p class="mt-4" style="color: #4a4a4a;">Investing in tech is our main focus when it comes to our customers having a fast and smooth journey, our team of software developers have grown from a team of 2 to a team of 10 as we continue to make sure we’re on the cutting edge of technology. </p>                   
                    </div>

                   <div class="bo2x-icon text-center mt-5">
                    <h6 class="subheading mt-3">TRUSTWORTHINESS</h6>
                    <p class="mt-4" style="color: #4a4a4a;">Putting the customer ﬁrst are rules we standby! We will send your application to the most suitable lender to gain you the best possible rate. </p>                   
                    </div>

                    <div class="bo2x-icon text-center mt-5">
                    <h6 class="subheading mt-3">PRIVACY AND SECURITY Armin </h6>
                    <p class="mt-4" style="color: #4a4a4a;">We encrypt all our data and do not search any details without your permission. Please see t&c for further information.</p>                   
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- // end .section -->

      <!-- // end .section -->
    <div class="section section2low ">

        <div class="container light-bg">
            <div class="row">
                <div class="col-lg-12" style="padding: 40px">
                    <div class="looking-quota text-center">
                    <h2 style="color: #4a4a4a;">Looking to start your journey?</h2>
                    <div class="getquota">
                        <a href="#" style="text-decoration: none;">
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
    <div class="section text-center sectionboot80">

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
    <div class=" text-left">
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
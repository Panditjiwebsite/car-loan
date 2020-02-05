@extends('front.layouts.mastertemplate')
@section('content')


    <header class="bg-gradient mt-3 ">
        <div class="container ">
 
             <div class="mt-5 mb-5"><img src="{{asset(env('ASSETS_PATH').'front/images/our-process.png') }}" alt="phone" class="img-fluid" width="650"></div>       

         </div>
                   
    </header>



    <!-- // end .section -->
    <div class="section sectionlow mt-5">

        <div class="container">
            <h3 style="color: #4a4a4a;" class="text-center"><b>Our Contact Details</b></h3>
            <div class="row mt-5">


                    <div class="col-md-4 text-center">
                    <h6 class="subheading">CALL US ON </h6>
                    <p class="mt-2" style="color: #4a4a4a;">0333 6000 290 </p>                 
                    </div>

                    <div class="col-md-4 text-center">
                    <h6 class="subheading">LOCAL NUMBER </h6>
                    <p class="mt-2" style="color: #4a4a4a;">01202 684 898</p>                 
                    </div>

                    <div class="col-md-4 text-center">
                    <h6 class="subheading">LIVECHAT</h6>
                    <p class="mt-2" style="color: #4a4a4a;">Visit our Help & Advice section </p>                 
                    </div>
                
            </div>

            <div class="row mt-5">

                    <div class="col-md-6 text-center">
                    <h6 class="subheading">EMAIL </h6>
                    <p class="mt-2"> <a href="customerservices@creditplus.co.uk" target="_blank">customerservices@creditplus.co.uk</a> </p>                 
                    </div>

                    <div class="col-md-6 text-center">
                    <h6 class="subheading">POST</h6>
                    <p class="mt-2" style="color: #4a4a4a;">Creditplus Waterloo House Fleets Corner Nufﬁeld Road Poole Dorset BH17 0HL@creditplus.co.uk </p>                 
                    </div>
                
            </div>


            <div class="row mt-5">
                    <div class="col-md-12 text-center">
                    <h6 class="subheading">OPENING HOURS</h6>
                    <p class="mt-2" style="color: #4a4a4a;">Mon-Thurs: 09:00AM - 7:00PM<br> Friday: 09:00AM - 5:30PM <br>Saturday: 10:00AM - 4:00PM </p>                 
                    </div>
                
            </div>

            <div class="row mt-5 mb-5">
                <div class="col-lg-12">

                    <div class="bo2x-icon text-center mt-5">
                    <p class="mt-2" style="color: #4a4a4a;">Please call 0333 6000 290 which will cost no more than geographic numbers (starting 01 or 02) and are part of inclusive minutes subject to your provider and call package. If you're unsure how much your call will cost, we recommend you contact your phone service provider. Our Poole, Dorset number is 01202 684898.</p>                   
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
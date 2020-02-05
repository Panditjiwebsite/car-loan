@extends('front.layouts.mastertemplate')
@section('content')
    <header class="bg-gradient mt-5">
        <div class="container ">
            <div class="aboutheading">       
                <h3>&nbsp;</h3>
            </div>  
             <div class="img-holder mt-5"><img src="{{asset(env('ASSETS_PATH').'front/images/our-process.png') }}" alt="phone" class="img-fluid" width="650"></div>       

         </div>
                   
    </header>


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


          <input id="question5" type="checkbox" name="toggle" class="question" />
          <label for="question5">

            <p>Can I buy a car from any dealership? </p>
        </label>

        <section id="answer5">
            <p>
              But this wasn't the answer you were looking for.
          </p>
      </section>


      <input id="question6" type="checkbox" name="toggle" class="question" />
          <label for="question6">

            <p>What if I’ve been refused elsewhere?  </p>
        </label>

        <section id="answer6">
            <p>
              But this wasn't the answer you were looking for.
          </p>
      </section>

      <input id="question7" type="checkbox" name="toggle" class="question" />
          <label for="question47">

            <p>I have a party exchange, can I trade this in?  </p>
        </label>

        <section id="answer7">
            <p>
              But this wasn't the answer you were looking for.
          </p>
      </section>

      <input id="question8" type="checkbox" name="toggle" class="question" />
          <label for="question8">

            <p>How will I know if I am eligible for car credit?</p>
        </label>

        <section id="answer8">
            <p>
              But this wasn't the answer you were looking for.
          </p>
      </section>

      <input id="question9" type="checkbox" name="toggle" class="question" />
          <label for="question9">

            <p>How will I know what ﬁnance rate I will be offered?</p>
        </label>

        <section id="answer9">
            <p>
              But this wasn't the answer you were looking for.
          </p>
      </section>

      <input id="question10" type="checkbox" name="toggle" class="question" />
          <label for="question10">

            <p>What if I have a poor credit history?</p>
        </label>

        <section id="answer10">
            <p>
              But this wasn't the answer you were looking for.
          </p>
      </section>

      <input id="question11" type="checkbox" name="toggle" class="question" />
          <label for="question11">

            <p>How do you make your decisions?</p>
        </label>

        <section id="answer11">
            <p>
              But this wasn't the answer you were looking for.
          </p>
      </section>

      <input id="question12" type="checkbox" name="toggle" class="question" />
          <label for="question12">

            <p>What if I don’t know what car I want to buy?</p>
        </label>

        <section id="answer13">
            <p>
              But this wasn't the answer you were looking for.
          </p>
      </section>

      <input id="question14" type="checkbox" name="toggle" class="question" />
          <label for="question14">

            <p>How long does it take to get an answer?</p>
        </label>

        <section id="answer14">
            <p>
              But this wasn't the answer you were looking for.
          </p>
      </section>

  </div>
                </div>
            </div>
        </div>
    </div>

    


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
  
@stop
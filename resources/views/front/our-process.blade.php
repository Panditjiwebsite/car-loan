@extends('front.layouts.template')
@section('title', ' About us')
@include('front.layouts.includes.mainheader')

@section('content')

<!--Lead-image & title-start-->
<header class="mt-3 mb-5">
        <h1 class="fontsmall">Go and take a look at our process</h1>
        <a href="{{ url('quoteRequest') }}" style="text-decoration: none;font-size: 20px;font-weight: bold;" class="tagline"><span style="font-size: 30px;font-weight: bold;">Get a quote</span><br>no impact on your credit score  </a>
</header>


<header>
    <div class="container" style="margin: auto;text-align: center;"><img src="{{ url('front/images/our-process-2.png') }}" class="img-fluid">

 </div>
</header>

<!--information-->
 <div class="section sectionlow mt-5" >

           <div class="container pb-5" style="border-bottom: 2px #1399d5 solid">
               <div class="row">
                   <div class="col-lg-12">
                       <div class="bo2x-icon text-center">
                       <h3 style="color: #4a4a4a;"><b>Car ﬁnance made easy!</b></h3>
                       <p class="mt-4" style="color: #4a4a4a;">No one likes a hard process, we’ve worked hard to make sure our process is fast and easy by making sure we do all the leg work for you.</p>
                       </div>

                      <div class="bo2x-icon text-center mt-5">
                       <p class="mt-4" style="color: #4a4a4a;">Want to ﬁnd the perfect car within your price range from a dealer you can trust? With us you can ﬁnd the perfect car from one of our trusted dealers, or give us the details of the car you’ve found yourself we’ll check the dealer to make sure you’re in safe hands. </p>
                       </div>

                       <div class="bo2x-icon text-center mt-5">
                       <p class="mt-4" style="color: #4a4a4a;">Use our car <a href="#" style="color: #1399d5!important;">ﬁnance calculator</a> to ﬁnd out what your monthly repayments will be for the loan you require.</p>
                       </div>

                   </div>
               </div>
           </div>

       </div>
 <!-- step by step-->
<div class="section sectionlow">
           <div class="container">
               <div class="row mb-2">
                   <div class="col-md-12" style="background: url({{ url('front/images/our-process-bg.png') }}) no-repeat;">
                       <!-- <h2 class="mb-0 text-center colorcode mb-5">The smarter way of financing your next car  </h2> -->
                       <div class="row no-gutters bo2rder rounded overflow-hidden flex-md-row mb-4 pt-5 shadow-sm h-md-250 position-relative">
                         <div class="col-md-4">&nbsp;</div>

                         <div class="col-md-4 col-md-5 p-4 d-flex flex-column position-static mt-5" style="margin-top: 100px!important">
                             <p class="card-text6"><span>Step 01</span></p>
                             <p class="card-text12">Get a quote</p>
                             <p class="card-text2 mb-auto">Complete our online form without any impact on your credit score, we only do an initial soft search so you don’t need to worry about your credit ﬁle. With a vast amount of lenders on our panel we’ll have the perfect<a href="#" style="color: #1399d5!important;"> ﬁnance option</a> for you. </p>
                         </div>

                         <div class="col-md-4">&nbsp;</div>

                     </div>

                     <div class="row no-gutters bo2rder rounded overflow-hidden flex-md-row mb-4 pt-5 shadow-sm h-md-250 position-relative">
                         <div class="col-md-4">&nbsp;</div>

                         <div class="col-md-4 col-md-5 p-1 d-flex flex-column position-static ">
                             <p class="card-text6"><span>Step 02</span></p>
                             <p class="card-text12">Get approved</p>
                             <p class="card-text2 mb-auto">Our simple online form is easy to complete you’ll be able to ﬁnd out how much you can borrow within minutes! Then all you have to do is sit back and relax your very own car ﬁnance specialist will be with you throughout the process to discuss what we need from you. </p>
                         </div>

                         <div class="col-md-4">&nbsp;</div>

                     </div>

                     <div class="row no-gutters bo2rder rounded overflow-hidden flex-md-row mb-4 pt-5 shadow-sm h-md-250 position-relative">
                         <div class="col-md-4">&nbsp;</div>

                         <div class="col-md-4 col-md-5 p-0 d-flex flex-column position-static mt-0">
                             <p class="card-text6"><span>Step 03</span></p>
                             <p class="card-text12">Choose your car</p>
                             <p class="card-text2 mb-auto">Once approved, you'll get access to our 'exclusive members’ area instantly where you can browse our vast range of quality cars from trusted UK dealerships. Our dealers go through regular vetting to make sure you can buy with piece of mind and conﬁdence, if you have already found a car that can work too. </p>
                         </div>

                         <div class="col-md-4">&nbsp;</div>

                     </div>

                     <div class="row no-gutters bo2rder rounded overflow-hidden flex-md-row mb-4 pt-5 shadow-sm h-md-250 position-relative">
                         <div class="col-md-4">&nbsp;</div>

                         <div class="col-md-4 col-md-5 p-0 d-flex flex-column position-static ">
                             <p class="card-text6"><span>Step 04</span></p>
                             <p class="card-text12">The boring stuff</p>
                             <p class="card-text2 mb-auto">Once you have picked your perfect car we’ll take care of all paperwork and pay the dealer directly. All you have to do it pick up your new car and drive away happy! </p>
                         </div>

                         <div class="col-md-4">&nbsp;</div>

                     </div>

                     <div class="row no-gutters bo2rder rounded overflow-hidden flex-md-row mb-4 pt-5 shadow-sm h-md-250 position-relative">
                         <div class="col-md-4">&nbsp;</div>

                         <div class="col-md-4 col-md-5 p-0 d-flex flex-column position-static ">
                             <p class="card-text6"><span>Step 05</span></p>
                             <p class="card-text12">Say “hello” to your new car</p>
                             <p class="card-text2 mb-auto">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               &nbsp;&nbsp;&nbsp;&nbsp;
                              </p>
                         </div>

                         <div class="col-md-4">&nbsp;</div>

                     </div>


                 </div>
             </div>
         </div>
     </div>
<!--end of step by step-->




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


<!--FAQ start-->
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
                    <div class="col-md-2 text-right"><i class="fa fa-chevron-right pull-right"></i></div>
                </div>
                <div id="detail-1">
                    <hr></hr>
                    <div class="container">
                        <div class="fluid-row">

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
                        <div class="fluid-row">
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
                        <div class="fluid-row">

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
                        <div class="fluid-row">

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
                        <div class="fluid-row">

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

<!--FAQ end-->










@stop

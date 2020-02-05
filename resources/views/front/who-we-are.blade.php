
@extends('front.layouts.template')

@section('title', ' About us')
@include('front.layouts.includes.mainheader')

@section('content')



    <!-- // end .section -->
    <header>
          <div class="container"><img src="{{ asset(env('ASSETS_PATH').'front/images/best-car-page.png')}}" class="img-fluid"> </div>
      </header>



   <!-- // end .section -->
   <div class="section sectionlow70 ">

       <div class="container">
           <div class="row">
               <div class="col-lg-12 mb-5">
                   <div class="bo2x-icon text-center">
                   <h3 style="color: #4a4a4a;"><b>Who we are</b></h3>
                   <p class="mt-4" style="color: #4a4a4a;">Our approach to lending is underpinned by our focus on achieving good customer outcomes.  A large part of our approval decision is based on assessing how much a customer can afford  to spend on a ﬁnance repayment each month, and this ensures that our customers are comfortable with their ﬁnance agreement. Our expert credit team are committed to providing  a service to meet the changing needs of our customers.</p>

                    <p class="mt-4" style="color: #4a4a4a;">we have helped dealers and consumers and built a panel of lenders, dedicated to delivering the best borrowing experience for all our customers. </p>


                   </div>
               </div>

               <div class="col-lg-12 mt-5">
                   <div class="bo2x-icon text-center">
                   <h3 style="color: #4a4a4a;"><b>What we do</b></h3>
                   <p class="mt-4" style="color: #4a4a4a;">Connecting our customers with a lender that can provide them with the best possible outcome is our goal and with relationships with dealers throughout the UK the process really couldn’t be any simpler. We continue to give back to our customers through our rewards system making every successful application our clients complete gives back money towards their insurance and dash cams to help lower it.  </p>

                    <p class="mt-4" style="color: #4a4a4a;">We understand the difﬁculties life brings, that is why we provide affordable monthly payment options to give our customers the ﬂexibility to work within their budget. </p>


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

                   <h3 class="subheading1 mt-5">Our Principals </h3>
                   <h6 class="subheading mt-5">TECHNOLOGY</h6>
                   <p class="mt-2" style="color: #4a4a4a;">Investing in tech is our main focus when it comes to our customers having a fast and smooth journey, our team of software developers have grown from a team of 2 to a team of 10 as we continue to make sure we’re on the cutting edge of technology. </p>
                   </div>

                  <div class="bo2x-icon text-center mt-5">
                   <h6 class="subheading mt-3">TRUSTWORTHINESS</h6>
                   <p class="mt-2" style="color: #4a4a4a;">Putting the customer ﬁrst are rules we standby! We will send your application to the most suitable lender to gain you the best possible rate. </p>
                   </div>

                   <div class="bo2x-icon text-center mt-5">
                   <h6 class="subheading mt-3">PRIVACY AND SECURITY Armin </h6>
                   <p class="mt-2" style="color: #4a4a4a;">We encrypt all our data and do not search any details without your permission. Please see t&c for further information. </p>
                   </div>

                   <div class="bo2x-icon text-center mt-5">
                   <p class="mt-2" style="color: #4a4a4a;">We will conﬁrm receipt of your complaint within 72 hrs and normally provide a response within 28 days. If our response is delayed we will let you know, ensuring that your complaint is dealt with within 8 weeks.</p>
                   </div>

                   <div class="bo2x-icon text-center mt-5">
                   <p class="mt-2" style="color: #4a4a4a;">If you are unhappy with our response, you can contact the Financial Ombudsman Service.</p>
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
                       <a href="{{('quoteRequest?amount=7500')}}" style="text-decoration: none;">
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
                       <form>
                         <div class="form-row callback">
                            <h2 class=" col-sm-12 col-xs-12 col-lg-3 mb-0 text-center colorcode mb-5 mt-3" style="font-size: 25px">ARRANGE A CALL BACK</h2>
                            <div class="col-sm-12 col-xs-12 col-lg-3 mb-2">
                             <input type="text" class="form-control col-form-label-lg" placeholder="Your Name">
                         </div>
                         <div class="col-sm-12 col-xs-12 col-lg-3 mb-2">
                             <input type="text" class="form-control col-form-label-lg" placeholder="Mobile number">
                         </div>
                         <div class="text-left">
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
                   <div class="col-md-2 text-right"><i class="fa fa-chevron-down pull-right"></i></div>
               </div>
               <div id="detail-1">
                   <hr></hr>
                   <div class="container">
                       <div class="fluid-row">

               <dd>
                   The answer is 42.
               </dd>
                       </div>
                   </div>
               </div>
           </li>
           <li class="list-group-item">
               <div class="row toggle" id="dropdown-detail-2" data-toggle="detail-2">
                   <div class="col-md-10">
                       Why come to GoCarLoan for vehicle finance?
                   </div>
                   <div class="col-md-2 text-right"><i class="fa fa-chevron-down pull-right"></i></div>
               </div>
               <div id="detail-2">
                   <hr></hr>
                   <div class="container">
                       <div class="fluid-row">
                         <dt>

               </dt>
               <dd>
                   You don't. Simple.
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
                   <div class="col-md-2 text-right"><i class="fa fa-chevron-down pull-right"></i></div>
               </div>
               <div id="detail-3">
                   <hr></hr>
                   <div class="container">
                       <div class="fluid-row">

               <dd>
                   Yes, and it looks good. Pretty awesome, eh?
               </dd>
                       </div>
                   </div>
               </div>
           </li>

           <li class="list-group-item">
               <div class="row toggle" id="dropdown-detail-4" data-toggle="detail-4">
                   <div class="col-md-10">
                       Why don't GoCarLoan charge any fees?
                   </div>
                   <div class="col-md-2 text-right"><i class="fa fa-chevron-down pull-right"></i></div>
               </div>
               <div id="detail-4">
                   <hr></hr>
                   <div class="container">
                       <div class="fluid-row">

               <dd>
                   But this wasn't the answer you were looking for.
               </dd>
                       </div>
                   </div>
               </div>
           </li>

           <li class="list-group-item">
               <div class="row toggle" id="dropdown-detail-5" data-toggle="detail-5">
                   <div class="col-md-10">
                       What vehicle can I buy with car finance from Zuto?
                   </div>
                   <div class="col-md-2 text-right"><i class="fa fa-chevron-down pull-right"></i></div>
               </div>
               <div id="detail-5">
                   <hr></hr>
                   <div class="container">
                       <div class="fluid-row">

               <dd>
                   But this wasn't the answer you were looking for.
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

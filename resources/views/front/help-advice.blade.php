@extends('front.layouts.template')

@section('title', ' About us')
@include('front.layouts.includes.mainheader')

@section('content')
<header>
        <div class="container"><img src="{{ asset(env('ASSETS_PATH').'front/images/help-device.png')}}" class="img-fluid"> </div>
    </header>


    <!-- // end .section -->
    <div class="section sectionlow70">

        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <div class="bo2x-icon text-center">
                        <h3 class="subheading1 mb-3">Help &amp; Advice </h3>
                        <h2 class="mb-0 text-center colorcode mb-5" style="font-size: 30px">Find answers to common customer questions</h2>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- // end .section -->


    <!-- // end .section -->
    <div class="section sectionlow ">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bo2x-icon">

                        <div class="media"><img src="{{ asset(env('ASSETS_PATH').'front/images/help-question.png')}}"  width="30" class="align-self-center mr-5" alt="...">
                          <div class="media-body">
                            <h6 class="subheading mt-0">More about Gocarloans</h6>
                            <p>Who we are and what we do </p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- // end .section -->

     <!-- // end .section -->
    <div class="section sectionlow">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <div class="bo2x-icon">
                        <p class="mb-0 colorcode mt-5" style="font-size: 22px">I need to buy my car quickly. When will i get a decision on my loan?</p>
                        <p class="mb-0 colorcode mt-5" style="font-size: 22px">Will i have to wait long to pick up my new car?</p>
                        <p class="mb-0 colorcode mt-5" style="font-size: 22px">Can I pay off my car ﬁnance early?</p>
                        <p class="mb-0 colorcode mt-5" style="font-size: 22px">Can I get ﬁnance if I have bad credit?</p>
                        <p class="mb-0 colorcode mt-5" style="font-size: 22px">Can I buy a car from any dealership? </p>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- // end .section -->

    <!-- // end .section -->
    <div class="section sectionlow">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <div class="bo2x-icon">
                        <h2 class="mb-0 colorcode mt-5 mb-5" style="font-size: 30px;color: #1399d5 !important">See all help articles in "More about Gocarloans”</h2>
                    </div>
                    <div class="media"><img src="{{ asset(env('ASSETS_PATH').'front/images/creditcard.png')}}"  width="30" class="align-self-center mr-5" alt="...">
                          <div class="media-body">
                            <h6 class="subheading mt-0">Bad credit advice</h6>
                            <p>If you've ever had money problems  </p>
                        </div>
                    </div>

                    <div class="media mt-5"><img src="{{ asset(env('ASSETS_PATH').'front/images/elgible.png')}}"  width="30" class="align-self-center mr-5" alt="...">
                          <div class="media-body">
                            <h6 class="subheading mt-0">Am I eligible?</h6>
                            <p>Who we can help with car ﬁnance </p>
                        </div>
                    </div>

                     <div class="media mt-5"><img src="{{ asset(env('ASSETS_PATH').'front/images/applications.png')}}"  width="30" class="align-self-center mr-5" alt="...">
                          <div class="media-body">
                            <h6 class="subheading mt-0">Your application</h6>
                            <p>Understanding what happens next and why </p>
                        </div>
                    </div>

                    <div class="media mt-5"><img src="{{ asset(env('ASSETS_PATH').'front/images/caricon.png')}}"  width="30" class="align-self-center mr-5" alt="...">
                          <div class="media-body">
                            <h6 class="subheading mt-0">Support to help you make the right choice</h6>
                            <p>Support to help you make the right choice </p>
                        </div>
                    </div>

                    <div class="media mt-5"><img src="{{ asset(env('ASSETS_PATH').'front/images/usericon.png')}}"  width="30" class="align-self-center mr-5" alt="...">
                          <div class="media-body">
                            <h6 class="subheading mt-0">What's My Gocarloans?</h6>
                            <p>Search for cars and manage your own account </p>
                        </div>
                    </div>

                    <div class="media mt-5"><img src="{{ asset(env('ASSETS_PATH').'front/images/pound.png')}}"  width="30" class="align-self-center mr-5" alt="...">
                          <div class="media-body">
                            <h6 class="subheading mt-0">Managing car ﬁnance</h6>
                            <p>Advice should your situation change</p>
                        </div>
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

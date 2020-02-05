
@extends('front.layouts.template')

@section('title', ' About us')
@include('front.layouts.includes.mainheader')

@section('content')

<!-- 
<header>
    <div class="container"><img src="{{ asset(env('ASSETS_PATH').'front/images/our-process.png')}}" class="img-fluid" width="800"> </div>
</header>




<div class="section sectionboot80 mt-5">
    <div class="container">
        <h2 class="mb-0 text-center colorcode mb-5">FAQ - OUR EXPERTS HAVE THE ANSWERS</h2>
<div class="panel panel-default">
    <ul class="list-group">
        <li class="list-group-item">
            <div class="row toggle" id="dropdown-detail-1" data-toggle="detail-1" >
                <div class="col-md-10 ">
                    I need to buy my car quickly. When will i get a decision on my loan?
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
                    Will i have to wait long to pick up my new car?
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
                    Can I pay off my car ﬁnance early?
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
                    Can I get ﬁnance if I have bad credit?
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
                    Can I buy a car from any dealership?
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

        <li class="list-group-item">
            <div class="row toggle" id="dropdown-detail-6" data-toggle="detail-6">
                <div class="col-md-10">
                    What if I’ve been refused elsewhere?
                </div>
                <div class="col-md-2 text-right"><i class="fa fa-chevron-down pull-right"></i></div>
            </div>
            <div id="detail-6">
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
            <div class="row toggle" id="dropdown-detail-7" data-toggle="detail-7">
                <div class="col-md-10">
                    I have a party exchange, can I trade this in?
                </div>
                <div class="col-md-2 text-right"><i class="fa fa-chevron-down pull-right"></i></div>
            </div>
            <div id="detail-7">
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
            <div class="row toggle" id="dropdown-detail-8" data-toggle="detail-8">
                <div class="col-md-10">
                    How will I know if I am eligible for car credit?
                </div>
                <div class="col-md-2 text-right"><i class="fa fa-chevron-down pull-right"></i></div>
            </div>
            <div id="detail-8">
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
            <div class="row toggle" id="dropdown-detail-9" data-toggle="detail-9">
                <div class="col-md-10">
                    How will I know what ﬁnance rate I will be offered?
                </div>
                <div class="col-md-2 text-right"><i class="fa fa-chevron-down pull-right"></i></div>
            </div>
            <div id="detail-9">
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
            <div class="row toggle" id="dropdown-detail-10" data-toggle="detail-10">
                <div class="col-md-10">
                    What if I have a poor credit history?
                </div>
                <div class="col-md-2 text-right"><i class="fa fa-chevron-down pull-right"></i></div>
            </div>
            <div id="detail-10">
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
            <div class="row toggle" id="dropdown-detail-11" data-toggle="detail-11">
                <div class="col-md-10">
                    How do you make your decisions?
                </div>
                <div class="col-md-2 text-right"><i class="fa fa-chevron-down pull-right"></i></div>
            </div>
            <div id="detail-11">
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
            <div class="row toggle" id="dropdown-detail-12" data-toggle="detail-12">
                <div class="col-md-10">
                    What if I don’t know what car I want to buy?
                </div>
                <div class="col-md-2 text-right"><i class="fa fa-chevron-down pull-right"></i></div>
            </div>
            <div id="detail-12">
                <hr></hr>
                <div class="container">
                    <div class="fluid-row">

            <dd>
                How long does it take to get an answer?
            </dd>
                    </div>
                </div>
            </div>
        </li>

        <li class="list-group-item">
            <div class="row toggle" id="dropdown-detail-13" data-toggle="detail-13">
                <div class="col-md-10">
                    How long does it take to get an answer?
                </div>
                <div class="col-md-2 text-right"><i class="fa fa-chevron-down pull-right"></i></div>
            </div>
            <div id="detail-13">
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
-->



  <!-- // end .section -->
<!-- <div class="section section2low ">

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

</div> -->
<!-- // end .section -->


 <!-- // end .section -->
<!-- <div class="section text-center sectionboot80">

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

</div> -->
<!-- // end .section -->



<!-- --------------------------------------------------------------------------------- -->


<!--Lead-image & title-start-->
<header>
    <div class="container" style="margin: auto;text-align: center;"><img src="{{ url('front/images/our-process.png') }}" class="img-fluid" width="800"> </div>
</header>

<!--page content start-->
<div class="section sectionboot80 mt-5">
    <div class="container">
        <h2 class="mb-0 text-center colorcode mb-5">FAQ - OUR EXPERTS HAVE THE ANSWERS</h2>
<div class="panel panel-default">
    <ul class="list-group">
        <li class="list-group-item">
            <div class="row toggle" id="dropdown-detail-1" data-toggle="detail-1" >
                <div class="col-md-10 ">
                    I need to buy my car quickly. When will i get a decision on my loan?
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
                    Will i have to wait long to pick up my new car?
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
                    Can I pay off my car ﬁnance early?
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
                    Can I get ﬁnance if I have bad credit?
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
                    Can I buy a car from any dealership?
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

        <li class="list-group-item">
            <div class="row toggle" id="dropdown-detail-6" data-toggle="detail-6">
                <div class="col-md-10">
                    What if I’ve been refused elsewhere?
                </div>
                <div class="col-md-2 text-right"><i class="fa fa-chevron-down pull-right"></i></div>
            </div>
            <div id="detail-6">
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
            <div class="row toggle" id="dropdown-detail-7" data-toggle="detail-7">
                <div class="col-md-10">
                    I have a party exchange, can I trade this in?
                </div>
                <div class="col-md-2 text-right"><i class="fa fa-chevron-down pull-right"></i></div>
            </div>
            <div id="detail-7">
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
            <div class="row toggle" id="dropdown-detail-8" data-toggle="detail-8">
                <div class="col-md-10">
                    How will I know if I am eligible for car credit?
                </div>
                <div class="col-md-2 text-right"><i class="fa fa-chevron-down pull-right"></i></div>
            </div>
            <div id="detail-8">
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
            <div class="row toggle" id="dropdown-detail-9" data-toggle="detail-9">
                <div class="col-md-10">
                    How will I know what ﬁnance rate I will be offered?
                </div>
                <div class="col-md-2 text-right"><i class="fa fa-chevron-down pull-right"></i></div>
            </div>
            <div id="detail-9">
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
            <div class="row toggle" id="dropdown-detail-10" data-toggle="detail-10">
                <div class="col-md-10">
                    What if I have a poor credit history?
                </div>
                <div class="col-md-2 text-right"><i class="fa fa-chevron-down pull-right"></i></div>
            </div>
            <div id="detail-10">
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
            <div class="row toggle" id="dropdown-detail-11" data-toggle="detail-11">
                <div class="col-md-10">
                    How do you make your decisions?
                </div>
                <div class="col-md-2 text-right"><i class="fa fa-chevron-down pull-right"></i></div>
            </div>
            <div id="detail-11">
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
            <div class="row toggle" id="dropdown-detail-12" data-toggle="detail-12">
                <div class="col-md-10">
                    What if I don’t know what car I want to buy?
                </div>
                <div class="col-md-2 text-right"><i class="fa fa-chevron-down pull-right"></i></div>
            </div>
            <div id="detail-12">
                <hr></hr>
                <div class="container">
                    <div class="fluid-row">

            <dd>
                How long does it take to get an answer?
            </dd>
                    </div>
                </div>
            </div>
        </li>

        <li class="list-group-item">
            <div class="row toggle" id="dropdown-detail-13" data-toggle="detail-13">
                <div class="col-md-10">
                    How long does it take to get an answer?
                </div>
                <div class="col-md-2 text-right"><i class="fa fa-chevron-down pull-right"></i></div>
            </div>
            <div id="detail-13">
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



<!--page content end-->



<!--CTA panel start-->
  <div class="section section2low ">

      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="looking-quota text-center">
                  <h2 style="color: #ffffff; font-weight: bold;">Looking to start your journey?</h2>
                  <div class="getquota">
                      <a href="{{ url('quoteRequest') }}" style="text-decoration: none;">
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

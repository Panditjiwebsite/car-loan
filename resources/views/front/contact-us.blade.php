@extends('front.layouts.template')

@section('title', ' About us')
@include('front.layouts.includes.mainheader')

@section('content')

<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col">
                            <h1 id="page-heading-h1">Contact Us</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-center"><img id="contact-us-image" src="{{ asset(env('ASSETS_PATH').'front/images/conatctus.png')}}"></div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xl-1"></div>
                <div class="col-md-4 col-xl-10">
                    <div class="row">
                        <div class="col">
                            <h3 id="contact-title" style="font-size: 30px;padding-bottom: 30px;color: #4e4e4e;font-family: roboto;">Our Contact Details:</h3>
                            <p id="contact-text"><strong>Call us on:</strong>&nbsp;0333 6000 290<br></p>
                            <p style="color: #4e4e4e;font-size: 15px;font-family: roboto;"><strong>Local number:</strong>&nbsp;01202 684 898<br></p>
                            <p style="color: #4e4e4e;font-size: 15px;font-family: roboto;"><strong>Email:</strong>&nbsp;enquiries@gocarloans.co.uk<br></p>
                            <p style="color: #4e4e4e;font-size: 20px;font-family: roboto;"><strong>Post:</strong></p>
                            <p style="color: #4e4e4e;font-size: 15px;font-family: roboto;">Click Drive Media Ltd<br>Floor 4,<br>Universal Square,<br>Devonshire Street North,<br>Manchester<br>M12 6JH<br></p>
                            <h4 style="font-size: 20px;padding-bottom: 30px;color: #4e4e4e;font-family: roboto;"><strong>Opening hours</strong><br></h4>
                            <p style="color: #4e4e4e;font-size: 15px;font-family: roboto;">Mon-Thurs: 09:00 - 20:00<br>Friday:&nbsp;09:00 - 17:30<br><strong>Saturday:&nbsp;</strong>10:00 - 16:00<br><br></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xl-1"></div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xl-6 offset-xl-1">
                    <p class="text-justify" style="color: #4e4e4e;font-size: 15px;font-family: roboto;">Please call&nbsp;0333 6000 290&nbsp;which will cost no more than geographic numbers (starting 01 or 02) and are part of inclusive minutes subject to your provider and call package. If you're unsure how much your call will cost, we
                        recommend you contact your phone service provider.<br></p>
                </div>
            </div>
        </div>
    </div>
    <div></div>
    <div></div>

    @stop

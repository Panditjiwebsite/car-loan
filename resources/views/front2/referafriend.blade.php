@extends('front2/layout/master')

@section('content')

    <!-- Nav Menu -->
    @include('front2/layout/navbar')
    <!-- Nav Menu -->

    <!--invite div start here-->
    <div class="container">
        <div class="row">
            <div class="shadowbox mb-5">
            <div class="col-md-12">
                <h3 class="colorcode mb-4 mt-3">Invite your friends</h3>
                <p class="card-textdocu">We love it when our customers tell their friends about our service, so much so that we want to reward you for doing just that. It couldn't be simpler - tell your friends about CarFinance 247 and if you both take out finance with us, we'll give you £100 each!</p>

                <p class="card-textdocu mb-3">There is one important thing to remember. You must invite your friends by using one of our invitation options listed below as this is the only way that we can track your referral. Ready to start referring? Follow the simple steps below</p>
            </div>

            <div class="col-md-12">
                <div class="row ">
                    <div class="col-md-7 mb-3">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                          <li class="nav-item col" style="padding-left: 0;padding-right: 10px;font-weight: bold;">
                            <a class="nav-link navlinkwidth active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Invite by email</a>
                        </li>
                        <li class="nav-item col"  style="padding-left: 0;padding-right: 0;font-weight: bold;">
                            <a class="nav-link navlinkwidth" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Invite by text</a>
                        </li>

                    </ul>
                    <div class="tab-content refr" id="pills-tabContent">
                      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <input type="text" aria-label="First name" class="form-control" placeholder="Input email address">
                      </div>
                      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                          <input type="text" aria-label="First name" class="form-control" placeholder="Invite by text">
                      </div>
                  </div>
                  
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="showcheckbox" id="same-address">
                      <label class="custom-control-label raf-opt-in" for="same-address">By ticking this box, you are confirming that you have spoken to your friend and have their specific consent for us to contact them about our refer a friend promotion. The contact details entered above will be used in a one-time communication only.</label>
                  </div>
                  <button type="submit" class="btn btn-primary mb-2 btn-md invite mt-4"><b>Send</b></button>

                    
                </div>
                <div class="col-md-5">
                    <div class="gacebook">
                       <p>Invite through Facebook</p>
                       <button type="submit" class="btn btn-primary mb-2 btn-md faceb mt-4"><b>Facebook post</b></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
    <!--invite div end here-->


    <!--refer apply-->
    <div class="container mb-5">
        <div class="row text-center">
      <div class="col-lg-4 col-md-6">
        <img src="{{ asset(env('ASSETS_PATH').'front2/images/1step.svg') }}" class="img-fluid" width="200" >
        <h3 class="colorcode">Refer</h3>
        <p class="card-textdocu">Refer your friends using one of the invitation tools above</p>
        
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4 col-md-6 ">
         <img src="{{ asset(env('ASSETS_PATH').'front2/images/2step.svg') }}" class="img-fluid" width="200" >
        <h3 class="colorcode">Apply</h3>
        <p class="card-textdocu">Your friend needs to make an application for finance by following the link you send to them</p>
       
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4 col-md-6 mt-5">
        <img src="{{ asset(env('ASSETS_PATH').'front2/images/3step.svg') }}" class="img-fluid " width="200">
        <h3 class="colorcode">Collect</h3>
        <p class="card-textdocu">When you've both taken out finance with us, we'll sort the cashback for a max of 5 friends (£500)</p>
        
      </div><!-- /.col-lg-4 -->
    </div>
    </div>
    <!--refer apply-->

    <!--faq div start here-->
    <div class="section sectionboot80">
        <div class="container">
            <h2 class="colorcode mb-3">FAQ</h2>
            <p class="card-textdocu mb-3">Have a question about our Refer a Friend promotion? Take a look at some common questions on our frequently asked questions list. If you still need help, please speak to your account manager.</p>
            <div class="panel panel-default">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="row toggle" id="dropdown-detail-1" data-toggle="detail-1">
                            <div class="col-md-10 ">
                                What is car finance?
                            </div>
                            <div class="col-md-2 text-right"><i class="fa fa-chevron-down pull-right"></i></div>
                        </div>
                        <div id="detail-1" style="display: none;">
                            <hr>
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
                        <div id="detail-2" style="display: none;">
                            <hr>
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
                        <div id="detail-3" style="display: none;">
                            <hr>
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
                        <div id="detail-4" style="display: none;">
                            <hr>
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
                        <div id="detail-5" style="display: none;">
                            <hr>
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
    <!--faq div star here-->

    <!--terms and condition-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="colorcode mb-3">Terms and Conditions</h2>
               <p class="card-textdocu mb-3">There is a limit on the amount of cashback that any one person can earn through referrals. While you can proceed to refer as many friends as you wish, you will only receive £100 reward for the first five valid referrals (max £500 referral reward). </p>

               <p class="card-textdocu mb-3">We may change, extend or withdraw this offer at any time and without letting you know. </p>

               <p class="card-textdocu mb-3">This offer cannot be used alongside any other CarFinance 247 cashback promotions.</p>

               <p class="card-textdocu mb-3">This offer is not available to CarFinance 247 employees.</p>

               <p class="card-textdocu mb-3"><b>Referrer</b>: The referrer must apply for finance with and proceed to take out a loan agreement through CarFinance 247. The referrer must invite a friend through one of our tracked referral methods by inputting their contact details. The referrer cannot recommend themselves to CarFinance 247.</p>

               <p class="card-textdocu mb-3">Important: the referrer must get prior permission from their friend(s) to send them an invite to CarFinance 247 through one of our tracked referral methods. We will ask for confirmation that you have received this prior consent before we allow you to invite your friend(s). </p>

               <p class="card-textdocu mb-3"><b>Referred customer</b>: The referred customer must make an application for finance through the link that is shared with them by their friend using one of our tracked referral invitations. The referred customer must proceed to take out a loan agreement through CarFinance 247. </p>

               <p class="card-textdocu mb-3">If all of the above terms and conditions are adhered to, an email will be sent to both the referrer and the referred when the cashback is ready to claim. This will contain a link to a secure page within the individual’s CarFinance 247 members’ area which will contain a submission box to enter the account details of the bank that it is requested for the funds to be transferred into. </p>

               <p class="card-textdocu mb-3">The tracked referral invitation tool is held within your secure members’ area and you will be offered three methods of sharing your recommendation with your friends. These are:</p>

                <ul class="list-style terms">
                    <li>Through inputting your friend’s mobile phone number and allowing CarFinance 247 to send them your unique, tracked Refer a Friend link through an SMS. This will direct them to our promotional page which contains more information and also contains a link through which your friend must apply.</li>
                    <li>Through inputting your friend’s email address and allowing CarFinance 247 to send them your unique, tracked Refer a Friend link through an email. This will direct them to our promotional page which contains more information and also contains a link through which your friend must apply.</li>
                    <li>Through sharing a post created by CarFinance 247 on Facebook. This will contain a link to our promotional page which contains more information and also contains a link through which your friend must apply. </li>
                </ul>

                <p class="card-textdocu mb-3">Referrals made through any method other than the tracked referral invitations hosted within the CarFinance 247 members’ area will not be accepted as part of this promotion and the cashback will not be rewarded to either party.</p>

                <p class="card-textdocu mb-3">CarFinance 247 will not be held responsible for the funds being transferred into the wrong bank account due to the incorrect input of bank details in the submission form. A surplus of £100 will not be rewarded in such a situation.</p>

                <p class="card-textdocu mb-5">Payment of Refer a Friend reward will be made, in most situations, within 72 hours of the bank details being received. We reserve the right to extend this payment period to up to 7 working days after bank details being received, should there be any factors prohibiting faster payment.</p>
               

            </div>
        </div>
    </div>
    <!--terms and condition-->

<hr>


    <!--footer div start here-->
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-8 col-sm-12">
                <div class="row">
                    <div class="col-md-12">
                        <a href="#" class="btn btn-primary mb-2 btn-lg   mt-4">Contact us</a>
                        <a href="#" class="btn btn-primary mb-2 btn-lg  mt-4">Careers</a>
                        <a href="#" class="btn btn-primary mb-2 btn-lg  mt-4">Complaint </a>
                        <a href="#" class="btn btn-primary mb-2 btn-lg  mt-4">Press office</a>
                    </div>
                </div>

                <div class="my-3">
                    <div class="footer-nav">
                        <a href="#" class="m-2">Terms &amp; conditions</a><span>|</span>
                        <a href="#" class="m-2">Privacy Policy</a><span>|</span>
                        <a href="#" class="m-2">Cookie policy</a><span>|</span>
                        <a href="#" class="m-2">Acceptable use policy</a>
                    </div>
                </div>

                <p class="card-textadd">
                    CarFinance247<br>
                    Universal Square<br>
                    Devonshire Street North<br>
                    Manchester<br>
                    M12 6JH
                </p>

                <p class="card-textadd">*This approval is subject to the lender recognising a need for any further information, having any concerns or discovering any discrepancies in documentation you provide to us. In such situations, they also then have the right to request additional information, change the lending amount or ultimately decline the request for finance if not fully satisfied. CarFinance 247 is a trading name of CarFinance 247 Limited, a credit broker and insurance intermediary, and 247 Money Group Limited (247 Money), a lender. Both companies are part of the 247 group of companies. </p>

                <p class="card-textadd">CarFinance 247 is authorised and regulated by the Financial Conduct Authority under reference number: 653019. Registered office: Universal Square, Devonshire Street North, Manchester, M12 6JH. Registered in England. Company registration no. 06035525. Data Protection Registration Number Z1897658. </p>

                <p class="card-textadd">247 Money is authorised and regulated by the Financial Conduct Authority. Registered office: Universal Square, Devonshire Street North, Manchester, M12 6JH. Registered in England. Company registration no. 10989530. Data Protection Registration Number ZA456831.  </p>

                <p class="card-textadd">All finance is subject to status and income. Written quotations on request. CarFinance 247 can introduce you to a limited number of finance providers, including 247Money, based upon your credit rating and will receive commission for such introductions. </p>

                <p class="card-textadd">We do not charge a fee for arranging the finance, however some of our lenders may charge a fee. Your account manager can provide more information on this.  </p>

                <P class="card-textadd"> This site uses cookies so that we can provide you with the best user experience. By continuing to use the site you are consenting for cookies to be used. Further information on cookies and how you can disable them is available here.</P>
                
            </div>

            <div class="col-lg-4">
                <div class="social-icons mt-4">
                <a href="https://www.youtube.com/Carfinance247couk"><img src="{{ asset(env('ASSETS_PATH').'front2/images/social-play.png') }}" class="img-fluid" width="200"></a>
                <a href="https://www.instagram.com/carfinance247/"><img src="{{ asset(env('ASSETS_PATH').'front2/images/social-facebook.png') }}" class="img-fluid" width="200"></a>
                <a href="https://twitter.com/carfinance247"><img src="{{ asset(env('ASSETS_PATH').'front2/images/social-instagrame.png') }}" class="img-fluid" width="200"></a>
                <a href="https://www.facebook.com/carfinance247/"><img src="{{ asset(env('ASSETS_PATH').'front2/images/social-tweeter.png') }}" class="img-fluid" width="200"></a>
                </div>
            </div>
        </div>

    </div>
    <!--footer div end here-->

@endsection

@section('lastOneFooter')

<script type="text/javascript">
            $(document).ready(function() {
    $('[id^=detail-]').hide();
    $('.toggle').click(function() {
        $input = $( this );
        $target = $('#'+$input.attr('data-toggle'));
        $target.slideToggle();
        if($input.find('.col-md-2 i').attr('class')=="fa fa-chevron-down pull-right")
        {
             $input.find('.col-md-2 i').removeClass('fa-chevron-down'); 
             $input.find('.col-md-2 i').addClass('fa-chevron-up');
        }
        else if($input.find('.col-md-2 i').attr('class')=="fa pull-right fa-chevron-up")
        {
             $input.find('.col-md-2 i').removeClass('fa-chevron-up'); 
             $input.find('.col-md-2 i').addClass('fa-chevron-down');     
        }
         else if($input.find('.col-md-2 i').attr('class')=="fa pull-right fa-chevron-down")
        {
             $input.find('.col-md-2 i').removeClass('fa-chevron-down'); 
             $input.find('.col-md-2 i').addClass('fa-chevron-up');
        }

        else if($input.find('.col-md-2 i').attr('class')=="fa pull-right fa-chevron-down")
        {
             $input.find('.col-md-2 i').removeClass('fa-chevron-down'); 
             $input.find('.col-md-2 i').addClass('fa-chevron-up');
        }
       
    });
});
        </script>
@endsection
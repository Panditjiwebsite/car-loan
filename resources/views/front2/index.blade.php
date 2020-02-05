@include('front2/layout/master')

<body data-spy="scroll" data-target="#navbar" data-offset="30">

    <!-- Nav Menu -->
@include('front2/layout/navbar')
    <!-- Nav Menu -->

    <!--hijack div start here-->
    <div class="container-fluid grey-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center mx-auto">
                    <h3 class="colorcode">Hi @php $login_user = session()->get('member_data')['first_name']; if(isset($login_user)){echo $login_user;}  @endphp </h3>
                    <h4 class="colorcode">We'd still like to help</h4>
                    <p>Your application has been closed for now but if you’d like to pick up where we left off, just get in touch! </p>
                    <button type="submit" class="btn btn-primary mb-2 btn-lg sky mt-5" data-toggle="modal" data-target="#exampleModal">Pick a time for a call</button>
                </div>
            </div>
        </div>
    </div>
    <!--hijack div end here-->

    <!--saved car div start here-->
    <div class="section carsavborder">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mx-auto">
                    <h3 class="colorcode mb-4">Your recently saved cars</h3>
                    <div class="col-md-3 text-center mx-auto">
                        <img src="{{ asset(env('ASSETS_PATH').'front2/images/savecar.png') }}" class="img-fluid">
                        <p class="text-left font-weight-bold mt-2">FORD C-MAX</p>
                        <p class="text-left font-weight-bold mt-0"><strong>£2,490</strong></p>
                        <p class="mt-0 card-text2 text-left">3.2 Miles away from SK9 6EG</p>
                    </div>
                    <a href="add-car.html" class="btn btn-primary mb-2 btn-lg sky mt-5 col-lg-6 col-md-6">I've found a car</a>
                    <a href="car-search.html" class="btn btn-primary mb-2 btn-lg sky mt-5 col-lg-6 col-md-6">Search 140,000+ cars</a>
                </div>
            </div>
        </div>
    </div>
    <!--saved car div end here-->

    <!--yourtask div start here-->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mx-auto mb-5">
                    <h3 class="colorcode mb-4">Your tasks</h3>
                    <p class="card-text2">Here are the simple steps you need to complete to get you into your new vehicle.</p>
                </div>
            </div>


            <div class="row">
              
                <div class="boxtask">
                    <div class="tasks__wrapper">
                        <div class="tasks__group tasks__group--mini">
                            <div class="task task--small">
                                <div class="task__header dowmmini">
                                    <div class="task__header-items">
                                        <div class="text-center">
                                            <img class="task__icon" src="{{ asset(env('ASSETS_PATH').'front2/images/Application.svg') }}" alt="">
                                        </div>
                                        <div class="task__description">Application approved</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="boxtask">
                    <div class="tasks__wrapper">
                        <div class="tasks__group tasks__group--mini">
                            <div class="task task--small">
                                <div class="task__header">
                                    <div class="task__header-items">
                                        <div class="text-center">
                                            <img class="task__icon" src="{{ asset(env('ASSETS_PATH').'front2/images/Vehicle.svg') }}" alt="">
                                        </div>
                                        <div class="task__description">Application approved</div>
                                    </div>
                                </div>
                                <a class="task__button" href="saved-cars.html">My saved cars</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="boxtask">
                    <div class="tasks__wrapper">
                        <div class="tasks__group tasks__group--mini">
                            <div class="task task--small">
                                <div class="task__header">
                                    <div class="task__header-items">
                                        <div class="text-center">
                                            <img class="task__icon" src="{{ asset(env('ASSETS_PATH').'front2/images/doc Upload.svg') }}" alt="">

                                        </div>
                                        <div class="task__description">Application approved</div>
                                    </div>
                                </div>
                                <a class="task__button" href="documents.html">Upload</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="boxtask">
                    <div class="tasks__wrapper">
                        <div class="tasks__group tasks__group--mini">
                            <div class="task task--small">
                                <div class="task__header">
                                    <div class="task__header-items">
                                        <div class="text-center">
                                            <img class="task__icon" src="{{ asset(env('ASSETS_PATH').'front2/images/SignAgreementGREY.svg') }}" alt="">
                                        </div>
                                        <div class="task__description">Application approved</div>
                                    </div>
                                </div>
                                <div class="task__button task--disabled">Download</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="boxtask">
                    <div class="tasks__wrapper">
                        <div class="tasks__group tasks__group--mini">
                            <div class="task task--small">
                                <div class="task__header dowmmini">
                                    <div class="task__header-items">
                                        <div class="text-center">
                                            <img class="task__icon" src="{{ asset(env('ASSETS_PATH').'front2/images/Deal.svg') }}" alt="">
                                        </div>
                                        <div class="task__description">Application approved</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
        </div>
        </div>
    </div>
    <!--yourtask div end here-->

    <!--happypeople div start here-->
    <div class="referafriend" >
        <div class="container">
            <div class="referafriend__image">
                <div class="referafriend__inner">
                    <div class="referafriend__innermore">
                        <h2>Refer a friend for £200 to share.</h2>
                        <p class="referafriend__mobile mt-3">Tell your friends about our service, and if you both take out finance with us, you'll both get £100 cashback!</p>
                        <a href="referafriend.html" class="btn btn-primary mb-2 btn-lg sky refer mt-4">LEARN MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--happypeople div end here-->

<!--appnow div start here-->
<!-- 
dP     dP  dP 888888ba   88888888b 
88     88  88 88     8b  88        
88aaaaa88  88 88     88  88aaaa    
88     88  88 88     88  88        
88     88  88 88     8P  88        
dP     dP  dP 8888888P   88888888P
[ THIS SECTION HIDE FOR TEMPORARY ]
-->
    <!-- <div class="section ">
        <div class="container grey-light py-5">
            <div class="row ">
                <div class="col-md-8">
                    <div class="downloaapp">
                    <h3 class="colorcode mb-4">Download our app now</h3>
                    <ul class="list-unstyled mb-1">
                        <li><i class="fa fa-square"></i>Live updates on your application</li>
                        <li><i class="fa fa-square"></i>Chat directly with your dedicated Customer Service Specialist</li>
                        <li><i class="fa fa-square"></i>Search over 130,000 quality used cars</li>
                    </ul>
                    <div class="mt-2 imagesmall">
                        <a href="https://apps.apple.com/app/id1161743286" target="_blank"><img src="{{ asset(env('ASSETS_PATH').'front2/images/appStore.png') }}" class="img-fluid " alt=""></a>
                        <a href="https://play.google.com/store/apps/details?id=uk.co.carfinance247.customerapp&hl=en_GB" target="_blank"><img src="{{ asset(env('ASSETS_PATH').'front2/images/googlePlay.png') }}" class="img-fluid"  alt=""></a>
                        
                    </div>
                    </div>
                </div>

                <div class="col-md-3 text-center pt-5">
                    <div class="appl">
                    <img src="{{ asset(env('ASSETS_PATH').'front2/images/AppleAndroid.png') }}" class="img-fluid col-md-12 ">
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--appnow div end here-->

    <!--happypeople div start here-->
    <div class="checkcredit">
        <div class="container">
            <div class="checkcredit__image">
                <div class="checkcredit__inner">
                    <div class="checkcredit__innermore">
                        <h2>Check your credit score for free</h2>
                        <p class="referafriend__mobile mt-3">Did you know that all lenders view your credit profile before making a decision on your application? If there are any errors on your profile it could mean the difference between<br> being approved or declined.</p>
                        <a href="https://www.clearscore.com/in/" class="btn btn-primary mb-2 btn-lg sky refer mt-4">Get your free credit check today </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--happypeople div end here-->
    <hr>


    <!--footer div start here-->
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-sm-12">
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

            <div class="col-lg-3  ">
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


    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modalregistr">
      <div class="modal-header borderregistrhea">
        <h5 class="modal-title headih5" id="exampleModalLabel"><img src="{{ asset(env('ASSETS_PATH').'front2/images/callcentergrey.svg') }}" width="20">&nbsp;Book a call with your account manager</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body minibody">
        <p class="callfree">Let us know when you’re free for a call and we can talk through things further.</p>
      </div>
      <div class="modal-footer borderregistr d-flex justify-content-center">
        <button type="button" class="btn btn-primary">Schedule a call for later</button>
      </div>
    </div>
  </div>
</div>




    
    

    <!-- jQuery and Bootstrap -->
    <script src="{{ asset(env('ASSETS_PATH').'front2/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset(env('ASSETS_PATH').'front2/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Plugins JS -->
    <script src="{{ asset(env('ASSETS_PATH').'front2/js/owl.carousel.min.js') }}"></script>
    <!-- Custom JS -->
    <script src="{{ asset(env('ASSETS_PATH').'front2/js/script.js') }}"></script>

    <script src="{{ asset(env('ASSETS_PATH').'front2/js/js-src/lazysizese7c8.js') }}"></script>
    <script src="{{ asset(env('ASSETS_PATH').'front2/js/v2/dist/all-v26818.js') }}"></script>


        <script type="text/javascript">
      $('#slideone').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay: true,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})

        </script>

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

</body>

</html>

@extends('front2/layout/master')

@section('content')
        <!-- Nav Menu -->
@include('front2/layout/navbar')
    <!-- Nav Menu -->
   
    <!--document div start here-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="colorcode mb-4">Car details</h3>
                <p class="card-textdocu">If you’ve already found a car and it’s not on listed within our car search, just enter the details below and we’ll be in touch to discuss the next steps.</p>
            </div>
        </div>
    </div>
    <!--document div end here-->

    <!--registration div start here-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form class="form-inline pt-5 d-flex justify-content-center">
                  <div class="form-group mb-2 ">
                    <input type="text" readonly class="form-control-plaintext " id="staticEmail2" value="Registration number">
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <input type="text" class="form-control registra" id="inputPassword2" >
                </div>
                <button type="submit" class="btn btn-primary btn-lg mb-2">Search</button>
            </form>
            <div class="text-center py-4 mb-4">
                <a href="#" class="textregistration" data-toggle="modal" data-target="#exampleModal">
                    I don't know the registration number</a>
          </div>
        </div>
        </div>
    </div>
    <!--registration div end here-->




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

                <p class="card-textadd"> We do not charge a fee for arranging the finance, however some of our lenders may charge a fee. Your account manager can provide more information on this.  </p>

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

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modalregistr">
      <div class="modal-header borderregistrhea">
       <!--  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="registcard-textdocu">Book a call with your account manager and share with them any details you have for the car you've found. They’ll sort the rest!</p>
      </div>
      <div class="modal-footer borderregistr d-flex justify-content-center">
        <button type="button" class="btn btn-primary"><i class="fa fa-phone"></i>&nbsp;Book a call</button>
      </div>
      <p class="registcard-textdocu">Or you can choose from over 130,000 cars in your members' area</p>

      <div class="modal-footer borderregistr d-flex justify-content-center">
        <button type="button" class="btn btn-primary bordersearch">Search for cars</button>
      </div>
    </div>
  </div>
</div>

@endsection
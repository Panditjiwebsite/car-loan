  <!-- Nav Menu -->
<div class="nav-menu fixed-top ">
        <div class="container">
            <div class="row">
                
                <div class="col-md-4 pt-3 pr-2 mb-2"><a href="./"><img src="{{ asset(env('ASSETS_PATH').'front/images/logo.png')}}" width="150" class="img-fluid" alt="logo"></a></div>
               
                <div class="col-md-8 text-right">
                    
                        <div class="dropdown">
                            <button class="btn btn-secondary float-right ml-4 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                My Account 
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>


                        <div>
                            <button class="btn btn-secondary " type="button">
                                Retrieve a quote
                            </button>
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-md-12 mt-3" >
                    <nav class="navbar navbar-dark navbar-expand-lg right">
                         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="navbar-nav navbar-right">
                                <li class="nav-item"> <a class="nav-link active" href="{{ url('about-us')}}">About us <span class="sr-only">(current)</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" href="{{ url('our-process')}}">Our process</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="{{ url('finance-calculator')}}">Finance Calculator</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="{{ url('best-first-car-deals')}}">Best first car deals </a> </li>
                                <li class="nav-item"> <a class="nav-link" href="{{ url('faq')}}">FAQ</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="{{ url('contact-us')}}">Contact us</a> </li>
                               <!--  <li class="nav-item"><a href="#" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3">Retrieve a quote</a></li>
                                 <li class="nav-item"><a href="#" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3">My Account </a></li> -->
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    

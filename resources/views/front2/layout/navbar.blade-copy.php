<div class="nav-menu fixed-top ">
    <div class="container">
        <div class="row">

            <div class="col-md-5 pt-3 pr-2 mb-2"><a href="index.html"><img
                        src="{{ asset(env('ASSETS_PATH').'front2/images/logo.png') }}" width="150" class="img-fluid"
                        alt="logo"></a></div>

            <div class="col-md-7">
                <div class="row">
                    <div class="col text-right mb-2">
                        <button class="btn btn-secondary " type="button">
                            <b><i class="fa tele fa-phone"></i>0333 247 1247</b>
                        </button>
                    </div>

                    <div class="col" style="text-align: end;">
                        <button class="btn btn-secondary dropdown-toggle " type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <b> {{ session()->get('member_data')['first_name'] }} |</b>
                            {{ session()->get('member_data')['phone'] }}

                            <b><i class="fa fa-user"></i></b>
                        </button>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{ url('').'/logout'}}">Log Out</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row"> 
            <div class="col-md-12 mt-3">
                <nav class="navbar navbar-dark navbar-expand-lg">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                        aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span
                            class="navbar-toggler-icon"></span> </button>
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item"> <a class="nav-link active" href="{{ url(config('constants.MEMBER_URL').'member-area') }}">Members' area home <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link" href="{{ url(config('constants.MEMBER_URL').'documents') }}">Documents</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="{{ url(config('constants.MEMBER_URL').'car-search') }}">Search cars</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ url(config('constants.MEMBER_URL').'saved-cars') }}">Saved <i class="fa fa-heart"></i> </a> </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

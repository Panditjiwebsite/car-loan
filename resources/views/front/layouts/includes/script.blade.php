<!-- jQuery and Bootstrap -->
    <script src="{{ asset(env('ASSETS_PATH').'front/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ asset(env('ASSETS_PATH').'front/js/jquery.validate.min.js')}}"></script>

<script src="{{ asset(env('ASSETS_PATH').'front/js/additional-methods.min.js')}}"></script>
    <script src="{{ asset(env('ASSETS_PATH').'front/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Plugins JS -->
    <script src="{{ asset(env('ASSETS_PATH').'front/js/owl.carousel.min.js')}}"></script>
    <!-- Custom JS -->
    <script src="{{ asset(env('ASSETS_PATH').'front/js/script.js') }}"></script>
     <script src="{{ asset(env('ASSETS_PATH').'front/js/v2/dist/all-v26818.js') }}" ></script>
     <script src="https://vmss.boldchat.com/aid/883182194752854976/bc.vms4/vms.js" defer></script>

    <script src="{{ asset(env('ASSETS_PATH').'front/js/js-src/lazysizese7c8.js') }}" ></script>
      












    <script src="{{ asset(env('ASSETS_PATH').'assets/js/Popper.js') }}"></script>
<script src="{{ asset(env('ASSETS_PATH').'assets/js/jquery.sticky.js') }}"></script>
 <script src="{{ asset(env('ASSETS_PATH').'assets/js/jquery.meanmenu.js') }}"></script>

 <!-- This js not found in assests folder -->
<script src="{{ asset(env('ASSETS_PATH').'assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset(env('ASSETS_PATH').'assets/js/main.js') }}"></script>

    <script>
        var $grid = $('.portfolio-active').isotope({
            itemSelector: '.grid-item',
            percentPosition: true,
            masonry: {
                // use outer width of grid-sizer for columnWidth
                columnWidth: 1
            }
        })
        // filter items on button click
        $('.portfolio-menu').on('click', 'li', function() {
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({
                filter: filterValue
            });
        });

        //for menu active class
        $('.portfolio-menu li').on('click', function(event) {
            $(this).siblings('.active').removeClass('active');
            $(this).addClass('active');
            event.preventDefault();
        });

    </script>
























<!-- 
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

        </script> -->
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

 @yield('js_footer_after_content')
<?php $adminURL = config('constants.url').config('constants.ADMIN_URL'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
@include('admin.layouts.includes.styles')
<script> var ADMIN_URL = '<?php echo $adminURL; ?>'; </script> 
</head>

<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">

  @include('admin.layouts.includes.header')

    <div class="kt-grid kt-grid--hor kt-grid--root">
      <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
  
        @include('admin.layouts.includes.sidebar')

          <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
            @include('admin.layouts.includes.topbar')

              <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

              @include('admin.layouts.includes.subheader')

              @yield('content')

              </div>
           @include('admin.layouts.includes.footer')
        </div>
    </div>
  </div>
    <div id="kt_scrolltop" class="kt-scrolltop">
      <i class="fa fa-arrow-up"></i>
    </div>
    
    @include('admin.layouts.includes.scripts')
    @yield('script_after_footer')
</body>
</html>

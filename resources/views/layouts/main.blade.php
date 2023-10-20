<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <title>{{ $title }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
  <meta content="Themesdesign" name="author">
  <!-- App favicon -->
  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">


  <!-- Layout Js -->
  <script src="{{ asset('assets/js/layout.js') }}"></script>
  <!-- Bootstrap Css -->
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css">
  <!-- Icons Css -->
  <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">

  @yield('css')

  <!-- App Css-->
  <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css">


</head>

<body data-sidebar="colored">

  <!-- Begin page -->
  <div id="layout-wrapper">


    <!-- ========== Topbar Start ========== -->
    @include('layouts.topbar')
    <!-- Topbar End -->

    <!-- ========== Sidebar Start ========== -->
    @include('layouts.sidebar')
    <!-- Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

      <div class="page-content">
        <div class="container-fluid">

          @yield('content')

        </div>
        <!-- container-fluid -->
      </div>
      <!-- End Page-content -->

      <!-- ========== Footer Start ========== -->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <script>
                document.write(new Date().getFullYear())
              </script> © 8105.
            </div>
            <div class="col-sm-6">
              <div class="text-sm-end d-none d-sm-block">
                Crafted with <i class="mdi mdi-heart text-danger"></i> by IPDS
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- Footer End -->

    </div>
    <!-- end main content-->

  </div>
  <!-- END layout-wrapper -->

  <!-- Right Sidebar -->
  <div class="right-bar">
    <div data-simplebar="" class="h-100">
      <div class="rightbar-title d-flex align-items-center px-3 py-4">

        <h5 class="m-0 me-2">Settings</h5>

        <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
          <i class="mdi mdi-close noti-icon"></i>
        </a>
      </div>

      <!-- Settings -->
      <hr class="mt-0">
      <h6 class="text-center mb-0">Choose Layouts</h6>

      <div class="p-4">
        <div class="mb-2">
          <img src="{{ asset('assets/images/layouts/layout-1.jpg') }}" class="img-fluid img-thumbnail" alt="layout-1">
        </div>

        <div class="form-check form-switch mb-3">
          <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked="">
          <label class="form-check-label" for="light-mode-switch">Light Mode</label>
        </div>

        <div class="mb-2">
          <img src="{{ asset('assets/images/layouts/layout-2.jpg') }}" class="img-fluid img-thumbnail" alt="layout-2">
        </div>
        <div class="form-check form-switch mb-3">
          <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsstyle="{{ asset('assets/css/bootstrap-dark.min.css') }}"
            data-appstyle="{{ asset('assets/css/app-dark.min.css') }}">
          <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
        </div>

        <div class="mb-2">
          <img src="{{ asset('assets/images/layouts/layout-3.jpg') }}" class="img-fluid img-thumbnail" alt="layout-3">
        </div>
        <div class="form-check form-switch mb-5">
          <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch" data-appstyle="{{ asset('assets/css/app-rtl.min.css') }}">
          <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
        </div>


      </div>

    </div> <!-- end slimscroll-menu-->
  </div>
  <!-- /Right-bar -->

  <!-- Right bar overlay-->
  <div class="rightbar-overlay"></div>

  <!-- JAVASCRIPT -->
  <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
  <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
  <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>

  <!-- Icon -->
  <script src="{{ asset('assets/libs/monochrome/bundle.js') }}"></script>
  <script src="{{ asset('assets/js/pages/materialdesign.init.js') }}"></script>
  <script src="{{ asset('assets/js/pages/remix-icons-list.js') }}"></script>

  @yield('js')

  <!-- App js -->
  <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>

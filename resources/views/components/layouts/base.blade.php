<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>{{ $title ?? 'CMS' }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('dist/assets/images/favicon.ico')}}">

        <!-- App css -->
        <link href="{{ asset('dist/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('dist/assets/css/app-creative.min.css')}}" rel="stylesheet" type="text/css" id="light-style" />
        @yield('scripts-hedaer')
    </head>

    <body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            <x-partials.menu></x-partials.menu>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
 <div class="content-page">
 <div class="content">
 <x-partials.navbar></x-partials.navbar>
             {{ $slot }}
     <x-partials.footer></x-partials.footer>
                </div> <!-- content -->
       </div>     <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- bundle -->
        <script src="{{asset('dist/assets/js/vendor.min.js')}}"></script>
        <script src="{{asset('dist/assets/js/app.min.js')}}"></script>
         @yield('scripts-footer')
    </body>
</html>

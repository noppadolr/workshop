{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--    <head>--}}
{{--        <meta charset="utf-8">--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}

{{--        <title>{{ $title ?? 'Page Title' }}</title>--}}
{{--    </head>--}}
{{--    <body>--}}
{{--        {{ $slot }}--}}
{{--    </body>--}}
{{--</html>--}}
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | @yield('title', $title ?? 'Page Title' )</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
{{--    {{ asset('admin/') }}--}}
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.ico') }}">

    <!-- Plugins css -->
    <link href="{{ asset('admin/assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/libs/selectize/css/selectize.bootstrap3.css') }}" rel="stylesheet" type="text/css" />

    <!-- Theme Config Js -->
    <script src="{{ asset('admin/assets/js/head.js') }}"></script>

    <!-- Bootstrap css -->
    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- App css -->
    <link href="{{ asset('admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Icons css -->
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    @stack('styles')
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>

<!-- Begin page -->
<div id="wrapper">


    <!-- ========== Menu ========== -->
    <livewire:admin.sidebar/>
    <!-- ========== Left menu End ========== -->





    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">

        <!-- ========== Topbar Start ========== -->
        <livewire:admin.navbar />

        <!-- ========== Topbar End ========== -->

        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                @yield('page_title', $page_title ?? '' )
                <!-- end page title -->
                @yield('content', $slot ?? '' )




<!-- end row -->

</div> <!-- container -->

</div> <!-- content -->

<!-- Footer Start -->
        <livewire:admin.footer/>
<!-- end Footer -->

</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->

</div>
<!-- END wrapper -->

<!-- Theme Settings -->


<!-- Vendor js -->
<script src="{{ asset('admin/assets/js/vendor.min.js') }}"></script>

<!-- App js -->
<script src="{{ asset('admin/assets/js/app.min.js') }}"></script>
<!-- third party js -->
<script src="{{ asset('admin/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/jquery-datatables-checkboxes/js/dataTables.checkboxes.min.js') }}"></script>
<!-- third party js ends -->

<!-- Plugins js-->
<script src="{{ asset('admin/assets/libs/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/selectize/js/standalone/selectize.min.js') }}"></script>

<!-- Dashboar 1 init js-->
<script src="{{ asset('admin/assets/js/pages/dashboard-1.init.js') }}"></script>
@stack('scripts')

</body>

</html>

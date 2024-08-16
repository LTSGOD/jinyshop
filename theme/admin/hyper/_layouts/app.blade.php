<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Theme | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="/assets/images/favicon.ico">

        <!-- Daterangepicker css -->
        <link rel="stylesheet" href="/assets/vendor/daterangepicker/daterangepicker.css">

        <!-- Vector Map css -->
        <link rel="stylesheet" href="/assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css">

        <!-- Theme Config Js -->
        <script src="/assets/js/hyper-config.js"></script>

        <!-- App css -->
        <link href="/assets/css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style" />
        @vite('resources/css/tailwind.scss')

        <!-- Icons css -->
        <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <!-- Begin page -->
        <div class="wrapper">

            <!-- ========== Topbar Start ========== -->
            @theme("_partials.topbar")
            {{-- @includeIf('theme::admin.hyper._partials.topbar') --}}
            <!-- ========== Topbar End ========== -->

            <!-- ========== Left Sidebar Start ========== -->
            {{-- @includeIf('theme::admin.hyper._sidebar.sidebar') --}}
            @theme("_sidebar.sidebar")
            <!-- ========== Left Sidebar End ========== -->

            {{$slot}}

            <x-set-actions></x-set-actions>
            <x-site-setting></x-site-setting>

        </div>
        <!-- END wrapper -->

        <!-- Vendor js -->
        <script src="/assets/js/vendor.min.js"></script>

        <!-- Daterangepicker js -->
        <script src="/assets/vendor/daterangepicker/moment.min.js"></script>
        <script src="/assets/vendor/daterangepicker/daterangepicker.js"></script>

        <!-- Apex Charts js -->
        <script src="/assets/vendor/apexcharts/apexcharts.min.js"></script>

        <!-- Vector Map js -->
        <script src="/assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="/assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>

        <!-- Dashboard App js -->
        <script src="/assets/js/pages/demo.dashboard.js"></script>

        <!-- App js -->
        <script src="/assets/js/app.min.js"></script>

    </body>
</html>

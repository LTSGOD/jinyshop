<x-theme name="admin.hyper">
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Charts</a></li>
                                    <li class="breadcrumb-item active">Sparkline Charts</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Sparkline Charts</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-md-6 col-xxl-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Line Charts</h4>

                                <div class="mt-4" dir="ltr">
                                    <div id="sparkline1" data-colors="#727cf5,#0acf97"></div>
                                </div>
                            </div> <!-- end card-body -->
                        </div> <!-- card -->
                    </div> <!-- end col -->

                    <div class="col-md-6 col-xxl-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Bar Chart</h4>

                                <div class="mt-4" dir="ltr">
                                    <div id="sparkline2" class="text-center" data-colors="#39afd1"></div>
                                </div>
                            </div> <!-- end card-body -->
                        </div> <!-- card -->
                    </div> <!-- end col -->

                    <div class="col-md-6 col-xxl-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Pie Chart</h4>

                                <div class="mt-4" dir="ltr">
                                    <div id="sparkline3" class="text-center" data-colors="#39afd1,#ffbc00,#e3eaef,#fa5c7c"></div>
                                </div>
                            </div> <!-- end card-body -->
                        </div> <!-- card -->
                    </div> <!-- end col -->

                    <div class="col-md-6 col-xxl-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Custom Line Chart</h4>

                                <div class="mt-4" dir="ltr">
                                    <div id="sparkline4" class="text-center" data-colors="#ffbc00,#4eb7eb"></div>
                                </div>
                            </div> <!-- end card-body -->
                        </div> <!-- card -->
                    </div> <!-- end col -->

                    <div class="col-md-6 col-xxl-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Mouse Speed Chart</h4>

                                <div class="mt-4" dir="ltr">
                                    <div id="sparkline5" class="text-center"></div>
                                </div>
                            </div> <!-- end card-body -->
                        </div> <!-- card -->
                    </div> <!-- end col -->

                    <div class="col-md-6 col-xxl-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Composite bar Chart</h4>

                                <div class="text-center mt-4" dir="ltr">
                                    <div id="sparkline6" class="text-center"></div>
                                </div>
                            </div> <!-- end card-body -->
                        </div> <!-- card -->
                    </div> <!-- end col -->

                    <div class="col-md-6 col-xxl-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Discrete Chart</h4>

                                <div class="text-center mt-4" dir="ltr">
                                    <div id="sparkline7" class="text-center" data-colors="#6c757d"></div>
                                </div>
                            </div> <!-- end card-body -->
                        </div> <!-- card -->
                    </div> <!-- end col -->

                </div>
                <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <script>document.write(new Date().getFullYear())</script> © Hyper - Coderthemes.com
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-end footer-links d-none d-md-block">
                            <a href="javascript: void(0);">About</a>
                            <a href="javascript: void(0);">Support</a>
                            <a href="javascript: void(0);">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>
</x-theme>


        <meta charset="utf-8" />
        <title>Sparkline Charts | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- App favicon -->


        <!-- Theme Config Js -->


        <!-- App css -->




        <!-- Begin page -->
        <div class="wrapper">


            <!-- ========== Topbar Start ========== -->
            @theme("_partials/topbar")
            <!-- ========== Topbar End ========== -->

            <!-- ========== Left Sidebar Start ========== -->
            @theme("_sidebar/sidebar")
            <!-- ========== Left Sidebar End ========== -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->



            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- Theme Settings -->
        @theme("_partials/theme-setting")

        <!-- Vendor js -->


        <!-- Sparkline Chart js -->
        <script src="assets/vendor/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- Sparkline Chart Demo js -->
        <script src="assets/js/pages/demo.sparkline.js"></script>

        <!-- App js -->



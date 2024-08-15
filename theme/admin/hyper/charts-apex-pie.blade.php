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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Apex</a></li>
                                    <li class="breadcrumb-item active">Pie Charts</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Pie Charts</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Simple Pie Chart</h4>
                                <div dir="ltr">
                                    <div id="simple-pie" class="apex-charts" data-colors="#727cf5,#6c757d,#0acf97,#fa5c7c,#e3eaef"></div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col-->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Simple Donut Chart</h4>
                                <div dir="ltr">
                                    <div id="simple-donut" class="apex-charts" data-colors="#39afd1,#ffbc00,#313a46,#fa5c7c,#0acf97"></div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col-->
                </div>
                <!-- end row-->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mb-4">Monochrome Pie Chart</h4>
                                <div dir="ltr">
                                    <div id="monochrome-pie" class="apex-charts"></div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col-->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mb-4">Gradient Donut Chart</h4>
                                <div dir="ltr">
                                    <div id="gradient-donut" class="apex-charts" data-colors="#727cf5,#6c757d,#0acf97,#fa5c7c,#e3eaef"></div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col-->
                </div>
                <!-- end row-->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mb-4">Patterned Donut Chart</h4>
                                <div dir="ltr">
                                    <div id="patterned-donut" class="apex-charts" data-colors="#39afd1,#ffbc00,#313a46,#fa5c7c,#0acf97"></div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col-->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mb-4">Pie Chart with Image fill</h4>
                                <div dir="ltr">
                                    <div id="image-pie" class="apex-charts" data-colors="#39afd1,#ffbc00,#727cf5,#0acf97"></div>
                                </div>
                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col-->
                </div>
                <!-- end row-->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mb-4">Donut Update</h4>
                                <div dir="ltr">
                                    <div id="update-donut" class="apex-charts" data-colors="#727cf5,#6c757d,#0acf97,#fa5c7c"></div>
                                </div>

                                <div class="text-center mt-2">
                                    <button class="btn btn-sm btn-primary" id="randomize">RANDOMIZE</button>
                                    <button class="btn btn-sm btn-primary" id="add">ADD</button>
                                    <button class="btn btn-sm btn-primary" id="remove">REMOVE</button>
                                    <button class="btn btn-sm btn-primary" id="reset">RESET</button>
                                </div>

                            </div>
                            <!-- end card body-->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col-->
                </div>
                <!-- end row-->

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
        <title>Apex Pie Charts | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
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


        <!-- Apex Chart js -->


        <!-- Apex Chart Pie Demo js -->
        <script src="assets/js/pages/demo.apex-pie.js"></script>

        <!-- App js -->



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
                                    <li class="breadcrumb-item active">Column Charts</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Column Charts</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Basic Column Chart</h4>
                                <div dir="ltr">
                                    <div id="basic-column" class="apex-charts" data-colors="#727cf5,#0acf97,#fa5c7c"></div>
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
                                <h4 class="header-title mb-3">Column Chart with Datalabels</h4>
                                <div dir="ltr">
                                    <div id="datalabels-column" class="apex-charts" data-colors="#727cf5"></div>
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
                                <h4 class="header-title">Stacked Column Chart</h4>
                                <div dir="ltr">
                                    <div id="stacked-column" class="apex-charts" data-colors="#39afd1,#ffbc00,#e3eaef"></div>
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
                                <h4 class="header-title">100% Stacked Column Chart</h4>
                                <div dir="ltr">
                                    <div id="full-stacked-column" class="apex-charts" data-colors="#39afd1,#0acf97,#e3eaef"></div>
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
                                <h4 class="header-title">Column with Markers</h4>
                                <div dir="ltr">
                                    <div id="column-with-markers" class="apex-charts" data-colors="#727cf5,#ffbc00"></div>
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
                                <h4 class="header-title">Column with Group Label</h4>
                                <div dir="ltr">
                                    <div id="column-with-group-label" class="apex-charts" data-colors="#39afd1,#0acf97,#e3eaef"></div>
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
                                <h4 class="header-title">Column Chart with rotated labels & Annotations</h4>
                                <div dir="ltr">
                                    <div id="rotate-labels-column" class="apex-charts" data-colors="#fa5c7c"></div>
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
                                <h4 class="header-title">Column Chart with negative values</h4>
                                <div dir="ltr">
                                    <div id="negative-value-column" class="apex-charts" data-colors="#727cf5"></div>
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
                                <h4 class="header-title">Distributed Column Chart</h4>
                                <div dir="ltr">
                                    <div id="distributed-column" class="apex-charts" data-colors="#727cf5,#6c757d,#0acf97,#fa5c7c,#ffbc00,#39afd1,#e3eaef,#313a46"></div>
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
                                <h4 class="header-title">Range Column Chart</h4>
                                <div dir="ltr">
                                    <div id="range-column" class="apex-charts" data-colors="#0acf97,#39afd1"></div>
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
                    <div class="col-12">
                        <div class="card">
                            <div class="d-flex card-header justify-content-between align-items-center">
                                <h4 class="header-title">Dynamic Loaded Chart</h4>
                                <div class="flex-shrink-0">
                                    <select id="model" class="form-select form-select-sm">
                                        <option value="iphone5">iPhone 5</option>
                                        <option value="iphone6">iPhone 6</option>
                                        <option value="iphone7">iPhone 7</option>
                                    </select>
                                </div>
                            </div>

                            <div class="card-body pt-0">
                                <h4 class="header-title"></h4>
                                <div dir="ltr">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div id="chart-year" data-colors="#727cf5,#6c757d,#0acf97,#fa5c7c,#ffbc00,#39afd1"></div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div id="chart-quarter" data-colors="#727cf5,#6c757d,#0acf97,#fa5c7c,#ffbc00,#39afd1"></div>
                                        </div>
                                    </div> <!-- end row-->
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
        <title>Apex Column Charts | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
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


        <!-- Apex Chart Column Demo js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.11.0/dayjs.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.11.0/plugin/quarterOfYear.min.js"></script>
        <script src="assets/js/pages/demo.apex-column.js"></script>

        <!-- Apex Chart Area Demo js -->



<x-theme>

</x-theme>


        <meta charset="utf-8" />
        <title>Scrollbar | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Extended UI</a></li>
                                            <li class="breadcrumb-item active">Scrollbar</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Scrollbar</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <h4 class="header-title">Default Scroll</h4>
                                        <p class="text-muted font-14">Just use data attribute <code>data-simplebar</code>
                                            and add <code>max-height: **px</code> oh fix height</p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#default-scroll-preview" data-bs-toggle="tab" aria-expanded="false"
                                                    class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#default-scroll-code" data-bs-toggle="tab" aria-expanded="true"
                                                    class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                    </div> <!-- end card-body -->

                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="default-scroll-preview">
                                            <div class="card-body py-0 mb-3" data-simplebar style="max-height: 250px;">
                                                SimpleBar does only one thing: replace the browser's default scrollbar
                                                with a custom CSS-styled one without losing performances.
                                                Unlike some popular plugins, SimpleBar doesn't mimic scroll with
                                                Javascript, causing janks and strange scrolling behaviours...
                                                You keep the awesomeness of native scrolling...with a custom scrollbar!
                                                <p>SimpleBar <strong>does NOT implement a custom scroll
                                                        behaviour</strong>. It keeps the <strong>native</strong>
                                                    <code>overflow: auto</code> scroll and <strong>only</strong> replace
                                                    the scrollbar visual appearance.
                                                </p>
                                                <h5>Design it as you want</h5>
                                                <p>SimpleBar uses pure CSS to style the scrollbar. You can easily
                                                    customize it as you want! Or even have multiple style on the same
                                                    page...or just keep the default style ("Mac OS" scrollbar style).
                                                </p>
                                                <h5>Lightweight and performant</h5>
                                                <p>Only 6kb minified. SimpleBar doesn't use Javascript to handle
                                                    scrolling. You keep the performances/behaviours of the native
                                                    scroll.</p>
                                                <h5>Supported everywhere</h5>
                                                <p class="mb-0">SimpleBar has been tested on the following browsers: Chrome,
                                                    Firefox,
                                                    Safari, Edge, IE11.</p>
                                            </div>
                                        </div> <!-- end preview-->

                                        <div class="tab-pane card-body pt-0" id="default-scroll-code">
                                            <pre class="mb-0">
                                                <span class="html escape">
                                                    &lt;!-- HTML --&gt;
                                                    &lt;div class=&quot;card-body py-0&quot; data-simplebar style=&quot;max-height: 250px;&quot;&gt;
                                                    &lt;/div&gt;
                                                </span>
                                            </pre> <!-- end highlight-->
                                        </div> <!-- end preview code-->
                                    </div> <!-- end tab-content-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <h4 class="header-title">RTL Position</h4>
                                        <p class="text-muted font-14">Just use data attribute
                                            <code>data-simplebar data-simplebar-direction='rtl'</code>
                                            and add <code>max-height: **px</code> oh fix height</p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#left-scroll-preview" data-bs-toggle="tab" aria-expanded="false"
                                                    class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#left-scroll-code" data-bs-toggle="tab" aria-expanded="true"
                                                    class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                    </div> <!-- end card-body -->

                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="left-scroll-preview">
                                            <div class="card-body py-0 mb-3" data-simplebar data-simplebar-direction='rtl'
                                                style="max-height: 250px;">
                                                SimpleBar does only one thing: replace the browser's default scrollbar
                                                with a custom CSS-styled one without losing performances.
                                                Unlike some popular plugins, SimpleBar doesn't mimic scroll with
                                                Javascript, causing janks and strange scrolling behaviours...
                                                You keep the awesomeness of native scrolling...with a custom scrollbar!
                                                <p>SimpleBar <strong>does NOT implement a custom scroll
                                                        behaviour</strong>. It keeps the <strong>native</strong>
                                                    <code>overflow: auto</code> scroll and <strong>only</strong> replace
                                                    the scrollbar visual appearance.
                                                </p>
                                                <h5>Design it as you want</h5>
                                                <p>SimpleBar uses pure CSS to style the scrollbar. You can easily
                                                    customize it as you want! Or even have multiple style on the same
                                                    page...or just keep the default style ("Mac OS" scrollbar style).
                                                </p>
                                                <h5>Lightweight and performant</h5>
                                                <p>Only 6kb minified. SimpleBar doesn't use Javascript to handle
                                                    scrolling. You keep the performances/behaviours of the native
                                                    scroll.</p>
                                                <h5>Supported everywhere</h5>
                                                <p class="mb-0">SimpleBar has been tested on the following browsers: Chrome,
                                                    Firefox,
                                                    Safari, Edge, IE11.</p>
                                            </div>
                                        </div> <!-- end preview-->

                                        <div class="tab-pane card-body pt-0" id="left-scroll-code">
                                            <pre class="mb-0">
                                                <span class="html escape">
                                                    &lt;!-- HTML --&gt;
                                                    &lt;div class=&quot;card-body py-0&quot; data-simplebar data-simplebar-direction='rtl' style=&quot;max-height: 250px;&quot;&gt;
                                                    &lt;/div&gt;
                                                </span>
                                            </pre> <!-- end highlight-->
                                        </div> <!-- end preview code-->
                                    </div> <!-- end tab-content-->

                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <h4 class="header-title">Scroll Size</h4>
                                        <p class="text-muted font-14">Just use data attribute <code>data-simplebar</code>
                                            and add <code>max-height: **px</code> oh fix height</p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#size-scroll-preview" data-bs-toggle="tab" aria-expanded="false"
                                                    class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#size-scroll-code" data-bs-toggle="tab" aria-expanded="true"
                                                    class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                    </div> <!-- end card-body -->

                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="size-scroll-preview">
                                            <div class="card-body py-0 mb-3" data-simplebar data-simplebar-lg
                                                style="max-height: 250px;">
                                                SimpleBar does only one thing: replace the browser's default scrollbar
                                                with a custom CSS-styled one without losing performances.
                                                Unlike some popular plugins, SimpleBar doesn't mimic scroll with
                                                Javascript, causing janks and strange scrolling behaviours...
                                                You keep the awesomeness of native scrolling...with a custom scrollbar!
                                                <p>SimpleBar <strong>does NOT implement a custom scroll
                                                        behaviour</strong>. It keeps the <strong>native</strong>
                                                    <code>overflow: auto</code> scroll and <strong>only</strong> replace
                                                    the scrollbar visual appearance.
                                                </p>
                                                <h5>Design it as you want</h5>
                                                <p>SimpleBar uses pure CSS to style the scrollbar. You can easily
                                                    customize it as you want! Or even have multiple style on the same
                                                    page...or just keep the default style ("Mac OS" scrollbar style).
                                                </p>
                                                <h5>Lightweight and performant</h5>
                                                <p>Only 6kb minified. SimpleBar doesn't use Javascript to handle
                                                    scrolling. You keep the performances/behaviours of the native
                                                    scroll.</p>
                                                <h5>Supported everywhere</h5>
                                                <p class="mb-0">SimpleBar has been tested on the following browsers: Chrome,
                                                    Firefox,
                                                    Safari, Edge, IE11.</p>
                                            </div>
                                        </div> <!-- end preview-->

                                        <div class="tab-pane card-body pt-0" id="size-scroll-code">
                                            <pre class="mb-0">
                                                <span class="html escape">
                                                    &lt;!-- HTML --&gt;
                                                    &lt;div class=&quot;card-body py-0&quot; data-simplebar data-simplebar-lg style=&quot;max-height: 250px;&quot;&gt;
                                                    &lt;/div&gt;
                                                </span>
                                            </pre> <!-- end highlight-->
                                        </div> <!-- end preview code-->
                                    </div> <!-- end tab-content-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <h4 class="header-title">Scroll Color</h4>
                                        <p class="text-muted font-14">Just use data attribute
                                            <code>data-simplebar data-simplebar-primary</code>
                                            and add <code>max-height: **px</code> oh fix height</p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#color-scroll-preview" data-bs-toggle="tab" aria-expanded="false"
                                                    class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#color-scroll-code" data-bs-toggle="tab" aria-expanded="true"
                                                    class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                    </div> <!-- end card-body -->
                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="color-scroll-preview">
                                            <div class="card-body py-0 mb-3" data-simplebar data-simplebar-primary
                                                style="max-height: 250px;">
                                                SimpleBar does only one thing: replace the browser's default scrollbar
                                                with a custom CSS-styled one without losing performances.
                                                Unlike some popular plugins, SimpleBar doesn't mimic scroll with
                                                Javascript, causing janks and strange scrolling behaviours...
                                                You keep the awesomeness of native scrolling...with a custom scrollbar!
                                                <p>SimpleBar <strong>does NOT implement a custom scroll
                                                        behaviour</strong>. It keeps the <strong>native</strong>
                                                    <code>overflow: auto</code> scroll and <strong>only</strong> replace
                                                    the scrollbar visual appearance.
                                                </p>
                                                <h5>Design it as you want</h5>
                                                <p>SimpleBar uses pure CSS to style the scrollbar. You can easily
                                                    customize it as you want! Or even have multiple style on the same
                                                    page...or just keep the default style ("Mac OS" scrollbar style).
                                                </p>
                                                <h5>Lightweight and performant</h5>
                                                <p>Only 6kb minified. SimpleBar doesn't use Javascript to handle
                                                    scrolling. You keep the performances/behaviours of the native
                                                    scroll.</p>
                                                <h5>Supported everywhere</h5>
                                                <p class="mb-0">SimpleBar has been tested on the following browsers: Chrome,
                                                    Firefox,
                                                    Safari, Edge, IE11.</p>
                                            </div>
                                        </div> <!-- end preview-->

                                        <div class="tab-pane card-body pt-0" id="color-scroll-code">
                                            <pre class="mb-0">
                                                <span class="html escape">
                                                    &lt;!-- HTML --&gt;
                                                    &lt;div class=&quot;card-body py-0&quot; data-simplebar data-simplebar-primary style=&quot;max-height: 250px;&quot;&gt;
                                                    &lt;/div&gt;
                                                </span>
                                            </pre> <!-- end highlight-->
                                        </div> <!-- end preview code-->
                                    </div> <!-- end tab-content-->
                                </div> <!-- end card-->
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

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->


        <!-- Theme Settings -->
        @theme("_partials/theme-setting")

        <!-- Vendor js -->


        <!-- Code Highlight js -->
        <script src="assets/vendor/highlightjs/highlight.pack.min.js"></script>
        <script src="assets/js/hyper-syntax.js"></script>

        <!-- App js -->


    </body>

</html>

<x-theme>

</x-theme>


        <meta charset="utf-8" />
        <title>Treeview | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- App favicon -->


        <link href="assets/vendor/jstree/themes/default/style.min.css" rel="stylesheet" type="text/css">

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
                                            <li class="breadcrumb-item active">Treeview</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Treeview</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Basic Treeview</h4>
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#jstree-1-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#jstree-1-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="jstree-1-preview">
                                                <div id="jstree-1">
                                                    <ul>
                                                        <li>
                                                            Root node 1
                                                            <ul>
                                                                <li data-jstree='{ "selected" : true }'>
                                                                    <a href="javascript:;"> Initially selected </a>
                                                                </li>
                                                                <li data-jstree='{ "icon" : "ri-home-4-line text-success " }'>
                                                                    custom icon URL
                                                                </li>
                                                                <li data-jstree='{ "opened" : true }'>
                                                                    initially open
                                                                    <ul>
                                                                        <li data-jstree='{ "disabled" : true }'>
                                                                            Disabled Node
                                                                        </li>
                                                                        <li data-jstree='{ "type" : "file" }'>
                                                                            Another node
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li data-jstree='{ "icon" : "ri-vip-diamond-line text-danger" }'>
                                                                    Custom icon class (bootstrap)
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li data-jstree='{ "type" : "link" }'>
                                                            <a href="http://www.coderthemes.com"> Clickable link node </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="jstree-1-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- jstree css --&gt;
                                                        &lt;link href=&quot;assets/vendor/jstree/themes/default/style.min.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot;&gt;
                                                    </span>
                                                </pre>
                                                <pre class="mb-0 mt-1">
                                                    <span class="html escape">
                                                        &lt;!-- jstree js --&gt;
                                                        &lt;script src=&quot;assets/vendor/jstree/jstree.min.js&quot;&gt;&lt;/script&gt;
                                                        &lt;script src=&quot;assets/js/pages/demo.jstree.js&quot;&gt;&lt;/script&gt;
                                                    </span>
                                                </pre>
                                                <pre class="mb-0 mt-1">
                                                    <span class="html escape">
                                                        &lt;div id=&quot;jstree-1&quot;&gt;
                                                            &lt;ul&gt;
                                                                &lt;li&gt;
                                                                    Root node 1
                                                                    &lt;ul&gt;
                                                                        &lt;li data-jstree='{ &quot;selected&quot; : true }'&gt;
                                                                            &lt;a href=&quot;javascript:;&quot;&gt;
                                                                            Initially selected &lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li data-jstree='{ &quot;icon&quot; : &quot;ri-home-4-line text-success &quot; }'&gt;
                                                                            custom icon URL
                                                                        &lt;/li&gt;
                                                                        &lt;li data-jstree='{ &quot;opened&quot; : true }'&gt;
                                                                            initially open
                                                                            &lt;ul&gt;
                                                                                &lt;li data-jstree='{ &quot;disabled&quot; : true }'&gt;
                                                                                    Disabled Node
                                                                                &lt;/li&gt;
                                                                                &lt;li data-jstree='{ &quot;type&quot; : &quot;file&quot; }'&gt;
                                                                                    Another node
                                                                                &lt;/li&gt;
                                                                            &lt;/ul&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li data-jstree='{ &quot;icon&quot; : &quot;ri-vip-diamond-line text-danger&quot; }'&gt;
                                                                            Custom icon class (bootstrap)
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/li&gt;
                                                                &lt;li data-jstree='{ &quot;type&quot; : &quot;link&quot; }'&gt;
                                                                    &lt;a href=&quot;http://www.coderthemes.com&quot;&gt;
                                                                    Clickable link node &lt;/a&gt;
                                                                &lt;/li&gt;
                                                            &lt;/ul&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Custom Icons & Clickable Nodes</h4>
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#jstree-2-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#jstree-2-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="jstree-2-preview">
                                                <div id="jstree-2">
                                                    <ul>
                                                        <li>
                                                            Root node 1
                                                            <ul>
                                                                <li data-jstree='{ "selected" : true }'>
                                                                    <a href="javascript:;"> Initially selected </a>
                                                                </li>
                                                                <li data-jstree='{ "icon" : "ri-article-line text-success " }'>
                                                                    custom icon URL
                                                                </li>
                                                                <li data-jstree='{ "opened" : true }'>
                                                                    initially open
                                                                    <ul>
                                                                        <li data-jstree='{ "disabled" : true }'>
                                                                            Disabled Node
                                                                        </li>
                                                                        <li data-jstree='{ "type" : "file" }'>
                                                                            Another node
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li data-jstree='{ "icon" : "ri-user-line text-danger" }'>
                                                                    Custom icon class (bootstrap)
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li data-jstree='{ "type" : "link" }'>
                                                            <a href="https://coderthemes.com/"> Clickable link node </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="jstree-2-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- jstree css --&gt;
                                                        &lt;link href=&quot;assets/vendor/jstree/themes/default/style.min.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot;&gt;
                                                    </span>
                                                </pre>
                                                <pre class="mb-0 mt-1">
                                                    <span class="html escape">
                                                        &lt;!-- jstree js --&gt;
                                                        &lt;script src=&quot;assets/vendor/jstree/jstree.min.js&quot;&gt;&lt;/script&gt;
                                                        &lt;script src=&quot;assets/js/pages/demo.jstree.js&quot;&gt;&lt;/script&gt;
                                                    </span>
                                                </pre>
                                                <pre class="mb-0 mt-1">
                                                    <span class="html escape">
                                                        &lt;div id=&quot;jstree-2&quot;
                                                            &lt;ul&gt;
                                                                &lt;li&gt;
                                                                    Root node 1
                                                                    &lt;ul&gt;
                                                                        &lt;li data-jstree='{ &quot;selected&quot; : true }'&gt;
                                                                            &lt;a href=&quot;javascript:;&quot;&gt;
                                                                                Initially selected &lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li data-jstree='{ &quot;icon&quot; : &quot;ri-article-line text-success &quot; }'&gt;
                                                                            custom icon URL
                                                                        &lt;/li&gt;
                                                                        &lt;li data-jstree='{ &quot;opened&quot; : true }'&gt;
                                                                            initially open
                                                                            &lt;ul&gt;
                                                                                &lt;li data-jstree='{ &quot;disabled&quot; : true }'&gt;
                                                                                    Disabled Node
                                                                                &lt;/li&gt;
                                                                                &lt;li data-jstree='{ &quot;type&quot; : &quot;file&quot; }'&gt;
                                                                                    Another node
                                                                                &lt;/li&gt;
                                                                            &lt;/ul&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li data-jstree='{ &quot;icon&quot; : &quot;ri-user-line text-danger&quot; }'&gt;
                                                                            Custom icon class (bootstrap)
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/li&gt;
                                                                &lt;li data-jstree='{ &quot;type&quot; : &quot;link&quot; }'&gt;
                                                                    &lt;a href=&quot;https://coderthemes.com/&quot;&gt;
                                                                        Clickable link node &lt;/a&gt;
                                                                &lt;/li&gt;
                                                            &lt;/ul&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Checkable Tree</h4>
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#jstree-3-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#jstree-3-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="jstree-3-preview">
                                                <div id="jstree-3"></div>
                                            </div>
                                            <div class="tab-pane" id="jstree-3-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- jstree css --&gt;
                                                        &lt;link href=&quot;assets/vendor/jstree/themes/default/style.min.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot;&gt;
                                                    </span>
                                                </pre>
                                                <pre class="mb-0 mt-1">
                                                    <span class="html escape">
                                                        &lt;!-- jstree js --&gt;
                                                        &lt;script src=&quot;assets/vendor/jstree/jstree.min.js&quot;&gt;&lt;/script&gt;
                                                        &lt;script src=&quot;assets/js/pages/demo.jstree.js&quot;&gt;&lt;/script&gt;
                                                    </span>
                                                </pre>
                                                <pre class="mb-0 mt-1">
                                                    <span class="html escape">
                                                        &lt;div id=&quot;jstree-3&quot;&gt;&lt;/div&gt;
                                                    </span>
                                                </pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Contextual Menu</h4>
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#jstree-4-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#jstree-4-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="jstree-4-preview">
                                                <div id="jstree-4"></div>
                                            </div>
                                            <div class="tab-pane" id="jstree-4-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- jstree css --&gt;
                                                        &lt;link href=&quot;assets/vendor/jstree/themes/default/style.min.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot;&gt;
                                                    </span>
                                                </pre>
                                                <pre class="mb-0 mt-1">
                                                    <span class="html escape">
                                                        &lt;!-- jstree js --&gt;
                                                        &lt;script src=&quot;assets/vendor/jstree/jstree.min.js&quot;&gt;&lt;/script&gt;
                                                        &lt;script src=&quot;assets/js/pages/demo.jstree.js&quot;&gt;&lt;/script&gt;
                                                    </span>
                                                </pre>
                                                <pre class="mb-0 mt-1">
                                                    <span class="html escape">
                                                        &lt;div id=&quot;jstree-4&quot;&gt;&lt;/div&gt;
                                                    </span>
                                                </pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Drag & Drop</h4>
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#jstree-5-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#jstree-5-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="jstree-5-preview">
                                                <div id="jstree-5"></div>
                                            </div>
                                            <div class="tab-pane" id="jstree-5-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- jstree css --&gt;
                                                        &lt;link href=&quot;assets/vendor/jstree/themes/default/style.min.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot;&gt;
                                                    </span>
                                                </pre>
                                                <pre class="mb-0 mt-1">
                                                    <span class="html escape">
                                                        &lt;!-- jstree js --&gt;
                                                        &lt;script src=&quot;assets/vendor/jstree/jstree.min.js&quot;&gt;&lt;/script&gt;
                                                        &lt;script src=&quot;assets/js/pages/demo.jstree.js&quot;&gt;&lt;/script&gt;
                                                    </span>
                                                </pre>
                                                <pre class="mb-0 mt-1">
                                                    <span class="html escape">
                                                        &lt;div id=&quot;jstree-5&quot;&gt;&lt;/div&gt;
                                                    </span>
                                                </pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Ajax Data</h4>
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#jstree-6-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#jstree-6-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="jstree-6-preview">
                                                <div id="jstree-6"></div>
                                            </div>
                                            <div class="tab-pane" id="jstree-6-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- jstree css --&gt;
                                                        &lt;link href=&quot;assets/vendor/jstree/themes/default/style.min.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot;&gt;
                                                    </span>
                                                </pre>
                                                <pre class="mb-0 mt-1">
                                                    <span class="html escape">
                                                        &lt;!-- jstree js --&gt;
                                                        &lt;script src=&quot;assets/vendor/jstree/jstree.min.js&quot;&gt;&lt;/script&gt;
                                                        &lt;script src=&quot;assets/js/pages/demo.jstree.js&quot;&gt;&lt;/script&gt;
                                                    </span>
                                                </pre>
                                                <pre class="mb-0 mt-1">
                                                    <span class="html escape">
                                                        &lt;!-- jstree json --&gt;
                                                        [{
                                                            &quot;id&quot;: &quot;node_1&quot;,
                                                            &quot;icon&quot;: &quot;ri-folder-line icon-lg text-success&quot;,
                                                            &quot;text&quot;: &quot;Node - 1&quot;,
                                                            &quot;children&quot;: false
                                                        }, {
                                                            &quot;id&quot;: &quot;node_2&quot;,
                                                            &quot;icon&quot;: &quot;ri-folder-line icon-lg text-success&quot;,
                                                            &quot;text&quot;: &quot;Node - 2&quot;,
                                                            &quot;children&quot;: false
                                                        }, {
                                                            &quot;id&quot;: &quot;node_3&quot;,
                                                            &quot;icon&quot;: &quot;ri-folder-line icon-lg text-success&quot;,
                                                            &quot;text&quot;: &quot;Node - 3&quot;,
                                                            &quot;children&quot;: false
                                                        }]
                                                    </span>
                                                </pre>
                                                <pre class="mb-0 mt-1">
                                                    <span class="html escape">
                                                        &lt;div id=&quot;jstree-6&quot;&gt;&lt;/div&gt;
                                                    </span>
                                                </pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- container -->


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

        <!-- jstree -->
        <script src="assets/vendor/jstree/jstree.min.js"></script>
        <script src="assets/js/pages/demo.jstree.js"></script>


        <!-- App js -->



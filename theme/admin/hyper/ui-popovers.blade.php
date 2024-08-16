<x-theme>
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Base UI</a></li>
                                    <li class="breadcrumb-item active">Popovers</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Popovers</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Simple Popover</h4>
                                <p class="text-muted font-14">
                                    Popover is a component which displays a box with a content after a click on an
                                    element - similar to the tooltip but can contain more content.
                                </p>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#simple-popover-preview" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link active">
                                            Preview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#simple-popover-code" data-bs-toggle="tab" aria-expanded="true"
                                            class="nav-link">
                                            Code
                                        </a>
                                    </li>
                                </ul> <!-- end nav-->
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="simple-popover-preview">
                                        <button type="button" class="btn btn-danger" data-bs-toggle="popover"
                                            title="Popover title"
                                            data-bs-content="And here's some amazing content. It's very engaging. Right?"
                                            data-bs-container="#simple-popover-preview">Click to toggle
                                            popover</button>
                                    </div> <!-- end preview-->

                                    <div class="tab-pane" id="simple-popover-code">
                                        <pre class="mb-0">
                                                <span class="html escape">
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot; data-bs-toggle=&quot;popover&quot; title=&quot;Popover title&quot; data-bs-content=&quot;And here's some amazing content. It's very engaging. Right?&quot;&gt;Click to toggle popover&lt;/button&gt;
                                                </span>
                                            </pre> <!-- end highlight-->
                                    </div> <!-- end preview code-->
                                </div> <!-- end tab-content-->
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->

                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Dismiss on Next Click</h4>
                                <p class="text-muted font-14">Use the <code>focus</code> trigger to dismiss popovers
                                    on the user’s next click of a different element than the toggle element.</p>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#dismiss-popover-preview" data-bs-toggle="tab"
                                            aria-expanded="false" class="nav-link active">
                                            Preview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#dismiss-popover-code" data-bs-toggle="tab" aria-expanded="true"
                                            class="nav-link">
                                            Code
                                        </a>
                                    </li>
                                </ul> <!-- end nav-->
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="dismiss-popover-preview">
                                        <button type="button" tabindex="0" class="btn btn-success"
                                            data-bs-toggle="popover" data-bs-trigger="focus"
                                            data-bs-content="And here's some amazing content. It's very engaging. Right?"
                                            title="Dismissible popover"
                                            data-bs-container="#dismiss-popover-preview">
                                            Dismissible popover
                                        </button>
                                    </div> <!-- end preview-->

                                    <div class="tab-pane" id="dismiss-popover-code">
                                        <pre class="mb-0">
                                                <span class="html escape">
                                                    &lt;button type=&quot;button&quot; tabindex=&quot;0&quot; class=&quot;btn btn-success&quot; data-bs-toggle=&quot;popover&quot; data-bs-trigger=&quot;focus&quot; data-bs-content=&quot;And here's some amazing content. It's very engaging. Right?&quot; title=&quot;Dismissible popover&quot;&gt;
                                                        Dismissible popover
                                                    &lt;/button&gt;
                                                </span>
                                            </pre> <!-- end highlight-->
                                    </div> <!-- end preview code-->
                                </div> <!-- end tab-content-->
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->

                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Hover</h4>
                                <p class="text-muted font-14">Use the attribute <code>data-bs-trigger="hover"</code>
                                    to show the popover on hovering the element.</p>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#hover-popover-preview" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link active">
                                            Preview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#hover-popover-code" data-bs-toggle="tab" aria-expanded="true"
                                            class="nav-link">
                                            Code
                                        </a>
                                    </li>
                                </ul> <!-- end nav-->
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="hover-popover-preview">
                                        <button type="button" tabindex="0" class="btn btn-dark"
                                            data-bs-toggle="popover" data-bs-trigger="hover"
                                            data-bs-content="And here's some amazing content. It's very engaging. Right?"
                                            title="Ohh Wow !" data-bs-container="#hover-popover-preview">
                                            Please Hover Me
                                        </button>
                                    </div> <!-- end preview-->

                                    <div class="tab-pane" id="hover-popover-code">
                                        <pre class="mb-0">
                                                <span class="html escape">
                                                    &lt;button type=&quot;button&quot; tabindex=&quot;0&quot; class=&quot;btn btn-dark&quot; data-bs-toggle=&quot;popover&quot; data-bs-trigger=&quot;hover&quot; data-bs-content=&quot;And here's some amazing content. It's very engaging. Right?&quot; title=&quot;Ohh Wow !&quot;&gt;
                                                        Please Hover Me
                                                    &lt;/button&gt;
                                                </span>
                                            </pre> <!-- end highlight-->
                                    </div> <!-- end preview code-->
                                </div> <!-- end tab-content-->
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Four Directions</h4>
                                <p class="text-muted font-14">Four options are available: top, right, bottom, and
                                    left aligned.</p>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#extras-popover-preview" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link active">
                                            Preview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#extras-popover-code" data-bs-toggle="tab" aria-expanded="true"
                                            class="nav-link">
                                            Code
                                        </a>
                                    </li>
                                </ul> <!-- end nav-->
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="extras-popover-preview">
                                        <div class="button-list">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="popover"
                                                data-bs-placement="top"
                                                data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
                                                title="" data-bs-container="#extras-popover-preview">
                                                Popover on top
                                            </button>

                                            <button type="button" class="btn btn-primary"
                                                data-bs-container="#extras-popover-preview" data-bs-toggle="popover"
                                                data-bs-placement="bottom"
                                                data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
                                                title="">
                                                Popover on bottom
                                            </button>

                                            <button type="button" class="btn btn-primary"
                                                data-bs-container="#extras-popover-preview" data-bs-toggle="popover"
                                                data-bs-placement="right"
                                                data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
                                                title="">
                                                Popover on right
                                            </button>

                                            <button type="button" class="btn btn-primary"
                                                data-bs-container="#extras-popover-preview" data-bs-toggle="popover"
                                                data-bs-placement="left"
                                                data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
                                                title="Popover title">
                                                Popover on left
                                            </button>
                                        </div>
                                    </div> <!-- end preview-->

                                    <div class="tab-pane" id="extras-popover-code">
                                        <pre class="mb-0">
                                                <span class="html escape">
                                                    &lt;!-- Top Position --&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-container=&quot;body&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;top&quot; data-bs-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot; title=&quot;&quot;&gt;
                                                        Popover on top
                                                    &lt;/button&gt;

                                                    &lt;!-- Bottom Position --&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-container=&quot;body&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;bottom&quot; data-bs-content=&quot;Vivamus
                                                    sagittis lacus vel augue laoreet rutrum faucibus.&quot; title=&quot;&quot;&gt;
                                                        Popover on bottom
                                                    &lt;/button&gt;

                                                    &lt;!-- Right Position --&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-container=&quot;body&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;right&quot; data-bs-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot; title=&quot;&quot;&gt;
                                                        Popover on right
                                                    &lt;/button&gt;

                                                    &lt;!-- Left Position --&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-container=&quot;body&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;left&quot; data-bs-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot; title=&quot;Popover title&quot;&gt;
                                                        Popover on left
                                                    &lt;/button&gt;
                                                </span>
                                            </pre> <!-- end highlight-->
                                    </div> <!-- end preview code-->
                                </div> <!-- end tab-content-->
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->

                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Custom Popovers </h4>
                                <p class="text-muted font-14">You can customize the appearance of popovers using CSS variables. We set a custom class with
                                    <code>data-bs-custom-class="primary-popover"</code> to scope our custom appearance and use it to override some of the
                                    local CSS variables.</p>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#custom-popover-preview" data-bs-toggle="tab"
                                            aria-expanded="false" class="nav-link active">
                                            Preview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#custom-popover-code" data-bs-toggle="tab" aria-expanded="true"
                                            class="nav-link">
                                            Code
                                        </a>
                                    </li>
                                </ul> <!-- end nav-->
                                <div class="tab-content">

                                    <div class="tab-pane show active" id="custom-popover-preview">
                                        <div class="button-list">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="popover" data-bs-placement="right"
                                                data-bs-custom-class="primary-popover" data-bs-title="Primary popover"
                                                data-bs-content="This popover is themed via CSS variables.">
                                                Primary popover
                                            </button>

                                            <button type="button" class="btn btn-success" data-bs-toggle="popover" data-bs-placement="right"
                                                data-bs-custom-class="success-popover" data-bs-title="Success popover"
                                                data-bs-content="This popover is themed via CSS variables.">
                                                Success popover
                                            </button>

                                            <button type="button" class="btn btn-danger" data-bs-toggle="popover" data-bs-placement="right"
                                                data-bs-custom-class="danger-popover" data-bs-title="Danger popover"
                                                data-bs-content="This popover is themed via CSS variables.">
                                                Danger popover
                                            </button>

                                            <button type="button" class="btn btn-info" data-bs-toggle="popover" data-bs-placement="right"
                                                data-bs-custom-class="info-popover" data-bs-title="Info popover"
                                                data-bs-content="This popover is themed via CSS variables.">
                                                Info popover
                                            </button>
                                        </div>
                                    </div> <!-- end preview-->

                                    <div class="tab-pane" id="custom-popover-code">
                                        <pre class="mb-0">
                                                <span class="html escape">
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;right&quot;
                                                        data-bs-custom-class=&quot;primary-popover&quot; data-bs-title=&quot;Primary popover&quot;
                                                        data-bs-content=&quot;This popover is themed via CSS variables.&quot;&gt;
                                                        Primary popover
                                                    &lt;/button&gt;

                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;right&quot;
                                                        data-bs-custom-class=&quot;success-popover&quot; data-bs-title=&quot;Success popover&quot;
                                                        data-bs-content=&quot;This popover is themed via CSS variables.&quot;&gt;
                                                        Success popover
                                                    &lt;/button&gt;

                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;right&quot;
                                                        data-bs-custom-class=&quot;danger-popover&quot; data-bs-title=&quot;Danger popover&quot;
                                                        data-bs-content=&quot;This popover is themed via CSS variables.&quot;&gt;
                                                        Danger popover
                                                    &lt;/button&gt;

                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;right&quot;
                                                        data-bs-custom-class=&quot;info-popover&quot; data-bs-title=&quot;Info popover&quot;
                                                        data-bs-content=&quot;This popover is themed via CSS variables.&quot;&gt;
                                                        Info popover
                                                    &lt;/button&gt;
                                                </span>
                                            </pre> <!-- end highlight-->
                                    </div> <!-- end preview code-->
                                </div> <!-- end tab-content-->
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->

                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Disabled Elements</h4>
                                <p class="text-muted font-14">Elements with the <code>disabled</code> attribute
                                    aren’t interactive, meaning users cannot hover or click them to trigger a
                                    popover (or tooltip). As a workaround, you’ll want to trigger the popover from a
                                    wrapper <code>&lt;div&gt;</code> or <code>&lt;span&gt;</code> and override the
                                    <code>pointer-events</code> on the disabled element.</p>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#disabled-popover-preview" data-bs-toggle="tab"
                                            aria-expanded="false" class="nav-link active">
                                            Preview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#disabled-popover-code" data-bs-toggle="tab" aria-expanded="true"
                                            class="nav-link">
                                            Code
                                        </a>
                                    </li>
                                </ul> <!-- end nav-->
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="disabled-popover-preview">
                                        <span class="d-inline-block" data-bs-toggle="popover"
                                            data-bs-content="Disabled popover"
                                            data-bs-container="#disabled-popover-preview">
                                            <button class="btn btn-primary" style="pointer-events: none;"
                                                type="button" disabled>Disabled button</button>
                                        </span>
                                    </div> <!-- end preview-->

                                    <div class="tab-pane" id="disabled-popover-code">
                                        <pre class="mb-0">
                                                <span class="html escape">
                                                    &lt;span class=&quot;d-inline-block&quot; data-bs-toggle=&quot;popover&quot; data-bs-content=&quot;Disabled popover&quot;&gt;
                                                        &lt;button class=&quot;btn btn-primary&quot; style=&quot;pointer-events: none;&quot; type=&quot;button&quot; disabled&gt;Disabled button&lt;/button&gt;
                                                    &lt;/span&gt;
                                                </span>
                                            </pre> <!-- end highlight-->
                                    </div> <!-- end preview code-->
                                </div> <!-- end tab-content-->
                            </div> <!-- end card-body -->
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

    <!-- Code Highlight js -->
    <script src="assets/vendor/highlightjs/highlight.pack.min.js"></script>
    <script src="assets/js/hyper-syntax.js"></script>

</x-theme>

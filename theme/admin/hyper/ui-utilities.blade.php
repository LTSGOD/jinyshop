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
                                    <li class="breadcrumb-item active">Utilities</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Utilities</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Background Color</h4>
                                <p class="text-muted font-14">Similar to the contextual text color classes, set the background of an element to any contextual class. Background
                                    utilities <strong>do not set <code>color</code></strong>, so in some cases you’ll want to use <code>.text-*</code>color utilities.</p>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#bg-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link active">
                                            Preview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#bg-utilities-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                            Code
                                        </a>
                                    </li>
                                </ul> <!-- end nav-->
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="bg-utilities-preview">
                                        <div class="p-2 mb-2 bg-primary text-white">.bg-primary</div>
                                        <div class="p-2 mb-2 bg-secondary text-white">.bg-secondary</div>
                                        <div class="p-2 mb-2 bg-success text-white">.bg-success</div>
                                        <div class="p-2 mb-2 bg-danger text-white">.bg-danger</div>
                                        <div class="p-2 mb-2 bg-warning text-dark">.bg-warning</div>
                                        <div class="p-2 mb-2 bg-info text-dark">.bg-info</div>
                                        <div class="p-2 mb-2 bg-light text-dark">.bg-light</div>
                                        <div class="p-2 mb-2 bg-dark text-white">.bg-dark</div>
                                        <div class="p-2 mb-2 bg-body text-dark">.bg-body</div>
                                        <div class="p-2 mb-2 bg-white text-dark">.bg-white</div>
                                        <div class="p-2 bg-transparent text-dark">.bg-transparent</div>
                                    </div> <!-- end preview-->

                                    <div class="tab-pane" id="bg-utilities-code">
                                        <pre class="mb-0">
                                            <span class="html escape">
                                                &lt;div class=&quot;p-2 mb-2 bg-primary text-white&quot;&gt;.bg-primary&lt;/div&gt;
                                                &lt;div class=&quot;p-2 mb-2 bg-secondary text-white&quot;&gt;.bg-secondary&lt;/div&gt;
                                                &lt;div class=&quot;p-2 mb-2 bg-success text-white&quot;&gt;.bg-success&lt;/div&gt;
                                                &lt;div class=&quot;p-2 mb-2 bg-danger text-white&quot;&gt;.bg-danger&lt;/div&gt;
                                                &lt;div class=&quot;p-2 mb-2 bg-warning text-dark&quot;&gt;.bg-warning&lt;/div&gt;
                                                &lt;div class=&quot;p-2 mb-2 bg-info text-dark&quot;&gt;.bg-info&lt;/div&gt;
                                                &lt;div class=&quot;p-2 mb-2 bg-light text-dark&quot;&gt;.bg-light&lt;/div&gt;
                                                &lt;div class=&quot;p-2 mb-2 bg-dark text-white&quot;&gt;.bg-dark&lt;/div&gt;
                                                &lt;div class=&quot;p-2 mb-2 bg-body text-dark&quot;&gt;.bg-body&lt;/div&gt;
                                                &lt;div class=&quot;p-2 mb-2 bg-white text-dark&quot;&gt;.bg-white&lt;/div&gt;
                                                &lt;div class=&quot;p-2 bg-transparent text-dark&quot;&gt;.bg-transparent&lt;/div&gt;
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
                                <h4 class="header-title">Background Gradient Color</h4>
                                <p class="text-muted font-14">By adding a <code>.bg-gradient</code> class, a linear gradient is added as background image to the backgrounds. This
                                    gradient starts with a semi-transparent white which fades out to the bottom.</p>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#bg-gradient-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link active">
                                            Preview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#bg-gradient-utilities-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                            Code
                                        </a>
                                    </li>
                                </ul> <!-- end nav-->
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="bg-gradient-utilities-preview">
                                        <div class="p-2 mb-2 bg-primary bg-gradient text-white">.bg-gradient.bg-primary</div>
                                        <div class="p-2 mb-2 bg-secondary bg-gradient text-white">.bg-secondary.bg-gradient</div>
                                        <div class="p-2 mb-2 bg-success bg-gradient text-white">.bg-success.bg-gradient</div>
                                        <div class="p-2 mb-2 bg-danger bg-gradient text-white">.bg-danger.bg-gradient</div>
                                        <div class="p-2 mb-2 bg-warning bg-gradient text-dark">.bg-warning.bg-gradient</div>
                                        <div class="p-2 mb-2 bg-info bg-gradient text-dark">.bg-info.bg-gradient</div>
                                        <div class="p-2 mb-2 bg-light bg-gradient text-dark">.bg-light.bg-gradient</div>
                                        <div class="p-2 mb-2 bg-dark bg-gradient text-white">.bg-dark.bg-gradient</div>
                                    </div> <!-- end preview-->

                                    <div class="tab-pane" id="bg-gradient-utilities-code">
                                        <pre class="mb-0">
                                            <span class="html escape">
                                                &lt;div class=&quot;p-2 mb-2 bg-primary bg-gradient text-white&quot;&gt;.bg-primary.bg-gradient&lt;/div&gt;
                                                &lt;div class=&quot;p-2 mb-2 bg-secondary bg-gradient text-white&quot;&gt;.bg-secondary.bg-gradient&lt;/div&gt;
                                                &lt;div class=&quot;p-2 mb-2 bg-success bg-gradient text-white&quot;&gt;.bg-success.bg-gradient&lt;/div&gt;
                                                &lt;div class=&quot;p-2 mb-2 bg-danger bg-gradient text-white&quot;&gt;.bg-danger.bg-gradient&lt;/div&gt;
                                                &lt;div class=&quot;p-2 mb-2 bg-warning bg-gradient text-dark&quot;&gt;.bg-warning.bg-gradient&lt;/div&gt;
                                                &lt;div class=&quot;p-2 mb-2 bg-info bg-gradient text-dark&quot;&gt;.bg-info.bg-gradient&lt;/div&gt;
                                                &lt;div class=&quot;p-2 mb-2 bg-light bg-gradient text-dark&quot;&gt;.bg-light.bg-gradient&lt;/div&gt;
                                                &lt;div class=&quot;p-2 mb-2 bg-dark bg-gradient text-white&quot;&gt;.bg-dark.bg-gradient&lt;/div&gt;
                                            </span>
                                        </pre> <!-- end highlight-->
                                    </div> <!-- end preview code-->
                                </div> <!-- end tab-content-->
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Background Opacity</h4>
                                <p class="text-muted font-14"><code>background-color</code> utilities are generated with Sass using CSS variables. This
                                    allows for real-time color changes without compilation and dynamic alpha transparency changes.</p>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#bg-opacity-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link active">
                                            Preview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#bg-opacity-utilities-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                            Code
                                        </a>
                                    </li>
                                </ul> <!-- end nav-->
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="bg-opacity-utilities-preview">
                                        <div class="bg-primary p-2 text-white">This is default primary background</div>
                                        <div class="bg-primary p-2 text-white bg-opacity-75">This is 75% opacity primary background</div>
                                        <div class="bg-primary p-2 text-dark bg-opacity-50">This is 50% opacity primary background</div>
                                        <div class="bg-primary p-2 text-dark bg-opacity-25">This is 25% opacity primary background</div>
                                        <div class="bg-primary p-2 text-dark bg-opacity-10">This is 10% opacity success background</div>
                                    </div> <!-- end preview-->

                                    <div class="tab-pane" id="bg-opacity-utilities-code">
                                        <pre class="mb-0">
                                            <span class="html escape">
                                                &lt;div class=&quot;bg-primary p-2 text-white&quot;&gt;This is default primary background&lt;/div&gt;
                                                &lt;div class=&quot;bg-primary p-2 text-white bg-opacity-75&quot;&gt;This is 75% opacity primary background&lt;/div&gt;
                                                &lt;div class=&quot;bg-primary p-2 text-dark bg-opacity-50&quot;&gt;This is 50% opacity primary background&lt;/div&gt;
                                                &lt;div class=&quot;bg-primary p-2 text-dark bg-opacity-25&quot;&gt;This is 25% opacity primary background&lt;/div&gt;
                                                &lt;div class=&quot;bg-primary p-2 text-dark bg-opacity-10&quot;&gt;This is 10% opacity success background&lt;/div&gt;
                                            </span>
                                        </pre> <!-- end highlight-->
                                    </div> <!-- end preview code-->
                                </div> <!-- end tab-content-->
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Text Color</h4>
                                <p class="text-muted font-14">Colorize text with color utilities. If you want to colorize links, you can use the <code>.link-*</code> helper classes which have <code>:hover</code>
                                    and <code>:focus</code> states.</p>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#textcolor-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link active">
                                            Preview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#textcolor-utilities-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                            Code
                                        </a>
                                    </li>
                                </ul> <!-- end nav-->
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="textcolor-utilities-preview">
                                       <div class="row">
                                            <div class="col-md-6">
                                                <p class="text-primary">.text-primary</p>
                                                <p class="text-secondary">.text-secondary</p>
                                                <p class="text-success">.text-success</p>
                                                <p class="text-danger">.text-danger</p>
                                                <p class="text-warning bg-dark">.text-warning</p>
                                                <p class="text-info bg-dark">.text-info</p>
                                                <p class="text-light bg-dark">.text-light</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="text-dark">.text-dark</p>
                                                <p class="text-body">.text-body</p>
                                                <p class="text-muted">.text-muted</p>
                                                <p class="text-white bg-dark">.text-white</p>
                                                <p class="text-black-50">.text-black-50</p>
                                                <p class="text-white-50 bg-dark">.text-white-50</p>
                                            </div>
                                       </div>
                                    </div> <!-- end preview-->

                                    <div class="tab-pane" id="textcolor-utilities-code">
                                        <pre class="mb-0">
                                            <span class="html escape">
                                                &lt;p class=&quot;text-primary&quot;&gt;.text-primary&lt;/p&gt;
                                                &lt;p class=&quot;text-secondary&quot;&gt;.text-secondary&lt;/p&gt;
                                                &lt;p class=&quot;text-success&quot;&gt;.text-success&lt;/p&gt;
                                                &lt;p class=&quot;text-danger&quot;&gt;.text-danger&lt;/p&gt;
                                                &lt;p class=&quot;text-warning bg-dark&quot;&gt;.text-warning&lt;/p&gt;
                                                &lt;p class=&quot;text-info bg-dark&quot;&gt;.text-info&lt;/p&gt;
                                                &lt;p class=&quot;text-light bg-dark&quot;&gt;.text-light&lt;/p&gt;
                                                &lt;p class=&quot;text-dark&quot;&gt;.text-dark&lt;/p&gt;
                                                &lt;p class=&quot;text-body&quot;&gt;.text-body&lt;/p&gt;
                                                &lt;p class=&quot;text-muted&quot;&gt;.text-muted&lt;/p&gt;
                                                &lt;p class=&quot;text-white bg-dark&quot;&gt;.text-white&lt;/p&gt;
                                                &lt;p class=&quot;text-black-50&quot;&gt;.text-black-50&lt;/p&gt;
                                                &lt;p class=&quot;text-white-50 bg-dark&quot;&gt;.text-white-50&lt;/p&gt;
                                            </span>
                                        </pre> <!-- end highlight-->
                                    </div> <!-- end preview code-->
                                </div> <!-- end tab-content-->
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->


                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Text Opacity Color</h4>
                                <p class="text-muted font-14">text color utilities are generated with Sass using CSS variables. This allows for real-time color
                                    changes without compilation and dynamic alpha transparency changes.</p>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#textopacity-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link active">
                                            Preview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#textopacity-utilities-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                            Code
                                        </a>
                                    </li>
                                </ul> <!-- end nav-->
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="textopacity-utilities-preview">
                                        <div class="text-primary">This is default primary text</div>
                                        <div class="text-primary text-opacity-75">This is 75% opacity primary text</div>
                                        <div class="text-primary text-opacity-50">This is 50% opacity primary text</div>
                                        <div class="text-primary text-opacity-25">This is 25% opacity primary text</div>
                                    </div> <!-- end preview-->

                                    <div class="tab-pane" id="textopacity-utilities-code">
                                        <pre class="mb-0">
                                            <span class="html escape">
                                                &lt;div class=&quot;text-primary&quot;&gt;This is default primary text&lt;/div&gt;
                                                &lt;div class=&quot;text-primary text-opacity-75&quot;&gt;This is 75% opacity primary text&lt;/div&gt;
                                                &lt;div class=&quot;text-primary text-opacity-50&quot;&gt;This is 50% opacity primary text&lt;/div&gt;
                                                &lt;div class=&quot;text-primary text-opacity-25&quot;&gt;This is 25% opacity primary text&lt;/div&gt;
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
                                <h4 class="header-title">Opacity</h4>
                                <p class="text-muted font-14">The <code>opacity</code> property sets the opacity level for an element. The opacity level describes the transparency
                                    level, where <code>1</code> is not transparent at all, <code>.5</code> is 50% visible, and <code>0</code> is
                                    completely transparent. Set the <code>opacity</code> of an element using <code>.opacity-{value}</code> utilities.</p>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#opacity-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link active">
                                            Preview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#opacity-utilities-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                            Code
                                        </a>
                                    </li>
                                </ul> <!-- end nav-->
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="opacity-utilities-preview">
                                        <div class="d-flex flex-wrap gap-2">
                                            <div class="opacity-100 p-2 bg-primary text-light fw-bold rounded">100%</div>
                                            <div class="opacity-75 p-2 bg-primary text-light fw-bold rounded">75%</div>
                                            <div class="opacity-50 p-2 bg-primary text-light fw-bold rounded">50%</div>
                                            <div class="opacity-25 p-2 bg-primary text-light fw-bold rounded">25%</div>
                                        </div>
                                    </div> <!-- end preview-->

                                    <div class="tab-pane" id="opacity-utilities-code">
                                        <pre class="mb-0">
                                            <span class="html escape">
                                                &lt;div class=&quot;opacity-100 p-2 bg-primary text-light fw-bold rounded&quot;&gt;100%&lt;/div&gt;
                                                &lt;div class=&quot;opacity-75 p-2 bg-primary text-light fw-bold rounded&quot;&gt;75%&lt;/div&gt;
                                                &lt;div class=&quot;opacity-50 p-2 bg-primary text-light fw-bold rounded&quot;&gt;50%&lt;/div&gt;
                                                &lt;div class=&quot;opacity-25 p-2 bg-primary text-light fw-bold rounded&quot;&gt;25%&lt;/div&gt;
                                            </span>
                                        </pre> <!-- end highlight-->
                                    </div> <!-- end preview code-->
                                </div> <!-- end tab-content-->
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Additive(Add) Border</h4>
                                <p class="text-muted font-14">Use border utilities to <b>add</b> an element’s borders. Choose from all borders or one at a time.</p>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#border-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link active">
                                            Preview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#border-utilities-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                            Code
                                        </a>
                                    </li>
                                </ul> <!-- end nav-->
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="border-utilities-preview">
                                        <div class="d-flex align-items-start flex-wrap gap-4">
                                            <div class="text-center">
                                                <div class="border avatar-md bg-light bg-opacity-50"></div>
                                            </div>
                                            <div class="text-center">
                                                <div class="border-top avatar-md bg-light bg-opacity-50"></div>
                                            </div>
                                            <div class="text-center">
                                                <div class="border-end avatar-md bg-light bg-opacity-50"></div>
                                            </div>
                                            <div class="text-center">
                                                <div class="border-bottom avatar-md bg-light bg-opacity-50"></div>
                                            </div>
                                            <div class="text-center">
                                                <div class="border-start avatar-md bg-light bg-opacity-50"></div>
                                            </div>
                                        </div>
                                    </div> <!-- end preview-->

                                    <div class="tab-pane" id="border-utilities-code">
                                        <pre class="mb-0">
                                            <span class="html escape">
                                                &lt;span class=&quot;border&quot;&gt;&lt;/span&gt;
                                                &lt;span class=&quot;border-top&quot;&gt;&lt;/span&gt;
                                                &lt;span class=&quot;border-end&quot;&gt;&lt;/span&gt;
                                                &lt;span class=&quot;border-bottom&quot;&gt;&lt;/span&gt;
                                                &lt;span class=&quot;border-start&quot;&gt;&lt;/span&gt;
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
                                <h4 class="header-title">Subtractive(Remove) Border</h4>
                                <p class="text-muted font-14">Use border utilities to <b>remove</b> an element’s borders. Choose from all borders or one at a time.</p>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#bordersubtractive-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link active">
                                            Preview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#bordersubtractive-utilities-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                            Code
                                        </a>
                                    </li>
                                </ul> <!-- end nav-->
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="bordersubtractive-utilities-preview">
                                        <div class="d-flex align-items-start flex-wrap gap-4">
                                            <div class="text-center">
                                                <div class="border border-0 avatar-md bg-light bg-opacity-50"></div>
                                            </div>
                                            <div class="text-center">
                                                <div class="border border-top-0 avatar-md bg-light bg-opacity-50"></div>
                                            </div>
                                            <div class="text-center">
                                                <div class="border border-end-0 avatar-md bg-light bg-opacity-50"></div>
                                            </div>
                                            <div class="text-center">
                                                <div class="border border-bottom-0 avatar-md bg-light bg-opacity-50"></div>
                                            </div>
                                            <div class="text-center">
                                                <div class="border border-start-0 avatar-md bg-light bg-opacity-50"></div>
                                            </div>
                                        </div>
                                    </div> <!-- end preview-->

                                    <div class="tab-pane" id="bordersubtractive-utilities-code">
                                        <pre class="mb-0">
                                            <span class="html escape">
                                                &lt;span class=&quot;border border-0&quot;&gt;&lt;/span&gt;
                                                &lt;span class=&quot;border border-top-0&quot;&gt;&lt;/span&gt;
                                                &lt;span class=&quot;border border-end-0&quot;&gt;&lt;/span&gt;
                                                &lt;span class=&quot;border border-bottom-0&quot;&gt;&lt;/span&gt;
                                                &lt;span class=&quot;border border-start-0&quot;&gt;&lt;/span&gt;
                                            </span>
                                        </pre> <!-- end highlight-->
                                    </div> <!-- end preview code-->
                                </div> <!-- end tab-content-->
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Border Color</h4>
                                <p class="text-muted font-14">Change the border color using utilities built on our theme colors.</p>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#bordercolor-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link active">
                                            Preview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#bordercolor-utilities-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                            Code
                                        </a>
                                    </li>
                                </ul> <!-- end nav-->
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="bordercolor-utilities-preview">
                                        <div class="d-flex align-items-start flex-wrap gap-2">
                                            <div class="text-center">
                                                <div class="border border-primary avatar-md bg-light bg-opacity-50"></div>
                                            </div>
                                            <div class="text-center">
                                                <div class="border border-secondary avatar-md bg-light bg-opacity-50"></div>
                                            </div>
                                            <div class="text-center">
                                                <div class="border border-success avatar-md bg-light bg-opacity-50"></div>
                                            </div>
                                            <div class="text-center">
                                                <div class="border border-danger avatar-md bg-light bg-opacity-50"></div>
                                            </div>
                                            <div class="text-center">
                                                <div class="border border-warning avatar-md bg-light bg-opacity-50"></div>
                                            </div>
                                            <div class="text-center">
                                                <div class="border border-info avatar-md bg-light bg-opacity-50"></div>
                                            </div>
                                            <div class="text-center">
                                                <div class="border border-light avatar-md"></div>
                                            </div>
                                            <div class="text-center">
                                                <div class="border border-dark avatar-md bg-light bg-opacity-50"></div>
                                            </div>
                                        </div>
                                    </div> <!-- end preview-->

                                    <div class="tab-pane" id="bordercolor-utilities-code">
                                        <pre class="mb-0">
                                            <span class="html escape">
                                                &lt;span class=&quot;border border-primary&quot;&gt;&lt;/span&gt;
                                                &lt;span class=&quot;border border-secondary&quot;&gt;&lt;/span&gt;
                                                &lt;span class=&quot;border border-success&quot;&gt;&lt;/span&gt;
                                                &lt;span class=&quot;border border-danger&quot;&gt;&lt;/span&gt;
                                                &lt;span class=&quot;border border-warning&quot;&gt;&lt;/span&gt;
                                                &lt;span class=&quot;border border-info&quot;&gt;&lt;/span&gt;
                                                &lt;span class=&quot;border border-light&quot;&gt;&lt;/span&gt;
                                                &lt;span class=&quot;border border-dark&quot;&gt;&lt;/span&gt;
                                            </span>
                                        </pre> <!-- end highlight-->
                                    </div> <!-- end preview code-->
                                </div> <!-- end tab-content-->
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->

                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Border Width Size</h4>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#borderwidth-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link active">
                                            Preview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#borderwidth-utilities-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                            Code
                                        </a>
                                    </li>
                                </ul> <!-- end nav-->
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="borderwidth-utilities-preview">
                                        <div class="d-flex align-items-start flex-wrap gap-2">
                                            <div class="text-center">
                                                <div class="border border-1 avatar-md bg-light bg-opacity-50"></div>
                                            </div>
                                            <div class="text-center">
                                                <div class="border border-2 avatar-md bg-light bg-opacity-50"></div>
                                            </div>
                                            <div class="text-center">
                                                <div class="border border-3 avatar-md bg-light bg-opacity-50"></div>
                                            </div>
                                            <div class="text-center">
                                                <div class="border border-4 avatar-md bg-light bg-opacity-50"></div>
                                            </div>
                                            <div class="text-center">
                                                <div class="border border-5 avatar-md bg-light bg-opacity-50"></div>
                                            </div>
                                        </div>
                                    </div> <!-- end preview-->

                                    <div class="tab-pane" id="borderwidth-utilities-code">
                                        <pre class="mb-0">
                                            <span class="html escape">
                                                &lt;span class=&quot;border border-1&quot;&gt;&lt;/span&gt;
                                                &lt;span class=&quot;border border-2&quot;&gt;&lt;/span&gt;
                                                &lt;span class=&quot;border border-3&quot;&gt;&lt;/span&gt;
                                                &lt;span class=&quot;border border-4&quot;&gt;&lt;/span&gt;
                                                &lt;span class=&quot;border border-5&quot;&gt;&lt;/span&gt;
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
                                <h4 class="header-title">Border Opacity</h4>
                                <p class="text-muted font-14">choose from any of the <code>.border-opacity</code> utilities:</p>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#borderopacity-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link active">
                                            Preview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#borderopacity-utilities-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                            Code
                                        </a>
                                    </li>
                                </ul> <!-- end nav-->
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="borderopacity-utilities-preview">
                                        <div class="border border-success p-2 mb-2">This is default success border</div>
                                        <div class="border border-success p-2 mb-2 border-opacity-75">This is 75% opacity success border</div>
                                        <div class="border border-success p-2 mb-2 border-opacity-50">This is 50% opacity success border</div>
                                        <div class="border border-success p-2 mb-2 border-opacity-25">This is 25% opacity success border</div>
                                        <div class="border border-success p-2 border-opacity-10">This is 10% opacity success border</div>
                                    </div> <!-- end preview-->

                                    <div class="tab-pane" id="borderopacity-utilities-code">
                                        <pre class="mb-0">
                                            <span class="html escape">
                                                &lt;div class=&quot;bg-primary p-2 text-white&quot;&gt;This is default primary background&lt;/div&gt;
                                                &lt;div class=&quot;bg-primary p-2 text-white bg-opacity-75&quot;&gt;This is 75% opacity primary background&lt;/div&gt;
                                                &lt;div class=&quot;bg-primary p-2 text-dark bg-opacity-50&quot;&gt;This is 50% opacity primary background&lt;/div&gt;
                                                &lt;div class=&quot;bg-primary p-2 text-dark bg-opacity-25&quot;&gt;This is 25% opacity primary background&lt;/div&gt;
                                                &lt;div class=&quot;bg-primary p-2 text-dark bg-opacity-10&quot;&gt;This is 10% opacity success background&lt;/div&gt;
                                            </span>
                                        </pre> <!-- end highlight-->
                                    </div> <!-- end preview code-->
                                </div> <!-- end tab-content-->
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Border Radius</h4>
                                <p class="text-muted font-14">Add classes to an element to easily round its corners.</p>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#border-radius-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link active">
                                            Preview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#border-radius-utilities-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                            Code
                                        </a>
                                    </li>
                                </ul> <!-- end nav-->
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="border-radius-utilities-preview">
                                        <div class="d-flex align-items-start flex-wrap gap-2">
                                            <img src="assets/images/users/avatar-2.jpg" class="avatar-lg rounded" alt="rounded">
                                            <img src="assets/images/users/avatar-2.jpg" class="avatar-lg rounded-top" alt="rounded-top">
                                            <img src="assets/images/users/avatar-2.jpg" class="avatar-lg rounded-end" alt="rounded-end">
                                            <img src="assets/images/users/avatar-2.jpg" class="avatar-lg rounded-bottom" alt="rounded-bottom">
                                            <img src="assets/images/users/avatar-2.jpg" class="avatar-lg rounded-start" alt="rounded-start">
                                            <img src="assets/images/users/avatar-2.jpg" class="avatar-lg rounded-circle" alt="rounded-circle">
                                            <img src="assets/images/small/small-2.jpg" class="avatar-lg w-auto rounded-pill" alt="rounded-pill">
                                        </div>
                                    </div> <!-- end preview-->

                                    <div class="tab-pane" id="border-radius-utilities-code">
                                        <pre class="mb-0">
                                            <span class="html escape">
                                                &lt;img src=&quot;...&quot; class=&quot;rounded&quot; alt=&quot;...&quot;&gt;
                                                &lt;img src=&quot;...&quot; class=&quot;rounded-top&quot; alt=&quot;...&quot;&gt;
                                                &lt;img src=&quot;...&quot; class=&quot;rounded-end&quot; alt=&quot;...&quot;&gt;
                                                &lt;img src=&quot;...&quot; class=&quot;rounded-bottom&quot; alt=&quot;...&quot;&gt;
                                                &lt;img src=&quot;...&quot; class=&quot;rounded-start&quot; alt=&quot;...&quot;&gt;
                                                &lt;img src=&quot;...&quot; class=&quot;rounded-circle&quot; alt=&quot;...&quot;&gt;
                                                &lt;img src=&quot;...&quot; class=&quot;rounded-pill&quot; alt=&quot;...&quot;&gt;
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
                                <h4 class="header-title">Border Radius Size</h4>
                                <p class="text-muted font-14">Use the scaling classes for larger or smaller rounded corners. Sizes range from <code>0</code> to <code>5</code>.</p>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#border-radius-size-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link active">
                                            Preview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#border-radius-size-utilities-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                            Code
                                        </a>
                                    </li>
                                </ul> <!-- end nav-->
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="border-radius-size-utilities-preview">
                                        <div class="d-flex align-items-start flex-wrap gap-2">
                                            <img src="assets/images/users/avatar-4.jpg" class="avatar-lg rounded-0" alt="rounded-0">
                                            <img src="assets/images/users/avatar-4.jpg" class="avatar-lg rounded-1" alt="rounded-1">
                                            <img src="assets/images/users/avatar-4.jpg" class="avatar-lg rounded-2" alt="rounded-2">
                                            <img src="assets/images/users/avatar-4.jpg" class="avatar-lg rounded-3" alt="rounded-3">
                                            <img src="assets/images/users/avatar-4.jpg" class="avatar-lg rounded-4" alt="rounded-4">
                                            <img src="assets/images/users/avatar-4.jpg" class="avatar-lg rounded-5" alt="rounded-5">
                                        </div>
                                    </div> <!-- end preview-->

                                    <div class="tab-pane" id="border-radius-size-utilities-code">
                                        <pre class="mb-0">
                                            <span class="html escape">
                                                &lt;img src=&quot;...&quot; class=&quot;rounded-0&quot; alt=&quot;...&quot;&gt;
                                                &lt;img src=&quot;...&quot; class=&quot;rounded-1&quot; alt=&quot;...&quot;&gt;
                                                &lt;img src=&quot;...&quot; class=&quot;rounded-2&quot; alt=&quot;...&quot;&gt;
                                                &lt;img src=&quot;...&quot; class=&quot;rounded-3&quot; alt=&quot;...&quot;&gt;
                                                &lt;img src=&quot;...&quot; class=&quot;rounded-4&quot; alt=&quot;...&quot;&gt;
                                                &lt;img src=&quot;...&quot; class=&quot;rounded-5&quot; alt=&quot;...&quot;&gt;
                                            </span>
                                        </pre> <!-- end highlight-->
                                    </div> <!-- end preview code-->
                                </div> <!-- end tab-content-->
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Text Selection</h4>
                                <p class="text-muted font-14">Use <code>user-select-all</code>, <code>user-select-auto</code>, or
                                    <code>user-select-none</code> class to the content which is selected when the user interacts with it.</p>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#text-interactions-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link active">
                                            Preview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#text-interactions-utilities-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                            Code
                                        </a>
                                    </li>
                                </ul> <!-- end nav-->
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="text-interactions-utilities-preview">
                                        <p class="user-select-all">This paragraph will be entirely selected when clicked by the user.</p>
                                        <p class="user-select-auto">This paragraph has default select behavior.</p>
                                        <p class="user-select-none mb-0">This paragraph will not be selectable when clicked by the user.</p>
                                    </div> <!-- end preview-->

                                    <div class="tab-pane" id="text-interactions-utilities-code">
                                        <pre class="mb-0">
                                            <span class="html escape">
                                                &lt;p class=&quot;user-select-all&quot;&gt;This paragraph will be entirely selected when clicked by the user.&lt;/p&gt;
                                                &lt;p class=&quot;user-select-auto&quot;&gt;This paragraph has default select behavior.&lt;/p&gt;
                                                &lt;p class=&quot;user-select-none&quot;&gt;This paragraph will not be selectable when clicked by the user.&lt;/p&gt;
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
                                <h4 class="header-title">Pointer Events</h4>
                                <p class="text-muted font-14">Bootstrap provides <code>.pe-none</code> and <code>.pe-auto</code> classes to prevent or add element interactions.</p>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#pointer-event-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link active">
                                            Preview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#pointer-event-utilities-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                            Code
                                        </a>
                                    </li>
                                </ul> <!-- end nav-->
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="pointer-event-utilities-preview">
                                        <p><a href="#" class="pe-none" tabindex="-1" aria-disabled="true">This link</a> can not be clicked.</p>
                                        <p><a href="#" class="pe-auto">This link</a> can be clicked (this is default behavior).</p>
                                        <p class="pe-none"><a href="#" tabindex="-1" aria-disabled="true">This link</a> can not be clicked because the
                                            <code>pointer-events</code> property is inherited from its parent. However, <a href="#" class="pe-auto">this
                                                link</a> has a <code>pe-auto</code> class and can be clicked.</p>
                                    </div> <!-- end preview-->

                                    <div class="tab-pane" id="pointer-event-utilities-code">
                                        <pre class="mb-0">
                                            <span class="html escape">
                                                &lt;p&gt;&lt;a href=&quot;#&quot; class=&quot;pe-none&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;This link&lt;/a&gt; can not be clicked.&lt;/p&gt;

                                                &lt;p&gt;&lt;a href=&quot;#&quot; class=&quot;pe-auto&quot;&gt;This link&lt;/a&gt; can be clicked (this is default behavior).&lt;/p&gt;

                                                &lt;p class=&quot;pe-none&quot;&gt;&lt;a href=&quot;#&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;This link&lt;/a&gt; can not be clicked because the
                                                    &lt;code&gt;pointer-events&lt;/code&gt; property is inherited from its parent. However, &lt;a href=&quot;#&quot; class=&quot;pe-auto&quot;&gt;this
                                                    link&lt;/a&gt; has a &lt;code&gt;pe-auto&lt;/code&gt; class and can be clicked.&lt;/p&gt;
                                            </span>
                                        </pre> <!-- end highlight-->
                                    </div> <!-- end preview code-->
                                </div> <!-- end tab-content-->
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Overflow</h4>
                                <p class="text-muted font-14">Adjust the <code>overflow</code> property on the fly with four default values and classes. These classes are not
                                    responsive by default.</p>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#overflow-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link active">
                                            Preview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#overflow-utilities-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                            Code
                                        </a>
                                    </li>
                                </ul> <!-- end nav-->
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="overflow-utilities-preview">
                                        <div class="d-flex flex-wrap gap-4">
                                            <div class="overflow-auto p-3 bg-light" style="max-width: 260px; max-height: 100px;">
                                                This is an example of using <code>.overflow-auto</code> on an element with set width and height dimensions. By
                                                design, this content will vertically scroll.
                                            </div>
                                            <div class="overflow-hidden p-3 bg-light" style="max-width: 260px; max-height: 100px;">
                                                This is an example of using <code>.overflow-hidden</code> on an element with set width and height dimensions.
                                            </div>
                                            <div class="overflow-visible p-3 bg-light" style="max-width: 260px; max-height: 100px;">
                                                This is an example of using <code>.overflow-visible</code> on an element with set width and height dimensions.
                                            </div>
                                            <div class="overflow-scroll p-3 bg-light" style="max-width: 260px; max-height: 100px;">
                                                This is an example of using <code>.overflow-scroll</code> on an element with set width and height dimensions.
                                            </div>
                                        </div>
                                    </div> <!-- end preview-->

                                    <div class="tab-pane" id="overflow-utilities-code">
                                        <pre class="mb-0">
                                            <span class="html escape">
                                                &lt;div class=&quot;overflow-auto&quot;&gt;...&lt;/div&gt;
                                                &lt;div class=&quot;overflow-hidden&quot;&gt;...&lt;/div&gt;
                                                &lt;div class=&quot;overflow-visible&quot;&gt;...&lt;/div&gt;
                                                &lt;div class=&quot;overflow-scroll&quot;&gt;...&lt;/div&gt;
                                            </span>
                                        </pre> <!-- end highlight-->
                                    </div> <!-- end preview code-->
                                </div> <!-- end tab-content-->
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Position in Arrange</h4>
                                <p class="text-muted font-14">Arrange elements easily with the edge positioning utilities. The format is <code>{property}-{position}</code>.</p>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#position-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link active">
                                            Preview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#position-utilities-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                            Code
                                        </a>
                                    </li>
                                </ul> <!-- end nav-->
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="position-utilities-preview">
                                        <!-- Arrange elements -->
                                        <div class="position-relative p-5 bg-light bg-opacity-50 m-3 border rounded" style="height: 180px;">
                                            <div class="position-absolute top-0 start-0 avatar-xs bg-dark rounded"></div>
                                            <div class="position-absolute top-0 end-0 avatar-xs bg-dark rounded"></div>
                                            <div class="position-absolute top-50 start-50 avatar-xs bg-dark rounded"></div>
                                            <div class="position-absolute bottom-50 end-50 avatar-xs bg-dark rounded"></div>
                                            <div class="position-absolute bottom-0 start-0 avatar-xs bg-dark rounded"></div>
                                            <div class="position-absolute bottom-0 end-0 avatar-xs bg-dark rounded"></div>
                                        </div>
                                    </div> <!-- end preview-->

                                    <div class="tab-pane" id="position-utilities-code">
                                        <pre class="mb-0">
                                            <span class="html escape">
                                                &lt;div class=&quot;position-relative&quot;&gt;
                                                    &lt;div class=&quot;position-absolute top-0 start-0&quot;&gt;&lt;/div&gt;
                                                    &lt;div class=&quot;position-absolute top-0 end-0&quot;&gt;&lt;/div&gt;
                                                    &lt;div class=&quot;position-absolute top-50 start-50&quot;&gt;&lt;/div&gt;
                                                    &lt;div class=&quot;position-absolute bottom-50 end-50&quot;&gt;&lt;/div&gt;
                                                    &lt;div class=&quot;position-absolute bottom-0 start-0&quot;&gt;&lt;/div&gt;
                                                    &lt;div class=&quot;position-absolute bottom-0 end-0&quot;&gt;&lt;/div&gt;
                                                &lt;/div&gt;
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
                                <h4 class="header-title">Position in Center</h4>
                                <p class="text-muted font-14">In addition, you can also center the elements with the transform utility class <code>.translate-middle</code>.</p>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#position-center-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link active">
                                            Preview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#position-center-utilities-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                            Code
                                        </a>
                                    </li>
                                </ul> <!-- end nav-->
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="position-center-utilities-preview">
                                        <!-- Center elements -->
                                        <div class="position-relative m-3 bg-light bg-opacity-50 border rounded" style="height: 180px;">
                                            <div class="position-absolute top-0 start-0 translate-middle avatar-xs bg-dark rounded"></div>
                                            <div class="position-absolute top-0 start-50 translate-middle avatar-xs bg-dark rounded"></div>
                                            <div class="position-absolute top-0 start-100 translate-middle avatar-xs bg-dark rounded"></div>

                                            <div class="position-absolute top-50 start-0 translate-middle avatar-xs bg-dark rounded"></div>
                                            <div class="position-absolute top-50 start-50 translate-middle avatar-xs bg-dark rounded"></div>
                                            <div class="position-absolute top-50 start-100 translate-middle avatar-xs bg-dark rounded"></div>

                                            <div class="position-absolute top-100 start-0 translate-middle avatar-xs bg-dark rounded"></div>
                                            <div class="position-absolute top-100 start-50 translate-middle avatar-xs bg-dark rounded"></div>
                                            <div class="position-absolute top-100 start-100 translate-middle avatar-xs bg-dark rounded"></div>
                                        </div>
                                    </div> <!-- end preview-->

                                    <div class="tab-pane" id="position-center-utilities-code">
                                        <pre class="mb-0">
                                            <span class="html escape">
                                                &lt;div class=&quot;position-relative&quot;&gt;
                                                    &lt;div class=&quot;position-absolute top-0 start-0 translate-middle&quot;&gt;&lt;/div&gt;
                                                    &lt;div class=&quot;position-absolute top-0 start-50 translate-middle&quot;&gt;&lt;/div&gt;
                                                    &lt;div class=&quot;position-absolute top-0 start-100 translate-middle&quot;&gt;&lt;/div&gt;
                                                    &lt;div class=&quot;position-absolute top-50 start-0 translate-middle&quot;&gt;&lt;/div&gt;
                                                    &lt;div class=&quot;position-absolute top-50 start-50 translate-middle&quot;&gt;&lt;/div&gt;
                                                    &lt;div class=&quot;position-absolute top-50 start-100 translate-middle&quot;&gt;&lt;/div&gt;
                                                    &lt;div class=&quot;position-absolute top-100 start-0 translate-middle&quot;&gt;&lt;/div&gt;
                                                    &lt;div class=&quot;position-absolute top-100 start-50 translate-middle&quot;&gt;&lt;/div&gt;
                                                    &lt;div class=&quot;position-absolute top-100 start-100 translate-middle&quot;&gt;&lt;/div&gt;
                                                &lt;/div&gt;
                                            </span>
                                        </pre> <!-- end highlight-->
                                    </div> <!-- end preview code-->
                                </div> <!-- end tab-content-->
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Position in Axis</h4>
                                <p class="text-muted font-14">By adding <code>.translate-middle-x</code> or <code>.translate-middle-y</code> classes, elements can be positioned only in horizontal or vertical direction.</p>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#position-axis-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link active">
                                            Preview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#position-axis-utilities-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                            Code
                                        </a>
                                    </li>
                                </ul> <!-- end nav-->
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="position-axis-utilities-preview">
                                        <!-- Center elements -->
                                        <div class="position-relative m-3 bg-light border rounded" style="height: 180px;">
                                            <div class="position-absolute top-0 start-0 avatar-xs bg-dark rounded "></div>
                                            <div class="position-absolute top-0 start-50 translate-middle-x avatar-xs bg-dark rounded"></div>
                                            <div class="position-absolute top-0 end-0 avatar-xs bg-dark rounded"></div>

                                            <div class="position-absolute top-50 start-0 translate-middle-y avatar-xs bg-dark rounded"></div>
                                            <div class="position-absolute top-50 start-50 translate-middle avatar-xs bg-dark rounded"></div>
                                            <div class="position-absolute top-50 end-0 translate-middle-y avatar-xs bg-dark rounded"></div>

                                            <div class="position-absolute bottom-0 start-0 avatar-xs bg-dark rounded"></div>
                                            <div class="position-absolute bottom-0 start-50 translate-middle-x avatar-xs bg-dark rounded"></div>
                                            <div class="position-absolute bottom-0 end-0 avatar-xs bg-dark rounded"></div>
                                        </div>
                                    </div> <!-- end preview-->

                                    <div class="tab-pane" id="position-axis-utilities-code">
                                        <pre class="mb-0">
                                            <span class="html escape">
                                                &lt;div class=&quot;position-relative&quot;&gt;
                                                    &lt;div class=&quot;position-absolute top-0 start-0&quot;&gt;&lt;/div&gt;
                                                    &lt;div class=&quot;position-absolute top-0 start-50 translate-middle-x&quot;&gt;&lt;/div&gt;
                                                    &lt;div class=&quot;position-absolute top-0 end-0&quot;&gt;&lt;/div&gt;
                                                    &lt;div class=&quot;position-absolute top-50 start-0 translate-middle-y&quot;&gt;&lt;/div&gt;
                                                    &lt;div class=&quot;position-absolute top-50 start-50 translate-middle&quot;&gt;&lt;/div&gt;
                                                    &lt;div class=&quot;position-absolute top-50 end-0 translate-middle-y&quot;&gt;&lt;/div&gt;
                                                    &lt;div class=&quot;position-absolute bottom-0 start-0&quot;&gt;&lt;/div&gt;
                                                    &lt;div class=&quot;position-absolute bottom-0 start-50 translate-middle-x&quot;&gt;&lt;/div&gt;
                                                    &lt;div class=&quot;position-absolute bottom-0 end-0&quot;&gt;&lt;/div&gt;
                                                &lt;/div&gt;
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
                                <h4 class="header-title">Shadows</h4>
                                <p class="text-muted font-14">While shadows on components are disabled by default in Bootstrap and can be enabled via
                                    <code>$enable-shadows</code>, you can also quickly add or remove a shadow with our <code>box-shadow</code> utility
                                    classes. Includes support for <code>.shadow-none</code> and three default sizes (which have associated variables to
                                    match).</p>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#shadow-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link active">
                                            Preview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#shadow-utilities-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                            Code
                                        </a>
                                    </li>
                                </ul> <!-- end nav-->
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="shadow-utilities-preview">
                                        <div class="shadow-none p-2 mb-2 bg-light rounded">No shadow</div>
                                        <div class="shadow-sm p-2 mb-2 rounded">Small shadow</div>
                                        <div class="shadow p-2 mb-2 rounded">Regular shadow</div>
                                        <div class="shadow-lg p-2 mb-2 rounded">Larger shadow</div>
                                    </div> <!-- end preview-->

                                    <div class="tab-pane" id="shadow-utilities-code">
                                        <pre class="mb-0">
                                            <span class="html escape">
                                                &lt;div class=&quot;shadow-none p-2 mb-2 bg-light rounded&quot;&gt;No shadow&lt;/div&gt;
                                                &lt;div class=&quot;shadow-sm p-2 mb-2 rounded&quot;&gt;Small shadow&lt;/div&gt;
                                                &lt;div class=&quot;shadow p-2 mb-2 rounded&quot;&gt;Regular shadow&lt;/div&gt;
                                                &lt;div class=&quot;shadow-lg p-2 mb-2 rounded&quot;&gt;Larger shadow&lt;/div&gt;
                                            </span>
                                        </pre> <!-- end highlight-->
                                    </div> <!-- end preview code-->
                                </div> <!-- end tab-content-->
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Width</h4>
                                <p class="text-muted font-14">Width utilities are generated from the utility API in <code>_utilities.scss</code>. Includes support for
                                    <code>25%</code>, <code>50%</code>, <code>75%</code>, <code>100%</code>, and <code>auto</code> by default. Modify
                                    those values as you need to generate different utilities here.</p>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#width-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link active">
                                            Preview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#width-utilities-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                            Code
                                        </a>
                                    </li>
                                </ul> <!-- end nav-->
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="width-utilities-preview">
                                        <!-- Width -->
                                        <div class="w-25 p-2 bg-light">Width 25%</div>

                                        <div class="w-50 p-2 bg-light">Width 50%</div>

                                        <div class="w-75 p-2 bg-light">Width 75%</div>

                                        <div class="w-100 p-2 bg-light">Width 100%</div>

                                        <div class="w-auto p-2 bg-light">Width auto</div>
                                    </div> <!-- end preview-->

                                    <div class="tab-pane" id="width-utilities-code">
                                        <pre class="mb-0">
                                            <span class="html escape">
                                                &lt;!-- Width --&gt;
                                                &lt;div class=&quot;w-25 p-2 bg-light&quot;&gt;Width 25%&lt;/div&gt;

                                                &lt;div class=&quot;w-50 p-2 bg-light&quot;&gt;Width 50%&lt;/div&gt;

                                                &lt;div class=&quot;w-75 p-2 bg-light&quot;&gt;Width 75%&lt;/div&gt;

                                                &lt;div class=&quot;w-100 p-2 bg-light&quot;&gt;Width 100%&lt;/div&gt;

                                                &lt;div class=&quot;w-auto p-2 bg-light&quot;&gt;Width auto&lt;/div&gt;
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
                                <h4 class="header-title">Height</h4>
                                <p class="text-muted font-14">Height utilities are generated from the utility API in <code>_utilities.scss</code>. Includes support for
                                    <code>25%</code>, <code>50%</code>, <code>75%</code>, <code>100%</code>, and <code>auto</code> by default. Modify
                                    those values as you need to generate different utilities here.</p>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#height-utilities-preview" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link active">
                                            Preview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#height-utilities-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                            Code
                                        </a>
                                    </li>
                                </ul> <!-- end nav-->
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="height-utilities-preview">
                                        <div class="d-flex flex-wrap gap-3 align-items-start" style="height: 255px;">
                                            <!-- Height -->
                                            <div class="h-25 p-2 bg-light">Height25%</div>

                                            <div class="h-50 p-2 bg-light">Height50%</div>

                                            <div class="h-75 p-2 bg-light">Height75%</div>

                                            <div class="h-100 p-2 bg-light">Height100%</div>

                                            <div class="h-auto p-2 bg-light">Height auto</div>
                                        </div>
                                    </div> <!-- end preview-->

                                    <div class="tab-pane" id="height-utilities-code">
                                        <pre class="mb-0">
                                            <span class="html escape">
                                                &lt;!-- Height --&gt;
                                                &lt;div class=&quot;h-25 p-2 bg-light&quot;&gt;Height25%&lt;/div&gt;

                                                &lt;div class=&quot;h-50 p-2 bg-light&quot;&gt;Height50%&lt;/div&gt;

                                                &lt;div class=&quot;h-75 p-2 bg-light&quot;&gt;Height75%&lt;/div&gt;

                                                &lt;div class=&quot;h-100 p-2 bg-light&quot;&gt;Height100%&lt;/div&gt;

                                                &lt;div class=&quot;h-auto p-2 bg-light&quot;&gt;Height auto&lt;/div&gt;
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

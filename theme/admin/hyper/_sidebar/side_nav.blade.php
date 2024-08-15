<x-theme_menu-layout>

    {{-- 사용자 메뉴얼 추가 --}}
    <li class="side-nav-item">
        <a data-bs-toggle="collapse" href="/#sidebarDashboards" aria-expanded="false"
            aria-controls="sidebarDashboards" class="side-nav-link">
            <i class="uil-home-alt"></i>
            <span class="badge bg-success float-end">5</span>
            <span> Dashboards </span>
        </a>
        <div class="collapse" id="sidebarDashboards">
            <ul class="side-nav-second-level">
                <li>
                    <a href="/dashboard-analytics">Analytics</a>
                </li>
                <li>
                    <a href="/index">Ecommerce</a>
                </li>
                <li>
                    <a href="/dashboard-projects">Projects</a>
                </li>
                <li>
                    <a href="/dashboard-crm">CRM</a>
                </li>
                <li>
                    <a href="/dashboard-wallet">E-Wallet</a>
                </li>
            </ul>
        </div>
    </li>

    <li class="side-nav-title side-nav-item">Apps</li>

    <li class="side-nav-item">
        <a href="/apps-calendar" class="side-nav-link">
            <i class="uil-calender"></i>
            <span> Calendar </span>
        </a>
    </li>

    <li class="side-nav-item">
        <a href="/apps-chat" class="side-nav-link">
            <i class="uil-comments-alt"></i>
            <span> Chat </span>
        </a>
    </li>

    <li class="side-nav-item">
        <a data-bs-toggle="collapse" href="/#sidebarCrm" aria-expanded="false" aria-controls="sidebarCrm"
            class="side-nav-link">
            <i class="uil uil-tachometer-fast"></i>
            <span class="badge bg-danger text-white float-end">New</span>
            <span> CRM </span>
        </a>
        <div class="collapse" id="sidebarCrm">
            <ul class="side-nav-second-level">
                <li>
                    <a href="/crm-projects">Projects</a>
                </li>
                <li>
                    <a href="/crm-orders-list">Orders List</a>
                </li>
                <li>
                    <a href="/crm-clients">Clients</a>
                </li>
                <li>
                    <a href="/crm-management">Management</a>
                </li>
            </ul>
        </div>
    </li>

    <li class="side-nav-item">
        <a data-bs-toggle="collapse" href="/#sidebarEcommerce" aria-expanded="false"
            aria-controls="sidebarEcommerce" class="side-nav-link">
            <i class="uil-store"></i>
            <span> Ecommerce </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="sidebarEcommerce">
            <ul class="side-nav-second-level">
                <li>
                    <a href="/apps-ecommerce-products">Products</a>
                </li>
                <li>
                    <a href="/apps-ecommerce-products-details">Products Details</a>
                </li>
                <li>
                    <a href="/apps-ecommerce-orders">Orders</a>
                </li>
                <li>
                    <a href="/apps-ecommerce-orders-details">Order Details</a>
                </li>
                <li>
                    <a href="/apps-ecommerce-customers">Customers</a>
                </li>
                <li>
                    <a href="/apps-ecommerce-shopping-cart">Shopping Cart</a>
                </li>
                <li>
                    <a href="/apps-ecommerce-checkout">Checkout</a>
                </li>
                <li>
                    <a href="/apps-ecommerce-sellers">Sellers</a>
                </li>
            </ul>
        </div>
    </li>

    <li class="side-nav-item">
        <a data-bs-toggle="collapse" href="/#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail"
            class="side-nav-link">
            <i class="uil-envelope"></i>
            <span> Email </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="sidebarEmail">
            <ul class="side-nav-second-level">
                <li>
                    <a href="/apps-email-inbox">Inbox</a>
                </li>
                <li>
                    <a href="/apps-email-read">Read Email</a>
                </li>
            </ul>
        </div>
    </li>

    <li class="side-nav-item">
        <a data-bs-toggle="collapse" href="/#sidebarProjects" aria-expanded="false"
            aria-controls="sidebarProjects" class="side-nav-link">
            <i class="uil-briefcase"></i>
            <span> Projects </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="sidebarProjects">
            <ul class="side-nav-second-level">
                <li>
                    <a href="/apps-projects-list">List</a>
                </li>
                <li>
                    <a href="/apps-projects-details">Details</a>
                </li>
                <li>
                    <a href="/apps-projects-gantt">Gantt <span
                            class="badge rounded-pill bg-light text-dark font-10 float-end">New</span></a>
                </li>
                <li>
                    <a href="/apps-projects-add">Create Project</a>
                </li>
            </ul>
        </div>
    </li>

    <li class="side-nav-item">
        <a href="/apps-social-feed" class="side-nav-link">
            <i class="uil-rss"></i>
            <span> Social Feed </span>
        </a>
    </li>

    <li class="side-nav-item">
        <a data-bs-toggle="collapse" href="/#sidebarTasks" aria-expanded="false" aria-controls="sidebarTasks"
            class="side-nav-link">
            <i class="uil-clipboard-alt"></i>
            <span> Tasks </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="sidebarTasks">
            <ul class="side-nav-second-level">
                <li>
                    <a href="/apps-tasks">List</a>
                </li>
                <li>
                    <a href="/apps-tasks-details">Details</a>
                </li>
                <li>
                    <a href="/apps-kanban">Kanban Board</a>
                </li>
            </ul>
        </div>
    </li>

    <li class="side-nav-item">
        <a href="/apps-file-manager" class="side-nav-link">
            <i class="uil-folder-plus"></i>
            <span> File Manager </span>
        </a>
    </li>

    <li class="side-nav-title side-nav-item">Custom</li>

    <li class="side-nav-item">
        <a data-bs-toggle="collapse" href="/#sidebarPages" aria-expanded="false" aria-controls="sidebarPages"
            class="side-nav-link">
            <i class="uil-copy-alt"></i>
            <span> Pages </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="sidebarPages">
            <ul class="side-nav-second-level">
                <li>
                    <a href="/pages-profile">Profile</a>
                </li>
                <li>
                    <a href="/pages-profile-2">Profile 2</a>
                </li>
                <li>
                    <a href="/pages-invoice">Invoice</a>
                </li>
                <li>
                    <a href="/pages-faq">FAQ</a>
                </li>
                <li>
                    <a href="/pages-pricing">Pricing</a>
                </li>
                <li>
                    <a href="/pages-maintenance">Maintenance</a>
                </li>
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="/#sidebarPagesAuth" aria-expanded="false"
                        aria-controls="sidebarPagesAuth">
                        <span> Authentication </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarPagesAuth">
                        <ul class="side-nav-third-level">
                            <li>
                                <a href="/pages-login">Login</a>
                            </li>
                            <li>
                                <a href="/pages-login-2">Login 2</a>
                            </li>
                            <li>
                                <a href="/pages-register">Register</a>
                            </li>
                            <li>
                                <a href="/pages-register-2">Register 2</a>
                            </li>
                            <li>
                                <a href="/pages-logout">Logout</a>
                            </li>
                            <li>
                                <a href="/pages-logout-2">Logout 2</a>
                            </li>
                            <li>
                                <a href="/pages-recoverpw">Recover Password</a>
                            </li>
                            <li>
                                <a href="/pages-recoverpw-2">Recover Password 2</a>
                            </li>
                            <li>
                                <a href="/pages-lock-screen">Lock Screen</a>
                            </li>
                            <li>
                                <a href="/pages-lock-screen-2">Lock Screen 2</a>
                            </li>
                            <li>
                                <a href="/pages-confirm-mail">Confirm Mail</a>
                            </li>
                            <li>
                                <a href="/pages-confirm-mail-2">Confirm Mail 2</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="/#sidebarPagesError" aria-expanded="false"
                        aria-controls="sidebarPagesError">
                        <span> Error </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarPagesError">
                        <ul class="side-nav-third-level">
                            <li>
                                <a href="/pages-404">Error 404</a>
                            </li>
                            <li>
                                <a href="/pages-404-alt">Error 404-alt</a>
                            </li>
                            <li>
                                <a href="/pages-500">Error 500</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="/pages-starter">Starter Page</a>
                </li>
                <li>
                    <a href="/pages-preloader">With Preloader</a>
                </li>
                <li>
                    <a href="/pages-timeline">Timeline</a>
                </li>
            </ul>
        </div>
    </li>

    <li class="side-nav-item">
        <a href="/landing" target="_blank" class="side-nav-link">
            <i class="uil-globe"></i>
            <span class="badge bg-secondary text-light float-end">New</span>
            <span> Landing </span>
        </a>
    </li>

    <li class="side-nav-item">
        <a data-bs-toggle="collapse" href="/#sidebarLayouts" aria-expanded="false" aria-controls="sidebarLayouts"
            class="side-nav-link">
            <i class="uil-window"></i>
            <span> Layouts </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="sidebarLayouts">
            <ul class="side-nav-second-level">
                <li>
                    <a href="/layouts-horizontal" target="_blank">Horizontal</a>
                </li>
                <li>
                    <a href="/layouts-detached" target="_blank">Detached</a>
                </li>
                <li>
                    <a href="/layouts-full" target="_blank">Full View</a>
                </li>
                <li>
                    <a href="/layouts-hover" target="_blank">Hover Menu</a>
                </li>
                <li>
                    <a href="/layouts-compact" target="_blank">Compact</a>
                </li>
                <li>
                    <a href="/layouts-icon-view" target="_blank">Icon View</a>
                </li>
            </ul>
        </div>
    </li>

    <li class="side-nav-title side-nav-item mt-1">Components</li>

    <li class="side-nav-item">
        <a data-bs-toggle="collapse" href="/#sidebarBaseUI" aria-expanded="false" aria-controls="sidebarBaseUI"
            class="side-nav-link">
            <i class="uil-box"></i>
            <span> Base UI </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="sidebarBaseUI">
            <ul class="side-nav-second-level">
                <li>
                    <a href="/ui-accordions">Accordions & Collapse</a>
                </li>
                <li>
                    <a href="/ui-alerts">Alerts</a>
                </li>
                <li>
                    <a href="/ui-avatars">Avatars</a>
                </li>
                <li>
                    <a href="/ui-badges">Badges</a>
                </li>
                <li>
                    <a href="/ui-breadcrumb">Breadcrumb</a>
                </li>
                <li>
                    <a href="/ui-buttons">Buttons</a>
                </li>
                <li>
                    <a href="/ui-cards">Cards</a>
                </li>
                <li>
                    <a href="/ui-carousel">Carousel</a>
                </li>
                <li>
                    <a href="/ui-dropdowns">Dropdowns</a>
                </li>
                <li>
                    <a href="/ui-embed-video">Embed Video</a>
                </li>
                <li>
                    <a href="/ui-grid">Grid</a>
                </li>
                <li>
                    <a href="/ui-list-group">List Group</a>
                </li>
                <li>
                    <a href="/ui-modals">Modals</a>
                </li>
                <li>
                    <a href="/ui-notifications">Notifications</a>
                </li>
                <li>
                    <a href="/ui-offcanvas">Offcanvas</a>
                </li>
                <li>
                    <a href="/ui-placeholders">Placeholders</a>
                </li>
                <li>
                    <a href="/ui-pagination">Pagination</a>
                </li>
                <li>
                    <a href="/ui-popovers">Popovers</a>
                </li>
                <li>
                    <a href="/ui-progress">Progress</a>
                </li>
                <li>
                    <a href="/ui-ribbons">Ribbons</a>
                </li>
                <li>
                    <a href="/ui-spinners">Spinners</a>
                </li>
                <li>
                    <a href="/ui-tabs">Tabs</a>
                </li>
                <li>
                    <a href="/ui-tooltips">Tooltips</a>
                </li>
                <li>
                    <a href="/ui-typography">Typography</a>
                </li>
                <li>
                    <a href="/ui-utilities">Utilities</a>
                </li>
            </ul>
        </div>
    </li>

    <li class="side-nav-item">
        <a data-bs-toggle="collapse" href="/#sidebarExtendedUI" aria-expanded="false"
            aria-controls="sidebarExtendedUI" class="side-nav-link">
            <i class="uil-package"></i>
            <span> Extended UI </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="sidebarExtendedUI">
            <ul class="side-nav-second-level">
                <li>
                    <a href="/extended-dragula">Dragula</a>
                </li>
                <li>
                    <a href="/extended-range-slider">Range Slider</a>
                </li>
                <li>
                    <a href="/extended-ratings">Ratings</a>
                </li>
                <li>
                    <a href="/extended-scrollbar">Scrollbar</a>
                </li>
                <li>
                    <a href="/extended-scrollspy">Scrollspy</a>
                </li>
                <li>
                    <a href="/extended-treeview">Treeview</a>
                </li>
            </ul>
        </div>
    </li>

    <li class="side-nav-item">
        <a href="/widgets" class="side-nav-link">
            <i class="uil-layer-group"></i>
            <span> Widgets </span>
        </a>
    </li>

    <li class="side-nav-item">
        <a data-bs-toggle="collapse" href="/#sidebarIcons" aria-expanded="false" aria-controls="sidebarIcons"
            class="side-nav-link">
            <i class="uil-streering"></i>
            <span> Icons </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="sidebarIcons">
            <ul class="side-nav-second-level">
                <li>
                    <a href="/icons-remixicons">Remix Icons</a>
                </li>
                <li>
                    <a href="/icons-mdi">Material Design</a>
                </li>
                <li>
                    <a href="/icons-unicons">Unicons</a>
                </li>
            </ul>
        </div>
    </li>

    <li class="side-nav-item">
        <a data-bs-toggle="collapse" href="/#sidebarCharts" aria-expanded="false" aria-controls="sidebarCharts"
            class="side-nav-link">
            <i class="uil-chart"></i>
            <span> Charts </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="sidebarCharts">
            <ul class="side-nav-second-level">
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="/#sidebarApexCharts" aria-expanded="false"
                        aria-controls="sidebarApexCharts">
                        <span> Apex Charts </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarApexCharts">
                        <ul class="side-nav-third-level">
                            <li>
                                <a href="/charts-apex-area">Area</a>
                            </li>
                            <li>
                                <a href="/charts-apex-bar">Bar</a>
                            </li>
                            <li>
                                <a href="/charts-apex-bubble">Bubble</a>
                            </li>
                            <li>
                                <a href="/charts-apex-candlestick">Candlestick</a>
                            </li>
                            <li>
                                <a href="/charts-apex-column">Column</a>
                            </li>
                            <li>
                                <a href="/charts-apex-heatmap">Heatmap</a>
                            </li>
                            <li>
                                <a href="/charts-apex-line">Line</a>
                            </li>
                            <li>
                                <a href="/charts-apex-mixed">Mixed</a>
                            </li>
                            <li>
                                <a href="/charts-apex-timeline">Timeline</a>
                            </li>
                            <li>
                                <a href="/charts-apex-boxplot">Boxplot</a>
                            </li>
                            <li>
                                <a href="/charts-apex-treemap">Treemap</a>
                            </li>
                            <li>
                                <a href="/charts-apex-pie">Pie</a>
                            </li>
                            <li>
                                <a href="/charts-apex-radar">Radar</a>
                            </li>
                            <li>
                                <a href="/charts-apex-radialbar">RadialBar</a>
                            </li>
                            <li>
                                <a href="/charts-apex-scatter">Scatter</a>
                            </li>
                            <li>
                                <a href="/charts-apex-polar-area">Polar Area</a>
                            </li>
                            <li>
                                <a href="/charts-apex-sparklines">Sparklines</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="/#sidebarChartJSCharts" aria-expanded="false"
                        aria-controls="sidebarChartJSCharts">
                        <span> ChartJS </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarChartJSCharts">
                        <ul class="side-nav-third-level">
                            <li>
                                <a href="/charts-chartjs-area">Area</a>
                            </li>
                            <li>
                                <a href="/charts-chartjs-bar">Bar</a>
                            </li>
                            <li>
                                <a href="/charts-chartjs-line">Line</a>
                            </li>
                            <li>
                                <a href="/charts-chartjs-other">Other</a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li>
                    <a href="/charts-brite">Britecharts</a>
                </li>
                <li>
                    <a href="/charts-sparkline">Sparklines</a>
                </li>
            </ul>
        </div>
    </li>

    <li class="side-nav-item">
        <a data-bs-toggle="collapse" href="/#sidebarForms" aria-expanded="false" aria-controls="sidebarForms"
            class="side-nav-link">
            <i class="uil-document-layout-center"></i>
            <span> Forms </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="sidebarForms">
            <ul class="side-nav-second-level">
                <li>
                    <a href="/form-elements">Basic Elements</a>
                </li>
                <li>
                    <a href="/form-advanced">Form Advanced</a>
                </li>
                <li>
                    <a href="/form-validation">Validation</a>
                </li>
                <li>
                    <a href="/form-wizard">Wizard</a>
                </li>
                <li>
                    <a href="/form-fileuploads">File Uploads</a>
                </li>
                <li>
                    <a href="/form-editors">Editors</a>
                </li>
            </ul>
        </div>
    </li>

    <li class="side-nav-item">
        <a data-bs-toggle="collapse" href="/#sidebarTables" aria-expanded="false" aria-controls="sidebarTables"
            class="side-nav-link">
            <i class="uil-table"></i>
            <span> Tables </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="sidebarTables">
            <ul class="side-nav-second-level">
                <li>
                    <a href="/tables-basic">Basic Tables</a>
                </li>
                <li>
                    <a href="/tables-datatable">Data Tables</a>
                </li>
            </ul>
        </div>
    </li>

    <li class="side-nav-item">
        <a data-bs-toggle="collapse" href="/#sidebarMaps" aria-expanded="false" aria-controls="sidebarMaps"
            class="side-nav-link">
            <i class="uil-location-point"></i>
            <span> Maps </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="sidebarMaps">
            <ul class="side-nav-second-level">
                <li>
                    <a href="/maps-google">Google Maps</a>
                </li>
                <li>
                    <a href="/maps-vector">Vector Maps</a>
                </li>
            </ul>
        </div>
    </li>

    <li class="side-nav-item">
        <a data-bs-toggle="collapse" href="/#sidebarMultiLevel" aria-expanded="false"
            aria-controls="sidebarMultiLevel" class="side-nav-link">
            <i class="uil-folder-plus"></i>
            <span> Multi Level </span>
            <span class="menu-arrow"></span>
        </a>
        <div class="collapse" id="sidebarMultiLevel">
            <ul class="side-nav-second-level">
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="/#sidebarSecondLevel" aria-expanded="false"
                        aria-controls="sidebarSecondLevel">
                        <span> Second Level </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarSecondLevel">
                        <ul class="side-nav-third-level">
                            <li>
                                <a href="/javascript: void(0);">Item 1</a>
                            </li>
                            <li>
                                <a href="/javascript: void(0);">Item 2</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="/#sidebarThirdLevel" aria-expanded="false" aria-controls="sidebarThirdLevel">
                        <span> Third Level </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarThirdLevel">
                        <ul class="side-nav-third-level">
                            <li>
                                <a href="/javascript: void(0);">Item 1</a>
                            </li>
                            <li class="side-nav-item">
                                <a data-bs-toggle="collapse" href="/#sidebarFourthLevel" aria-expanded="false" aria-controls="sidebarFourthLevel">
                                    <span> Item 2 </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarFourthLevel">
                                    <ul class="side-nav-forth-level">
                                        <li>
                                            <a href="/javascript: void(0);">Item 2.1</a>
                                        </li>
                                        <li>
                                            <a href="/javascript: void(0);">Item 2.2</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </li>
</x-theme_menu-layout>

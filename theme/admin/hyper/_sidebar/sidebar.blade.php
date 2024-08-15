<div class="leftside-menu">

    <!-- Logo Light -->
    <a href="index" class="logo logo-light">
        <span class="logo-lg">
            <img src="/assets/images/logo.png" alt="logo" height="22">
        </span>
        <span class="logo-sm">
            <img src="/assets/images/logo-sm.png" alt="small logo" height="22">
        </span>
    </a>

    <!-- Logo Dark -->
    <a href="index" class="logo logo-dark">
        <span class="logo-lg">
            <img src="/assets/images/logo-dark.png" alt="dark logo" height="22">
        </span>
        <span class="logo-sm">
            <img src="/assets/images/logo-dark-sm.png" alt="small logo" height="22">
        </span>
    </a>


    <!-- Sidebar Hover Menu Toggle Button -->
    <button type="button"
        class="btn button-sm-hover p-0"
        data-bs-toggle="tooltip"
        data-bs-placement="right"
        title="Show Full Sidebar">
        <i class="ri-checkbox-blank-circle-line align-middle"></i>
    </button>

    <!-- Sidebar -left -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>

        <!-- Leftbar User -->
        <div class="leftbar-user">
            <a href="pages-profile">
                <img src="/assets/images/users/avatar-1.jpg" alt="user-image" height="42"
                    class="rounded-circle shadow-sm">
                <span class="leftbar-user-name">Dominic Keller</span>
            </a>
        </div>

        <!--- Sidemenu -->
        @theme("_sidebar/side_nav")
        <!--- End Sidemenu -->

        <!-- Help Box -->
        <div class="help-box text-white text-center">
            <a href="javascript: void(0);" class="float-end close-btn text-white">
                <i class="mdi mdi-close"></i>
            </a>
            <img src="assets/images/svg/help-icon.svg" height="90" alt="Helper Icon Image" />
            <h5 class="mt-3">Unlimited Access</h5>
            <p class="mb-3">Upgrade to plan to get access to unlimited reports</p>
            <a href="javascript: void(0);" class="btn btn-secondary btn-sm">Upgrade</a>
        </div>
        <!-- end Help Box -->

        <div class="clearfix"></div>
    </div>
</div>

@livewire('CartOffcanvas')

<!-- Search offcanvas -->
<div class="offcanvas offcanvas-top" id="searchBox" data-bs-backdrop="static" tabindex="-1">
  <div class="offcanvas-header border-bottom p-0 py-lg-1">
    <form class="container d-flex align-items-center">
      <input type="search" class="form-control form-control-lg fs-lg border-0 rounded-0 py-3 ps-0" placeholder="Search the products" data-autofocus="offcanvas">
      <button type="reset" class="btn-close fs-lg" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </form>
  </div>
  <div class="offcanvas-body px-0">
    <div class="container text-center">
      <svg class="text-body-tertiary opacity-60 mb-4" xmlns="http://www.w3.org/2000/svg" width="60" viewBox="0 0 512 512" fill="currentColor"><path d="M340.115,361.412l-16.98-16.98c-34.237,29.36-78.733,47.098-127.371,47.098C87.647,391.529,0,303.883,0,195.765S87.647,0,195.765,0s195.765,87.647,195.765,195.765c0,48.638-17.738,93.134-47.097,127.371l16.98,16.98l11.94-11.94c5.881-5.881,15.415-5.881,21.296,0l112.941,112.941c5.881,5.881,5.881,15.416,0,21.296l-45.176,45.176c-5.881,5.881-15.415,5.881-21.296,0L328.176,394.648c-5.881-5.881-5.881-15.416,0-21.296L340.115,361.412z M195.765,361.412c91.484,0,165.647-74.163,165.647-165.647S287.249,30.118,195.765,30.118S30.118,104.28,30.118,195.765S104.28,361.412,195.765,361.412z M360.12,384l91.645,91.645l23.88-23.88L384,360.12L360.12,384z M233.034,233.033c5.881-5.881,15.415-5.881,21.296,0c5.881,5.881,5.881,15.416,0,21.296c-32.345,32.345-84.786,32.345-117.131,0c-5.881-5.881-5.881-15.415,0-21.296c5.881-5.881,15.416-5.881,21.296,0C179.079,253.616,212.45,253.616,233.034,233.033zM135.529,180.706c-12.475,0-22.588-10.113-22.588-22.588c0-12.475,10.113-22.588,22.588-22.588c12.475,0,22.588,10.113,22.588,22.588C158.118,170.593,148.005,180.706,135.529,180.706z M256,180.706c-12.475,0-22.588-10.113-22.588-22.588c0-12.475,10.113-22.588,22.588-22.588s22.588,10.113,22.588,22.588C278.588,170.593,268.475,180.706,256,180.706z"/></svg>
      <h6 class="mb-2">Your search results will appear here</h6>
      <p class="fs-sm mb-0">Start typing in the search field above to see instant search results.</p>
    </div>
  </div>
</div>


<!-- Topbar -->
@partials("topbar_banner",['rows'=>getSiteBanner(3)])


<!-- Navigation bar (Page header) -->
  <header class="navbar navbar-expand-lg navbar-sticky bg-body d-block z-fixed p-0" data-sticky-navbar='{"offset": 500}'>
    <div class="container py-2 py-lg-3">
      <div class="d-flex align-items-center gap-3">

        <!-- Mobile offcanvas menu toggler (Hamburger) -->
        <button type="button" class="navbar-toggler me-4 me-md-2" data-bs-toggle="offcanvas" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Country slect visible on screens > 768px wide (md breakpoint) -->
        <x-www_nav-country>
        </x-www_nav-country>

        <!-- City slect visible on screens > 768px wide (md breakpoint) -->
        <x-www_nav-city>
        </x-www_nav-city>
      </div>

      <!-- Navbar brand (Logo) -->

      <x-www_navbar-brand>
        JinyShop
      </x-www_navbar-brand>

      <!-- Button group -->
      <div class="d-flex align-items-center">

        <!-- Navbar stuck nav toggler -->
        <button type="button" class="navbar-toggler d-none navbar-stuck-show me-3" data-bs-toggle="collapse" data-bs-target="#stuckNav" aria-controls="stuckNav" aria-expanded="false" aria-label="Toggle navigation in navbar stuck state">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Theme switcher (light/dark/auto) -->
        <div class="dropdown">
          <button type="button" class="theme-switcher btn btn-icon btn-lg btn-outline-secondary fs-lg border-0 rounded-circle animate-scale" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Toggle theme (light)">
            <span class="theme-icon-active d-flex animate-target">
              <i class="ci-sun"></i>
            </span>
          </button>
          <ul class="dropdown-menu" style="--cz-dropdown-min-width: 9rem">
            <li>
              <button type="button" class="dropdown-item active" data-bs-theme-value="light" aria-pressed="true">
                <span class="theme-icon d-flex fs-base me-2">
                  <i class="ci-sun"></i>
                </span>
                <span class="theme-label">Light</span>
                <i class="item-active-indicator ci-check ms-auto"></i>
              </button>
            </li>
            <li>
              <button type="button" class="dropdown-item" data-bs-theme-value="dark" aria-pressed="false">
                <span class="theme-icon d-flex fs-base me-2">
                  <i class="ci-moon"></i>
                </span>
                <span class="theme-label">Dark</span>
                <i class="item-active-indicator ci-check ms-auto"></i>
              </button>
            </li>
            <li>
              <button type="button" class="dropdown-item" data-bs-theme-value="auto" aria-pressed="false">
                <span class="theme-icon d-flex fs-base me-2">
                  <i class="ci-auto"></i>
                </span>
                <span class="theme-label">Auto</span>
                <i class="item-active-indicator ci-check ms-auto"></i>
              </button>
            </li>
          </ul>
        </div>

        <!-- Search toggle button visible on screens < 992px wide (lg breakpoint) -->
        <button type="button" class="btn btn-icon btn-lg fs-xl btn-outline-secondary border-0 rounded-circle animate-shake d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#searchBox" aria-controls="searchBox" aria-label="Toggle search bar">
          <i class="ci-search animate-target"></i>
        </button>

        <!-- Account button visible on screens > 768px wide (md breakpoint) -->
        <a class="btn btn-icon btn-lg fs-lg btn-outline-secondary border-0 rounded-circle animate-shake d-none d-md-inline-flex" href="account-signin">
          <i class="ci-user animate-target"></i>
          <span class="visually-hidden">Account</span>
        </a>

        <!-- Wishlist button visible on screens > 768px wide (md breakpoint) -->
        <a class="btn btn-icon btn-lg fs-lg btn-outline-secondary border-0 rounded-circle animate-pulse d-none d-md-inline-flex"
            href="/wish">
          <i class="ci-heart animate-target"></i>
          <span class="visually-hidden">Wishlist</span>
        </a>


        <!-- Cart button -->
        @livewire("CartButton")

      </div>
    </div>


    <x-www_nav-browse>

    </x-www_nav-browse>
  </header>

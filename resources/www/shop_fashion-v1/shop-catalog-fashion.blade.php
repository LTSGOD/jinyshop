<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-pwa="true">
  <head>
    <meta charset="utf-8">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">

    <!-- SEO Meta Tags -->
    <title>Cartzilla | Fashion Store - Catalog</title>
    <meta name="description" content="Cartzilla - Multipurpose Bootstrap E-Commerce HTML Template">
    <meta name="keywords" content="bootstrap, online shop, e-commerce, market, multipurpose, product landing, ui kit, light and dark mode, html5, css3, javascript, gallery, slider, touch, creative">
    <meta name="author" content="Createx Studio">

    <!-- Webmanifest + Favicon / App icons -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="manifest" href="/manifest.json">
    <link rel="icon" type="image/png" href="assets/app-icons/icon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="assets/app-icons/icon-180x180.png">

    <!-- Theme switcher (color modes) -->
    <script src="assets/js/theme-switcher.js"></script>

    <!-- Preloaded local web font (Inter) -->
    <link rel="preload" href="assets/fonts/inter-variable-latin.woff2" as="font" type="font/woff2" crossorigin>

    <!-- Font icons -->
    <link rel="preload" href="assets/icons/cartzilla-icons.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="assets/icons/cartzilla-icons.min.css">

    <!-- Vendor styles -->
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/vendor/simplebar/dist/simplebar.min.css">
    <link rel="stylesheet" href="assets/vendor/choices.js/public/assets/styles/choices.min.css">
    <link rel="stylesheet" href="assets/vendor/nouislider/dist/nouislider.min.css">

    <!-- Bootstrap + Theme styles -->
    <link rel="preload" href="assets/css/theme.min.css" as="style">
    <link rel="stylesheet" href="assets/css/theme.min.css" id="theme-styles">
  </head>


  <!-- Body -->
  <body>

    <!-- Shopping cart offcanvas -->
    <div class="offcanvas offcanvas-end pb-sm-2 px-sm-2"
      id="shoppingCart"
      tabindex="-1"
      aria-labelledby="shoppingCartLabel"
      style="width: 500px">

      <!-- Header -->
      <div class="offcanvas-header flex-column align-items-start py-3 pt-lg-4">
        <div class="d-flex align-items-center justify-content-between w-100 mb-3 mb-lg-4">
          <h4 class="offcanvas-title" id="shoppingCartLabel">Shopping cart</h4>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <p class="fs-sm">Buy <span class="text-dark-emphasis fw-semibold">$53</span> more to get <span class="text-dark-emphasis fw-semibold">Free Shipping</span></p>
        <div class="progress w-100" role="progressbar" aria-label="Free shipping progress" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
          <div class="progress-bar bg-dark rounded-pill d-none-dark" style="width: 78%"></div>
          <div class="progress-bar bg-light rounded-pill d-none d-block-dark" style="width: 78%"></div>
        </div>
      </div>

      <!-- Items -->
      <div class="offcanvas-body d-flex flex-column gap-4 pt-2">

        <!-- Item -->
        <div class="d-flex align-items-center">
          <a class="flex-shrink-0" href="shop-product-fashion">
            <img src="assets/img/shop/fashion/thumbs/07.png" class="bg-body-tertiary rounded" width="110" alt="Thumbnail">
          </a>
          <div class="w-100 min-w-0 ps-3">
            <h5 class="d-flex animate-underline mb-2">
              <a class="d-block fs-sm fw-medium text-truncate animate-target" href="shop-product-fashion">Leather sneakers with golden laces</a>
            </h5>
            <div class="h6 pb-1 mb-2">$74.00</div>
            <div class="d-flex align-items-center justify-content-between">
              <div class="count-input rounded-2">
                <button type="button" class="btn btn-icon btn-sm" data-decrement aria-label="Decrement quantity">
                  <i class="ci-minus"></i>
                </button>
                <input type="number" class="form-control form-control-sm" value="1" readonly>
                <button type="button" class="btn btn-icon btn-sm" data-increment aria-label="Increment quantity">
                  <i class="ci-plus"></i>
                </button>
              </div>
              <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove from cart"></button>
            </div>
          </div>
        </div>

        <!-- Item -->
        <div class="d-flex align-items-center">
          <a class="flex-shrink-0" href="shop-product-fashion">
            <img src="assets/img/shop/fashion/thumbs/08.png" class="bg-body-tertiary rounded" width="110" alt="Thumbnail">
          </a>
          <div class="w-100 min-w-0 ps-3">
            <h5 class="d-flex animate-underline mb-2">
              <a class="d-block fs-sm fw-medium text-truncate animate-target" href="shop-product-fashion">Classic cotton men's shirt</a>
            </h5>
            <div class="h6 pb-1 mb-2">$27.00</div>
            <div class="d-flex align-items-center justify-content-between">
              <div class="count-input rounded-2">
                <button type="button" class="btn btn-icon btn-sm" data-decrement aria-label="Decrement quantity">
                  <i class="ci-minus"></i>
                </button>
                <input type="number" class="form-control form-control-sm" value="1" readonly>
                <button type="button" class="btn btn-icon btn-sm" data-increment aria-label="Increment quantity">
                  <i class="ci-plus"></i>
                </button>
              </div>
              <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove from cart"></button>
            </div>
          </div>
        </div>

        <!-- Item -->
        <div class="d-flex align-items-center">
          <a class="flex-shrink-0" href="shop-product-fashion">
            <img src="assets/img/shop/fashion/thumbs/09.png" class="bg-body-tertiary rounded" width="110" alt="Thumbnail">
          </a>
          <div class="w-100 min-w-0 ps-3">
            <h5 class="d-flex animate-underline mb-2">
              <a class="d-block fs-sm fw-medium text-truncate animate-target" href="shop-product-fashion">Polarized sunglasses for men</a>
            </h5>
            <div class="h6 pb-1 mb-2">$96.00 <del class="text-body-tertiary fs-xs fw-normal">112.00</del></div>
            <div class="d-flex align-items-center justify-content-between">
              <div class="count-input rounded-2">
                <button type="button" class="btn btn-icon btn-sm" data-decrement aria-label="Decrement quantity">
                  <i class="ci-minus"></i>
                </button>
                <input type="number" class="form-control form-control-sm" value="1" readonly>
                <button type="button" class="btn btn-icon btn-sm" data-increment aria-label="Increment quantity">
                  <i class="ci-plus"></i>
                </button>
              </div>
              <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove from cart"></button>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <div class="offcanvas-header flex-column align-items-start">
        <div class="d-flex align-items-center justify-content-between w-100 mb-3 mb-md-4">
          <span class="text-light-emphasis">Subtotal:</span>
          <span class="h6 mb-0">$197.00</span>
        </div>
        <div class="d-flex w-100 gap-3">
          <a class="btn btn-lg btn-secondary w-100" href="#!">View cart</a>
          <a class="btn btn-lg btn-dark w-100" href="#!">Checkout</a>
        </div>
      </div>
    </div>


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
    <div class="alert alert-dismissible bg-dark text-white rounded-0 py-2 px-0 m-0 fade show" data-bs-theme="dark">
      <div class="container position-relative d-flex min-w-0">
        <div class="d-flex flex-nowrap align-items-center g-2 w-100 min-w-0 mx-auto mt-n1" style="max-width: 458px">
          <div class="nav me-2">
            <button type="button" class="nav-link fs-lg p-0" id="topbarPrev" aria-label="Prev">
              <i class="ci-chevron-left"></i>
            </button>
          </div>
          <div class="swiper fs-sm text-white" data-swiper='{
            "spaceBetween": 24,
            "loop": true,
            "autoplay": {
              "delay": 5000,
              "disableOnInteraction": false
            },
            "navigation": {
              "prevEl": "#topbarPrev",
              "nextEl": "#topbarNext"
            }
          }'>
            <div class="swiper-wrapper min-w-0">
              <div class="swiper-slide text-truncate text-center">🎉 Free Shipping on orders over $250. <span class="d-none d-sm-inline">Don't miss a discount!</span></div>
              <div class="swiper-slide text-truncate text-center">💰 Money back guarantee. <span class="d-none d-sm-inline">We return money within 30 days.</span></div>
              <div class="swiper-slide text-truncate text-center">💪 Friendly 24/7 customer support. <span class="d-none d-sm-inline">We've got you covered!</span></div>
            </div>
          </div>
          <div class="nav ms-2">
            <button type="button" class="nav-link fs-lg p-0" id="topbarNext" aria-label="Next">
              <i class="ci-chevron-right"></i>
            </button>
          </div>
        </div>
        <button type="button" class="btn-close position-static flex-shrink-0 p-1 ms-3 ms-md-n4" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    </div>


    <!-- Navigation bar (Page header) -->
    <header class="navbar navbar-expand-lg navbar-sticky bg-body d-block z-fixed p-0" data-sticky-navbar='{"offset": 500}'>
      <div class="container py-2 py-lg-3">
        <div class="d-flex align-items-center gap-3">

          <!-- Mobile offcanvas menu toggler (Hamburger) -->
          <button type="button" class="navbar-toggler me-4 me-md-2" data-bs-toggle="offcanvas" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Country slect visible on screens > 768px wide (md breakpoint) -->
          <div class="dropdown d-none d-md-block nav">
            <a class="nav-link dropdown-toggle py-1 px-0" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="Country select: USA">
              <div class="ratio ratio-1x1" style="width: 20px">
                <img src="assets/img/flags/en-us.png" alt="USA">
              </div>
            </a>
            <ul class="dropdown-menu fs-sm" style="--cz-dropdown-spacer: .5rem">
              <li>
                <a class="dropdown-item" href="#!">
                  <img src="assets/img/flags/en-uk.png" class="flex-shrink-0 me-2" width="20" alt="United Kingdom">
                  United Kingdom
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#!">
                  <img src="assets/img/flags/fr.png" class="flex-shrink-0 me-2" width="20" alt="France">
                  France
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#!">
                  <img src="assets/img/flags/de.png" class="flex-shrink-0 me-2" width="20" alt="Deutschland">
                  Deutschland
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#!">
                  <img src="assets/img/flags/it.png" class="flex-shrink-0 me-2" width="20" alt="Italia">
                  Italia
                </a>
              </li>
            </ul>
          </div>

          <!-- City slect visible on screens > 768px wide (md breakpoint) -->
          <div class="dropdown d-none d-md-block nav">
            <a class="nav-link animate-underline dropdown-toggle fw-normal py-1 px-0" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="animate-target">Washington</span>
            </a>
            <ul class="dropdown-menu fs-sm" style="--cz-dropdown-spacer: .5rem">
              <li><a class="dropdown-item" href="#!">Chicago</a></li>
              <li><a class="dropdown-item" href="#!">Los Angeles</a></li>
              <li><a class="dropdown-item" href="#!">New York</a></li>
              <li><a class="dropdown-item" href="#!">Philadelphia</a></li>
            </ul>
          </div>
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
          <a class="btn btn-icon btn-lg fs-lg btn-outline-secondary border-0 rounded-circle animate-pulse d-none d-md-inline-flex" href="#!">
            <i class="ci-heart animate-target"></i>
            <span class="visually-hidden">Wishlist</span>
          </a>

          <!-- Cart button -->
          <button type="button" class="btn btn-icon btn-lg fs-xl btn-outline-secondary position-relative border-0 rounded-circle animate-scale" data-bs-toggle="offcanvas" data-bs-target="#shoppingCart" aria-controls="shoppingCart" aria-label="Shopping cart">
            <span class="position-absolute top-0 start-100 badge fs-xs text-bg-primary rounded-pill mt-1 ms-n4 z-2" style="--cz-badge-padding-y: .25em; --cz-badge-padding-x: .42em">3</span>
            <i class="ci-shopping-bag animate-target me-1"></i>
          </button>
        </div>
      </div>

      <!-- Main navigation that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
      <div class="collapse navbar-stuck-hide" id="stuckNav">
        <nav class="offcanvas offcanvas-start" id="navbarNav" tabindex="-1" aria-labelledby="navbarNavLabel">
          <div class="offcanvas-header py-3">
            <h5 class="offcanvas-title" id="navbarNavLabel">Browse Cartzilla</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>

          <!-- Country and City slects visible on screens < 768px wide (md breakpoint) -->
          <div class="offcanvas-header gap-3 d-md-none pt-0 pb-3">
            <div class="dropdown nav">
              <a class="nav-link dropdown-toggle py-1 px-0" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="Country select: USA">
                <div class="ratio ratio-1x1" style="width: 20px">
                  <img src="assets/img/flags/en-us.png" alt="USA">
                </div>
              </a>
              <ul class="dropdown-menu fs-sm" style="--cz-dropdown-spacer: .5rem">
                <li>
                  <a class="dropdown-item" href="#!">
                    <img src="assets/img/flags/en-uk.png" class="flex-shrink-0 me-2" width="20" alt="United Kingdom">
                    United Kingdom
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="#!">
                    <img src="assets/img/flags/fr.png" class="flex-shrink-0 me-2" width="20" alt="France">
                    France
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="#!">
                    <img src="assets/img/flags/de.png" class="flex-shrink-0 me-2" width="20" alt="Deutschland">
                    Deutschland
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="#!">
                    <img src="assets/img/flags/it.png" class="flex-shrink-0 me-2" width="20" alt="Italia">
                    Italia
                  </a>
                </li>
              </ul>
            </div>
            <div class="dropdown nav">
              <a class="nav-link animate-underline dropdown-toggle fw-normal py-1 px-0" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="animate-target">Washington</span>
              </a>
              <ul class="dropdown-menu fs-sm" style="--cz-dropdown-spacer: .5rem">
                <li><a class="dropdown-item" href="#!">Chicago</a></li>
                <li><a class="dropdown-item" href="#!">Los Angeles</a></li>
                <li><a class="dropdown-item" href="#!">New York</a></li>
                <li><a class="dropdown-item" href="#!">Philadelphia</a></li>
              </ul>
            </div>
          </div>
          <div class="offcanvas-body pt-1 pb-3 py-lg-0">
            <div class="container pb-lg-2 px-0 px-lg-3">

              <div class="position-relative d-lg-flex align-items-center justify-content-between">

                <!-- Categories mega menu -->
                <div class="navbar-nav">
                  <div class="dropdown position-static pb-lg-2">
                    <button type="button" class="nav-link animate-underline fw-semibold text-uppercase ps-0" data-bs-toggle="dropdown" data-bs-trigger="hover" data-bs-auto-close="outside" aria-expanded="false">
                      <i class="ci-menu fs-lg me-2"></i>
                      <span class="animate-target">Categories</span>
                    </button>
                    <div class="dropdown-menu w-100 p-4 px-xl-5" style="--cz-dropdown-spacer: .75rem">

                      <!-- Nav tabs -->
                      <ul class="nav nav-underline justify-content-lg-center mt-n2 mt-lg-0 mb-4" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button type="button" class="nav-link text-uppercase active" id="womens-tab" data-bs-toggle="tab" data-bs-target="#womens-tab-pane" role="tab" aria-controls="womens-tab-pane" aria-selected="true">
                            Women's
                          </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button type="button" class="nav-link text-uppercase" id="mens-tab" data-bs-toggle="tab" data-bs-target="#mens-tab-pane" role="tab" aria-controls="mens-tab-pane" aria-selected="false">
                            Men's
                          </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button type="button" class="nav-link text-uppercase" id="kids-tab" data-bs-toggle="tab" data-bs-target="#kids-tab-pane" role="tab" aria-controls="kids-tab-pane" aria-selected="false">
                            Kids'
                          </button>
                        </li>
                      </ul>

                      <!-- Tab panes -->
                      <div class="tab-content pb-xl-4">

                        <!-- Women's tab -->
                        <div class="tab-pane fade show active" id="womens-tab-pane" role="tabpanel" aria-labelledby="womens-tab">
                          <div class="row g-4">
                            <div class="col-lg-2">
                              <a class="d-inline-flex animate-underline h6 text-dark-emphasis text-decoration-none mb-2" href="shop-catalog-fashion">
                                <span class="animate-target">Clothing</span>
                              </a>
                              <ul class="nav flex-column gap-2 mt-0">
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Shirts &amp; Tops</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Coats &amp; Outerwear</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Underwear</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Sweatshirts</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Dresses</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Swimwear</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">View all</a>
                                </li>
                              </ul>
                            </div>
                            <div class="col-lg-2">
                              <a class="d-inline-flex animate-underline h6 text-dark-emphasis text-decoration-none mb-2" href="shop-catalog-fashion">
                                <span class="animate-target">Shoes</span>
                              </a>
                              <ul class="nav flex-column gap-2 mt-0">
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Boots</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Sandals</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Heels</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Loafers</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Slippers</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Oxfords</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">View all</a>
                                </li>
                              </ul>
                            </div>
                            <div class="col-lg-2">
                              <a class="d-inline-flex animate-underline h6 text-dark-emphasis text-decoration-none mb-2" href="shop-catalog-fashion">
                                <span class="animate-target">Accessories</span>
                              </a>
                              <ul class="nav flex-column gap-2 mt-0">
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Handbags</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Eyewear</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Hats</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Watches</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Jewelry</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Belts</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">View all</a>
                                </li>
                              </ul>
                            </div>
                            <div class="col-lg-2">
                              <div class="h6 mb-2">Specialty Sizes</div>
                              <ul class="nav flex-column gap-2 mt-0">
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Plus Size</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Petite</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Wide Shoes</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Narrow Shoes</a>
                                </li>
                              </ul>
                            </div>
                            <div class="col-lg-4 d-none d-lg-block" data-bs-theme="light">
                              <div class="position-relative d-flex flex-column h-100 rounded-4 overflow-hidden p-4">
                                <div class="position-relative d-flex flex-column justify-content-between h-100 z-2 pt-xl-2 ps-xl-2">
                                  <div class="h4 lh-base">Women's<br>Heels<br>Collection</div>
                                  <div>
                                    <a class="btn btn-sm btn-dark stretched-link" href="shop-catalog-fashion.html" data-bs-theme="light">Shop now</a>
                                  </div>
                                </div>
                                <img src="assets/img/mega-menu/fashion/01.jpg" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover rtl-flip" alt="Image">
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Men's tab -->
                        <div class="tab-pane fade" id="mens-tab-pane" role="tabpanel" aria-labelledby="mens-tab">
                          <div class="row g-4">
                            <div class="col-lg-2">
                              <a class="d-inline-flex animate-underline h6 text-dark-emphasis text-decoration-none mb-2" href="shop-catalog-fashion">
                                <span class="animate-target">Clothing</span>
                              </a>
                              <ul class="nav flex-column gap-2 mt-0">
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">T-Shirts</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Jeans</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Coats &amp; Outerwear</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Sweatshirts</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Underwear</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Pants</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">View all</a>
                                </li>
                              </ul>
                            </div>
                            <div class="col-lg-2">
                              <a class="d-inline-flex animate-underline h6 text-dark-emphasis text-decoration-none mb-2" href="shop-catalog-fashion">
                                <span class="animate-target">Shoes</span>
                              </a>
                              <ul class="nav flex-column gap-2 mt-0">
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Sneakers</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Oxfords</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Loafers</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Sandals</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Boots</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Slippers</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">View all</a>
                                </li>
                              </ul>
                            </div>
                            <div class="col-lg-2">
                              <a class="d-inline-flex animate-underline h6 text-dark-emphasis text-decoration-none mb-2" href="shop-catalog-fashion">
                                <span class="animate-target">Accessories</span>
                              </a>
                              <ul class="nav flex-column gap-2 mt-0">
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Backpacks</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Sunglasses</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Bags</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Watches</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Hats</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Belts</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">View all</a>
                                </li>
                              </ul>
                            </div>
                            <div class="col-lg-2">
                              <div class="h6 mb-2">Specialty Shops</div>
                              <ul class="nav flex-column gap-2 mt-0">
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Active Wear</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Sports Clothing</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Athletic Shoes</a>
                                </li>
                              </ul>
                            </div>
                            <div class="col-lg-4 d-none d-lg-block" data-bs-theme="dark">
                              <div class="position-relative d-flex flex-column h-100 rounded-4 overflow-hidden p-4">
                                <div class="position-relative d-flex flex-column justify-content-between h-100 z-2 pt-xl-2 ps-xl-2">
                                  <div class="h4 lh-base">Men's<br>Sunglasses<br>Offers</div>
                                  <div>
                                    <a class="btn btn-sm btn-dark stretched-link" href="shop-catalog-fashion.html" data-bs-theme="dark">Shop now</a>
                                  </div>
                                </div>
                                <img src="assets/img/mega-menu/fashion/02.jpg" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover rtl-flip" alt="Image">
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Kids' tab -->
                        <div class="tab-pane fade" id="kids-tab-pane" role="tabpanel" aria-labelledby="kids-tab">
                          <div class="row g-4">
                            <div class="col-lg-2">
                              <a class="d-inline-flex animate-underline h6 text-dark-emphasis text-decoration-none mb-2" href="shop-catalog-fashion">
                                <span class="animate-target">Boys</span>
                              </a>
                              <ul class="nav flex-column gap-2 mt-0">
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Pants</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Sneakers</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Coats &amp; Outerwear</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Sweatshirts</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Boots</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Shorts</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">View all</a>
                                </li>
                              </ul>
                            </div>
                            <div class="col-lg-2">
                              <a class="d-inline-flex animate-underline h6 text-dark-emphasis text-decoration-none mb-2" href="shop-catalog-fashion">
                                <span class="animate-target">Girls</span>
                              </a>
                              <ul class="nav flex-column gap-2 mt-0">
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Shirts &amp; Tops</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Dresses</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Sneakers</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Hoodies</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Sandals</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Coats &amp; Outerwear</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">View all</a>
                                </li>
                              </ul>
                            </div>
                            <div class="col-lg-2">
                              <a class="d-inline-flex animate-underline h6 text-dark-emphasis text-decoration-none mb-2" href="shop-catalog-fashion">
                                <span class="animate-target">Accessories</span>
                              </a>
                              <ul class="nav flex-column gap-2 mt-0">
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Backpacks</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Gloves</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Shoe Laces</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Scarves</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Hats</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Belts</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">View all</a>
                                </li>
                              </ul>
                            </div>
                            <div class="col-lg-2">
                              <div class="h6 mb-2">Shop by Age</div>
                              <ul class="nav flex-column gap-2 mt-0">
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Infant</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Toddler</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Little Kid</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Big Kid</a>
                                </li>
                              </ul>
                            </div>
                            <div class="col-lg-4 d-none d-lg-block" data-bs-theme="light">
                              <div class="position-relative d-flex flex-column h-100 rounded-4 overflow-hidden p-4">
                                <div class="position-relative d-flex flex-column justify-content-between h-100 z-2 pt-xl-2 ps-xl-2">
                                  <div class="h4 lh-base">Kids'<br>Spring<br>Collection</div>
                                  <div>
                                    <a class="btn btn-sm btn-dark stretched-link" href="shop-catalog-fashion.html" data-bs-theme="light">Shop now</a>
                                  </div>
                                </div>
                                <img src="assets/img/mega-menu/fashion/03.jpg" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover rtl-flip" alt="Image">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Navbar nav -->
                <ul class="navbar-nav position-relative me-xl-n5">
                  <li class="nav-item dropdown pb-lg-2 me-lg-n1 me-xl-0">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Home</a>
                    <ul class="dropdown-menu" style="--cz-dropdown-spacer: .75rem">
                      <li class="hover-effect-opacity px-2 mx-n2">
                        <a class="dropdown-item d-block mb-0" href="home-electronics">
                          <span class="fw-medium">Electronics Store</span>
                          <span class="d-block fs-xs text-body-secondary">Megamenu + Hero slider</span>
                          <div class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2" style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                            <img class="position-relative z-2 d-none-dark" src="assets/img/mega-menu/demo-preview/electronics-light.jpg" alt="Electronics Store">
                            <img class="position-relative z-2 d-none d-block-dark" src="assets/img/mega-menu/demo-preview/electronics-dark.jpg" alt="Electronics Store">
                            <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark" style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                            <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark" style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                          </div>
                        </a>
                      </li>
                      <li class="hover-effect-opacity px-2 mx-n2">
                        <a class="dropdown-item d-block mb-0" href="home-fashion-v1">
                          <span class="fw-medium">Fashion Store v.1</span>
                          <span class="d-block fs-xs text-body-secondary">Hero promo slider</span>
                          <div class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2" style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                            <img class="position-relative z-2 d-none-dark" src="assets/img/mega-menu/demo-preview/fashion-1-light.jpg" alt="Fashion Store v.1">
                            <img class="position-relative z-2 d-none d-block-dark" src="assets/img/mega-menu/demo-preview/fashion-1-dark.jpg" alt="Fashion Store v.1">
                            <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark" style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                            <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark" style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                          </div>
                        </a>
                      </li>
                      <li class="hover-effect-opacity px-2 mx-n2">
                        <a class="dropdown-item d-block mb-0" href="home-fashion-v2">
                          <span class="fw-medium">Fashion Store v.2</span>
                          <span class="d-block fs-xs text-body-secondary">Hero banner with hotspots</span>
                          <div class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2" style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                            <img class="position-relative z-2 d-none-dark" src="assets/img/mega-menu/demo-preview/fashion-2-light.jpg" alt="Fashion Store v.2">
                            <img class="position-relative z-2 d-none d-block-dark" src="assets/img/mega-menu/demo-preview/fashion-2-dark.jpg" alt="Fashion Store v.2">
                            <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark" style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                            <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark" style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                          </div>
                        </a>
                      </li>
                      <li class="hover-effect-opacity px-2 mx-n2">
                        <a class="dropdown-item d-block mb-0" href="home-furniture">
                          <span class="fw-medium">Furniture Store</span>
                          <span class="d-block fs-xs text-body-secondary">Fancy product carousel</span>
                          <div class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2" style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                            <img class="position-relative z-2 d-none-dark" src="assets/img/mega-menu/demo-preview/furniture-light.jpg" alt="Furniture Store">
                            <img class="position-relative z-2 d-none d-block-dark" src="assets/img/mega-menu/demo-preview/furniture-dark.jpg" alt="Furniture Store">
                            <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark" style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                            <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark" style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                          </div>
                        </a>
                      </li>
                      <li class="hover-effect-opacity px-2 mx-n2">
                        <a class="dropdown-item d-block mb-0" href="home-grocery">
                          <span class="fw-medium">Grocery Store</span>
                          <span class="d-block fs-xs text-body-secondary">Hero slider + Category cards</span>
                          <div class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2" style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                            <img class="position-relative z-2 d-none-dark" src="assets/img/mega-menu/demo-preview/grocery-light.jpg" alt="Grocery Store">
                            <img class="position-relative z-2 d-none d-block-dark" src="assets/img/mega-menu/demo-preview/grocery-dark.jpg" alt="Grocery Store">
                            <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark" style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                            <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark" style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown position-static pb-lg-2 me-lg-n1 me-xl-0">
                    <a class="nav-link dropdown-toggle active" aria-current="page" href="#" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Shop</a>
                    <div class="dropdown-menu p-4" style="--cz-dropdown-spacer: .75rem">
                      <div class="d-flex flex-column flex-lg-row gap-4">
                        <div style="min-width: 190px">
                          <div class="h6 mb-2">Electronics Store</div>
                          <ul class="nav flex-column gap-2 mt-0">
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-categories-electronics">Categories Page</a>
                            </li>
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics">Catalog with Side Filters</a>
                            </li>
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-general-electronics">Product General Info</a>
                            </li>
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-details-electronics">Product Details</a>
                            </li>
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-reviews-electronics">Product Reviews</a>
                            </li>
                          </ul>
                          <div class="h6 pt-4 mb-2">Fashion Store</div>
                          <ul class="nav flex-column gap-2 mt-0">
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion">Catalog with Side Filters</a>
                            </li>
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-fashion">Product Page</a>
                            </li>
                          </ul>
                          <div class="h6 pt-4 mb-2">Furniture Store</div>
                          <ul class="nav flex-column gap-2 mt-0">
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-furniture">Catalog with Top Filters</a>
                            </li>
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-furniture">Product Page</a>
                            </li>
                          </ul>
                        </div>
                        <div style="min-width: 190px">
                          <div class="h6 mb-2">Grocery Store</div>
                          <ul class="nav flex-column gap-2 mt-0">
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery">Catalog with Side Filters</a>
                            </li>
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-grocery">Product Page</a>
                            </li>
                          </ul>
                          <div class="h6 pt-4 mb-2">Checkout v.1</div>
                          <ul class="nav flex-column gap-2 mt-0">
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v1-cart">Shopping Cart</a>
                            </li>
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v1-delivery-1">Delivery Info (Step 1)</a>
                            </li>
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v1-delivery-2">Delivery Info (Step 2)</a>
                            </li>
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v1-shipping">Shipping Address</a>
                            </li>
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v1-payment">Payment</a>
                            </li>
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v1-thankyou">Thank You Page</a>
                            </li>
                          </ul>
                        </div>
                        <div style="min-width: 190px">
                          <div class="h6 mb-2">Checkout v.2</div>
                          <ul class="nav flex-column gap-2 mt-0">
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v2-cart">Shopping Cart</a>
                            </li>
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v2-delivery">Delivery Info</a>
                            </li>
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v2-pickup">Pickup from Store</a>
                            </li>
                            <li class="d-flex w-100 pt-1">
                              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v2-thankyou">Thank You Page</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item dropdown pb-lg-2 me-lg-n1 me-xl-0">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" data-bs-auto-close="outside" aria-expanded="false">Account</a>
                    <ul class="dropdown-menu" style="--cz-dropdown-spacer: .75rem">
                      <li class="dropend">
                        <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Auth Pages</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="account-signin">Sign In</a></li>
                          <li><a class="dropdown-item" href="account-signup">Sign Up</a></li>
                          <li><a class="dropdown-item" href="account-password-recovery">Password Recovery</a></li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="account-orders">Orders History</a></li>
                      <li><a class="dropdown-item" href="account-wishlist">Wishlist</a></li>
                      <li><a class="dropdown-item" href="account-payment">Payment Methods</a></li>
                      <li><a class="dropdown-item" href="account-reviews">My Reviews</a></li>
                      <li><a class="dropdown-item" href="account-info">Personal Info</a></li>
                      <li><a class="dropdown-item" href="account-addresses">Addresses</a></li>
                      <li><a class="dropdown-item" href="account-notifications">Notifications</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown pb-lg-2 me-lg-n1 me-xl-0">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" data-bs-auto-close="outside" aria-expanded="false">Pages</a>
                    <ul class="dropdown-menu" style="--cz-dropdown-spacer: .75rem">
                      <li class="dropend">
                        <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">About</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="about-v1">About v.1</a></li>
                          <li><a class="dropdown-item" href="about-v2">About v.2</a></li>
                        </ul>
                      </li>
                      <li class="dropend">
                        <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Blog</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="blog-grid-v1">Grid View v.1</a></li>
                          <li><a class="dropdown-item" href="blog-grid-v2">Grid View v.2</a></li>
                          <li><a class="dropdown-item" href="blog-list">List View</a></li>
                          <li><a class="dropdown-item" href="blog-single-v1">Single Post v.1</a></li>
                          <li><a class="dropdown-item" href="blog-single-v2">Single Post v.2</a></li>
                        </ul>
                      </li>
                      <li class="dropend">
                        <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Contact</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="contact-v1">Contact v.1</a></li>
                          <li><a class="dropdown-item" href="contact-v2">Contact v.2</a></li>
                          <li><a class="dropdown-item" href="contact-v3">Contact v.3</a></li>
                        </ul>
                      </li>
                      <li class="dropend">
                        <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Help Center</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="help-topics-v1">Help Topics v.1</a></li>
                          <li><a class="dropdown-item" href="help-topics-v2">Help Topics v.2</a></li>
                          <li><a class="dropdown-item" href="help-single-article-v1">Help Single Article v.1</a></li>
                          <li><a class="dropdown-item" href="help-single-article-v2">Help Single Article v.2</a></li>
                        </ul>
                      </li>
                      <li class="dropend">
                        <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">404 Error</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="404-electronics">404 Electronics</a></li>
                          <li><a class="dropdown-item" href="404-fashion">404 Fashion</a></li>
                          <li><a class="dropdown-item" href="404-furniture">404 Furniture</a></li>
                          <li><a class="dropdown-item" href="404-grocery">404 Grocery</a></li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="terms-and-conditions">Terms &amp; Conditions</a></li>
                    </ul>
                  </li>
                  <li class="nav-item pb-lg-2 me-lg-n2 me-xl-0">
                    <a class="nav-link" href="docs/installation">Docs</a>
                  </li>
                  <li class="nav-item pb-lg-2 me-lg-n2 me-xl-0">
                    <a class="nav-link" href="docs/typography">Components</a>
                  </li>
                </ul>

                <!-- Search toggle visible on screens > 991px wide (lg breakpoint) -->
                <button type="button" class="btn btn-outline-secondary justify-content-start w-100 px-3 mb-lg-2 ms-3 d-none d-lg-inline-flex" style="max-width: 240px" data-bs-toggle="offcanvas" data-bs-target="#searchBox" aria-controls="searchBox">
                  <i class="ci-search fs-base ms-n1 me-2"></i>
                  <span class="text-body-tertiary fw-normal">Search</span>
                </button>
              </div>
            </div>
          </div>

          <!-- Account and Wishlist buttons visible on screens < 768px wide (md breakpoint) -->
          <div class="offcanvas-header border-top px-0 py-3 mt-3 d-md-none">
            <div class="nav nav-justified w-100">
              <a class="nav-link border-end" href="account-signin">
                <i class="ci-user fs-lg opacity-60 me-2"></i>
                Account
              </a>
              <a class="nav-link" href="#!">
                <i class="ci-heart fs-lg opacity-60 me-2"></i>
                Wishlist
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>


    <!-- Page content -->
    <main class="content-wrapper">

      <!-- Breadcrumb -->
      <nav class="container pt-2 pt-xxl-3 my-3 my-md-4" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home-fashion-v1">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Catalog with sidebar filters</li>
        </ol>
      </nav>


      <!-- Page title -->
      <h1 class="h3 container pb-3 pb-lg-4">Shop catalog</h1>


      <!-- Products grid + Sidebar with filters -->
      <section class="container">
        <div class="row">

          <!-- Filter sidebar that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
          <aside class="col-lg-3">
            <div class="offcanvas-lg offcanvas-start pe-lg-4" id="filterSidebar">
              <div class="offcanvas-header py-3">
                <h5 class="offcanvas-title">Filter products</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#filterSidebar" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body flex-column pt-2 py-lg-0">

                <!-- Selected filters + Sorting -->
                <div class="pb-4 mb-2 mb-xl-3">
                  <div class="d-flex align-items-center justify-content-between mb-3">
                    <h4 class="h6 mb-0">Filter</h4>
                    <button type="button" class="btn btn-sm btn-secondary bg-transparent border-0 text-decoration-underline p-0 ms-2">
                      Clear all
                    </button>
                  </div>
                  <div class="d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-sm btn-secondary">
                      <i class="ci-close fs-sm ms-n1 me-1"></i>
                      Sale
                    </button>
                    <button type="button" class="btn btn-sm btn-secondary">
                      <i class="ci-close fs-sm ms-n1 me-1"></i>
                      Adidas
                    </button>
                    <button type="button" class="btn btn-sm btn-secondary">
                      <i class="ci-close fs-sm ms-n1 me-1"></i>
                      Bilabong
                    </button>
                    <button type="button" class="btn btn-sm btn-secondary">
                      <i class="ci-close fs-sm ms-n1 me-1"></i>
                      Size: XXS
                    </button>
                    <button type="button" class="btn btn-sm btn-secondary">
                      <i class="ci-close fs-sm ms-n1 me-1"></i>
                      $40 - $150
                    </button>
                  </div>
                </div>

                <div class="accordion">

                  <!-- Categories -->
                  <div class="accordion-item border-0 pb-1 pb-xl-2">
                    <h4 class="accordion-header" id="headingCategories">
                      <button type="button" class="accordion-button p-0 pb-3" data-bs-toggle="collapse" data-bs-target="#categories" aria-expanded="true" aria-controls="categories">
                        Categories
                      </button>
                    </h4>
                    <div class="accordion-collapse collapse show" id="categories" aria-labelledby="headingCategories">
                      <div class="accordion-body p-0 pb-4 mb-1 mb-xl-2">
                        <div style="height: 220px" data-simplebar data-simplebar-auto-hide="false">
                          <ul class="nav flex-column gap-2 pe-3">
                            <li class="nav-item mb-1">
                              <a class="nav-link d-block fw-normal p-0" href="#!">
                                Blazers &amp; Suits<span class="fs-xs text-body-secondary ms-1">(235)</span>
                              </a>
                            </li>
                            <li class="nav-item mb-1">
                              <a class="nav-link d-block fw-normal p-0" href="#!">
                                Blouses<span class="fs-xs text-body-secondary ms-1">(235)</span>
                              </a>
                            </li>
                            <li class="nav-item mb-1">
                              <a class="nav-link d-block fw-normal p-0" href="#!">
                                Cardigans &amp; Jumpers<span class="fs-xs text-body-secondary ms-1">(107)</span>
                              </a>
                            </li>
                            <li class="nav-item mb-1">
                              <a class="nav-link d-block fw-normal p-0" href="#!">
                                Dresses<span class="fs-xs text-body-secondary ms-1">(93)</span>
                              </a>
                            </li>
                            <li class="nav-item mb-1">
                              <a class="nav-link d-block fw-normal p-0" href="#!">
                                Hoodie &amp; Sweatshirts<span class="fs-xs text-body-secondary ms-1">(122)</span>
                              </a>
                            </li>
                            <li class="nav-item mb-1">
                              <a class="nav-link d-block fw-normal p-0" href="#!">
                                Jackets &amp; Coats<span class="fs-xs text-body-secondary ms-1">(116)</span>
                              </a>
                            </li>
                            <li class="nav-item mb-1">
                              <a class="nav-link d-block fw-normal p-0" href="#!">
                                Jeans<span class="fs-xs text-body-secondary ms-1">(215)</span>
                              </a>
                            </li>
                            <li class="nav-item mb-1">
                              <a class="nav-link d-block fw-normal p-0" href="#!">
                                Lingerie<span class="fs-xs text-body-secondary ms-1">(150)</span>
                              </a>
                            </li>
                            <li class="nav-item mb-1">
                              <a class="nav-link d-block fw-normal p-0" href="#!">
                                Maternity Wear<span class="fs-xs text-body-secondary ms-1">(8)</span>
                              </a>
                            </li>
                            <li class="nav-item mb-1">
                              <a class="nav-link d-block fw-normal p-0" href="#!">
                                Nightwear<span class="fs-xs text-body-secondary ms-1">(26)</span>
                              </a>
                            </li>
                            <li class="nav-item mb-1">
                              <a class="nav-link d-block fw-normal p-0" href="#!">
                                Shirts &amp; Tops<span class="fs-xs text-body-secondary ms-1">(164)</span>
                              </a>
                            </li>
                            <li class="nav-item mb-1">
                              <a class="nav-link d-block fw-normal p-0" href="#!">
                                Shorts<span class="fs-xs text-body-secondary ms-1">(147)</span>
                              </a>
                            </li>
                            <li class="nav-item mb-1">
                              <a class="nav-link d-block fw-normal p-0" href="#!">
                                Socks &amp; Tights<span class="fs-xs text-body-secondary ms-1">(139)</span>
                              </a>
                            </li>
                            <li class="nav-item mb-1">
                              <a class="nav-link d-block fw-normal p-0" href="#!">
                                Sportswear<span class="fs-xs text-body-secondary ms-1">(65)</span>
                              </a>
                            </li>
                            <li class="nav-item mb-1">
                              <a class="nav-link d-block fw-normal p-0" href="#!">
                                Swimwear<span class="fs-xs text-body-secondary ms-1">(18)</span>
                              </a>
                            </li>
                            <li class="nav-item mb-1">
                              <a class="nav-link d-block fw-normal p-0" href="#!">
                                T-shirts &amp; Vests<span class="fs-xs text-body-secondary ms-1">(209)</span>
                              </a>
                            </li>
                            <li class="nav-item mb-1">
                              <a class="nav-link d-block fw-normal p-0" href="#!">
                                Trousers<span class="fs-xs text-body-secondary ms-1">(105)</span>
                              </a>
                            </li>
                            <li class="nav-item mb-1">
                              <a class="nav-link d-block fw-normal p-0" href="#!">
                                Underwear<span class="fs-xs text-body-secondary ms-1">(87)</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Price -->
                  <div class="accordion-item border-0 pb-1 pb-xl-2">
                    <h4 class="accordion-header" id="headingPrice">
                      <button type="button" class="accordion-button p-0 pb-3" data-bs-toggle="collapse" data-bs-target="#price" aria-expanded="true" aria-controls="price">
                        Price
                      </button>
                    </h4>
                    <div class="accordion-collapse collapse show" id="price" aria-labelledby="headingPrice">
                      <div class="accordion-body p-0 pb-4 mb-1 mb-xl-2">
                        <div class="range-slider" data-range-slider='{"startMin": 40, "startMax": 150, "min": 0, "max": 200, "step": 1, "tooltipPrefix": "$"}' aria-labelledby="headingPrice">
                          <div class="range-slider-ui"></div>
                          <div class="d-flex align-items-center">
                            <div class="position-relative w-50">
                              <i class="ci-dollar-sign position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                              <input type="number" class="form-control form-icon-start" min="0" data-range-slider-min>
                            </div>
                            <i class="ci-minus text-body-emphasis mx-2"></i>
                            <div class="position-relative w-50">
                              <i class="ci-dollar-sign position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                              <input type="number" class="form-control form-icon-start" min="0"  data-range-slider-max>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Brands -->
                  <div class="accordion-item border-0 pb-1 pb-xl-2">
                    <h4 class="accordion-header" id="headingBrands">
                      <button type="button" class="accordion-button p-0 pb-3" data-bs-toggle="collapse" data-bs-target="#brands" aria-expanded="true" aria-controls="brands">
                        Brands
                      </button>
                    </h4>
                    <div class="accordion-collapse collapse show" id="brands" aria-labelledby="headingBrands">
                      <div class="accordion-body p-0 pb-4 mb-1 mb-xl-2" data-filter-list='{"searchClass": "brands-search", "listClass": "brands-list", "valueNames": ["form-check-label"]}'>
                        <div class="position-relative mb-3">
                          <i class="ci-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                          <input type="search" class="brands-search form-control form-icon-start" placeholder="Search">
                        </div>
                        <div style="height: 210px" data-simplebar data-simplebar-auto-hide="false">
                          <div class="brands-list d-flex flex-column gap-2">
                            <div class="form-check mb-0">
                              <input type="checkbox" class="form-check-input" id="adidas" checked>
                              <label for="adidas" class="form-check-label text-body-emphasis">
                                Adidas<span class="fs-xs text-body-secondary ms-1">(425)</span>
                              </label>
                            </div>
                            <div class="form-check mb-0">
                              <input type="checkbox" class="form-check-input" id="taylor">
                              <label for="taylor" class="form-check-label text-body-emphasis">
                                Ann Taylor<span class="fs-xs text-body-secondary ms-1">(15)</span>
                              </label>
                            </div>
                            <div class="form-check mb-0">
                              <input type="checkbox" class="form-check-input" id="armani">
                              <label for="armani" class="form-check-label text-body-emphasis">
                                Armani<span class="fs-xs text-body-secondary ms-1">(18)</span>
                              </label>
                            </div>
                            <div class="form-check mb-0">
                              <input type="checkbox" class="form-check-input" id="banana">
                              <label for="banana" class="form-check-label text-body-emphasis">
                                Banana Republic<span class="fs-xs text-body-secondary ms-1">(103)</span>
                              </label>
                            </div>
                            <div class="form-check mb-0">
                              <input type="checkbox" class="form-check-input" id="bilabong" checked>
                              <label for="bilabong" class="form-check-label text-body-emphasis">
                                Bilabong<span class="fs-xs text-body-secondary ms-1">(27)</span>
                              </label>
                            </div>
                            <div class="form-check mb-0">
                              <input type="checkbox" class="form-check-input" id="birkenstock">
                              <label for="birkenstock" class="form-check-label text-body-emphasis">
                                Birkenstock<span class="fs-xs text-body-secondary ms-1">(10)</span>
                              </label>
                            </div>
                            <div class="form-check mb-0">
                              <input type="checkbox" class="form-check-input" id="klein">
                              <label for="klein" class="form-check-label text-body-emphasis">
                                Calvin Klein<span class="fs-xs text-body-secondary ms-1">(365)</span>
                              </label>
                            </div>
                            <div class="form-check mb-0">
                              <input type="checkbox" class="form-check-input" id="columbia">
                              <label for="columbia" class="form-check-label text-body-emphasis">
                                Columbia<span class="fs-xs text-body-secondary ms-1">(508)</span>
                              </label>
                            </div>
                            <div class="form-check mb-0">
                              <input type="checkbox" class="form-check-input" id="converse">
                              <label for="converse" class="form-check-label text-body-emphasis">
                                Converse<span class="fs-xs text-body-secondary ms-1">(176)</span>
                              </label>
                            </div>
                            <div class="form-check mb-0">
                              <input type="checkbox" class="form-check-input" id="dockers">
                              <label for="dockers" class="form-check-label text-body-emphasis">
                                Dockers<span class="fs-xs text-body-secondary ms-1">(54)</span>
                              </label>
                            </div>
                            <div class="form-check mb-0">
                              <input type="checkbox" class="form-check-input" id="fruit">
                              <label for="fruit" class="form-check-label text-body-emphasis">
                                Fruit of the Loom<span class="fs-xs text-body-secondary ms-1">(739)</span>
                              </label>
                            </div>
                            <div class="form-check mb-0">
                              <input type="checkbox" class="form-check-input" id="hanes">
                              <label for="hanes" class="form-check-label text-body-emphasis">
                                Hanes<span class="fs-xs text-body-secondary ms-1">(92)</span>
                              </label>
                            </div>
                            <div class="form-check mb-0">
                              <input type="checkbox" class="form-check-input" id="choo">
                              <label for="choo" class="form-check-label text-body-emphasis">
                                Jimmy Choo<span class="fs-xs text-body-secondary ms-1">(17)</span>
                              </label>
                            </div>
                            <div class="form-check mb-0">
                              <input type="checkbox" class="form-check-input" id="levis">
                              <label for="levis" class="form-check-label text-body-emphasis">
                                Levi's<span class="fs-xs text-body-secondary ms-1">(361)</span>
                              </label>
                            </div>
                            <div class="form-check mb-0">
                              <input type="checkbox" class="form-check-input" id="wearhouse">
                              <label for="wearhouse" class="form-check-label text-body-emphasis">
                                Men's Wearhouse<span class="fs-xs text-body-secondary ms-1">(75)</span>
                              </label>
                            </div>
                            <div class="form-check mb-0">
                              <input type="checkbox" class="form-check-input" id="newbalance">
                              <label for="newbalance" class="form-check-label text-body-emphasis">
                                New Balance<span class="fs-xs text-body-secondary ms-1">(218)</span>
                              </label>
                            </div>
                            <div class="form-check mb-0">
                              <input type="checkbox" class="form-check-input" id="nike">
                              <label for="nike" class="form-check-label text-body-emphasis">
                                Nike<span class="fs-xs text-body-secondary ms-1">(810)</span>
                              </label>
                            </div>
                            <div class="form-check mb-0">
                              <input type="checkbox" class="form-check-input" id="navy">
                              <label for="navy" class="form-check-label text-body-emphasis">
                                Old Navy<span class="fs-xs text-body-secondary ms-1">(147)</span>
                              </label>
                            </div>
                            <div class="form-check mb-0">
                              <input type="checkbox" class="form-check-input" id="puma">
                              <label for="puma" class="form-check-label text-body-emphasis">
                                Puma<span class="fs-xs text-body-secondary ms-1">(370)</span>
                              </label>
                            </div>
                            <div class="form-check mb-0">
                              <input type="checkbox" class="form-check-input" id="skechers">
                              <label for="skechers" class="form-check-label text-body-emphasis">
                                Skechers<span class="fs-xs text-body-secondary ms-1">(209)</span>
                              </label>
                            </div>
                            <div class="form-check mb-0">
                              <input type="checkbox" class="form-check-input" id="hilfiger">
                              <label for="hilfiger" class="form-check-label text-body-emphasis">
                                Tommy Hilfiger<span class="fs-xs text-body-secondary ms-1">(487)</span>
                              </label>
                            </div>
                            <div class="form-check mb-0">
                              <input type="checkbox" class="form-check-input" id="armour">
                              <label for="armour" class="form-check-label text-body-emphasis">
                                Under Armour<span class="fs-xs text-body-secondary ms-1">(90)</span>
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Size -->
                  <div class="accordion-item border-0 pb-1 pb-xl-2">
                    <h4 class="accordion-header" id="headingSize">
                      <button type="button" class="accordion-button p-0 pb-3" data-bs-toggle="collapse" data-bs-target="#size" aria-expanded="true" aria-controls="size">
                        Size
                      </button>
                    </h4>
                    <div class="accordion-collapse collapse show" id="size" aria-labelledby="headingSize">
                      <div class="accordion-body p-0 pb-4 mb-1 mb-xl-2">
                        <div class="d-flex flex-wrap gap-2">
                          <input type="checkbox" class="btn-check" id="size-xxs" checked>
                          <label for="size-xxs" class="btn btn-sm btn-outline-secondary">XXS</label>
                          <input type="checkbox" class="btn-check" id="size-xs">
                          <label for="size-xs" class="btn btn-sm btn-outline-secondary">XS</label>
                          <input type="checkbox" class="btn-check" id="size-s">
                          <label for="size-s" class="btn btn-sm btn-outline-secondary">S</label>
                          <input type="checkbox" class="btn-check" id="size-m">
                          <label for="size-m" class="btn btn-sm btn-outline-secondary">M</label>
                          <input type="checkbox" class="btn-check" id="size-l">
                          <label for="size-l" class="btn btn-sm btn-outline-secondary">L</label>
                          <input type="checkbox" class="btn-check" id="size-xl">
                          <label for="size-xl" class="btn btn-sm btn-outline-secondary"><span class="mx-n1">XL</span></label>
                          <input type="checkbox" class="btn-check" id="size-2xl">
                          <label for="size-2xl" class="btn btn-sm btn-outline-secondary">2XL</label>
                          <input type="checkbox" class="btn-check" id="size-40">
                          <label for="size-40" class="btn btn-sm btn-outline-secondary">40</label>
                          <input type="checkbox" class="btn-check" id="size-42">
                          <label for="size-42" class="btn btn-sm btn-outline-secondary">42</label>
                          <input type="checkbox" class="btn-check" id="size-44">
                          <label for="size-44" class="btn btn-sm btn-outline-secondary">44</label>
                          <input type="checkbox" class="btn-check" id="size-45">
                          <label for="size-45" class="btn btn-sm btn-outline-secondary">45</label>
                          <input type="checkbox" class="btn-check" id="size-46">
                          <label for="size-46" class="btn btn-sm btn-outline-secondary">46</label>
                          <input type="checkbox" class="btn-check" id="size-48">
                          <label for="size-48" class="btn btn-sm btn-outline-secondary">48</label>
                          <input type="checkbox" class="btn-check" id="size-50">
                          <label for="size-50" class="btn btn-sm btn-outline-secondary">50</label>
                          <input type="checkbox" class="btn-check" id="size-52">
                          <label for="size-52" class="btn btn-sm btn-outline-secondary">52</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Color -->
                  <div class="accordion-item border-0 pb-1 pb-xl-2">
                    <h4 class="accordion-header" id="headingColor">
                      <button type="button" class="accordion-button p-0 pb-3" data-bs-toggle="collapse" data-bs-target="#color" aria-expanded="true" aria-controls="color">
                        Color
                      </button>
                    </h4>
                    <div class="accordion-collapse collapse show" id="color" aria-labelledby="headingColor">
                      <div class="accordion-body p-0 pb-4 mb-1 mb-xl-2">
                        <div class="d-flex flex-column gap-2">
                          <div class="d-flex align-items-center mb-1">
                            <input type="checkbox" class="btn-check" id="green">
                            <label for="green" class="btn btn-color fs-xl" style="color: #8bc4ab"></label>
                            <label for="green" class="fs-sm ms-2">Green</label>
                          </div>
                          <div class="d-flex align-items-center mb-1">
                            <input type="checkbox" class="btn-check" id="red">
                            <label for="red" class="btn btn-color fs-xl" style="color: #ee7976"></label>
                            <label for="red" class="fs-sm ms-2">Coral red</label>
                          </div>
                          <div class="d-flex align-items-center mb-1">
                            <input type="checkbox" class="btn-check" id="pink">
                            <label for="pink" class="btn btn-color fs-xl" style="color: #df8fbf"></label>
                            <label for="pink" class="fs-sm ms-2">Pink</label>
                          </div>
                          <div class="d-flex align-items-center mb-1">
                            <input type="checkbox" class="btn-check" id="blue">
                            <label for="blue" class="btn btn-color fs-xl" style="color: #9acbf1"></label>
                            <label for="blue" class="fs-sm ms-2">Sky blue</label>
                          </div>
                          <div class="d-flex align-items-center mb-1">
                            <input type="checkbox" class="btn-check" id="black">
                            <label for="black" class="btn btn-color fs-xl" style="color: #364254"></label>
                            <label for="black" class="fs-sm ms-2">Black</label>
                          </div>
                          <div class="d-flex align-items-center mb-1">
                            <input type="checkbox" class="btn-check" id="white">
                            <label for="white" class="btn btn-color fs-xl" style="color: #e0e5eb"></label>
                            <label for="white" class="fs-sm ms-2">White</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Status -->
                  <div class="accordion-item border-0">
                    <h4 class="accordion-header" id="headingStatus">
                      <button type="button" class="accordion-button p-0 pb-3" data-bs-toggle="collapse" data-bs-target="#status" aria-expanded="true" aria-controls="status">
                        Status
                      </button>
                    </h4>
                    <div class="accordion-collapse collapse show" id="status" aria-labelledby="headingStatus">
                      <div class="accordion-body p-0 pb-2 pb-lg-0">
                        <div class="d-flex flex-column gap-2">
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="instock">
                            <label for="instock" class="form-check-label text-body-emphasis">In stock</label>
                          </div>
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="sale" checked>
                            <label for="sale" class="form-check-label text-body-emphasis">% Sale</label>
                          </div>
                          <div class="form-check mb-0">
                            <input type="checkbox" class="form-check-input" id="delivery">
                            <label for="delivery" class="form-check-label text-body-emphasis">Free delivery</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </aside>


          <!-- Product grid -->
          <div class="col-lg-9">

            <!-- Sorting -->
            <div class="d-sm-flex align-items-center justify-content-between mt-n2 mb-3 mb-sm-4">
              <div class="fs-sm text-body-emphasis text-nowrap">Found <span class="fw-semibold">32</span> items</div>
              <div class="d-flex align-items-center text-nowrap">
                <label class="form-label fw-semibold mb-0 me-2">Sort by:</label>
                <div style="width: 190px">
                  <select class="form-select border-0 rounded-0 px-1" data-select='{
                    "removeItemButton": false,
                    "classNames": {
                      "containerInner": "form-select border-0 rounded-0 px-1"
                    }
                  }'>
                    <option value="Relevance">Relevance</option>
                    <option value="Popularity">Popularity</option>
                    <option value="Price: Low to High">Price: Low to High</option>
                    <option value="Price: High to Low">Price: High to Low</option>
                    <option value="Newest Arrivals">Newest Arrivals</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="row gy-4 gy-md-5 pb-4 pb-md-5">

              <!-- Item -->
              <div class="col-6 col-md-4 mb-2 mb-sm-3 mb-md-0">
                <div class="animate-underline hover-effect-opacity">
                  <div class="position-relative mb-3">
                    <span class="badge text-bg-danger position-absolute top-0 start-0 z-2 mt-2 mt-sm-3 ms-2 ms-sm-3">Sale</span>
                    <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                      <i class="ci-heart animate-target"></i>
                    </button>
                    <a class="d-flex bg-body-tertiary rounded p-3" href="shop-product-fashion">
                      <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                        <img src="assets/img/shop/fashion/01.png" alt="Image">
                      </div>
                    </a>
                    <div class="hover-effect-target position-absolute start-0 bottom-0 w-100 z-2 opacity-0 pb-2 pb-sm-3 px-2 px-sm-3">
                      <div class="d-flex align-items-center justify-content-center gap-2 gap-xl-3 bg-body rounded-2 p-2">
                        <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">XS</span>
                        <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">S</span>
                        <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">M</span>
                        <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">L</span>
                        <div class="nav">
                          <a class="nav-link fs-xs text-body-tertiary py-1 px-2" href="shop-product-fashion">+3</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="nav mb-2">
                    <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="shop-product-fashion">
                      <span class="text-truncate">Denim midi skirt with pockets</span>
                    </a>
                  </div>
                  <div class="h6 mb-2">$126.50 <del class="fs-sm fw-normal text-body-tertiary">$156.00</del></div>
                  <div class="position-relative">
                    <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+1 color</div>
                    <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                      <input type="radio" class="btn-check" name="colors-1" id="color-1-1" checked>
                      <label for="color-1-1" class="btn btn-color fs-base" style="color: #284971">
                        <span class="visually-hidden">Dark denim</span>
                      </label>
                      <input type="radio" class="btn-check" name="colors-1" id="color-1-2">
                      <label for="color-1-2" class="btn btn-color fs-base" style="color: #8b9bc4">
                        <span class="visually-hidden">Light denim</span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="col-6 col-md-4 mb-2 mb-sm-3 mb-md-0">
                <div class="animate-underline hover-effect-opacity">
                  <div class="position-relative mb-3">
                    <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                      <i class="ci-heart animate-target"></i>
                    </button>
                    <a class="d-flex bg-body-tertiary rounded p-3" href="shop-product-fashion">
                      <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                        <img src="assets/img/shop/fashion/02.png" alt="Image">
                      </div>
                    </a>
                    <div class="hover-effect-target position-absolute start-0 bottom-0 w-100 z-2 opacity-0 pb-2 pb-sm-3 px-2 px-sm-3">
                      <div class="d-flex align-items-center justify-content-center gap-2 gap-xl-3 bg-body rounded-2 p-2">
                        <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">S</span>
                        <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">M</span>
                        <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">L</span>
                        <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">XL</span>
                        <div class="nav">
                          <a class="nav-link fs-xs text-body-tertiary py-1 px-2" href="shop-product-fashion">+1</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="nav mb-2">
                    <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="shop-product-fashion">
                      <span class="text-truncate">Cotton lace blouse with necklace</span>
                    </a>
                  </div>
                  <div class="h6 mb-2">$54.00</div>
                  <div class="position-relative">
                    <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+2 colors</div>
                    <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                      <input type="radio" class="btn-check" name="colors-2" id="color-2-1" checked>
                      <label for="color-2-1" class="btn btn-color fs-base" style="color: #dcb1b1">
                        <span class="visually-hidden">Pink</span>
                      </label>
                      <input type="radio" class="btn-check" name="colors-2" id="color-2-2">
                      <label for="color-2-2" class="btn btn-color fs-base" style="color: #ced6f0">
                        <span class="visually-hidden">Blue</span>
                      </label>
                      <input type="radio" class="btn-check" name="colors-2" id="color-2-3">
                      <label for="color-2-3" class="btn btn-color fs-base" style="color: #e1e0cf">
                        <span class="visually-hidden">Mustard</span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="col-6 col-md-4 mb-2 mb-sm-3 mb-md-0">
                <div class="animate-underline hover-effect-opacity">
                  <div class="position-relative mb-3">
                    <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                      <i class="ci-heart animate-target"></i>
                    </button>
                    <a class="d-flex bg-body-tertiary rounded p-3" href="shop-product-fashion">
                      <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                        <img src="assets/img/shop/fashion/03.png" alt="Image">
                      </div>
                    </a>
                    <div class="hover-effect-target position-absolute start-0 bottom-0 w-100 z-2 opacity-0 pb-2 pb-sm-3 px-2 px-sm-3">
                      <div class="d-flex align-items-center justify-content-center gap-2 gap-xl-3 bg-body rounded-2 p-2">
                        <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">6</span>
                        <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">6.5</span>
                        <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">7</span>
                        <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">7.5</span>
                        <div class="nav">
                          <a class="nav-link fs-xs text-body-tertiary py-1 px-2" href="shop-product-fashion">+4</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="nav mb-2">
                    <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="shop-product-fashion">
                      <span class="text-truncate">Sneakers with a massive sole</span>
                    </a>
                  </div>
                  <div class="h6 mb-2">$86.50</div>
                  <div class="position-relative">
                    <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+1 color</div>
                    <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                      <input type="radio" class="btn-check" name="colors-3" id="color-3-1" checked>
                      <label for="color-3-1" class="btn btn-color fs-base" style="color: #e0e5eb">
                        <span class="visually-hidden">White</span>
                      </label>
                      <input type="radio" class="btn-check" name="colors-3" id="color-3-2">
                      <label for="color-3-2" class="btn btn-color fs-base" style="color: #364254">
                        <span class="visually-hidden">Black</span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="col-6 col-md-4 mb-2 mb-sm-3 mb-md-0">
                <div class="animate-underline hover-effect-opacity">
                  <div class="position-relative mb-3">
                    <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                      <i class="ci-heart animate-target"></i>
                    </button>
                    <a class="d-flex bg-body-tertiary rounded p-3" href="shop-product-fashion">
                      <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                        <img src="assets/img/shop/fashion/04.png" alt="Image">
                      </div>
                    </a>
                  </div>
                  <div class="nav mb-2">
                    <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="shop-product-fashion">
                      <span class="text-truncate">Knitted bag with a wooden handle</span>
                    </a>
                  </div>
                  <div class="h6 mb-2">$105.00</div>
                  <div class="position-relative">
                    <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+1 color</div>
                    <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                      <input type="radio" class="btn-check" name="colors-4" id="color-4-1" checked>
                      <label for="color-4-1" class="btn btn-color fs-base" style="color: #e7ddb4">
                        <span class="visually-hidden">Beige</span>
                      </label>
                      <input type="radio" class="btn-check" name="colors-4" id="color-4-2">
                      <label for="color-4-2" class="btn btn-color fs-base" style="color: #8b9bc4">
                        <span class="visually-hidden">Blue</span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="col-6 col-md-4 mb-2 mb-sm-3 mb-md-0">
                <div class="animate-underline hover-effect-opacity">
                  <div class="position-relative mb-3">
                    <span class="badge text-bg-danger position-absolute top-0 start-0 z-2 mt-2 mt-sm-3 ms-2 ms-sm-3">-17%</span>
                    <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                      <i class="ci-heart animate-target"></i>
                    </button>
                    <a class="d-flex bg-body-tertiary rounded p-3" href="shop-product-fashion">
                      <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                        <img src="assets/img/shop/fashion/05.png" alt="Image">
                      </div>
                    </a>
                  </div>
                  <div class="nav mb-2">
                    <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="shop-product-fashion">
                      <span class="text-truncate">Polarized sunglasses for men</span>
                    </a>
                  </div>
                  <div class="h6 mb-2">$96.00 <del class="fs-sm fw-normal text-body-tertiary">$112.00</del></div>
                  <div class="position-relative">
                    <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+2 colors</div>
                    <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                      <input type="radio" class="btn-check" name="colors-5" id="color-5-1" checked>
                      <label for="color-5-1" class="btn btn-color fs-base" style="color: #8cc4ac">
                        <span class="visually-hidden">Green</span>
                      </label>
                      <input type="radio" class="btn-check" name="colors-5" id="color-5-2">
                      <label for="color-5-2" class="btn btn-color fs-base" style="color: #8cb7c4">
                        <span class="visually-hidden">Blue</span>
                      </label>
                      <input type="radio" class="btn-check" name="colors-5" id="color-5-3">
                      <label for="color-5-3" class="btn btn-color fs-base" style="color: #ccb782">
                        <span class="visually-hidden">Brown</span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="col-6 col-md-4 mb-2 mb-sm-3 mb-md-0">
                <div class="animate-underline hover-effect-opacity">
                  <div class="position-relative mb-3">
                    <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                      <i class="ci-heart animate-target"></i>
                    </button>
                    <a class="d-flex bg-body-tertiary rounded p-3" href="shop-product-fashion">
                      <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                        <img src="assets/img/shop/fashion/06.png" alt="Image">
                      </div>
                    </a>
                    <div class="hover-effect-target position-absolute start-0 bottom-0 w-100 z-2 opacity-0 pb-2 pb-sm-3 px-2 px-sm-3">
                      <div class="d-flex align-items-center justify-content-center gap-2 gap-xl-3 bg-body rounded-2 p-2">
                        <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">M</span>
                        <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">L</span>
                        <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">XL</span>
                      </div>
                    </div>
                  </div>
                  <div class="nav mb-2">
                    <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="shop-product-fashion">
                      <span class="text-truncate">Classic cotton men's shirt</span>
                    </a>
                  </div>
                  <div class="h6 mb-2">$27.00</div>
                  <div class="position-relative">
                    <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+3 colors</div>
                    <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                      <input type="radio" class="btn-check" name="colors-6" id="color-6-1" checked>
                      <label for="color-6-1" class="btn btn-color fs-base" style="color: #c1cde7">
                        <span class="visually-hidden">Blue</span>
                      </label>
                      <input type="radio" class="btn-check" name="colors-6" id="color-6-2">
                      <label for="color-6-2" class="btn btn-color fs-base" style="color: #526f99">
                        <span class="visually-hidden">Dark blue</span>
                      </label>
                      <input type="radio" class="btn-check" name="colors-6" id="color-6-3">
                      <label for="color-6-3" class="btn btn-color fs-base" style="color: #e0e5eb">
                        <span class="visually-hidden">White</span>
                      </label>
                      <input type="radio" class="btn-check" name="colors-6" id="color-6-4">
                      <label for="color-6-4" class="btn btn-color fs-base" style="color: #364254">
                        <span class="visually-hidden">Black</span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Banner -->
              <div class="col-12 col-md-8 mb-2 mb-sm-3 mb-md-0">
                <div class="position-relative bg-body-tertiary text-center rounded-4 p-4 p-sm-5 py-md-4 py-xl-5">
                  <p class="fs-xs text-body-secondary mb-1">Sweatshirts</p>
                  <h2 class="h4 mb-4">Colors for your mood</h2>
                  <div class="swiper user-select-none mb-4" data-swiper='{
                    "allowTouchMove": false,
                    "loop": true,
                    "effect": "fade",
                    "autoplay": {
                      "delay": 1500,
                      "disableOnInteraction": false
                    }
                  }' style="max-width: 342px">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="ratio" style="--cz-aspect-ratio: calc(230 / 342 * 100%)">
                          <img src="assets/img/shop/fashion/banner01.png" alt="Image">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="ratio" style="--cz-aspect-ratio: calc(230 / 342 * 100%)">
                          <img src="assets/img/shop/fashion/banner02.png" alt="Image">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="ratio" style="--cz-aspect-ratio: calc(230 / 342 * 100%)">
                          <img src="assets/img/shop/fashion/banner03.png" alt="Image">
                        </div>
                      </div>
                    </div>
                  </div>
                  <a class="btn btn-sm btn-dark stretched-link" href="shop-product-fashion">Shop now</a>
                </div>
              </div>

              <!-- Item -->
              <div class="col-6 col-md-4 mb-2 mb-sm-3 mb-md-0">
                <div class="animate-underline hover-effect-opacity">
                  <div class="position-relative mb-3">
                    <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                      <i class="ci-heart animate-target"></i>
                    </button>
                    <a class="d-flex bg-body-tertiary rounded p-3" href="shop-product-fashion">
                      <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                        <img src="assets/img/shop/fashion/07.png" alt="Image">
                      </div>
                    </a>
                    <div class="hover-effect-target position-absolute start-0 bottom-0 w-100 z-2 opacity-0 pb-2 pb-sm-3 px-2 px-sm-3">
                      <div class="d-flex align-items-center justify-content-center gap-2 gap-xl-3 bg-body rounded-2 p-2">
                        <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">6</span>
                        <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">6.5</span>
                        <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">7</span>
                        <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">7.5</span>
                        <div class="nav">
                          <a class="nav-link fs-xs text-body-tertiary py-1 px-2" href="shop-product-fashion">+4</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="nav mb-2">
                    <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="shop-product-fashion">
                      <span class="text-truncate">Black massive women's boots</span>
                    </a>
                  </div>
                  <div class="h6 mb-2">$160.00</div>
                  <div class="position-relative">
                    <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+1 color</div>
                    <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                      <input type="radio" class="btn-check" name="colors-7" id="color-7-1" checked>
                      <label for="color-7-1" class="btn btn-color fs-base" style="color: #364254">
                        <span class="visually-hidden">Black</span>
                      </label>
                      <input type="radio" class="btn-check" name="colors-7" id="color-7-2">
                      <label for="color-7-2" class="btn btn-color fs-base" style="color: #e0e5eb">
                        <span class="visually-hidden">White</span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="col-6 col-md-4 mb-2 mb-sm-3 mb-md-0">
                <div class="animate-underline hover-effect-opacity">
                  <div class="position-relative mb-3">
                    <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                      <i class="ci-heart animate-target"></i>
                    </button>
                    <a class="d-flex bg-body-tertiary rounded p-3" href="shop-product-fashion">
                      <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                        <img src="assets/img/shop/fashion/08.png" alt="Image">
                      </div>
                    </a>
                    <div class="hover-effect-target position-absolute start-0 bottom-0 w-100 z-2 opacity-0 pb-2 pb-sm-3 px-2 px-sm-3">
                      <div class="d-flex align-items-center justify-content-center gap-2 gap-xl-3 bg-body rounded-2 p-2">
                        <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">6.5</span>
                        <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">7</span>
                        <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">7.5</span>
                        <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">8</span>
                        <div class="nav">
                          <a class="nav-link fs-xs text-body-tertiary py-1 px-2" href="shop-product-fashion">+3</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="nav mb-2">
                    <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="shop-product-fashion">
                      <span class="text-truncate">Leather sneakers with golden laces</span>
                    </a>
                  </div>
                  <div class="h6 mb-2">$74.00</div>
                  <div class="position-relative">
                    <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+2 colors</div>
                    <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                      <input type="radio" class="btn-check" name="colors-8" id="color-8-1" checked>
                      <label for="color-8-1" class="btn btn-color fs-base" style="color: #b1aa9b">
                        <span class="visually-hidden">Cream</span>
                      </label>
                      <input type="radio" class="btn-check" name="colors-8" id="color-8-2">
                      <label for="color-8-2" class="btn btn-color fs-base" style="color: #496c33">
                        <span class="visually-hidden">Dark green</span>
                      </label>
                      <input type="radio" class="btn-check" name="colors-8" id="color-8-3">
                      <label for="color-8-3" class="btn btn-color fs-base" style="color: #364254">
                        <span class="visually-hidden">Black</span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="col-6 col-md-4 mb-2 mb-sm-3 mb-md-0">
                <div class="animate-underline hover-effect-opacity">
                  <div class="position-relative mb-3">
                    <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                      <i class="ci-heart animate-target"></i>
                    </button>
                    <a class="d-flex bg-body-tertiary rounded p-3" href="shop-product-fashion">
                      <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                        <img src="assets/img/shop/fashion/09.png" alt="Image">
                      </div>
                    </a>
                    <div class="hover-effect-target position-absolute start-0 bottom-0 w-100 z-2 opacity-0 pb-2 pb-sm-3 px-2 px-sm-3">
                      <div class="d-flex align-items-center justify-content-center gap-2 gap-xl-3 bg-body rounded-2 p-2">
                        <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">XS</span>
                        <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">S</span>
                        <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">M</span>
                        <span class="fs-xs fw-medium text-secondary-emphasis py-1 px-sm-2">L</span>
                        <div class="nav">
                          <a class="nav-link fs-xs text-body-tertiary py-1 px-2" href="shop-product-fashion">+3</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="nav mb-2">
                    <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="shop-product-fashion">
                      <span class="text-truncate">White cotton blouse with necklace</span>
                    </a>
                  </div>
                  <div class="h6 mb-2">$38.50</div>
                  <div class="position-relative">
                    <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+1 color</div>
                    <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                      <input type="radio" class="btn-check" name="colors-9" id="color-9-1" checked>
                      <label for="color-9-1" class="btn btn-color fs-base" style="color: #e0e5eb">
                        <span class="visually-hidden">White</span>
                      </label>
                      <input type="radio" class="btn-check" name="colors-9" id="color-9-2">
                      <label for="color-9-2" class="btn btn-color fs-base" style="color: #364254">
                        <span class="visually-hidden">Black</span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="col-6 col-md-4 mb-2 mb-sm-3 mb-md-0">
                <div class="animate-underline hover-effect-opacity">
                  <div class="position-relative mb-3">
                    <button type="button" class="btn btn-icon btn-secondary animate-pulse fs-base bg-transparent border-0 position-absolute top-0 end-0 z-2 mt-1 mt-sm-2 me-1 me-sm-2" aria-label="Add to Wishlist">
                      <i class="ci-heart animate-target"></i>
                    </button>
                    <a class="d-flex bg-body-tertiary rounded p-3" href="shop-product-fashion">
                      <div class="ratio" style="--cz-aspect-ratio: calc(308 / 274 * 100%)">
                        <img src="assets/img/shop/fashion/10.png" alt="Image">
                      </div>
                    </a>
                  </div>
                  <div class="nav mb-2">
                    <a class="nav-link animate-target min-w-0 text-dark-emphasis p-0" href="shop-product-fashion">
                      <span class="text-truncate">Leather handbag for women</span>
                    </a>
                  </div>
                  <div class="h6 mb-2">$140.00</div>
                  <div class="position-relative">
                    <div class="hover-effect-target fs-xs text-body-secondary opacity-100">+2 colors</div>
                    <div class="hover-effect-target d-flex gap-2 position-absolute top-0 start-0 opacity-0">
                      <input type="radio" class="btn-check" name="colors-10" id="color-10-1" checked>
                      <label for="color-10-1" class="btn btn-color fs-base" style="color: #869286">
                        <span class="visually-hidden">Olive</span>
                      </label>
                      <input type="radio" class="btn-check" name="colors-10" id="color-10-2">
                      <label for="color-10-2" class="btn btn-color fs-base" style="color: #364254">
                        <span class="visually-hidden">Black</span>
                      </label>
                      <input type="radio" class="btn-check" name="colors-10" id="color-10-3">
                      <label for="color-10-3" class="btn btn-color fs-base" style="color: #526f99">
                        <span class="visually-hidden">Blue</span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Show more button -->
            <button type="button" class="btn btn-lg btn-outline-secondary w-100">
              Show more
              <i class="ci-chevron-down fs-xl ms-2 me-n1"></i>
            </button>
          </div>
        </div>
      </section>


      <!-- Instagram feed -->
      <section class="container pt-5 mt-2 mt-sm-3 mt-lg-4 mt-xl-5">
        <div class="text-center pb-2 pb-md-3">
          <h2 class="pb-2 mb-1">
            <span class="animate-underline">
              <a class="animate-target text-dark-emphasis text-decoration-none" href="#!">#cartzilla</a>
            </span>
          </h2>
          <p>Find more inspiration on our Instagram</p>
        </div>
        <div class="overflow-x-auto pb-3 mb-n3" data-simplebar>
          <div class="d-flex gap-2 gap-md-3 gap-lg-4" style="min-width: 700px">
            <a class="hover-effect-scale hover-effect-opacity position-relative w-100 overflow-hidden" href="#!">
              <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
              <i class="ci-instagram hover-effect-target fs-4 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
              <div class="hover-effect-target ratio ratio-1x1">
                <img src="assets/img/instagram/01.jpg" alt="Instagram image">
              </div>
            </a>
            <a class="hover-effect-scale hover-effect-opacity position-relative w-100 overflow-hidden" href="#!">
              <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
              <i class="ci-instagram hover-effect-target fs-4 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
              <div class="hover-effect-target ratio ratio-1x1">
                <img src="assets/img/instagram/02.jpg" alt="Instagram image">
              </div>
            </a>
            <a class="hover-effect-scale hover-effect-opacity position-relative w-100 overflow-hidden" href="#!">
              <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
              <i class="ci-instagram hover-effect-target fs-4 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
              <div class="hover-effect-target ratio ratio-1x1">
                <img src="assets/img/instagram/03.jpg" alt="Instagram image">
              </div>
            </a>
            <a class="hover-effect-scale hover-effect-opacity position-relative w-100 overflow-hidden" href="#!">
              <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
              <i class="ci-instagram hover-effect-target fs-4 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
              <div class="hover-effect-target ratio ratio-1x1">
                <img src="assets/img/instagram/04.jpg" alt="Instagram image">
              </div>
            </a>
            <a class="hover-effect-scale hover-effect-opacity position-relative w-100 overflow-hidden" href="#!">
              <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-black bg-opacity-25 opacity-0 z-1"></span>
              <i class="ci-instagram hover-effect-target fs-4 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
              <div class="hover-effect-target ratio ratio-1x1">
                <img src="assets/img/instagram/05.jpg" alt="Instagram image">
              </div>
            </a>
          </div>
        </div>
      </section>
    </main>


    <!-- Page footer -->
    <footer class="footer pt-5 pb-4">
      <div class="container pt-sm-2 pt-md-3 pt-lg-4">
        <div class="row pb-5 mb-lg-3">

          <!-- Columns with links that are turned into accordion on screens < 500px wide (sm breakpoint) -->
          <div class="col-md-8 col-xl-7 pb-2 pb-md-0 mb-4 mb-md-0 mt-n3 mt-sm-0">
            <div class="accordion" id="footerLinks">
              <div class="row row-cols-1 row-cols-sm-3">
                <div class="accordion-item col border-0">
                  <h6 class="accordion-header" id="categoriesHeading">
                    <span class="text-dark-emphasis d-none d-sm-block">Categories</span>
                    <button type="button" class="accordion-button collapsed py-3 d-sm-none" data-bs-toggle="collapse" data-bs-target="#categoriesLinks" aria-expanded="false" aria-controls="categoriesLinks">Categories</button>
                  </h6>
                  <div class="accordion-collapse collapse d-sm-block" id="categoriesLinks" aria-labelledby="categoriesHeading" data-bs-parent="#footerLinks">
                    <ul class="nav flex-column gap-2 pt-sm-3 pb-3 pb-sm-0 mt-n1 mb-1 mb-sm-0">
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">For women</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">For men</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Home clothes</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Accessories</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Sale</a>
                      </li>
                    </ul>
                  </div>
                  <hr class="d-sm-none my-0">
                </div>
                <div class="accordion-item col border-0">
                  <h6 class="accordion-header" id="accountHeading">
                    <span class="text-dark-emphasis d-none d-sm-block">Account</span>
                    <button type="button" class="accordion-button collapsed py-3 d-sm-none" data-bs-toggle="collapse" data-bs-target="#accountLinks" aria-expanded="false" aria-controls="accountLinks">Account</button>
                  </h6>
                  <div class="accordion-collapse collapse d-sm-block" id="accountLinks" aria-labelledby="accountHeading" data-bs-parent="#footerLinks">
                    <ul class="nav flex-column gap-2 pt-sm-3 pb-3 pb-sm-0 mt-n1 mb-1 mb-sm-0">
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Your account</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Shipping &amp; policies</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Refunds &amp; replacements</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Order tracking</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Delivery info</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Taxes &amp; fees</a>
                      </li>
                    </ul>
                  </div>
                  <hr class="d-sm-none my-0">
                </div>
                <div class="accordion-item col border-0">
                  <h6 class="accordion-header" id="customerHeading">
                    <span class="text-dark-emphasis d-none d-sm-block">Customer service</span>
                    <button type="button" class="accordion-button collapsed py-3 d-sm-none" data-bs-toggle="collapse" data-bs-target="#customerLinks" aria-expanded="false" aria-controls="customerLinks">Customer service</button>
                  </h6>
                  <div class="accordion-collapse collapse d-sm-block" id="customerLinks" aria-labelledby="customerHeading" data-bs-parent="#footerLinks">
                    <ul class="nav flex-column gap-2 pt-sm-3 pb-3 pb-sm-0 mt-n1 mb-1 mb-sm-0">
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Payment methods</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Money back guarantee</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Refunds &amp; replacements</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Product returns</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Support center</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Shipping</a>
                      </li>
                    </ul>
                  </div>
                  <hr class="d-sm-none my-0">
                </div>
              </div>
            </div>
          </div>

          <!-- Subscription -->
          <div class="col-md-4 offset-xl-1">
            <h6 class="mb-4">Join us and stay up to date</h6>
            <form class="needs-validation" novalidate>
              <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" id="check-woman" checked>
                <label for="check-woman" class="form-check-label">Woman</label>
              </div>
              <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" id="check-man">
                <label for="check-man" class="form-check-label">Man</label>
              </div>
              <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" id="check-sale">
                <label for="check-sale" class="form-check-label">Sale</label>
              </div>
              <div class="position-relative mt-3">
                <input type="email" class="form-control form-control-lg bg-image-none text-start" placeholder="Enter email" aria-label="Your email address" required>
                <div class="invalid-tooltip bg-transparent p-0">Please enter you email address!</div>
                <button type="submit" class="btn btn-icon btn-ghost fs-xl btn-secondary border-0 position-absolute top-0 end-0 mt-1 me-1" aria-label="Submit your email address">
                  <i class="ci-arrow-up-right"></i>
                </button>
              </div>
            </form>
          </div>
        </div>

        <!-- Social account links -->
        <div class="d-flex justify-content-center justify-content-lg-start gap-2 mt-n2 mt-md-0">
          <a class="btn btn-icon fs-base btn-outline-secondary border-0" href="#!" data-bs-toggle="tooltip" data-bs-template='<div class="tooltip fs-xs mb-n2" role="tooltip"><div class="tooltip-inner bg-transparent text-body p-0"></div></div>' title="YouTube" aria-label="Follow us on YouTube">
            <i class="ci-youtube"></i>
          </a>
          <a class="btn btn-icon fs-base btn-outline-secondary border-0" href="#!" data-bs-toggle="tooltip" data-bs-template='<div class="tooltip fs-xs mb-n2" role="tooltip"><div class="tooltip-inner bg-transparent text-body p-0"></div></div>' title="Facebook" aria-label="Follow us on Facebook">
            <i class="ci-facebook"></i>
          </a>
          <a class="btn btn-icon fs-base btn-outline-secondary border-0" href="#!" data-bs-toggle="tooltip" data-bs-template='<div class="tooltip fs-xs mb-n2" role="tooltip"><div class="tooltip-inner bg-transparent text-body p-0"></div></div>' title="Instagram" aria-label="Follow us on Instagram">
            <i class="ci-instagram"></i>
          </a>
          <a class="btn btn-icon fs-base btn-outline-secondary border-0" href="#!" data-bs-toggle="tooltip" data-bs-template='<div class="tooltip fs-xs mb-n2" role="tooltip"><div class="tooltip-inner bg-transparent text-body p-0"></div></div>' title="Telegram" aria-label="Follow us on Telegram">
            <i class="ci-telegram"></i>
          </a>
          <a class="btn btn-icon fs-base btn-outline-secondary border-0" href="#!" data-bs-toggle="tooltip" data-bs-template='<div class="tooltip fs-xs mb-n2" role="tooltip"><div class="tooltip-inner bg-transparent text-body p-0"></div></div>' title="Pinterest" aria-label="Follow us on Pinterest">
            <i class="ci-pinterest"></i>
          </a>
        </div>

        <!-- Copyright + Payment methods -->
        <div class="d-lg-flex align-items-center border-top pt-4 mt-3">
          <div class="d-flex gap-2 gap-sm-3 justify-content-center ms-lg-auto mb-3 mb-md-4 mb-lg-0 order-lg-2">
            <div>
              <img src="assets/img/payment-methods/visa-light-mode.svg" class="d-none-dark" alt="Visa">
              <img src="assets/img/payment-methods/visa-dark-mode.svg" class="d-none d-block-dark" alt="Visa">
            </div>
            <div>
              <img src="assets/img/payment-methods/paypal-light-mode.svg" class="d-none-dark" alt="PayPal">
              <img src="assets/img/payment-methods/paypal-dark-mode.svg" class="d-none d-block-dark" alt="PayPal">
            </div>
            <div>
              <img src="assets/img/payment-methods/mastercard.svg" alt="Mastercard">
            </div>
            <div>
              <img src="assets/img/payment-methods/google-pay-light-mode.svg" class="d-none-dark" alt="Google Pay">
              <img src="assets/img/payment-methods/google-pay-dark-mode.svg" class="d-none d-block-dark" alt="Google Pay">
            </div>
            <div>
              <img src="assets/img/payment-methods/apple-pay-light-mode.svg" class="d-none-dark" alt="Apple Pay">
              <img src="assets/img/payment-methods/apple-pay-dark-mode.svg" class="d-none d-block-dark" alt="Apple Pay">
            </div>
          </div>
          <div class="d-md-flex justify-content-center order-lg-1">
            <ul class="nav justify-content-center gap-4 order-md-3 mb-4 mb-md-0">
              <li class="animate-underline">
                <a class="nav-link fs-xs fw-normal p-0 animate-target" href="#!">Privacy</a>
              </li>
              <li class="animate-underline">
                <a class="nav-link fs-xs fw-normal p-0 animate-target" href="#!">Affiliates</a>
              </li>
              <li class="animate-underline">
                <a class="nav-link fs-xs fw-normal p-0 animate-target" href="#!">Terms of use</a>
              </li>
            </ul>
            <div class="vr text-body-secondary opacity-25 mx-4 d-none d-md-inline-block order-md-2"></div>
            <p class="fs-xs text-center text-lg-start mb-0 order-md-1">
              &copy; All rights reserved. Made by <span class="animate-underline"><a class="animate-target text-dark-emphasis text-decoration-none" href="https://createx.studio/" target="_blank" rel="noreferrer">Createx Studio</a></span>
            </p>
          </div>
        </div>
      </div>

      <!-- Additional spacing to accommodate the sticky offcanvas toggle button -->
      <div class="d-lg-none" style="height: 3.75rem"></div>
    </footer>


    <!-- Filter offcanvas toggle that is visible on screens < 992px wide (lg breakpoint) -->
    <button type="button" class="fixed-bottom z-sticky w-100 btn btn-lg btn-dark border-0 border-top border-light border-opacity-10 rounded-0 pb-4 d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#filterSidebar" aria-controls="filterSidebar" data-bs-theme="light">
      <i class="ci-filter fs-base me-2"></i>
      Filters
    </button>


    <!-- Back to top button -->
    <div class="floating-buttons position-fixed top-50 end-0 z-sticky me-3 me-xl-4 pb-4">
      <a class="btn-scroll-top btn btn-sm bg-body border-0 rounded-pill shadow animate-slide-end" href="#top">
        Top
        <i class="ci-arrow-right fs-base ms-1 me-n1 animate-target"></i>
        <span class="position-absolute top-0 start-0 w-100 h-100 border rounded-pill z-0"></span>
        <svg class="position-absolute top-0 start-0 w-100 h-100 z-1" viewBox="0 0 62 32" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x=".75" y=".75" width="60.5" height="30.5" rx="15.25" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"/>
        </svg>
      </a>
    </div>


    <!-- Vendor scripts -->
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="assets/vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="assets/vendor/nouislider/dist/nouislider.min.js"></script>
    <script src="assets/vendor/list.js/dist/list.min.js"></script>

    <!-- Bootstrap + Theme scripts -->
    <script src="assets/js/theme.min.js"></script>
  </body>
</html>

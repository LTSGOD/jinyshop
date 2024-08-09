<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-pwa="true">
  <head>
    <meta charset="utf-8">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">

    <!-- SEO Meta Tags -->
    <title>Cartzilla | Grocery Store</title>
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

    <!-- Bootstrap + Theme styles -->
    <link rel="preload" href="assets/css/theme.min.css" as="style">
    <link rel="stylesheet" href="assets/css/theme.min.css" id="theme-styles">
  </head>


  <!-- Body -->
  <body>

    <!-- Shopping cart offcanvas -->
    <div class="offcanvas offcanvas-end pb-sm-2 px-sm-2" id="shoppingCart" tabindex="-1" aria-labelledby="shoppingCartLabel" style="width: 500px">

      <!-- Header -->
      <div class="offcanvas-header flex-column align-items-start py-3 pt-lg-4">
        <div class="d-flex align-items-center justify-content-between w-100 mb-3 mb-lg-4">
          <h4 class="offcanvas-title" id="shoppingCartLabel">Shopping cart</h4>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="alert alert-success text-dark-emphasis fs-sm border-0 rounded-4 mb-0" role="alert">
          Congratulations 🎉 You have added more than <span class="fw-semibold">$50</span> to your cart. <span class="fw-semibold">Delivery is free</span> for you!
        </div>
      </div>

      <!-- Items -->
      <div class="offcanvas-body d-flex flex-column gap-4 pt-2">

        <!-- Item -->
        <div class="d-flex align-items-center">
          <a class="position-relative flex-shrink-0" href="shop-product-grocery.html">
            <span class="badge text-bg-danger position-absolute top-0 start-0 z-2 mt-0 ms-0">-$2.79</span>
            <img src="assets/img/shop/grocery/thumbs/01.png" width="110" alt="Thumbnail">
          </a>
          <div class="w-100 ps-3">
            <h5 class="fs-sm fw-medium lh-base mb-2">
              <a class="hover-effect-underline" href="shop-product-grocery.html">Fresh orange Klementina, Spain</a>
            </h5>
            <div class="h6 pb-1 mb-2">$3.12</div>
            <div class="d-flex align-items-center justify-content-between">
              <div class="count-input rounded-pill">
                <button type="button" class="btn btn-icon btn-sm" data-decrement aria-label="Decrement quantity">
                  <i class="ci-minus"></i>
                </button>
                <input type="number" class="form-control form-control-sm" value="3" readonly>
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
          <a class="flex-shrink-0" href="shop-product-grocery.html">
            <img src="assets/img/shop/grocery/thumbs/02.png" width="110" alt="Thumbnail">
          </a>
          <div class="w-100 ps-3">
            <h5 class="fs-sm fw-medium lh-base mb-2">
              <a class="hover-effect-underline" href="shop-product-grocery.html">Pesto sauce Barilla with basil, Italy</a>
            </h5>
            <div class="h6 pb-1 mb-2">$3.95</div>
            <div class="d-flex align-items-center justify-content-between">
              <div class="count-input rounded-pill">
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
          <a class="flex-shrink-0" href="shop-product-grocery.html">
            <img src="assets/img/shop/grocery/thumbs/03.png" width="110" alt="Thumbnail">
          </a>
          <div class="w-100 ps-3">
            <h5 class="fs-sm fw-medium lh-base mb-2">
              <a class="hover-effect-underline" href="shop-product-grocery.html">Steak salmon fillet with rosmary</a>
            </h5>
            <div class="h6 pb-1 mb-2">$27.00</div>
            <div class="d-flex align-items-center justify-content-between">
              <div class="count-input rounded-pill">
                <button type="button" class="btn btn-icon btn-sm" data-decrement aria-label="Decrement quantity">
                  <i class="ci-minus"></i>
                </button>
                <input type="number" class="form-control form-control-sm" value="2" readonly>
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
          <a class="flex-shrink-0" href="shop-product-grocery.html">
            <img src="assets/img/shop/grocery/thumbs/04.png" width="110" alt="Thumbnail">
          </a>
          <div class="w-100 ps-3">
            <h5 class="fs-sm fw-medium lh-base mb-2">
              <a class="hover-effect-underline" href="shop-product-grocery.html">Sprite soda lemon lime, can</a>
            </h5>
            <div class="h6 pb-1 mb-2">$0.80</div>
            <div class="d-flex align-items-center justify-content-between">
              <div class="count-input rounded-pill">
                <button type="button" class="btn btn-icon btn-sm" data-decrement aria-label="Decrement quantity">
                  <i class="ci-minus"></i>
                </button>
                <input type="number" class="form-control form-control-sm" value="2" readonly>
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
          <span class="h6 mb-0">$68.91</span>
        </div>
        <div class="d-flex w-100 gap-3">
          <a class="btn btn-lg btn-secondary w-100 rounded-pill" href="checkout-v2-cart.html">View cart</a>
          <a class="btn btn-lg btn-primary w-100 rounded-pill" href="checkout-v2-delivery.html">Checkout</a>
        </div>
      </div>
    </div>


    <!-- Delivey options offcanvas -->
    <div class="offcanvas offcanvas-end pb-sm-2 px-sm-2" id="deliveryOptions" tabindex="-1" aria-labelledby="deliveryOptionsLabel" style="width: 500px">

      <!-- Header with nav tabs -->
      <div class="offcanvas-header flex-column align-items-start py-3 pt-lg-4">
        <div class="d-flex align-items-center justify-content-between w-100 pb-xl-1 mb-4">
          <h4 class="offcanvas-title" id="deliveryOptionsLabel">Delivery options</h4>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <ul class="nav nav-pills nav-justified w-100" role="tablist">
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link active" id="delivery-tab" data-bs-toggle="tab" data-bs-target="#delivery-tab-pane" role="tab" aria-controls="delivery-tab-pane" aria-selected="true">
              <i class="ci-shopping-bag fs-base ms-n1 me-2"></i>
              Delivery
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" id="pickup-tab" data-bs-toggle="tab" data-bs-target="#pickup-tab-pane" role="tab" aria-controls="pickup-tab-pane" aria-selected="false">
              <i class="ci-box fs-base ms-n1 me-2"></i>
              Pickup
            </button>
          </li>
        </ul>
      </div>

      <div class="offcanvas-body tab-content py-2 py-sm-3">

        <!-- Delivery tab -->
        <div class="tab-pane fade show active" id="delivery-tab-pane" role="tabpanel" aria-labelledby="delivery-tab">

          <!-- Address options collapse -->
          <div class="collapse delivery-address show" id="deliveryAddressOptions">
            <div class="mt-n3">
              <div class="form-check border-bottom py-4 m-0">
                <input type="radio" class="form-check-input" id="address-1" name="delivery-address" checked>
                <label for="address-1" class="form-check-label text-dark-emphasis fw-semibold">567 Cherry Lane Apt B12 Sacramento, 95829</label>
              </div>
              <div class="form-check border-bottom py-4 m-0">
                <input type="radio" class="form-check-input" id="address-2" name="delivery-address">
                <div class="d-flex w-100">
                  <label for="address-2" class="form-check-label text-dark-emphasis me-3">1901 Thornridge Cir. Shiloh, Hawaii, 81063</label>
                  <button type="button" class="btn-close fs-sm ms-auto" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove"></button>
                </div>
              </div>
              <div class="form-check border-bottom py-4 m-0">
                <input type="radio" class="form-check-input" id="address-3" name="delivery-address">
                <div class="d-flex w-100">
                  <label for="address-3" class="form-check-label text-dark-emphasis me-3">3517 W. Gray St. Utica, Pennsylvania, 57867</label>
                  <button type="button" class="btn-close fs-sm ms-auto" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove"></button>
                </div>
              </div>
            </div>
          </div>

          <!-- Add new address collapse -->
          <div class="collapse delivery-address" id="deliveryAddressAdd">
            <div class="nav mb-4">
              <a class="nav-link animate-underline p-0" href=".delivery-address" data-bs-toggle="collapse" aria-expanded="true" aria-controls="deliveryAddressOptions deliveryAddressAdd">
                <i class="ci-chevron-left fs-lg ms-n1 me-1"></i>
                <span class="animate-target">Back to my addresses</span>
              </a>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-3 mb-lg-4">
              <h5 class="h6 mb-0 me-3">Add an address to start ordering</h5>
              <a class="btn btn-sm btn-outline-primary rounded-pill" href="#!">
                <i class="ci-map-pin fs-base ms-n1 me-1"></i>
                Find on map
              </a>
            </div>
            <div class="mb-3 mb-lg-4">
              <label class="form-label">State *</label>
              <select class="form-select form-select-lg rounded-pill" data-select='{
                "classNames": {
                  "containerInner": "form-select form-select-lg rounded-pill"
                }
              }' aria-label="Large pill select">
                <option value="">Select state</option>
                <option value="Arizona">Arizona</option>
                <option value="California">California</option>
                <option value="Montana">Montana</option>
                <option value="Nevada">Nevada</option>
                <option value="New Mexico">New Mexico</option>
                <option value="Texas">Texas</option>
              </select>
            </div>
            <div class="mb-3 mb-lg-4">
              <label for="my-postcode" class="form-label">Postcode *</label>
              <input type="text" class="form-control form-control-lg rounded-pill" id="my-postcode">
            </div>
            <div class="mb-3 mb-lg-4">
              <label class="form-label">City *</label>
              <select class="form-select form-select-lg rounded-pill" data-select='{
                "classNames": {
                  "containerInner": "form-select form-select-lg rounded-pill"
                }
              }' aria-label="Large pill select">
                <option value="">Select city</option>
                <option value="Austin">Austin</option>
                <option value="Helena">Helena</option>
                <option value="Sacramento">Sacramento</option>
                <option value="Santa Fe">Santa Fe</option>
                <option value="Las Vegas">Las Vegas</option>
                <option value="Phoenix">Phoenix</option>
              </select>
            </div>
            <label for="my-address" class="form-label">Street address *</label>
            <input type="text" class="form-control form-control-lg rounded-pill" id="my-address">
          </div>

          <!-- Add address collapse toggle -->
          <div class="nav">
            <a class="nav-link hiding-collapse-toggle animate-underline collapsed px-0 mt-4" href=".delivery-address" data-bs-toggle="collapse" aria-expanded="false" aria-controls="deliveryAddressOptions deliveryAddressAdd">
              <span class="animate-target">Add delivery address</span>
              <i class="ci-plus fs-base ms-1"></i>
            </a>
          </div>
        </div>

        <!-- Pickup tab -->
        <div class="tab-pane fade" id="pickup-tab-pane" role="tabpanel" aria-labelledby="pickup-tab">

          <!-- Pickup store options collapse -->
          <div class="collapse pickup-options show" id="pickupStoreOptions">
            <div class="mt-n3">
              <div class="form-check border-bottom py-4 m-0">
                <input type="radio" class="form-check-input" id="store-1" name="pickup-store" checked>
                <div>
                  <div class="d-flex w-100 pb-2 mb-1">
                    <label for="store-1" class="form-check-label text-dark-emphasis fw-semibold me-3">Sacramento Supercenter</label>
                    <button type="button" class="btn-close fs-sm ms-auto" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove"></button>
                  </div>
                  <div class="fs-xs mb-2">8270 Delta Shores Cir S, Sacramento, CA 95832</div>
                  <div class="fs-xs">Open: <span class="text-dark-emphasis fw-medium">07:00 - 22:00</span></div>
                </div>
              </div>
              <div class="form-check border-bottom py-4 m-0">
                <input type="radio" class="form-check-input" id="store-2" name="pickup-store">
                <div>
                  <div class="d-flex w-100 pb-2 mb-1">
                    <label for="store-2" class="form-check-label text-dark-emphasis fw-semibold me-3">West Sacramento Supercenter</label>
                    <button type="button" class="btn-close fs-sm ms-auto" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove"></button>
                  </div>
                  <div class="fs-xs mb-2">755 Riverpoint Ct, West Sacramento, CA 95605</div>
                  <div class="fs-xs">Open: <span class="text-dark-emphasis fw-medium">07:00 - 21:00</span></div>
                </div>
              </div>
              <div class="form-check border-bottom py-4 m-0">
                <input type="radio" class="form-check-input" id="store-3" name="pickup-store">
                <div>
                  <div class="d-flex w-100 pb-2 mb-1">
                    <label for="store-3" class="form-check-label text-dark-emphasis fw-semibold me-3">Rancho Cordova Supercenter</label>
                    <button type="button" class="btn-close fs-sm ms-auto" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove"></button>
                  </div>
                  <div class="fs-xs mb-2">10655 Folsom Blvd, Rancho Cordova, CA 95670</div>
                  <div class="fs-xs">Open: <span class="text-dark-emphasis fw-medium">08:00 - 23:00</span></div>
                </div>
              </div>
            </div>
          </div>

          <!-- Add new pickup store collapse -->
          <div class="collapse pickup-options" id="pickupStoreAdd">
            <div class="nav mb-4">
              <a class="nav-link animate-underline p-0" href=".pickup-options" data-bs-toggle="collapse" aria-expanded="true" aria-controls="pickupStoreOptions pickupStoreAdd">
                <i class="ci-chevron-left fs-lg ms-n1 me-1"></i>
                <span class="animate-target">Back to my stores</span>
              </a>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-3 mb-lg-4">
              <h5 class="h6 mb-0 me-3">Select a suitable store</h5>
              <a class="btn btn-sm btn-outline-primary rounded-pill" href="#!">
                <i class="ci-map-pin fs-base ms-n1 me-1"></i>
                Find on map
              </a>
            </div>
            <div class="mb-3 mb-lg-4">
              <label class="form-label">State *</label>
              <select class="form-select form-select-lg rounded-pill" data-select='{
                "classNames": {
                  "containerInner": "form-select form-select-lg rounded-pill"
                }
              }' aria-label="Large pill select">
                <option value="">Select state</option>
                <option value="Arizona">Arizona</option>
                <option value="California" selected>California</option>
                <option value="Montana">Montana</option>
                <option value="Nevada">Nevada</option>
                <option value="New Mexico">New Mexico</option>
                <option value="Texas">Texas</option>
              </select>
            </div>
            <div class="mb-4">
              <label class="form-label">City *</label>
              <select class="form-select form-select-lg rounded-pill" data-select='{
                "classNames": {
                  "containerInner": "form-select form-select-lg rounded-pill"
                }
              }' aria-label="Large pill select">
                <option value="">Select city</option>
                <option value="Austin">Austin</option>
                <option value="Helena">Helena</option>
                <option value="Sacramento" selected>Sacramento</option>
                <option value="Santa Fe">Santa Fe</option>
                <option value="Las Vegas">Las Vegas</option>
                <option value="Phoenix">Phoenix</option>
              </select>
            </div>
            <div class="fs-xs fw-medium text-uppercase text-body-secondary">Found stores:</div>
            <div class="form-check border-bottom py-4 m-0">
              <input type="radio" class="form-check-input" id="store-4" name="found-store">
              <div>
                <label for="store-4" class="form-check-label text-dark-emphasis fw-semibold pb-2 mb-1">Sacramento Supercenter</label>
                <div class="fs-xs mb-2">8270 Delta Shores Cir S, Sacramento, CA 95832</div>
                <div class="fs-xs">Open: <span class="text-dark-emphasis fw-medium">07:00 - 22:00</span></div>
              </div>
            </div>
            <div class="form-check border-bottom py-4 m-0">
              <input type="radio" class="form-check-input" id="store-5" name="found-store">
              <div>
                <label for="store-5" class="form-check-label text-dark-emphasis fw-semibold pb-2 mb-1">West Sacramento Supercenter</label>
                <div class="fs-xs mb-2">755 Riverpoint Ct, West Sacramento, CA 95605</div>
                <div class="fs-xs">Open: <span class="text-dark-emphasis fw-medium">07:00 - 21:00</span></div>
              </div>
            </div>
            <div class="form-check border-bottom py-4 m-0">
              <input type="radio" class="form-check-input" id="store-6" name="found-store">
              <div>
                <label for="store-6" class="form-check-label text-dark-emphasis fw-semibold pb-2 mb-1">Rancho Cordova Supercenter</label>
                <div class="fs-xs mb-2">10655 Folsom Blvd, Rancho Cordova, CA 95670</div>
                <div class="fs-xs">Open: <span class="text-dark-emphasis fw-medium">08:00 - 23:00</span></div>
              </div>
            </div>
          </div>

          <!-- Add address collapse toggle -->
          <div class="nav">
            <a class="nav-link hiding-collapse-toggle animate-underline collapsed px-0 mt-4" href=".pickup-options" data-bs-toggle="collapse" aria-expanded="false" aria-controls="pickupStoreOptions pickupStoreAdd">
              <span class="animate-target">Add store address</span>
              <i class="ci-plus fs-base ms-1"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <div class="offcanvas-header">
        <button type="button" class="btn btn-lg btn-primary w-100 rounded-pill">Confirm address</button>
      </div>
    </div>


    <!-- Site menu offcanvas -->
    <nav class="offcanvas offcanvas-start" id="navbarNav" tabindex="-1" aria-labelledby="navbarNavLabel">
      <div class="offcanvas-header py-3">
        <h5 class="offcanvas-title" id="navbarNavLabel">Browse Cartzilla</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body pt-0 pb-3">

        <!-- Navbar nav -->
        <div class="accordion" id="navigation">

          <!-- Categories collapse visible on screens < 992px wide (lg breakpoint) -->
          <div class="accordion-item border-0 d-lg-none">
            <div class="accordion-header" id="headingCategories">
              <button type="button" class="accordion-button animate-underline fw-medium collapsed py-2" data-bs-toggle="collapse" data-bs-target="#categoriesMenu" aria-expanded="false" aria-controls="categoriesMenu">
                <i class="ci-grid fs-lg me-2"></i>
                <span class="d-block animate-target py-1">Categories</span>
              </button>
            </div>
            <div class="accordion-collapse collapse" id="categoriesMenu" aria-labelledby="headingCategories" data-bs-parent="#navigation">
              <div class="accordion-body pb-3">
                <div class="dropdown-menu show position-static d-flex flex-column gap-4 shadow-none p-4">
                  <div>
                    <div class="h6">Bakery &amp; bread</div>
                    <ul class="nav flex-column gap-2 mt-n2">
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Shop all</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Bread</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Pastries</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Bakery cookies</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Cupcakes</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Buns &amp; rolls</a>
                      </li>
                    </ul>
                    <div class="h6 pt-4">Meat products</div>
                    <ul class="nav flex-column gap-2 mt-n2">
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Shop all</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Fresh meat</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Processed meat</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Seafood</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Poultry products</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Prepared meat</a>
                      </li>
                    </ul>
                  </div>
                  <div>
                    <div class="h6">Vegetables</div>
                    <ul class="nav flex-column gap-2 mt-n2">
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Shop all</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Leafy greens</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Root vegetables</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Allium vegetables</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Peppers and tomatoes</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Cruciferous</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Seasonal squashes</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Beans, peas &amp; lentils</a>
                      </li>
                    </ul>
                    <div class="h6 pt-4">Sauces and ketchup</div>
                    <ul class="nav flex-column gap-2 mt-n2">
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Shop all</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Tomato-based sauces</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Salad dressing</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Hot sauces</a>
                      </li>
                    </ul>
                  </div>
                  <div>
                    <div class="h6">Fresh fruits</div>
                    <ul class="nav flex-column gap-2 mt-n2">
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Shop all</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Citrus fruits</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Berries</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Tropical fruits</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Stone fruits</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Exotic fruits</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Melons</a>
                      </li>
                    </ul>
                    <div class="h6 pt-4">Italian dinner</div>
                    <ul class="nav flex-column gap-2 mt-n2">
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Shop all</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Pasta &amp; sauces</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Italian cheese</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Italian meats</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Desserts &amp; beverages</a>
                      </li>
                    </ul>
                  </div>
                  <div>
                    <div class="h6">Beverages</div>
                    <ul class="nav flex-column gap-2 mt-n2">
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Shop all</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Soft drinks</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Juices</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Sports &amp; energy drinks</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Tea and coffee</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Alcoholic beverages</a>
                      </li>
                    </ul>
                    <div class="h6 pt-4">Dairy &amp; eggs</div>
                    <ul class="nav flex-column gap-2 mt-n2">
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Shop all</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Chees</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Milk &amp; yogurt</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Sour cream</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Eggs</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Butter &amp; margarine</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Rest of the menu -->
          <div class="accordion-item border-0">
            <div class="accordion-header" id="headingHome">
              <button type="button" class="accordion-button animate-underline fw-medium collapsed py-2" data-bs-toggle="collapse" data-bs-target="#home" aria-expanded="false" aria-controls="home">
                <span class="d-block animate-target py-1">Home</span>
              </button>
            </div>
            <div class="accordion-collapse collapse" id="home" aria-labelledby="headingHome" data-bs-parent="#navigation">
              <div class="accordion-body pb-3">
                <ul class="dropdown-menu show position-static shadow-none">
                  <li class="hover-effect-opacity px-2 mx-n2">
                    <a class="dropdown-item d-block mb-0" href="home-electronics.html">
                      <span class="fw-medium">Electronics Store</span>
                      <span class="d-block fs-xs text-body-secondary">Megamenu + Hero slider</span>
                    </a>
                  </li>
                  <li class="hover-effect-opacity px-2 mx-n2">
                    <a class="dropdown-item d-block mb-0" href="home-fashion-v1.html">
                      <span class="fw-medium">Fashion Store v.1</span>
                      <span class="d-block fs-xs text-body-secondary">Hero promo slider</span>
                    </a>
                  </li>
                  <li class="hover-effect-opacity px-2 mx-n2">
                    <a class="dropdown-item d-block mb-0" href="home-fashion-v2.html">
                      <span class="fw-medium">Fashion Store v.2</span>
                      <span class="d-block fs-xs text-body-secondary">Hero banner with hotspots</span>
                    </a>
                  </li>
                  <li class="hover-effect-opacity px-2 mx-n2">
                    <a class="dropdown-item d-block mb-0" href="home-furniture.html">
                      <span class="fw-medium">Furniture Store</span>
                      <span class="d-block fs-xs text-body-secondary">Fancy product carousel</span>
                    </a>
                  </li>
                  <li class="hover-effect-opacity px-2 mx-n2">
                    <a class="dropdown-item d-block mb-0" href="home-grocery.html">
                      <span class="fw-medium">Grocery Store</span>
                      <span class="d-block fs-xs text-body-secondary">Hero slider + Category cards</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-item border-0">
            <div class="accordion-header" id="headingShop">
              <button type="button" class="accordion-button animate-underline fw-medium collapsed py-2" data-bs-toggle="collapse" data-bs-target="#shop" aria-expanded="false" aria-controls="shop">
                <span class="d-block animate-target py-1">Shop</span>
              </button>
            </div>
            <div class="accordion-collapse collapse" id="shop" aria-labelledby="headingShop" data-bs-parent="#navigation">
              <div class="accordion-body pb-3">
                <div class="dropdown-menu show position-static shadow-none p-4">
                  <div class="d-flex flex-column gap-4">
                    <div style="min-width: 190px">
                      <div class="h6 mb-2">Electronics Store</div>
                      <ul class="nav flex-column gap-2 mt-0">
                        <li class="d-flex w-100 pt-1">
                          <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-categories-electronics.html">Categories Page</a>
                        </li>
                        <li class="d-flex w-100 pt-1">
                          <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics.html">Catalog with Side Filters</a>
                        </li>
                        <li class="d-flex w-100 pt-1">
                          <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-general-electronics.html">Product General Info</a>
                        </li>
                        <li class="d-flex w-100 pt-1">
                          <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-details-electronics.html">Product Details</a>
                        </li>
                        <li class="d-flex w-100 pt-1">
                          <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-reviews-electronics.html">Product Reviews</a>
                        </li>
                      </ul>
                      <div class="h6 pt-4 mb-2">Fashion Store</div>
                      <ul class="nav flex-column gap-2 mt-0">
                        <li class="d-flex w-100 pt-1">
                          <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Catalog with Side Filters</a>
                        </li>
                        <li class="d-flex w-100 pt-1">
                          <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-fashion.html">Product Page</a>
                        </li>
                      </ul>
                      <div class="h6 pt-4 mb-2">Furniture Store</div>
                      <ul class="nav flex-column gap-2 mt-0">
                        <li class="d-flex w-100 pt-1">
                          <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-furniture.html">Catalog with Top Filters</a>
                        </li>
                        <li class="d-flex w-100 pt-1">
                          <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-furniture.html">Product Page</a>
                        </li>
                      </ul>
                    </div>
                    <div style="min-width: 190px">
                      <div class="h6 mb-2">Grocery Store</div>
                      <ul class="nav flex-column gap-2 mt-0">
                        <li class="d-flex w-100 pt-1">
                          <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Catalog with Side Filters</a>
                        </li>
                        <li class="d-flex w-100 pt-1">
                          <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-grocery.html">Product Page</a>
                        </li>
                      </ul>
                      <div class="h6 pt-4 mb-2">Checkout v.1</div>
                      <ul class="nav flex-column gap-2 mt-0">
                        <li class="d-flex w-100 pt-1">
                          <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v1-cart.html">Shopping Cart</a>
                        </li>
                        <li class="d-flex w-100 pt-1">
                          <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v1-delivery-1.html">Delivery Info (Step 1)</a>
                        </li>
                        <li class="d-flex w-100 pt-1">
                          <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v1-delivery-2.html">Delivery Info (Step 2)</a>
                        </li>
                        <li class="d-flex w-100 pt-1">
                          <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v1-shipping.html">Shipping Address</a>
                        </li>
                        <li class="d-flex w-100 pt-1">
                          <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v1-payment.html">Payment</a>
                        </li>
                        <li class="d-flex w-100 pt-1">
                          <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v1-thankyou.html">Thank You Page</a>
                        </li>
                      </ul>
                    </div>
                    <div style="min-width: 190px">
                      <div class="h6 mb-2">Checkout v.2</div>
                      <ul class="nav flex-column gap-2 mt-0">
                        <li class="d-flex w-100 pt-1">
                          <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v2-cart.html">Shopping Cart</a>
                        </li>
                        <li class="d-flex w-100 pt-1">
                          <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v2-delivery.html">Delivery Info</a>
                        </li>
                        <li class="d-flex w-100 pt-1">
                          <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v2-pickup.html">Pickup from Store</a>
                        </li>
                        <li class="d-flex w-100 pt-1">
                          <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v2-thankyou.html">Thank You Page</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item border-0">
            <div class="accordion-header" id="headingAccount">
              <button type="button" class="accordion-button animate-underline fw-medium collapsed py-2" data-bs-toggle="collapse" data-bs-target="#account" aria-expanded="false" aria-controls="account">
                <span class="d-block animate-target py-1">Account</span>
              </button>
            </div>
            <div class="accordion-collapse collapse" id="account" aria-labelledby="headingAccount" data-bs-parent="#navigation">
              <div class="accordion-body pb-3">
                <ul class="dropdown-menu show position-static shadow-none">
                  <li class="dropdown">
                    <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">Auth Pages</a>
                    <ul class="dropdown-menu position-static transform-none shadow-none">
                      <li><a class="dropdown-item" href="account-signin.html">Sign In</a></li>
                      <li><a class="dropdown-item" href="account-signup.html">Sign Up</a></li>
                      <li><a class="dropdown-item" href="account-password-recovery.html">Password Recovery</a></li>
                    </ul>
                  </li>
                  <li><a class="dropdown-item" href="account-orders.html">Orders History</a></li>
                  <li><a class="dropdown-item" href="account-wishlist.html">Wishlist</a></li>
                  <li><a class="dropdown-item" href="account-payment.html">Payment Methods</a></li>
                  <li><a class="dropdown-item" href="account-reviews.html">My Reviews</a></li>
                  <li><a class="dropdown-item" href="account-info.html">Personal Info</a></li>
                  <li><a class="dropdown-item" href="account-addresses.html">Addresses</a></li>
                  <li><a class="dropdown-item" href="account-notifications.html">Notifications</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-item border-0">
            <div class="accordion-header" id="headingPages">
              <button type="button" class="accordion-button animate-underline fw-medium collapsed py-2" data-bs-toggle="collapse" data-bs-target="#pages" aria-expanded="false" aria-controls="pages">
                <span class="d-block animate-target py-1">Pages</span>
              </button>
            </div>
            <div class="accordion-collapse collapse" id="pages" aria-labelledby="headingPages" data-bs-parent="#navigation">
              <div class="accordion-body pb-3">
                <ul class="dropdown-menu show position-static shadow-none">
                  <li class="dropdown">
                    <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">About</a>
                    <ul class="dropdown-menu position-static transform-none shadow-none">
                      <li><a class="dropdown-item" href="about-v1.html">About v.1</a></li>
                      <li><a class="dropdown-item" href="about-v2.html">About v.2</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">Blog</a>
                    <ul class="dropdown-menu position-static transform-none shadow-none">
                      <li><a class="dropdown-item" href="blog-grid-v1.html">Grid View v.1</a></li>
                      <li><a class="dropdown-item" href="blog-grid-v2.html">Grid View v.2</a></li>
                      <li><a class="dropdown-item" href="blog-list.html">List View</a></li>
                      <li><a class="dropdown-item" href="blog-single-v1.html">Single Post v.1</a></li>
                      <li><a class="dropdown-item" href="blog-single-v2.html">Single Post v.2</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">Contact</a>
                    <ul class="dropdown-menu position-static transform-none shadow-none">
                      <li><a class="dropdown-item" href="contact-v1.html">Contact v.1</a></li>
                      <li><a class="dropdown-item" href="contact-v2.html">Contact v.2</a></li>
                      <li><a class="dropdown-item" href="contact-v3.html">Contact v.3</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">Help Center</a>
                    <ul class="dropdown-menu position-static transform-none shadow-none">
                      <li><a class="dropdown-item" href="help-topics-v1.html">Help Topics v.1</a></li>
                      <li><a class="dropdown-item" href="help-topics-v2.html">Help Topics v.2</a></li>
                      <li><a class="dropdown-item" href="help-single-article-v1.html">Help Single Article v.1</a></li>
                      <li><a class="dropdown-item" href="help-single-article-v2.html">Help Single Article v.2</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">404 Error</a>
                    <ul class="dropdown-menu position-static transform-none shadow-none">
                      <li><a class="dropdown-item" href="404-electronics.html">404 Electronics</a></li>
                      <li><a class="dropdown-item" href="404-fashion.html">404 Fashion</a></li>
                      <li><a class="dropdown-item" href="404-furniture.html">404 Furniture</a></li>
                      <li><a class="dropdown-item" href="404-grocery.html">404 Grocery</a></li>
                    </ul>
                  </li>
                  <li><a class="dropdown-item" href="terms-and-conditions.html">Terms &amp; Conditions</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="h6 fw-medium py-1 mb-0">
          <a class="d-block animate-underline py-1" href="docs/installation.html">
            <span class="d-inline-block animate-target py-1">Docs</span>
          </a>
        </div>
        <div class="h6 fw-medium py-1 mb-0">
          <a class="d-block animate-underline py-1" href="docs/typography.html">
            <span class="d-inline-block animate-target py-1">Components</span>
          </a>
        </div>
      </div>

      <!-- Account button visible on screens < 768px wide (md breakpoint) -->
      <div class="offcanvas-header flex-column align-items-start d-md-none">
        <a class="btn btn-lg btn-outline-secondary w-100 rounded-pill" href="account-signin.html">
          <i class="ci-user fs-lg ms-n1 me-2"></i>
          Account
        </a>
      </div>
    </nav>


    <!-- Navigation bar (Page header) -->
    <header class="navbar navbar-expand navbar-sticky sticky-top d-block bg-body z-fixed py-1 py-lg-0 py-xl-1 px-0" data-sticky-element>
      <div class="container justify-content-start py-2 py-lg-3">

        <!-- Offcanvas menu toggler (Hamburger) -->
        <button type="button" class="navbar-toggler d-block flex-shrink-0 me-3 me-sm-4" data-bs-toggle="offcanvas" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar brand (Logo) -->
        <a class="navbar-brand fs-2 p-0 pe-lg-2 pe-xxl-0 me-0 me-sm-3 me-md-4 me-xxl-5" href="index.html">Cartzilla</a>

        <!-- Categories dropdown visible on screens > 991px wide (lg breakpoint) -->
        <div class="dropdown d-none d-lg-block w-100 me-4" style="max-width: 200px">
          <button type="button" class="btn btn-lg btn-secondary w-100 border-0 rounded-pill" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ci-grid fs-lg me-2 ms-n1"></i>
            Categories
            <i class="ci-chevron-down fs-lg me-2 ms-auto me-n1"></i>
          </button>
          <div class="dropdown-menu rounded-4 p-4" style="--cz-dropdown-spacer: .75rem; margin-left: -75px">
            <div class="d-flex gap-4">
              <div style="min-width: 170px">
                <div class="h6">Bakery &amp; bread</div>
                <ul class="nav flex-column gap-2 mt-n2">
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Shop all</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Bread</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Pastries</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Bakery cookies</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Cupcakes</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Buns &amp; rolls</a>
                  </li>
                </ul>
                <div class="h6 pt-4">Meat products</div>
                <ul class="nav flex-column gap-2 mt-n2">
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Shop all</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Fresh meat</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Processed meat</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Seafood</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Poultry products</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Prepared meat</a>
                  </li>
                </ul>
              </div>
              <div style="min-width: 170px">
                <div class="h6">Vegetables</div>
                <ul class="nav flex-column gap-2 mt-n2">
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Shop all</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Leafy greens</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Root vegetables</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Allium vegetables</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Peppers and tomatoes</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Cruciferous</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Seasonal squashes</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Beans, peas &amp; lentils</a>
                  </li>
                </ul>
                <div class="h6 pt-4">Sauces and ketchup</div>
                <ul class="nav flex-column gap-2 mt-n2">
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Shop all</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Tomato-based sauces</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Salad dressing</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Hot sauces</a>
                  </li>
                </ul>
              </div>
              <div style="min-width: 170px">
                <div class="h6">Fresh fruits</div>
                <ul class="nav flex-column gap-2 mt-n2">
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Shop all</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Citrus fruits</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Berries</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Tropical fruits</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Stone fruits</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Exotic fruits</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Melons</a>
                  </li>
                </ul>
                <div class="h6 pt-4">Italian dinner</div>
                <ul class="nav flex-column gap-2 mt-n2">
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Shop all</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Pasta &amp; sauces</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Italian cheese</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Italian meats</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Desserts &amp; beverages</a>
                  </li>
                </ul>
              </div>
              <div style="min-width: 170px">
                <div class="h6">Beverages</div>
                <ul class="nav flex-column gap-2 mt-n2">
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Shop all</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Soft drinks</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Juices</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Sports &amp; energy drinks</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Tea and coffee</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Alcoholic beverages</a>
                  </li>
                </ul>
                <div class="h6 pt-4">Dairy &amp; eggs</div>
                <ul class="nav flex-column gap-2 mt-n2">
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Shop all</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Chees</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Milk &amp; yogurt</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Sour cream</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Eggs</a>
                  </li>
                  <li class="d-flex w-100 pt-1">
                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Butter &amp; margarine</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Search bar visible on screens > 768px wide (md breakpoint) -->
        <div class="position-relative w-100 d-none d-md-block me-3 me-xl-4">
          <input type="search" class="form-control form-control-lg rounded-pill" placeholder="Search for products" aria-label="Search">
          <button type="button" class="btn btn-icon btn-ghost fs-lg btn-secondary text-bo border-0 position-absolute top-0 end-0 rounded-circle mt-1 me-1" aria-label="Search button">
            <i class="ci-search"></i>
          </button>
        </div>

        <!-- Delivery options toggle visible on screens > 1200px wide (xl breakpoint) -->
        <div class="nav me-4 me-xxl-5 d-none d-xl-block">
          <a class="nav-link flex-column align-items-start animate-underline p-0" href="#deliveryOptions" data-bs-toggle="offcanvas" aria-controls="deliveryOptions">
            <div class="h6 fs-sm mb-0">Delivery</div>
            <div class="d-flex align-items-center fs-sm fw-normal text-body">
              <span class="animate-target text-nowrap">Set your address</span>
              <i class="ci-chevron-down fs-base ms-1"></i>
            </div>
          </a>
        </div>

        <!-- Button group -->
        <div class="d-flex align-items-center gap-md-1 gap-lg-2 ms-auto">

          <!-- Theme switcher (light/dark/auto) -->
          <div class="dropdown">
            <button type="button" class="theme-switcher btn btn-icon btn-outline-secondary fs-lg border-0 rounded-circle animate-scale" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Toggle theme (light)">
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

          <!-- Search toggle button visible on screens < 768px wide (md breakpoint) -->
          <button type="button" class="btn btn-icon fs-xl btn-outline-secondary border-0 rounded-circle animate-shake d-md-none" data-bs-toggle="collapse" data-bs-target="#searchBar" aria-controls="searchBar" aria-label="Toggle search bar">
            <i class="ci-search animate-target"></i>
          </button>

          <!-- Delivery options button visible on screens < 1200px wide (xl breakpoint) -->
          <button type="button" class="btn btn-icon fs-lg btn-outline-secondary border-0 rounded-circle animate-scale d-xl-none" data-bs-toggle="offcanvas" data-bs-target="#deliveryOptions" aria-controls="deliveryOptions" aria-label="Toggle delivery options offcanvas">
            <i class="ci-map-pin animate-target"></i>
          </button>

          <!-- Account button visible on screens > 768px wide (md breakpoint) -->
          <a class="btn btn-icon fs-lg btn-outline-secondary border-0 rounded-circle animate-shake d-none d-md-inline-flex" href="account-signin.html">
            <i class="ci-user animate-target"></i>
            <span class="visually-hidden">Account</span>
          </a>

          <!-- Cart button -->
          <button type="button" class="btn btn-icon fs-xl btn-outline-secondary position-relative border-0 rounded-circle animate-scale" data-bs-toggle="offcanvas" data-bs-target="#shoppingCart" aria-controls="shoppingCart" aria-label="Shopping cart">
            <span class="position-absolute top-0 start-100 badge fs-xs text-bg-primary rounded-pill ms-n3 z-2" style="--cz-badge-padding-y: .25em; --cz-badge-padding-x: .42em">8</span>
            <i class="ci-shopping-cart animate-target"></i>
          </button>
        </div>
      </div>

      <!-- Search collapse available on screens < 768px wide (md breakpoint) -->
      <div class="collapse d-md-none" id="searchBar">
        <div class="container pt-2 pb-3">
          <div class="position-relative">
            <i class="ci-search position-absolute top-50 translate-middle-y d-flex fs-lg ms-3"></i>
            <input type="search" class="form-control form-icon-start rounded-pill" placeholder="Search for products" data-autofocus="collapse">
          </div>
        </div>
      </div>
    </header>


    <!-- Categories -->
    <section class="border-top">
      <div class="container py-lg-1">
        <div class="overflow-auto" data-simplebar>
          <div class="nav flex-nowrap justify-content-between gap-4 py-2">
            <a class="nav-link align-items-center animate-underline gap-2 p-0" href="shop-catalog-grocery.html">
              <span class="d-flex align-items-center justify-content-center bg-body-tertiary rounded-circle" style="width: 40px; height: 40px">
                <i class="ci-percent text-primary fs-xl"></i>
              </span>
              <span class="d-block animate-target fw-semibold text-nowrap ms-1">Weekly sale</span>
            </a>
            <a class="nav-link align-items-center animate-underline gap-2 p-0" href="shop-catalog-grocery.html">
              <span class="d-flex align-items-center justify-content-center bg-body-tertiary rounded-circle" style="width: 40px; height: 40px">
                <img src="assets/img/mega-menu/grocery/th01.png" width="30" alt="Image">
              </span>
              <span class="d-block animate-target fw-semibold text-nowrap ms-1">Vegetables</span>
            </a>
            <a class="nav-link align-items-center animate-underline gap-2 p-0" href="shop-catalog-grocery.html">
              <span class="d-flex align-items-center justify-content-center bg-body-tertiary rounded-circle" style="width: 40px; height: 40px">
                <img src="assets/img/mega-menu/grocery/th02.png" width="30" alt="Image">
              </span>
              <span class="d-block animate-target fw-semibold text-nowrap ms-1">Easter is coming</span>
            </a>
            <a class="nav-link align-items-center animate-underline gap-2 m-0" href="shop-catalog-grocery.html">
              <span class="d-flex align-items-center justify-content-center bg-body-tertiary rounded-circle" style="width: 40px; height: 40px">
                <img src="assets/img/mega-menu/grocery/th03.png" width="30" alt="Image">
              </span>
              <span class="d-block animate-target fw-semibold text-nowrap ms-1">Poultry meat</span>
            </a>
            <a class="nav-link align-items-center animate-underline gap-2 p-0" href="shop-catalog-grocery.html">
              <span class="d-flex align-items-center justify-content-center bg-body-tertiary rounded-circle" style="width: 40px; height: 40px">
                <img src="assets/img/mega-menu/grocery/th04.png" width="30" alt="Image">
              </span>
              <span class="d-block animate-target fw-semibold text-nowrap ms-1">Fresh fruits</span>
            </a>
            <a class="nav-link align-items-center animate-underline gap-2 p-0" href="shop-catalog-grocery.html">
              <span class="d-flex align-items-center justify-content-center bg-body-tertiary rounded-circle" style="width: 40px; height: 40px">
                <img src="assets/img/mega-menu/grocery/th05.png" width="30" alt="Image">
              </span>
              <span class="d-block animate-target fw-semibold text-nowrap ms-1">St. Patrick's day</span>
            </a>
            <a class="nav-link align-items-center animate-underline gap-2 p-0" href="shop-catalog-grocery.html">
              <span class="d-flex align-items-center justify-content-center bg-body-tertiary rounded-circle" style="width: 40px; height: 40px">
                <img src="assets/img/mega-menu/grocery/th06.png" width="30" alt="Image">
              </span>
              <span class="d-block animate-target fw-semibold text-nowrap ms-1">Exotic fruits</span>
            </a>
          </div>
        </div>
      </div>
    </section>


    {{$slot}}


    <!-- Page footer -->
    <footer class="footer bg-dark pb-4" data-bs-theme="dark">

      <!-- Subscription -->
      <div class="border-bottom py-5">
        <div class="container py-sm-1 py-md-2 py-lg-3">
          <div class="text-center mx-auto" style="max-width: 580px">
            <h3 class="pb-1 mb-2">Stay in touch with us</h3>
            <p class="fs-sm text-body">Receive the latest updates about our products &amp; promotions</p>
            <form class="needs-validation position-relative d-flex flex-column flex-sm-row gap-2 pt-3" novalidate>
              <input type="email" class="form-control form-control-lg rounded-pill text-start" placeholder="You email" aria-label="Your email address" required>
              <div class="invalid-tooltip bg-transparent p-0">Please enter you email address!</div>
              <button type="submit" class="btn btn-lg btn-primary rounded-pill">Subscribe</button>
            </form>
          </div>
        </div>
      </div>

      <div class="container py-4 py-md-5">
        <div class="row pt-3 pb-4 py-md-1 py-lg-3">

          <!-- Promo text + Social account links -->
          <div class="col-lg-3 text-center text-lg-start pb-sm-2 pb-md-0 mb-4 mb-md-5 mb-lg-0">
            <h4 class="pb-2 mb-1">
              <a class="text-dark-emphasis text-decoration-none" href="index.html">Cartzilla</a>
            </h4>
            <p class="fs-sm text-body mx-auto" style="max-width: 480px">With a wide selection of fresh produce, pantry staples, and household essentials, we've got everything you need just a click away.</p>
            <div class="d-flex justify-content-center justify-content-lg-start gap-2 pt-2 pt-md-3">
              <a class="btn btn-icon fs-base btn-outline-secondary border-0" href="#!" data-bs-toggle="tooltip" data-bs-template='<div class="tooltip fs-xs mb-n2" role="tooltip"><div class="tooltip-inner bg-transparent text-white p-0"></div></div>' title="Instagram" aria-label="Follow us on Instagram">
                <i class="ci-instagram"></i>
              </a>
              <a class="btn btn-icon fs-base btn-outline-secondary border-0" href="#!" data-bs-toggle="tooltip" data-bs-template='<div class="tooltip fs-xs mb-n2" role="tooltip"><div class="tooltip-inner bg-transparent text-white p-0"></div></div>' title="Facebook" aria-label="Follow us on Facebook">
                <i class="ci-facebook"></i>
              </a>
              <a class="btn btn-icon fs-base btn-outline-secondary border-0" href="#!" data-bs-toggle="tooltip" data-bs-template='<div class="tooltip fs-xs mb-n2" role="tooltip"><div class="tooltip-inner bg-transparent text-white p-0"></div></div>' title="Telegram" aria-label="Follow us on Telegram">
                <i class="ci-telegram"></i>
              </a>
              <a class="btn btn-icon fs-base btn-outline-secondary border-0" href="#!" data-bs-toggle="tooltip" data-bs-template='<div class="tooltip fs-xs mb-n2" role="tooltip"><div class="tooltip-inner bg-transparent text-white p-0"></div></div>' title="WhatsApp" aria-label="Follow us on WhatsApp">
                <i class="ci-whatsapp"></i>
              </a>
            </div>
          </div>

          <!-- Columns with links that are turned into accordion on screens < 500px wide (sm breakpoint) -->
          <div class="col-lg-8 offset-lg-1">
            <div class="accordion" id="footerLinks">
              <div class="row">
                <div class="accordion-item col-sm-3 border-0">
                  <h6 class="accordion-header" id="categoriesHeading">
                    <span class="text-dark-emphasis d-none d-sm-block">Categories</span>
                    <button type="button" class="accordion-button collapsed py-3 d-sm-none" data-bs-toggle="collapse" data-bs-target="#categoriesLinks" aria-expanded="false" aria-controls="categoriesLinks">Categories</button>
                  </h6>
                  <div class="accordion-collapse collapse d-sm-block" id="categoriesLinks" aria-labelledby="categoriesHeading" data-bs-parent="#footerLinks">
                    <ul class="nav flex-column gap-2 pt-sm-3 pb-3 pb-sm-0 mt-n1 mb-1 mb-sm-0">
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Weekly sale</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Special price</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Easter is coming</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Italian dinner</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Fresh fruits</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Exotic fruits</a>
                      </li>
                    </ul>
                  </div>
                  <hr class="d-sm-none my-0">
                </div>
                <div class="accordion-item col-sm-3 border-0">
                  <h6 class="accordion-header" id="companyHeading">
                    <span class="text-dark-emphasis d-none d-sm-block">Company</span>
                    <button type="button" class="accordion-button collapsed py-3 d-sm-none" data-bs-toggle="collapse" data-bs-target="#companyLinks" aria-expanded="false" aria-controls="companyLinks">Company</button>
                  </h6>
                  <div class="accordion-collapse collapse d-sm-block" id="companyLinks" aria-labelledby="companyHeading" data-bs-parent="#footerLinks">
                    <ul class="nav flex-column gap-2 pt-sm-3 pb-3 pb-sm-0 mt-n1 mb-1 mb-sm-0">
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Blog and news</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">About us</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">FAQ page</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Contact us</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Careers</a>
                      </li>
                    </ul>
                  </div>
                  <hr class="d-sm-none my-0">
                </div>
                <div class="accordion-item col-sm-3 border-0">
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
                <div class="accordion-item col-sm-3 border-0">
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
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Order tracking</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Delivery info</a>
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
        </div>
      </div>

      <!-- Copyright -->
      <p class="container fs-xs text-body text-center text-lg-start pb-md-3 mb-0">
        &copy; All rights reserved. Made with <i class="ci-heart-filled align-middle"></i> by <span class="animate-underline"><a class="animate-target text-white text-decoration-none" href="https://createx.studio/" target="_blank" rel="noreferrer">Createx Studio</a></span>
      </p>
    </footer>


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


    <x-site-setting>
    </x-site-setting>

    <!-- Vendor scripts -->
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="assets/vendor/choices.js/public/assets/scripts/choices.min.js"></script>

    <!-- Bootstrap + Theme scripts -->
    <script src="assets/js/theme.min.js"></script>
  </body>
</html>

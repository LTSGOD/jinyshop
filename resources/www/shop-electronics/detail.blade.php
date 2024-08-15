<x-www-layout>
    <!-- Review form modal -->
    <div class="modal fade" id="reviewForm" data-bs-backdrop="static" tabindex="-1" aria-labelledby="reviewFormLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <form class="modal-content needs-validation" novalidate>
          <div class="modal-header border-0">
            <h5 class="modal-title" id="reviewFormLabel">Leave a review</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body pb-3 pt-0">
            <div class="mb-3">
              <label for="review-name" class="form-label">Your name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="review-name" required>
              <div class="invalid-feedback">Please enter your name!</div>
              <small class="form-text">Will be displayed on the comment.</small>
            </div>
            <div class="mb-3">
              <label for="review-email" class="form-label">Your email <span class="text-danger">*</span></label>
              <input type="email" class="form-control" id="review-email" required>
              <div class="invalid-feedback">Please provide a valid email address!</div>
              <small class="form-text">Authentication only - we won't spam you.</small>
            </div>
            <div class="mb-3">
              <label class="form-label">Rating <span class="text-danger">*</span></label>
              <select class="form-select" data-select='{
                "placeholderValue": "Choose rating",
                "choices": [
                  {
                    "value": "",
                    "label": "Choose rating",
                    "placeholder": true
                  },
                  {
                    "value": "1",
                    "label": "<span class=\"visually-hidden\">1 star</span>",
                    "customProperties": {
                      "icon": "<span class=\"d-flex gap-1 py-1\"><i class=\"ci-star-filled text-warning\"></i></span>",
                      "selected": "1 star"
                    }
                  },
                  {
                    "value": "2",
                    "label": "<span class=\"visually-hidden\">2 stars</span>",
                    "customProperties": {
                      "icon": "<span class=\"d-flex gap-1 py-1\"><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i></span>",
                      "selected": "2 stars"
                    }
                  },
                  {
                    "value": "3",
                    "label": "<span class=\"visually-hidden\">3 stars</span>",
                    "customProperties": {
                      "icon": "<span class=\"d-flex gap-1 py-1\"><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i></span>",
                      "selected": "3 stars"
                    }
                  },
                  {
                    "value": "4",
                    "label": "<span class=\"visually-hidden\">4 stars</span>",
                    "customProperties": {
                      "icon": "<span class=\"d-flex gap-1 py-1\"><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i></span>",
                      "selected": "4 stars"
                    }
                  },
                  {
                    "value": "5",
                    "label": "<span class=\"visually-hidden\">5 stars</span>",
                    "customProperties": {
                      "icon": "<span class=\"d-flex gap-1 py-1\"><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i><i class=\"ci-star-filled text-warning\"></i></span>",
                      "selected": "5 stars"
                    }
                  }
                ]
              }' data-select-template="true" required></select>
              <div class="invalid-feedback">Please choose your rating!</div>
            </div>
            <div class="mb-3">
              <label class="form-label" for="review-text">Review <span class="text-danger">*</span></label>
              <textarea class="form-control" rows="4" id="review-text" required></textarea>
              <div class="invalid-feedback">Please write a review!</div>
              <small class="form-text">Your review must be at least 50 characters.</small>
            </div>
            <div class="mb-3">
              <label class="form-label">Pros</label>
              <input type="text" class="form-select" data-select='{"placeholderValue": "Type and hit \"Enter\""}'>
            </div>
            <div>
              <label class="form-label">Cons</label>
              <input type="text" class="form-select" data-select='{"placeholderValue": "Type and hit \"Enter\""}'>
            </div>
          </div>
          <div class="modal-footer flex-nowrap gap-3 border-0 px-4">
            <button type="reset" class="btn btn-secondary w-100 m-0" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary w-100 m-0">Submit review</button>
          </div>
        </form>
      </div>
    </div>

    <!-- Breadcrumb -->
    <nav class="container pt-3 my-3 my-md-4" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="home-electronics">Home</a></li>
        <li class="breadcrumb-item"><a href="shop-catalog-electronics">Shop</a></li>
        <li class="breadcrumb-item active" aria-current="page">Product page</li>
      </ol>
    </nav>

    <!-- Product gallery and details -->
    @partials("detail.gallery")

    <!-- Sticky product preview + Add to cart CTA -->
    @partials("detail.preview")

    <!-- Bundle discount (Cheaper together) -->
    @partials("detail.bundle")

    <!-- Trending products (Carousel) -->
    @partials("detail.look")

    <!-- Product details and Reviews shared container -->
    <section class="container pb-5 mb-2 mb-md-3 mb-lg-4 mb-xl-5">
      <div class="row">
        <div class="col-md-7">

          <!-- Product details -->
          <div>
            <h2 class="h3 pb-2 pb-md-3">Product details</h2>
            <h3 class="h6">General specs</h3>
            <ul class="list-unstyled d-flex flex-column gap-3 fs-sm pb-3 m-0 mb-2 mb-sm-3">
              <li class="d-flex align-items-center position-relative pe-4">
                <span>Model:</span>
                <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                <span class="text-dark-emphasis fw-medium text-end">iPhone 14 Plus</span>
              </li>
              <li class="d-flex align-items-center position-relative pe-4">
                <span>Manufacturer:</span>
                <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                <span class="text-dark-emphasis fw-medium text-end">Apple Inc.</span>
              </li>
              <li class="d-flex align-items-center position-relative pe-4">
                <span>Finish:</span>
                <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                <span class="text-dark-emphasis fw-medium text-end">Ceramic, Glass, Aluminium</span>
                <i class="ci-info fs-base text-body-tertiary position-absolute top-50 end-0 translate-middle-y" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-custom-class="popover-sm" data-bs-content="Ceramic shield front, Glass back and Aluminium design"></i>
              </li>
              <li class="d-flex align-items-center position-relative pe-4">
                <span>Capacity:</span>
                <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                <span class="text-dark-emphasis fw-medium text-end">128GB</span>
              </li>
              <li class="d-flex align-items-center position-relative pe-4">
                <span>Chip:</span>
                <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                <span class="text-dark-emphasis fw-medium text-end">A15 Bionic chip</span>
              </li>
            </ul>
            <h3 class="h6">Display</h3>
            <ul class="list-unstyled d-flex flex-column gap-3 fs-sm pb-1 m-0 mb-2 mb-sm-3">
              <li class="d-flex align-items-center position-relative pe-4">
                <span>Diagonal:</span>
                <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                <span class="text-dark-emphasis fw-medium text-end">6.1"</span>
              </li>
              <li class="d-flex align-items-center position-relative pe-4">
                <span>Screen type:</span>
                <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                <span class="text-dark-emphasis fw-medium text-end">Super Retina XDR</span>
                <i class="ci-info fs-base text-body-tertiary position-absolute top-50 end-0 translate-middle-y" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-custom-class="popover-sm" data-bs-content="HDR display, True Tone, Wide color (P3), Haptic Touch, 800 nits brightness"></i>
              </li>
              <li class="d-flex align-items-center position-relative pe-4">
                <span>Resolution:</span>
                <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                <span class="text-dark-emphasis fw-medium text-end">2778x1284px at 458ppi</span>
              </li>
              <li class="d-flex align-items-center position-relative pe-4">
                <span>Refresh rate:</span>
                <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                <span class="text-dark-emphasis fw-medium text-end">120 Hz</span>
              </li>
            </ul>
            <div class="nav">
              <a class="nav-link text-primary animate-underline px-0" href="shop-product-details-electronics">
                <span class="animate-target">See all product details</span>
                <i class="ci-chevron-right fs-base ms-1"></i>
              </a>
            </div>
          </div>

          @livewire('product-review', ["viewFile"=> "jiny-shop-goods::detail_v2.elec_review"])
        </div>


        <!-- Sticky product preview visible on screens > 991px wide (lg breakpoint) -->
        <aside class="col-md-5 col-xl-4 offset-xl-1 d-none d-md-block" style="margin-top: -100px">
          <div class="position-sticky top-0 ps-3 ps-lg-4 ps-xl-0" style="padding-top: 100px">
            <div class="border rounded p-3 p-lg-4">
              <div class="d-flex align-items-center mb-3">
                <div class="ratio ratio-1x1 flex-shrink-0" style="width: 110px">
                  <img src="/assets/img/shop/electronics/thumbs/10.png" width="110" alt="iPhone 14">
                </div>
                <div class="w-100 min-w-0 ps-2 ps-sm-3">
                  <div class="d-flex align-items-center gap-2 mb-2">
                    <div class="d-flex gap-1 fs-xs">
                      <i class="ci-star-filled text-warning"></i>
                      <i class="ci-star-filled text-warning"></i>
                      <i class="ci-star-filled text-warning"></i>
                      <i class="ci-star-filled text-warning"></i>
                      <i class="ci-star text-body-tertiary opacity-75"></i>
                    </div>
                    <span class="text-body-tertiary fs-xs">68</span>
                  </div>
                  <h4 class="fs-sm fw-medium mb-2">Apple iPhone 14 Plus 128GB Blue</h4>
                  <div class="h5 mb-0">$940.00</div>
                </div>
              </div>
              <div class="d-flex gap-2 gap-lg-3">
                <button type="button" class="btn btn-primary w-100 animate-slide-end">
                  <i class="ci-shopping-cart fs-base animate-target ms-n1 me-2"></i>
                  Add to cart
                </button>
                <button type="button" class="btn btn-icon btn-secondary animate-pulse" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-sm" data-bs-title="Add to Wishlist" aria-label="Add to Wishlist">
                  <i class="ci-heart fs-base animate-target"></i>
                </button>
                <button type="button" class="btn btn-icon btn-secondary animate-rotate" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-sm" data-bs-title="Compare" aria-label="Compare">
                  <i class="ci-refresh-cw fs-base animate-target"></i>
                </button>
              </div>
            </div>
          </div>
        </aside>
      </div>
    </section>


    <!-- Instagram feed -->
    @partials('instagram_feed')


</x-www-layout>

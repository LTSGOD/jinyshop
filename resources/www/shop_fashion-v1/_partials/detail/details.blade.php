<section class="container pt-5 mt-2 mt-sm-3 mt-lg-4 mt-xl-5">

    <!-- Nav tabs -->
    <ul class="nav nav-underline flex-nowrap border-bottom" role="tablist">
        <li class="nav-item me-md-1" role="presentation">
            <button type="button" class="nav-link active" id="description-tab" data-bs-toggle="tab"
                data-bs-target="#description-tab-pane" role="tab" aria-controls="description-tab-pane"
                aria-selected="true">
                Description
            </button>
        </li>
        <li class="nav-item me-md-1" role="presentation">
            <button type="button" class="nav-link" id="washing-tab" data-bs-toggle="tab"
                data-bs-target="#washing-tab-pane" role="tab" aria-controls="washing-tab-pane"
                aria-selected="false">
                Washing<span class="d-none d-md-inline">&nbsp;instructions</span>
            </button>
        </li>
        <li class="nav-item me-md-1" role="presentation">
            <button type="button" class="nav-link" id="delivery-tab" data-bs-toggle="tab"
                data-bs-target="#delivery-tab-pane" role="tab" aria-controls="delivery-tab-pane"
                aria-selected="false">
                Delivery<span class="d-none d-md-inline">&nbsp;and returns</span>
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button type="button" class="nav-link" id="reviews-tab" data-bs-toggle="tab"
                data-bs-target="#reviews-tab-pane" role="tab" aria-controls="reviews-tab-pane"
                aria-selected="false">
                Reviews<span class="d-none d-md-inline">&nbsp;({{getProductStarInfo($request->slug)['totalReview']}})</span>
            </button>
        </li>
    </ul>

    <div class="tab-content pt-4 mt-sm-1 mt-md-3">

        <!-- Description tab -->
        <div class="tab-pane fade show active" id="description-tab-pane" role="tabpanel"
            aria-labelledby="description-tab">
            <div class="row">
                <div class="col-lg-6 fs-sm">
                    <ul class="list-unstyled">
                        <li>Model's height: <span class="text-dark-emphasis fw-semibold">176 cm</span></li>
                        <li>The model is wearing size: <span class="text-dark-emphasis fw-semibold">S/36</span>
                        </li>
                    </ul>
                    <p>This skirt is designed to fall just below the knee, offering a flattering length that is
                        suitable for various occasions. It is made from a soft and lightweight fabric that drapes
                        beautifully, ensuring comfort and ease of movement. The blue color adds a vibrant touch,
                        making it a standout piece in your wardrobe.</p>
                    <ul>
                        <li>fitted waistband</li>
                        <li>fastened with a hidden zipper</li>
                        <li>midi length</li>
                    </ul>
                    <p class="mb-0">The blue color of the skirt allows for easy pairing with a variety of tops.
                        You can opt for a crisp white blouse for a classic and polished outfit, or choose a
                        patterned or contrasting-colored top for a more vibrant and fashion-forward look.</p>
                </div>
                <div class="col-lg-6 col-xl-5 offset-xl-1">
                    <div class="row row-cols-2 g-4 my-0 my-lg-n2">
                        <div class="col">
                            <div class="py-md-1 py-lg-2 pe-sm-2">
                                <i class="ci-feather fs-3 text-body-emphasis mb-2 mb-md-3"></i>
                                <h6 class="fs-sm mb-2">Lightweight</h6>
                                <p class="fs-sm mb-0">Designed with lightweight European fabrics, perfect for life
                                    on the go.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="py-md-1 py-lg-2 ps-sm-2">
                                <i class="ci-hanger fs-3 text-body-emphasis mb-2 mb-md-3"></i>
                                <h6 class="fs-sm mb-2">Perfect fit</h6>
                                <p class="fs-sm mb-0">Our clothing is designed to fit any body type, find your
                                    perfect look!</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="py-md-1 py-lg-2 pe-sm-2">
                                <i class="ci-delivery-2 fs-3 text-body-emphasis mb-2 mb-md-3"></i>
                                <h6 class="fs-sm mb-2">Free delivery</h6>
                                <p class="fs-sm mb-0">Get free door-to-door delivery for all orders over $250.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="py-md-1 py-lg-2 ps-sm-2">
                                <i class="ci-leaf fs-3 text-body-emphasis mb-2 mb-md-3"></i>
                                <h6 class="fs-sm mb-2">Sustainability</h6>
                                <p class="fs-sm mb-0">We are proud to offer a Lifetime Guarantee on all products.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Washing instructions tab -->
        <div class="tab-pane fade fs-sm" id="washing-tab-pane" role="tabpanel" aria-labelledby="washing-tab">
            <p>Following below washing instructions can help prolong the life of your denim skirt and keep it
                looking its best for longer.</p>
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col mb-3 mb-md-0">
                    <dl class="pe-lg-2 pe-xl-3 mb-0">
                        <dt>Machine wash cold</dt>
                        <dd>Turn the denim midi skirt inside out before placing it in the washing machine. Use cold
                            water to help preserve the color and fabric integrity.</dd>
                        <dt>Gentle cycle</dt>
                        <dd>Select the gentle or delicate cycle on your washing machine to prevent excessive
                            agitation, which can cause unnecessary wear and tear on the denim.</dd>
                        <dt>Mild detergent</dt>
                        <dd>Use a mild detergent specifically formulated for denim or delicate fabrics. Avoid using
                            bleach or harsh chemicals, as they can damage the denim fibers.</dd>
                        <dt>Avoid overloading</dt>
                        <dd class="mb-0">Do not overcrowd the washing machine with too many garments. This can
                            lead to inadequate cleaning and may cause friction that damages the denim skirt.</dd>
                    </dl>
                </div>
                <div class="col">
                    <dl class="ps-lg-2 ps-xl-3 mb-0">
                        <dt>Wash separately</dt>
                        <dd>Wash the denim midi skirt separately from items with zippers, buttons, or other sharp
                            accessories that could snag or damage the fabric.</dd>
                        <dt>Skip fabric softener</dt>
                        <dd>Avoid using fabric softener, as it can leave a residue on the denim and reduce its
                            natural stiffness, which is characteristic of denim garments.</dd>
                        <dt>Air dry or tumble dry low</dt>
                        <dd>After washing, reshape the skirt and either lay it flat to air dry or tumble dry on a
                            low heat setting. Avoid high heat, as it can shrink or distort the denim.</dd>
                        <dt>Ironing</dt>
                        <dd class="mb-0">If necessary, iron the denim midi skirt inside out using a low to medium
                            heat setting. Avoid ironing directly on any embellishments or pockets to prevent damage.
                        </dd>
                    </dl>
                </div>
            </div>
        </div>

        <!-- Delivery and returns tab -->
        <div class="tab-pane fade fs-sm" id="delivery-tab-pane" role="tabpanel" aria-labelledby="delivery-tab">
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col mb-3 mb-md-0">
                    <div class="pe-lg-2 pe-xl-3">
                        <h6>Delivery</h6>
                        <p>We strive to deliver your denim midi skirt with pockets to you as quickly as possible.
                            Our estimated delivery times are as follows:</p>
                        <ul class="list-unstyled">
                            <li>Standard delivery: <span class="text-dark-emphasis fw-semibold">Within 3-7 business
                                    days</span></li>
                            <li>Express delivery: <span class="text-dark-emphasis fw-semibold">Within 1-3 business
                                    days</span></li>
                        </ul>
                        <p>Please note that delivery times may vary depending on your location and any ongoing
                            promotions or holidays. You can track your order using the provided tracking number once
                            your package has been dispatched.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="ps-lg-2 ps-xl-3">
                        <h6>Returns</h6>
                        <p>We want you to be completely satisfied with your denim midi skirt with pockets. If for
                            any reason you are not happy with your purchase, you can return it within 30 days of
                            receiving your order for a full refund or exchange.</p>
                        <p>To be eligible for a return, the skirt must be unused, unwashed, and in its original
                            condition with tags attached. Please ensure that all packaging is intact when returning
                            the item.</p>
                        <p class="mb-0">To initiate a return, please contact our customer service team with your
                            order number and reason for the return. We will provide you with a return shipping label
                            and instructions on how to proceed. Please note that shipping fees are non-refundable.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Reviews tab -->
        @livewire('product-review',
            ["viewFile"=>"jiny-shop-goods::detail_v2.fashionv1_review"]
        )
    </div>
</section>

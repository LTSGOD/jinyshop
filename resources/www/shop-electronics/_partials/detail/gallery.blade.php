<!-- Nav links + Reviews -->
@livewire('product-nav-reviews')

<!-- Gallery + Product options -->
<section class="container pb-5 mb-1 mb-sm-2 mb-md-3 mb-lg-4 mb-xl-5">
  <div class="row">

    <!-- 상품이미지 슬라이더 -->
    @livewire('ShopProductSlider', ["viewFile"=>"jiny-shop-goods::detail_v2.elec_slider"])

    <!-- Product details and options -->
    <div class="col-md-6">
      <div class="ps-md-4 ps-xl-5">

          @livewire('shop-detail-title')

          @livewire('shop-detail-price')

          @livewire('shop-detail-option')

          @livewire('shop-detail-cart')


          {{-- @livewire('shop-goods-info') --}}

        </div>
    </div>
  </div>
</section>

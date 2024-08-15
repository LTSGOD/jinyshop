<section class="container">
    <div class="row">

        <!-- 상품이미지 슬라이더 -->
        @livewire('ShopProductSlider', [
            'viewFile' => "jiny-shop-goods::detail_v2.fashionv1_slider",
        ])




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

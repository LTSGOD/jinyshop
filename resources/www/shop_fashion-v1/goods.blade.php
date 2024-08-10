<x-www-layout>


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
        <div class="row align-items-start">
            <!-- Filter sidebar that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
            <aside class="col-lg-3">
                @partials('goods.aside')
            </aside>

            <!-- Product grid -->
            <div class="col-lg-9">
                @partials('goods.grid')

                {{-- 드래그 하여 상품 올리기 --}}
                @livewire('shop-product-upload-drag')

            </div>
        </div>
    </section>



    @partials('instagram_feed')


</x-www-layout>

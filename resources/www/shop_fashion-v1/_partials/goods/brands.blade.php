<div class="accordion-item border-0 pb-1 pb-xl-2">
    <h4 class="accordion-header" id="headingBrands">
      <button type="button" class="accordion-button p-0 pb-3" data-bs-toggle="collapse" data-bs-target="#brands" aria-expanded="true" aria-controls="brands">
        Brands
      </button>
    </h4>

    <div class="accordion-collapse collapse show" id="brands" aria-labelledby="headingBrands">
        @livewire('shop-brand-filter',[
            //'viewFile' => "goods.brands_filter"
        ])

    </div>
  </div>

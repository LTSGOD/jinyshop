<div class="accordion-item border-0 pb-1 pb-xl-2">
    <h4 class="accordion-header" id="headingColor">
      <button type="button" class="accordion-button p-0 pb-3" data-bs-toggle="collapse" data-bs-target="#color" aria-expanded="true" aria-controls="color">
        Color
      </button>
    </h4>
    <div class="accordion-collapse collapse show" id="color" aria-labelledby="headingColor">
      <div class="accordion-body p-0 pb-4 mb-1 mb-xl-2">
        <div class="d-flex flex-column gap-2">

            @livewire('shop-option-filter',[
                'type' => "color",
                'viewFile' => "jiny-shop-goods::goods.filter_option_color"
            ])


        </div>
      </div>
    </div>
  </div>

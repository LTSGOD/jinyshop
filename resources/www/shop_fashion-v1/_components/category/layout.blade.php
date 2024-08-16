<div class="navbar-nav">
    <div class="dropdown position-static pb-lg-2">
      <button type="button" class="nav-link animate-underline fw-semibold text-uppercase ps-0" data-bs-toggle="dropdown" data-bs-trigger="hover" data-bs-auto-close="outside" aria-expanded="false">
        <i class="ci-menu fs-lg me-2"></i>
        <span class="animate-target">Categories</span>
      </button>
      <div class="dropdown-menu w-100 p-4 px-xl-5" style="--cz-dropdown-spacer: .75rem">

        @php
            $rows = menuLoad("category.json")['items'];
        @endphp

        <x-www_category-tab :rows="$rows">

        </x-www_category-tab>

        {{-- <ul class="nav nav-underline justify-content-lg-center mt-n2 mt-lg-0 mb-4" role="tablist">
        @foreach(menuLoad("category.json")['items'] as $i => $item)
        <li class="nav-item" role="presentation">
            @if($i == 0)
            <button type="button" class="nav-link text-uppercase active"
                id="{{$item['title']}}-tab" data-bs-toggle="tab"
                data-bs-target="#{{$item['title']}}-tab-pane"
                role="tab" aria-controls="{{$item['title']}}-tab-pane"
                aria-selected="true">
                {{$item['title']}}
            </button>
            @else
            <button type="button" class="nav-link text-uppercase"
            id="{{$item['title']}}-tab" data-bs-toggle="tab" data-bs-target="#{{$item['title']}}-tab-pane"
            role="tab" aria-controls="{{$item['title']}}-tab-pane" aria-selected="false">
                {{$item['title']}}
            </button>
            @endif
        </li>
        @endforeach
        </ul> --}}

        <!-- Nav tabs -->
        {{-- <ul class="nav nav-underline justify-content-lg-center mt-n2 mt-lg-0 mb-4" role="tablist">
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
        </ul> --}}


        <!-- Tab panes -->
        <div class="tab-content pb-xl-4">
            <x-www_category-content :rows="$rows"></x-www_category-content>
        </div>

      </div>
    </div>
  </div>

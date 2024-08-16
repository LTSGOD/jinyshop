@if(isset($rows['items']))
@foreach($rows['items'] as $key => $item)
    <div class="col-lg-2">
        <a class="d-inline-flex animate-underline h6 text-dark-emphasis text-decoration-none mb-2" href="/shop-catalog-fashion">
          <span class="animate-target">
            {{$item['title']}}
          </span>
        </a>
        <ul class="nav flex-column gap-2 mt-0">
            @if(isset($item['items']))
            @foreach($item['items'] as $sub)
            <li class="d-flex w-100 pt-1">
              <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                href="javascript:void(0);">
                    {{$sub['title']}}
                </a>
            </li>
            @endforeach
            @endif
        </ul>
    </div>

{{--
<div class="col-lg-2">
    <a class="d-inline-flex animate-underline h6 text-dark-emphasis text-decoration-none mb-2" href="/shop-catalog-fashion">
      <span class="animate-target">
        Clothing


      </span>
    </a>
    <ul class="nav flex-column gap-2 mt-0">
      <li class="d-flex w-100 pt-1">
        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Shirts &amp; Tops</a>
      </li>
      <li class="d-flex w-100 pt-1">
        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Coats &amp; Outerwear</a>
      </li>
      <li class="d-flex w-100 pt-1">
        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Underwear</a>
      </li>
      <li class="d-flex w-100 pt-1">
        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Sweatshirts</a>
      </li>
      <li class="d-flex w-100 pt-1">
        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Dresses</a>
      </li>
      <li class="d-flex w-100 pt-1">
        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">Swimwear</a>
      </li>
      <li class="d-flex w-100 pt-1">
        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="/shop-catalog-fashion">View all</a>
      </li>
    </ul>
  </div> --}}
@endforeach
@endif

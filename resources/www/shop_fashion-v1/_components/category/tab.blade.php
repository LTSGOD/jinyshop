<ul class="nav nav-underline justify-content-lg-center mt-n2 mt-lg-0 mb-4" role="tablist">
    @foreach($rows as $i => $item)
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
</ul>

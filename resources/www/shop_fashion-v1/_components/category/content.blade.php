@foreach($rows as $i => $item)
<div class="tab-pane fade @if($i==0) show active @endif" id="{{$item['title']}}-tab-pane" role="tabpanel" aria-labelledby="{{$item['title']}}-tab">
    <div class="row g-4">

        <x-www_category-second :rows="$item">

        </x-www_category-second>


        {{-- 외부정보 _partials 의 blade 삽입 --}}
        @if( isset($item['blade']) && $item['blade'] )
            @includeIf('www::shop_fashion-v1._partials.'.$item['blade'])
        @endif

    </div>
</div>
@endforeach


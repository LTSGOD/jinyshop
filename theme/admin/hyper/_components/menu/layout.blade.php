<ul class="side-nav">

    @foreach(menuLoad("jiny-admin.json")['items'] as $item)
        @if(isset($item['header']) && $item['header'])
        <x-theme_menu-title>
            {{$item['title']}}
        </x-theme_menu-title>
        @else
            @if( isset($item['items']))
                <x-theme_menu-second :row="$item">
                    {{$item['title']}}
                </x-theme_menu-second>
            @else
                @if(isset($item['href']))
                <x-theme_menu-item href="{{$item['href']}}">
                    {{$item['title']}}
                </x-theme_menu-item>
                @else
                <x-theme_menu-item>
                    {{$item['title']}}
                </x-theme_menu-item>
                @endif
            @endif
        @endif
    @endforeach

    {{-- custom add content --}}
    {{$slot}}
</ul>

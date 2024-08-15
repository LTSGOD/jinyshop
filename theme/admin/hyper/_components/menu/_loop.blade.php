@foreach($rows as $item)
    @if(isset($item['header']) && $item['header'])
    <x-theme_menu-title>
        {{$item['title']}}
    </x-theme_menu-title>
    @else
        @if( isset($item['items']))
            @theme('_components.menu.second', [
                'row' => $item
            ])
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


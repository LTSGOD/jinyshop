@foreach($rows as $item)
    @if(isset($item['header']) && $item['header'])
    <li class="side-nav-title side-nav-item">
        {{$item['title']}}
    </li>
    @else
        @if( isset($item['items']))
        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="/#sidebarEcommerce" aria-expanded="false"
                aria-controls="sidebarEcommerce" class="side-nav-link">
                <i class="uil-store"></i>
                <span> {{$item['title']}} </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarEcommerce">
                <ul class="side-nav-second-level">
                    @foreach($item['items'] as $sub)
                    <li>
                        <a href="/apps-ecommerce-products">{{$sub['title']}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </li>

        @else
        <li class="side-nav-item">
            <a href="/apps-calendar" class="side-nav-link">
                <i class="uil-calender"></i>
                <span>{{$item['title']}}</span>
            </a>
        </li>
        @endif
    @endif
@endforeach


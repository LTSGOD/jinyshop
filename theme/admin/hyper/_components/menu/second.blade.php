<li class="side-nav-item">
    <a data-bs-toggle="collapse" href="/#{{$row['title']}}" aria-expanded="false"
                aria-controls="{{$row['title']}}" class="side-nav-link">
        <i class="uil-store"></i>
        <span>
            {{$slot}}
        </span>
        <span class="menu-arrow"></span>
    </a>

    <div class="collapse" id="{{$row['title']}}">
        <ul class="side-nav-second-level">
            @foreach($row['items'] as $sub)
            <li>
                @if(isset($sub['href']))
                <a href="{{$sub['href']}}">
                    {{$sub['title']}}
                </a>
                @else
                <a href="javascript:void(0)">
                    {{$sub['title']}}
                </a>
                @endif

            </li>
            @endforeach
        </ul>
    </div>
</li>

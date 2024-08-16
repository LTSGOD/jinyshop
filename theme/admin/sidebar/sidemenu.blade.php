@foreach($rows as $item)
    @if(isset($item['header']) && $item['header'])
    <li class="sidebar-header">
        {{$item['title']}}
    </li>
    @else
    <li class="sidebar-item">
        <a data-bs-target="#admin-theme"
            data-bs-toggle="collapse"
            class="sidebar-link collapsed"
            aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout align-middle"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
            <span class="align-middle">
                {{$item['title']}}
            </span>
        </a>

        @if(isset($item['items']))
        <ul id="admin-theme"
            class="sidebar-dropdown list-unstyled collapse"
            data-bs-parent="#sidebar">
            @foreach($item['items'] as $sub)
            <li class="sidebar-item">
                <a class="sidebar-link" href="/admin/themes">
                    {{$sub['title']}}
                </a>
            </li>
            @endforeach
        </ul>
        @endif
    </li>
    @endif
    @endforeach

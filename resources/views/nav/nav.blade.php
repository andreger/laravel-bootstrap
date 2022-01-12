<ul class="nav {{$classTag}}">
    @foreach ($items as $item)
        <li class="nav-item">
            <a class="nav-link
                     {{ isset($item['id']) && ($item['id'] == $selected) ? 'active' : '' }}
                     {{ isset($item['disabled']) && $item['disabled'] == true ? 'disabled' : ''}}"
                href="{{ $item['href'] ?? '' }}">

                @include('bs::common.fontAwesome', [
                    'fas' => $item['fas'] ?? null,
                    'far' => $item['far'] ?? null,
                    'fab' => $item['fab'] ?? null,
                ])
                {{ $item['text'] ?? '' }}
            </a>
        </li>
    @endforeach
</ul>

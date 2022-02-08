<ul class="{{$ulClass}}">
    @if($items)
        @foreach ($items as $item)
            <li class="{{ $liClass ?? null }}">
                <a class="{{ $aClass ?? null }}
                        {{ isset($item['active']) && $item['active'] == true ? 'active' : null }}
                        {{ isset($item['disabled']) && $item['disabled'] == true ? 'disabled' : null}}"
                    href="{{ $item['href'] ?? null }}">

                    @include('bs::common.fontAwesome', [
                        'fas' => $item['fas'] ?? null,
                        'far' => $item['far'] ?? null,
                        'fab' => $item['fab'] ?? null,
                    ])
                    {{ $item['text'] ?? '' }}
                </a>
            </li>
        @endforeach
    @endif
</ul>

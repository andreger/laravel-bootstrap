<nav {!! $dividerTag !!} aria-label="breadcrumb">
    <ol class="breadcrumb">
        @if ($items)
            @foreach($items as $item)
                <li class="breadcrumb-item {{ isset($item['href']) ? '' : 'active' }}">
                    @if (isset($item['href']))
                        <a href="{{ $item['href'] }}">
                            {{ $item['text'] }}
                        </a>
                    @else
                        {{ $item['text'] }}
                    @endif
                </li>
            @endforeach
        @endif
    </ol>
</nav>

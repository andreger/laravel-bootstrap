<div class="card {{ $themeColorClass }} {{ $cardClass }}">
    @if ($header)
        <div class="card-header {{ $headerClass }}">
            {{ $header }}
        </div>
    @endif

    @if ($slot)
        <div class="card-body {{ $bodyClass }}">
            {{ $slot }}
        </div>
    @endif

    @if ($footer)
        <div class="card-footer {{ $footerClass }}">
            {{ $footer }}
        </div>
    @endif
</div>

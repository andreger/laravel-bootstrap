<div class="card {{ $cardClass }} {{ $themeColorCardClass }}">
    @if ($header)
        <div class="card-header {{ $headerClass }} {{ $themeColorHeaderClass }}">
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

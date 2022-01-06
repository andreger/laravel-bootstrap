<div class="alert {{ $themeColor ? "alert-$themeColor" : null }} {{ $dismissible ? 'alert-dismissible fade show' : null }}" role="alert">
    @if($header)
        <h4 class="alert-heading">{!! $header !!}</h4>
    @endif

    {!! $text !!}

    @if($footer)
        <hr>
        <p class="mb-0">{!! $footer !!}</p>
    @endif

    @if($dismissible)
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    @endif
</div>

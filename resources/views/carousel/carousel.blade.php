<div id="{{ $id }}" class="carousel slide {{ $crossfade ? 'carousel-fade' : '' }}" data-bs-ride="carousel"
    {{ ! $touch ? "data-bs-touch='false'" : '' }}>
    @if ($indicators)
    <div class="carousel-indicators">
        @foreach ($slides as $slide)
            <button type="button" data-bs-target="#{{ $id }}" data-bs-slide-to="{{ $loop->index }}" {!! $loop->first ? "class='active'" : ''   !!}></button>
        @endforeach
    </div>
    @endif
    <div class="carousel-inner">
        @foreach ($slides as $slide)
        <div class="carousel-item {{ $loop->first ? 'active' : ''  }}" {!! isset($slide['interval']) ? "alt='{$slide['interval']}'" : ''  !!}>
            <img src="{{ $slide['image'] ?? null }}" class="d-block w-100" {!! isset($slide['title']) ? "alt='{$slide['title']}'" : ''  !!} >

            @if (isset($slide['title']) || isset($slide['description']))
            <div class="carousel-caption d-none d-md-block">
                @if (isset($slide['title']))
                    <h5>{{ $slide['title'] }}</h5>
                @endif
                @if (isset($slide['description']))
                    <p>{{ $slide['description'] }}</p>
                @endif
            </div>
            @endif
        </div>
        @endforeach
    </div>
    @if ($controls)
        <button class="carousel-control-prev" type="button" data-bs-target="#{{ $id }}" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#{{ $id }}" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    @endif
</div>

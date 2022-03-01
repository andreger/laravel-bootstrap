<?php

namespace LaravelBootstrap\View\Component\Carousel;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Carousel extends Component
{
    public $id;

    public $slides;

    public $controls;

    public $indicators;

    public $crossfade;

    public $touch;

    public $class;

    public $darkTheme = false;

    /**
     * Carousel constructor.
     *
     * @param string|null $id
     * @param array $slides
     * @param bool $controls
     * @param bool $indicators
     * @param bool $crossfade
     * @param bool $touch
     */
    public function __construct(
        string $id = null,
        array $slides = [],
        bool $controls = true,
        bool $indicators = true,
        bool $crossfade = false,
        bool $touch = true,
        string $class = null
    )
    {
        if (! $id) {
            $this->id = 'carousel-' . Str::random(10);
        }
        else {
            $this->id = $id;
        }

        $this->slides = $slides;
        $this->controls = $controls;
        $this->indicators = $indicators;
        $this->crossfade = $crossfade;
        $this->touch = $touch;
        $this->class = $class;
    }


    /**
     * @inheritDoc
     */
    public function render()
    {
        return view('bs::carousel.carousel');
    }
}

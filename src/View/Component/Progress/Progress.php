<?php

namespace LaravelBootstrap\View\Component\Progress;

use Illuminate\View\Component;

class Progress extends Component
{
    public $themeColor;

    public $value;

    public $text;

    public $class;

    public $height;

    public $striped;

    public $animated;

    /**
     * Progress constructor.
     *
     * @param string|null $themeColor
     * @param string|null $value
     * @param string|null $text
     * @param string|null $class
     * @param string|null $height
     * @param bool $striped
     * @param bool $animated
     */
    public function __construct(
        string $themeColor = null,
        string $value = null,
        string $text = null,
        string $class = null,
        string $height = null,
        bool $striped = false,
        bool $animated = false
    )
    {
        if(! $this->themeColor) {
            $this->themeColor = $themeColor;
        }

        $this->value = $value;
        $this->text = $text;
        $this->class = $class;
        $this->height = $height;
        $this->striped = $striped;
        $this->animated = $animated;
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        $externalClass = $this->class ? " {$this->class}" : '';

        $internalClassValue = $this->themeColor ? " bg-{$this->themeColor}" : '';
        $internalClassValue .= $this->striped ? ' progress-bar-striped' : '';
        $internalClassValue .= $this->animated ? ' progress-bar-animated' : '';

        $heightAttr = $this->height ? " style='height:{$this->height}px'" : '';
        $width = $this->value ? " style='width:{$this->value}%'" : '';

        return view("bs::progress.progress", [
            'externalClass' => "class='progress {$externalClass}'",
            'internalClass' => "class='progress-bar {$internalClassValue}'",
            'heightAttr' => $heightAttr,
            'width' => $width,
        ]);
    }
}

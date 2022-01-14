<?php


namespace LaravelBootstrap\View\Component\Badge;


use LaravelBootstrap\Helpers\ThemeColor;

class Badge extends \Illuminate\View\Component
{

    public $themeColor;

    public $class;

    public $text;

    public function __construct(
        $themeColor = 'primary',
        $class = null,
        $text = null
    )
    {
        if(! $this->themeColor) {
            $this->themeColor = $themeColor;
        }

        $this->class = $class;
        $this->text = $text;
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        return view("bs::badge.badge", [
            'textColorClass' => ThemeColor::getTextColor($this->themeColor)
        ]);
    }
}

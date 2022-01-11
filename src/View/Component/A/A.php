<?php


namespace LaravelBootstrap\View\Component\A;


class A extends \Illuminate\View\Component
{

    public $id;

    public $themeColor;

    public $href;

    public $text;

    public $target;

    public $class;

    public $icon;

    public function __construct(
        $id = null,
        $themeColor = null,
        $href = null,
        $text = null,
        $target = null,
        $class = null,
        $icon = null
    )
    {
        if(! $this->themeColor) {
            $this->themeColor = $themeColor;
        }

        $this->id = $id;
        $this->href = $href;
        $this->text = $text;
        $this->target = $target;
        $this->class = $class;
        $this->icon = $icon;
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        $buttonClass = $this->themeColor ? "btn btn-{$this->themeColor}" : '';

        return view("bs::a.a", [
            'hrefTag' => $this->href ? "href={$this->href}" : '',
            'targetTag' => $this->target ? "target={$this->target}" : '',
            'classTag' => "{$buttonClass} {$this->class}",
        ]);
    }
}

<?php

namespace Andreger\Bootstrap\View\Component\A;

use Illuminate\View\Component;

class A extends Component
{

    public $id;

    public $themeColor;

    public $href;

    public $text;

    public $target;

    public $class;

    public $fas;

    public $far;

    public $fab;

    public $dusk;

    public function __construct(
        $id = null,
        $themeColor = null,
        $href = null,
        $text = null,
        $target = null,
        $class = null,
        $fas = null,
        $far = null,
        $fab = null,
        $dusk = null
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
        $this->fas = $fas;
        $this->far = $far;
        $this->fab = $fab;
        $this->dusk = $dusk;
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
            'duskTag' => $this->dusk ? "dusk={$this->dusk}" : '',
        ]);
    }
}

<?php

namespace LaravelBootstrap\View\Component\Nav;

use Illuminate\View\Component;

class Nav extends Component
{
    public $items;

    public $selected;

    public $baseClass;

    public $class;

    public function __construct(array $items = null, string $selected = null, string $class = null)
    {
        $this->items = $items;
        $this->selected = $selected;
        $this->class = $class;
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        return view("bs::nav.nav", [
            'classValue' => "nav {$this->baseClass} {$this->class}"
        ]);
    }
}

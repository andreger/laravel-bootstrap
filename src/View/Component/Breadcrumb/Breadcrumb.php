<?php

namespace Andreger\Bootstrap\View\Component\Breadcrumb;

use Illuminate\View\Component;

class Breadcrumb extends Component
{
    public $items;

    public $class;

    public $divider;

    public function __construct($items = null, $class = null, $divider = null)
    {
        $this->items = $items;
        $this->class = $class;
        $this->divider = $divider;
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        $dividerTag = $this->divider ? "style=\"--bs-breadcrumb-divider: '{$this->divider}';\"" : '';

        return view("bs::breadcrumb.breadcrumb", [
            'dividerTag' => $dividerTag,
        ]);
    }
}

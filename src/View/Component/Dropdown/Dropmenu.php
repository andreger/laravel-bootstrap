<?php

namespace LaravelBootstrap\View\Component\Dropdown;

use Illuminate\View\Component;

class Dropmenu extends Component
{
    public $id;

    public $items;

    public $themeColor;

    public function __construct(string $id = null, array $items = null, string $themeColor = null)
    {
        $this->id = $id;
        $this->items = $items;

        if (! $this->themeColor) {
            $this->themeColor = $themeColor;
        }
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        return view('bs::dropdown.menu', [
            'classValue' => $this->getClassValue(),
        ]);
    }

    private function getClassValue()
    {
        $values = ['dropdown-menu'];

        if ($this->themeColor) {
            $values[] = "dropdown-menu-{$this->themeColor}";
        }

        return implode(' ', $values);
    }
}

<?php

namespace LaravelBootstrap\View\Component\Dropdown;

use Illuminate\View\Component;

class Dropdown extends Component
{
    public $id;

    public $text;

    public $items;

    public $themeColor;

    public $direction = 'dropdown';

    public function __construct(string $id = null, string $text = null, array $items = null, string $themeColor = null)
    {
        $this->id = $id;
        $this->text = $text;
        $this->items = $items;
        $this->themeColor = $themeColor;
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        return view('bs::dropdown.dropdown', [
            'classValue' => $this->getClassValue(),
        ]);
    }

    private function getClassValue()
    {
        $values = ['btn', 'dropdown-toggle'];

        if ($this->themeColor) {
            $values[] = "btn-{$this->themeColor}";
        }

        return implode(' ', $values);
    }
}

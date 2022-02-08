<?php

namespace LaravelBootstrap\View\Component\Dropdown;

use Illuminate\View\Component;

class DropdownButton extends Component
{
    public $id;

    public $text;

    public $themeColor;

    public function __construct(string $id = null, string $text = null, string $themeColor = null)
    {
        $this->id = $id;
        $this->text = $text;
        $this->themeColor = $themeColor;
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        return view('bs::dropdown.button', [
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

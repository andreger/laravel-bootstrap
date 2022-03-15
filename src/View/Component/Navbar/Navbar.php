<?php

namespace Andreger\Bootstrap\View\Component\Navbar;

use Illuminate\View\Component;

class Navbar extends Component
{
    public $items;

    public $themeColor;

    public $bgThemeColor;

    public $class;

    public function __construct(
        array $items = null,
        string $class = null,
        string $themeColor = 'light',
        string $bgThemeColor = 'light'
    ) {
        $this->items = $items;
        $this->themeColor = $themeColor;
        $this->bgThemeColor = $bgThemeColor;
        $this->class = $class;
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        return view("bs::navbar.navbar", [
            'classValue' => $this->getClassValue()
        ]);
    }

    private function getClassValue()
    {
        $values = ["navbar", "navbar-expand-lg"];

        if ($this->themeColor) {
            $values[] = "navbar-{$this->themeColor}";
        }

        if ($this->bgThemeColor) {
            $values[] = "bg-{$this->bgThemeColor}";
        }

        if ($this->class) {
            $values[] = "$this->class";
        }

        return implode(" ", $values);
    }
}

<?php


namespace Andreger\Bootstrap\View\Component\Button;


use Illuminate\View\Component;

class Button extends Component
{

    public $id;

    public $themeColor;

    public $type;

    public $name;

    public $text;

    public $disabled;

    public $class;

    public $fas;

    public $far;

    public $fab;

    public function __construct(
        $id = null,
        $themeColor = 'primary',
        $type = 'button',
        $name = null,
        $text = null,
        $disabled = false,
        $class = null,
        $fas = null,
        $fab = null,
        $far = null
    )
    {
        if(! $this->themeColor) {
            $this->themeColor = $themeColor;
        }

        $this->type = $type;
        $this->id = $id;
        $this->name = $name;
        $this->text = $text;
        $this->disabled = $disabled;
        $this->class = $class;
        $this->fas = $fas;
        $this->far = $far;
        $this->fab = $fab;
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        return view("bs::button.button", [
            'nameTag' => $this->name ? "name={$this->name}" : null,
            'disabledTag' => $this->disabled ? 'disabled' : null,
            'classTag' => "btn btn-{$this->themeColor} {$this->class}",
        ]);
    }
}

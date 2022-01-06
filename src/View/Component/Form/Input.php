<?php

namespace LaravelBootstrap\View\Component\Form;

use Illuminate\View\Component;

abstract class Input extends Component
{
    public $type;

    public $name;

    public $value;

    public $placeholder;

    public $disabled;

    public $readonly;

    public function __construct(
        $type = 'text',
        $name = null,
        $value = null,
        $placeholder = null,
        $disabled = false,
        $readonly = false
    )
    {
        if(! $this->type) {
            $this->type = $type;
        }

        $this->name = $name;
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->disabled = $disabled;
        $this->readonly = $readonly;
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        return view("bs::form.input", [
            'type' => $this->type,
            'name' => $this->name,
            'value' => $this->value,
            'placeholder' => $this->placeholder,
            'disabled' => $this->disabled,
            'readonly' => $this->readonly,
        ]);
    }
}

<?php

namespace LaravelBootstrap\View\Component\Form;

use Illuminate\View\Component;

abstract class Input extends Component
{
    public $id;

    public $type;

    public $name;

    public $value;

    public $placeholder;

    public $disabled;

    public $readonly;

    public $class;

    public function __construct(
        $id = null,
        $type = 'text',
        $name = null,
        $value = null,
        $placeholder = null,
        $disabled = false,
        $readonly = false,
        $class = null
    )
    {
        if(! $this->type) {
            $this->type = $type;
        }

        $this->id = $id;
        $this->name = $name;
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->disabled = $disabled;
        $this->readonly = $readonly;
        $this->class = $class;
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        return view("bs::form.input", [
            'args' => [
                'placeholder' => $this->placeholder,
                'disabled' => $this->disabled,
                'readonly' => $this->readonly,
                'class' => "form-control $this->class",
            ]
        ]);
    }
}

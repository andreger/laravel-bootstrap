<?php

namespace Andreger\Bootstrap\View\Component\Form;

use Illuminate\View\Component;

class Select extends Component
{
    public $id;

    public $name;

    public $options;

    public $selected;

    public $placeholder;

    public $disabled;

    public $size;

    public $multiple;

    public $class;

    public $label;

    public function __construct(
        $id = null,
        $name = null,
        $options = [],
        $selected = null,
        $placeholder = null,
        $disabled = false,
        $size = null,
        $multiple = null,
        $class = null,
        $label = null
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->options = $options;
        $this->selected = $selected;
        $this->placeholder = $placeholder;
        $this->disabled = $disabled;
        $this->size = $size;
        $this->multiple = $multiple;
        $this->class = $class;
        $this->label = $label;
    }


    /**
     * @inheritDoc
     */
    public function render()
    {
        return view("bs::form.select", [
            'args' => [
                'id' => $this->id,
                'placeholder' => $this->placeholder,
                'disabled' => $this->disabled,
                'size' => $this->size,
                'multiple' => $this->multiple,
                'class' => "form-select $this->class",
            ]
        ]);
    }
}

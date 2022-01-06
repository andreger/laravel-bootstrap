<?php

namespace LaravelBootstrap\View\Component\Form;

use Illuminate\View\Component;

class Select extends Component
{

    public $name;

    public $options;

    public $selected;

    public $placeholder;

    public $disabled;

    public $size;

    public $multiple;

    public $class;

    public function __construct(
        $name = null,
        $options = [],
        $selected = null,
        $placeholder = null,
        $disabled = false,
        $size = null,
        $multiple = null,
        $class = null
    )
    {
        $this->name = $name;
        $this->options = $options;
        $this->selected = $selected;
        $this->placeholder = $placeholder;
        $this->disabled = $disabled;
        $this->size = $size;
        $this->multiple = $multiple;
        $this->class = $class;
    }


    /**
     * @inheritDoc
     */
    public function render()
    {
        return view("bs::form.select", [
            'name' => $this->name,
            'options' => $this->options,
            'selected' => $this->selected,
            'placeholder' => $this->placeholder,
            'disabled' => $this->disabled,
            'size' => $this->size,
            'multiple' => $this->multiple,
            'class' => $this->class,
        ]);
    }
}

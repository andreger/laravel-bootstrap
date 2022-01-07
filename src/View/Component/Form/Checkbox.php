<?php


namespace LaravelBootstrap\View\Component\Form;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Checkbox extends Component
{
    public $id;

    public $type = 'checkbox';

    public $name;

    public $value;

    public $selected;

    public $disabled;

    public $class;

    public $label;

    public function __construct(
        $id = null,
        $name = null,
        $value = null,
        $selected = null,
        $disabled = false,
        $class = null,
        $label = null
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->value = $value;
        $this->selected = $selected;
        $this->disabled = $disabled;
        $this->class = $class;
        $this->label = $label;
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        return view("bs::form.checkbox", [
            'args' => [
                'disabled' => $this->disabled,
                'class' => "form-check-input $this->class",
                'id' => $this->id ?? $this->name . '-' . Str::random(10) ?? null,
            ]
        ]);
    }
}

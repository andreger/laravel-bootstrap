<?php

namespace Andreger\Bootstrap\View\Component\Form;

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

    public $label;

    public $formGroup;

    public $tip;

    public $tipIconClass;

    public function __construct(
        $id = null,
        $type = 'text',
        $name = null,
        $value = null,
        $placeholder = null,
        $disabled = false,
        $readonly = false,
        $class = null,
        $label = null,
        $formGroup = true,
        $tip = null,
        $tipIconClass = null
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
        $this->label = $label;
        $this->formGroup = $formGroup;
        $this->tip = $tip;
        $this->tipIconClass = $tipIconClass;
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        return view("bs::form.input", [
            'attributesStr' => $this->getAttributes(),
            'classValue' => $this->getClassValue(),
        ]);
    }

    /**
     * Get attributes
     *
     * @param array $except
     * @return string
     */
    protected function getAttributes(array $except = []): string
    {
        $attributes = [
            'id' => $this->id,
            'type' => $this->type,
            'name' => $this->name,
            'value' => $this->value,
            'placeholder' => $this->placeholder,
            'disabled' => $this->disabled ? 'disabled' : null,
            'readonly' => $this->readonly ? 'readonly' : null,
        ];

        $str = '';

        foreach ($attributes as $attrKey => $attrValue) {

            if (in_array($attrKey, $except)) {
                continue;
            }

            if ($attrValue !== null) {
                $str .= " {$attrKey}='{$attrValue}'";
            }
        }

        return $str;
    }

    /**
     * Get class value
     *
     * @return string
     */
    protected function getClassValue()
    {
        return "form-control {$this->class}";
    }

}

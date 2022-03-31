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

    public function __construct(
        $id = null,
        $type = 'text',
        $name = null,
        $value = null,
        $placeholder = null,
        $disabled = false,
        $readonly = false,
        $class = null,
        $label = null
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
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        return view("bs::form.input", [
            'attributesStr' => $this->getAttributes(),
            'classValue' => "form-control {$this->class}",
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

}

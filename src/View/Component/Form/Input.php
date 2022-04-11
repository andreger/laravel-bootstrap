<?php

namespace Andreger\Bootstrap\View\Component\Form;

/**
 * Class Input
 *
 * @package Andreger\Bootstrap\View\Component\Form
 */
class Input extends Field
{
    public $type;

    public $placeholder;

    public $disabled;

    public $readonly;

    /**
     * Input constructor.
     *
     * @param string|null $id
     * @param string $type
     * @param string|null $name
     * @param string|null $value
     * @param string|null $placeholder
     * @param bool $disabled
     * @param bool $readonly
     * @param string|null $class
     * @param string|null $label
     * @param string|null $outerDiv
     * @param string|null $tooltip
     */
    public function __construct(
        string $id = null,
        string $type = 'text',
        string $name = null,
        string $value = null,
        string $placeholder = null,
        bool $disabled = false,
        bool $readonly = false,
        string $class = null,
        string $label = null,
        string $outerDiv = 'form-group mb-3',
        string $tooltip = null
    )
    {
        parent::__construct($id, $name, $value, $class, $label, $outerDiv, $tooltip);

        if(! $this->type) {
            $this->type = $type;
        }

        $this->placeholder = $placeholder;
        $this->disabled = $disabled;
        $this->readonly = $readonly;
    }

    /**
     * @inheritDoc
     */
    protected function setAttributes(): array
    {
        return [
            'id' => $this->id,
            'type' => $this->type,
            'name' => $this->name,
            'value' => $this->value,
            'placeholder' => $this->placeholder,
            'disabled' => $this->disabled ? 'disabled' : null,
            'readonly' => $this->readonly ? 'readonly' : null,
        ];
    }

    /**
     * @inheritDoc
     */
    protected function getClassValue(): string
    {
        return "form-control {$this->class}";
    }

    /**
     * @inheritDoc
     */
    protected function getInnerView(): string
    {
        return 'bs::form.input';
    }

}

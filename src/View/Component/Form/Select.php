<?php

namespace Andreger\Bootstrap\View\Component\Form;

/**
 * Class Select
 *
 * @package Andreger\Bootstrap\View\Component\Form
 */
class Select extends Field
{
    public $options;

    public $placeholder;

    public $disabled;

    public $size;

    public $multiple;

    /**
     * Select constructor.
     *
     * @param string|null $id
     * @param string|null $name
     * @param array $options
     * @param string|null $value
     * @param string|null $placeholder
     * @param bool $disabled
     * @param string|null $size
     * @param string|null $multiple
     * @param string|null $class
     * @param string|null $label
     * @param bool $formGroup
     * @param string|null $tooltip
     */
    public function __construct(
        string $id = null,
        string $name = null,
        array $options = [],
        string $value = null,
        string $placeholder = null,
        bool $disabled = false,
        string $size = null,
        string $multiple = null,
        string $class = null,
        string $label = null,
        bool $formGroup = true,
        string $tooltip = null
    )
    {
        parent::__construct($id, $name, $value, $class, $label, $formGroup, $tooltip);

        $this->options = $options;
        $this->placeholder = $placeholder;
        $this->disabled = $disabled;
        $this->size = $size;
        $this->multiple = $multiple;
    }

    /**
     * @inheritDoc
     */
    protected function setAttributes(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'placeholder' => $this->placeholder,
            'disabled' => $this->disabled,
            'size' => $this->size,
            'multiple' => $this->multiple ? 'multiple' : null,
            'disabled' => $this->disabled ? 'disabled' : null,
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
        return 'bs::form.select';
    }
}

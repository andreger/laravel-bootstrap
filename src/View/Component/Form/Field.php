<?php

namespace Andreger\Bootstrap\View\Component\Form;

use Illuminate\View\Component;

abstract class Field extends Component
{
    public $id;

    public $name;

    public $value;

    public $class;

    public $label;

    public $outerDiv;

    public $tooltip;

    public $dusk;

    /**
     * Field constructor.
     *
     * @param string|null $id
     * @param string|null $name
     * @param string|null $value
     * @param string|null $class
     * @param string|null $label
     * @param string|null $outerDiv
     * @param string|null $tooltip
     * @param string|null $dusk
     */
    public function __construct(
        string $id = null,
        string $name = null,
        string $value = null,
        string $class = null,
        string $label = null,
        string $outerDiv = null,
        string $tooltip = null,
        string $dusk = null
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->value = $value;
        $this->class = $class;
        $this->label = $label;
        $this->outerDiv = $outerDiv;
        $this->tooltip = $tooltip;
        $this->dusk = $dusk;
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        $outerView = $this->outerDiv
            ? 'bs::form.outer'
            : 'bs::form.field';

        return view($outerView, [
            'attributesStr' => $this->getAttributes(),
            'classValue' => $this->getClassValue(),
            'innerView' => $this->getInnerView(),
        ]);
    }

    /**
     * Set attributes to be attached on HTML tag
     *
     * @return array
     */
    protected function setAttributes(): array
    {
        return [];
    }

    /**
     * Get attributes in text format separated by blank character
     *
     * @return string
     */
    protected function getAttributes()
    {
        $attrs = $this->setAttributes();

        $str = '';

        if ($attrs) {
            foreach ($attrs as $attrKey => $attrValue) {

                if ($attrValue !== null) {
                    $str .= " {$attrKey}='{$attrValue}'";
                }
            }
        }

        return $str;
    }

    /**
     * Get class attribute value
     *
     * @return string
     */
    protected function getClassValue(): string
    {
        return '';
    }

    /**
     * Get inner view name
     *
     * @return string
     */
    protected function getInnerView(): string
    {
        return '';
    }

}

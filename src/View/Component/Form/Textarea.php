<?php

namespace Andreger\Bootstrap\View\Component\Form;

class Textarea extends Input
{
    public $type = 'textarea';

    /**
     * @inheritDoc
     */
    public function render()
    {
        return view("bs::form.textarea", [
            'attributesStr' => $this->getAttributes(['value']),
            'classValue' => "form-control {$this->class}",
        ]);
    }
}

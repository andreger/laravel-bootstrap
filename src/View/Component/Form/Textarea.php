<?php

namespace Andreger\Bootstrap\View\Component\Form;

class Textarea extends Input
{
    public $type = 'textarea';

    /**
     * @inheritDoc
     */
    protected function getInnerView(): string
    {
        return 'bs::form.textarea';
    }
}

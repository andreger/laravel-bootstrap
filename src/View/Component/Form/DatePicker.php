<?php

namespace Andreger\Bootstrap\View\Component\Form;

class DatePicker extends Text
{
    /**
     * Get class value
     *
     * @return string
     */
    protected function getClassValue()
    {
        return "form-control datepicker data-mask {$this->class}";
    }
}

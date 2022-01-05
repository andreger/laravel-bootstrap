<?php


namespace LaravelBootstrap\View\Component\Alert;

use Illuminate\View\Component;

class AlertWarning extends Alert
{
    public $themeColor = 'warning';

    public function __construct($text = null, $header = null, $footer = null, $dismissible = true)
    {
        parent::__construct($this->themeColor, $text, $header, $footer, $dismissible);
    }
}

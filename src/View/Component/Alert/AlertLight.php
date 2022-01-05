<?php


namespace LaravelBootstrap\View\Component\Alert;

use Illuminate\View\Component;

class AlertLight extends Alert
{
    public $themeColor = 'light';

    public function __construct($text = null, $header = null, $footer = null, $dismissible = true)
    {
        parent::__construct($this->themeColor, $text, $header, $footer, $dismissible);
    }
}

<?php


namespace LaravelBootstrap\View\Component\Alert;

use Illuminate\View\Component;

class AlertDanger extends Alert
{
    public $themeColor = 'danger';

    public function __construct($text = null, $header = null, $footer = null, $dismissible = true)
    {
        parent::__construct($this->themeColor, $text, $header, $footer, $dismissible);
    }
}

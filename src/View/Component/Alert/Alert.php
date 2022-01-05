<?php


namespace LaravelBootstrap\View\Component\Alert;

use Illuminate\View\Component;

class Alert extends Component
{
    public $text;

    public $themeColor;

    public $header;

    public $footer;

    public $dismissible;

    public function __construct(
        $themeColor = 'primary',
        $text = null,
        $header = null,
        $footer = null,
        $dismissible = true
    )
    {
        $this->text = $text;
        $this->themeColor = $themeColor;
        $this->header = $header;
        $this->footer = $footer;
        $this->dismissible = $dismissible;
    }
    /**
     * @inheritDoc
     */
    public function render()
    {
        return view("bs::alert.alert", [
            'dismissible' => $this->dismissible,
            'header' => $this->header,
            'footer' => $this->footer,
            'text' => $this->text,
            'themeColor' => $this->themeColor,
        ]);
    }
}

<?php

namespace LaravelBootstrap\View\Component\Card;

use Illuminate\View\Component;

class Card extends Component
{
    public $themeColorClass;

    public $header;

    public $footer;

    public $cardClass;

    public $headerClass;

    public $bodyClass;

    public $footerClass;

    public function __construct(
        $themeColorClass = null,
        $header = null,
        $footer = null,
        $cardClass = null,
        $headerClass = null,
        $bodyClass = null,
        $footerClass = null
    )
    {
        if(! $this->themeColorClass) {
            $this->themeColorClass = $themeColorClass;
        }

        $this->header = $header;
        $this->footer = $footer;
        $this->cardClass = $cardClass;
        $this->headerClass = $headerClass;
        $this->bodyClass = $bodyClass;
        $this->footerClass = $footerClass;
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        return view("bs::card.card");
    }
}

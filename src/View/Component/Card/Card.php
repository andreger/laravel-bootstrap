<?php

namespace LaravelBootstrap\View\Component\Card;

use Illuminate\View\Component;
use LaravelBootstrap\Helpers\ThemeColor;

class Card extends Component
{
    public $themeColor;

    public $themeColorLayout;

    public $header;

    public $footer;

    public $cardClass;

    public $headerClass;

    public $bodyClass;

    public $footerClass;

    public function __construct(
        $themeColor = 'primary',
        $themeColorLayout = 'full',
        $header = null,
        $footer = null,
        $cardClass = null,
        $headerClass = null,
        $bodyClass = null,
        $footerClass = null
    )
    {
        if(! $this->themeColor) {
            $this->themeColor = $themeColor;
        }

        $this->themeColorLayout = $themeColorLayout;
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
//        dd($this->themeColorLayout);
//        dd($this->getThemeColorClasses());

        return view("bs::card.card", $this->getThemeColorClasses());
    }

    private function getThemeColorClasses()
    {
        $textColorClass = ThemeColor::getTextColor($this->themeColor);

        switch ($this->themeColorLayout) {

            case 'border': {
                $themeColorCardClass = "border-{$this->themeColor}";
                $themeColorHeaderClass = null;
                break;
            }

            case 'header': {
                $themeColorCardClass = null;
                $themeColorHeaderClass = "bg-{$this->themeColor} {$textColorClass}";
                break;
            }

            case 'full': {
                $themeColorCardClass = "bg-{$this->themeColor} {$textColorClass}";
                $themeColorHeaderClass = null;
                break;
            }

            default : {
                $themeColorCardClass = null;
                $themeColorHeaderClass = null;
            }
        }

        return [
            'themeColorCardClass' => $themeColorCardClass,
            'themeColorHeaderClass' => $themeColorHeaderClass
        ];
    }
}

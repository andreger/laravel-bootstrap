<?php

namespace LaravelBootstrap\View\Component\Table;

use Illuminate\View\Component;

class Table extends Component
{
    public $data;

    public $themeColor;

    public $striped;

    public $hover;

    public $bordered;

    public $borderless;

    public $small;

    public $hasHead;

    public $hasFoot;

    public $caption;

    public $responsive;

    public function __construct(
        array $data = null,
        string $themeColor = null,
        bool $striped = false,
        bool $hover = false,
        bool $bordered = false,
        bool $borderless = false,
        bool $small = false,
        string $hasHead = null,
        string $hasFoot = null,
        string $caption = null,
        string $responsive = null
    )
    {
        if(! $this->themeColor) {
            $this->themeColor = $themeColor;
        }

        $this->data = $data;
        $this->striped = $striped;
        $this->hover = $hover;
        $this->bordered = $bordered;
        $this->borderless = $borderless;
        $this->small = $small;
        $this->hasHead = $hasHead;
        $this->hasFoot = $hasFoot;
        $this->caption = $caption;
        $this->responsive = $responsive;
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        $data = $this->getData();
        $classValue = $this->getClassValue();
        $view = $this->getView();

        return view("bs::table.{$view}", [
            'classValue' => $classValue,
            'dataHead' => $data['head'],
            'dataFoot' => $data['foot'],
            'dataBody' => $data['body'],
        ]);
    }

    private function getClassValue()
    {
        $values = ["table"];

        if ($this->striped) {
            $values[] = "table-striped";
        }

        if ($this->hover) {
            $values[] = "table-hover";
        }

        if ($this->bordered) {
            $values[] = "table-bordered";
        }

        if ($this->borderless) {
            $values[] = "table-borderless";
        }

        if ($this->small) {
            $values[] = "table-sm";
        }

        return implode(" ", $values);
    }

    private function getData()
    {
        return [
            'head' => $this->hasHead ? array_shift($this->data) : null,
            'foot' => $this->hasFoot ? array_pop($this->data) : null,
            'body' => $this->data,
        ];
    }

    private function getView()
    {
        return $this->responsive ? 'responsive' : 'table';
    }
}

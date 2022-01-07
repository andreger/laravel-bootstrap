<?php


namespace LaravelBootstrap\View\Component\Button;


use Illuminate\View\Component;

class Button extends Component
{

    public $id;

    public $themeColor;

    public $type = 'button';

    public $name;

    public $value;

    public $disabled;

    public $class;

    public function __construct(
        $id = null,
        $themeColor = 'primary',
        $type = 'button',
        $name = null,
        $value = null,
        $disabled = false,
        $class = null
    )
    {
        if(! $this->type) {
            $this->type = $type;
        }

        if(! $this->themeColor) {
            $this->themeColor = $themeColor;
        }

        $this->id = $id;
        $this->name = $name;
        $this->value = $value;
        $this->disabled = $disabled;
        $this->class = $class;
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        return view("bs::button.button", [
            'id' => $this->id,
            'type' => $this->type,
            'name' => $this->name,
            'value' => $this->value,
            'disabled' => $this->disabled ? 'disabled' : null,
            'classTag' => "btn btn-{$this->themeColor} {$this->class}",
        ]);
    }
}

<?php


namespace LaravelBootstrap\View\Component\Alert;

use Illuminate\View\Component;

class Alert extends Component
{

    /**
     * @inheritDoc
     */
    public function render()
    {
        return view('bs::alert.alert');
    }
}

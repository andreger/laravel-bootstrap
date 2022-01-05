<?php

namespace LaravelBootstrap;

use Illuminate\Support\ServiceProvider;
use LaravelBootstrap\View\Component\Alert\Alert;

class LaravelBootstrapServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'bs');
        $this->loadViewComponentsAs('bs', $this->viewComponents());
    }

    public function register()
    {

    }

    protected function viewComponents(): array
    {
        return [
            Alert::class,
        ];
    }
}

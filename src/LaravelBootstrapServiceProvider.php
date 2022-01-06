<?php

namespace LaravelBootstrap;

use Illuminate\Support\ServiceProvider;
use LaravelBootstrap\View\Component\Alert\Alert;
use LaravelBootstrap\View\Component\Alert\AlertDanger;
use LaravelBootstrap\View\Component\Alert\AlertDark;
use LaravelBootstrap\View\Component\Alert\AlertInfo;
use LaravelBootstrap\View\Component\Alert\AlertLight;
use LaravelBootstrap\View\Component\Alert\AlertPrimary;
use LaravelBootstrap\View\Component\Alert\AlertSecondary;
use LaravelBootstrap\View\Component\Alert\AlertSuccess;
use LaravelBootstrap\View\Component\Alert\AlertWarning;
use LaravelBootstrap\View\Component\Form\InputPassword;
use LaravelBootstrap\View\Component\Form\InputText;

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
            AlertDanger::class,
            AlertDark::class,
            AlertInfo::class,
            AlertLight::class,
            InputPassword::class,
            AlertPrimary::class,
            AlertSecondary::class,
            AlertSuccess::class,
            AlertWarning::class,
            InputPassword::class,
            InputText::class,
        ];
    }
}

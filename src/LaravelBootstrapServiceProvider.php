<?php

namespace LaravelBootstrap;

use Illuminate\Support\ServiceProvider;
use LaravelBootstrap\View\Component\A\ADanger;
use LaravelBootstrap\View\Component\A\ADark;
use LaravelBootstrap\View\Component\A\AInfo;
use LaravelBootstrap\View\Component\A\ALight;
use LaravelBootstrap\View\Component\A\AOutlineDanger;
use LaravelBootstrap\View\Component\A\AOutlineDark;
use LaravelBootstrap\View\Component\A\AOutlineInfo;
use LaravelBootstrap\View\Component\A\AOutlineLight;
use LaravelBootstrap\View\Component\A\AOutlinePrimary;
use LaravelBootstrap\View\Component\A\AOutlineSecondary;
use LaravelBootstrap\View\Component\A\AOutlineSuccess;
use LaravelBootstrap\View\Component\A\AOutlineWarning;
use LaravelBootstrap\View\Component\A\APrimary;
use LaravelBootstrap\View\Component\A\ASecondary;
use LaravelBootstrap\View\Component\A\ASuccess;
use LaravelBootstrap\View\Component\A\AWarning;
use LaravelBootstrap\View\Component\Alert\Alert;
use LaravelBootstrap\View\Component\Alert\AlertDanger;
use LaravelBootstrap\View\Component\Alert\AlertDark;
use LaravelBootstrap\View\Component\Alert\AlertInfo;
use LaravelBootstrap\View\Component\Alert\AlertLight;
use LaravelBootstrap\View\Component\Alert\AlertPrimary;
use LaravelBootstrap\View\Component\Alert\AlertSecondary;
use LaravelBootstrap\View\Component\Alert\AlertSuccess;
use LaravelBootstrap\View\Component\Alert\AlertWarning;
use LaravelBootstrap\View\Component\Button\Button;
use LaravelBootstrap\View\Component\Button\ButtonDanger;
use LaravelBootstrap\View\Component\Button\ButtonDark;
use LaravelBootstrap\View\Component\Button\ButtonInfo;
use LaravelBootstrap\View\Component\Button\ButtonLight;
use LaravelBootstrap\View\Component\Button\ButtonOutlineDanger;
use LaravelBootstrap\View\Component\Button\ButtonOutlineDark;
use LaravelBootstrap\View\Component\Button\ButtonOutlineInfo;
use LaravelBootstrap\View\Component\Button\ButtonOutlineLight;
use LaravelBootstrap\View\Component\Button\ButtonOutlinePrimary;
use LaravelBootstrap\View\Component\Button\ButtonOutlineSecondary;
use LaravelBootstrap\View\Component\Button\ButtonOutlineSuccess;
use LaravelBootstrap\View\Component\Button\ButtonOutlineWarning;
use LaravelBootstrap\View\Component\Button\ButtonPrimary;
use LaravelBootstrap\View\Component\Button\ButtonSecondary;
use LaravelBootstrap\View\Component\Button\ButtonSuccess;
use LaravelBootstrap\View\Component\Button\ButtonWarning;
use LaravelBootstrap\View\Component\Form\Checkbox;
use LaravelBootstrap\View\Component\Form\Password;
use LaravelBootstrap\View\Component\Form\Text;
use LaravelBootstrap\View\Component\Form\Radio;
use LaravelBootstrap\View\Component\Form\Select;
use LaravelBootstrap\View\Component\A\A;

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
            AlertPrimary::class,
            AlertSecondary::class,
            AlertSuccess::class,
            AlertWarning::class,

            Password::class,
            Text::class,

            Select::class,

            Checkbox::class,
            Radio::class,

            Button::class,
            ButtonDanger::class,
            ButtonDark::class,
            ButtonInfo::class,
            ButtonLight::class,
            ButtonPrimary::class,
            ButtonSecondary::class,
            ButtonSuccess::class,
            ButtonWarning::class,
            ButtonOutlineDanger::class,
            ButtonOutlineDark::class,
            ButtonOutlineInfo::class,
            ButtonOutlineLight::class,
            ButtonOutlinePrimary::class,
            ButtonOutlineSecondary::class,
            ButtonOutlineSuccess::class,
            ButtonOutlineWarning::class,

            A::class,
            ADanger::class,
            ADark::class,
            AInfo::class,
            ALight::class,
            APrimary::class,
            ASecondary::class,
            ASuccess::class,
            AWarning::class,
            AOutlineDanger::class,
            AOutlineDark::class,
            AOutlineInfo::class,
            AOutlineLight::class,
            AOutlinePrimary::class,
            AOutlineSecondary::class,
            AOutlineSuccess::class,
            AOutlineWarning::class,
        ];
    }
}

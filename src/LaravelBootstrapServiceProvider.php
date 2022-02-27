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
use LaravelBootstrap\View\Component\Badge\Badge;
use LaravelBootstrap\View\Component\Badge\BadgeDanger;
use LaravelBootstrap\View\Component\Badge\BadgeDark;
use LaravelBootstrap\View\Component\Badge\BadgeInfo;
use LaravelBootstrap\View\Component\Badge\BadgeLight;
use LaravelBootstrap\View\Component\Badge\BadgePrimary;
use LaravelBootstrap\View\Component\Badge\BadgeSecondary;
use LaravelBootstrap\View\Component\Badge\BadgeSuccess;
use LaravelBootstrap\View\Component\Badge\BadgeWarning;
use LaravelBootstrap\View\Component\Breadcrumb\Breadcrumb;
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
use LaravelBootstrap\View\Component\Card\Card;
use LaravelBootstrap\View\Component\Card\CardDanger;
use LaravelBootstrap\View\Component\Card\CardDark;
use LaravelBootstrap\View\Component\Card\CardInfo;
use LaravelBootstrap\View\Component\Card\CardLight;
use LaravelBootstrap\View\Component\Card\CardPrimary;
use LaravelBootstrap\View\Component\Card\CardSecondary;
use LaravelBootstrap\View\Component\Card\CardSuccess;
use LaravelBootstrap\View\Component\Card\CardWarning;
use LaravelBootstrap\View\Component\Dropdown\Dropdown;
use LaravelBootstrap\View\Component\Dropdown\Dropleft;
use LaravelBootstrap\View\Component\Dropdown\Dropmenu;
use LaravelBootstrap\View\Component\Dropdown\DropmenuDark;
use LaravelBootstrap\View\Component\Dropdown\Dropright;
use LaravelBootstrap\View\Component\Dropdown\Dropup;
use LaravelBootstrap\View\Component\Form\Checkbox;
use LaravelBootstrap\View\Component\Form\Password;
use LaravelBootstrap\View\Component\Form\Text;
use LaravelBootstrap\View\Component\Form\Radio;
use LaravelBootstrap\View\Component\Form\Select;
use LaravelBootstrap\View\Component\A\A;
use LaravelBootstrap\View\Component\Form\Textarea;
use LaravelBootstrap\View\Component\Nav\Nav;
use LaravelBootstrap\View\Component\Nav\NavPill;
use LaravelBootstrap\View\Component\Nav\Tab;
use LaravelBootstrap\View\Component\Nav\VerticalNav;
use LaravelBootstrap\View\Component\Navbar\Navbar;
use LaravelBootstrap\View\Component\Progress\Progress;
use LaravelBootstrap\View\Component\Progress\ProgressDanger;
use LaravelBootstrap\View\Component\Progress\ProgressDark;
use LaravelBootstrap\View\Component\Progress\ProgressInfo;
use LaravelBootstrap\View\Component\Progress\ProgressLight;
use LaravelBootstrap\View\Component\Progress\ProgressPrimary;
use LaravelBootstrap\View\Component\Progress\ProgressSecondary;
use LaravelBootstrap\View\Component\Progress\ProgressSuccess;
use LaravelBootstrap\View\Component\Progress\ProgressWarning;
use LaravelBootstrap\View\Component\Table\Table;
use LaravelBootstrap\View\Component\Table\TableDanger;
use LaravelBootstrap\View\Component\Table\TableDark;
use LaravelBootstrap\View\Component\Table\TableInfo;
use LaravelBootstrap\View\Component\Table\TableLight;
use LaravelBootstrap\View\Component\Table\TablePrimary;
use LaravelBootstrap\View\Component\Table\TableSecondary;
use LaravelBootstrap\View\Component\Table\TableSuccess;
use LaravelBootstrap\View\Component\Table\TableWarning;

class LaravelBootstrapServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $prefix ='bs';
        $this->loadViewsFrom(__DIR__ . '/../resources/views', $prefix);
        $this->loadViewComponentsAs($prefix, $this->viewComponents());
    }

    public function register()
    {

    }

    private function viewComponents(): array
    {
        return array_merge(
            $this->alert(),
            $this->a(),
            $this->badge(),
            $this->breadcrumb(),
            $this->button(),
            $this->card(),
            $this->dropdown(),
            $this->form(),
            $this->nav(),
            $this->navbar(),
            $this->progress(),
            $this->table()
        );
    }

    private function alert(): array
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
        ];
    }

    private function a(): array
    {
        return [
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

    private function badge(): array
    {
        return [
            Badge::class,
            BadgeDanger::class,
            BadgeDark::class,
            BadgeInfo::class,
            BadgeLight::class,
            BadgePrimary::class,
            BadgeSecondary::class,
            BadgeSuccess::class,
            BadgeWarning::class,
        ];
    }

    private function breadcrumb(): array
    {
        return [
            Breadcrumb::class,
        ];
    }

    private function button(): array
    {
        return [
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
        ];
    }

    private function card(): array
    {
        return [
            Card::class,
            CardDanger::class,
            CardDark::class,
            CardInfo::class,
            CardLight::class,
            CardPrimary::class,
            CardSecondary::class,
            CardSuccess::class,
            CardWarning::class,
        ];
    }

    private function dropdown(): array
    {
        return [
            Dropdown::class,
            Dropleft::class,
            Dropright::class,
            Dropup::class,
            Dropmenu::class,
            DropmenuDark::class,
        ];
    }

    private function form(): array
    {
        return [
            Checkbox::class,
            Password::class,
            Radio::class,
            Select::class,
            Text::class,
            Textarea::class,
        ];
    }

    private function navbar(): array
    {
        return [
            Navbar::class,
        ];
    }

    private function nav(): array
    {
        return [
            Nav::class,
            NavPill::class,
            Tab::class,
            VerticalNav::class,
        ];
    }

    private function progress(): array
    {
        return [
            Progress::class,
            ProgressDanger::class,
            ProgressDark::class,
            ProgressInfo::class,
            ProgressLight::class,
            ProgressPrimary::class,
            ProgressSecondary::class,
            ProgressSuccess::class,
            ProgressWarning::class,
        ];
    }

    private function table(): array
    {
        return [
            Table::class,
            TableDanger::class,
            TableDark::class,
            TableInfo::class,
            TableLight::class,
            TablePrimary::class,
            TableSecondary::class,
            TableSuccess::class,
            TableWarning::class,
        ];
    }

}

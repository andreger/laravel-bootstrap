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
use LaravelBootstrap\View\Component\Nav\Nav;
use LaravelBootstrap\View\Component\Nav\NavPill;
use LaravelBootstrap\View\Component\Nav\Tab;
use LaravelBootstrap\View\Component\Nav\VerticalNav;
use LaravelBootstrap\View\Component\Navbar\Navbar;
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
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'bs');
        $this->loadViewComponentsAs('bs', $this->viewComponents());
    }

    public function register()
    {

    }

    protected function viewComponents(): array
    {
        return array_merge(
            $this->alertViewComponents(),
            $this->aViewComponents(),
            $this->badgeViewComponents(),
            $this->breadcrumbViewComponents(),
            $this->buttonViewComponents(),
            $this->cardViewComponents(),
            $this->dropdownComponents(),
            $this->formViewComponents(),
            $this->navbarViewComponents(),
            $this->navViewComponents(),
            $this->tableViewComponents()
        );
    }

    public function alertViewComponents()
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

    public function aViewComponents()
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

    public function badgeViewComponents()
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

    public function breadcrumbViewComponents()
    {
        return [
            Breadcrumb::class,
        ];
    }

    public function buttonViewComponents()
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

    public function cardViewComponents()
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

    public function dropdownComponents()
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

    public function formViewComponents()
    {
        return [
            Checkbox::class,
            Password::class,
            Radio::class,
            Select::class,
            Text::class,
        ];
    }

    public function navbarViewComponents()
    {
        return [
            Navbar::class,
        ];
    }

    public function navViewComponents()
    {
        return [
            Nav::class,
            NavPill::class,
            Tab::class,
            VerticalNav::class,
        ];
    }

    public function tableViewComponents()
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

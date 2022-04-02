<?php

namespace Andreger\Bootstrap;

use Andreger\Bootstrap\View\Component\Form\Color;
use Andreger\Bootstrap\View\Component\Form\Date;
use Andreger\Bootstrap\View\Component\Form\DatePicker;
use Andreger\Bootstrap\View\Component\Form\DatetimeLocal;
use Andreger\Bootstrap\View\Component\Form\Month;
use Andreger\Bootstrap\View\Component\Form\Number;
use Andreger\Bootstrap\View\Component\Form\Range;
use Andreger\Bootstrap\View\Component\Form\Time;
use Andreger\Bootstrap\View\Component\Form\Week;
use Illuminate\Support\ServiceProvider;
use Andreger\Bootstrap\View\Component\A\ADanger;
use Andreger\Bootstrap\View\Component\A\ADark;
use Andreger\Bootstrap\View\Component\A\AInfo;
use Andreger\Bootstrap\View\Component\A\ALight;
use Andreger\Bootstrap\View\Component\A\AOutlineDanger;
use Andreger\Bootstrap\View\Component\A\AOutlineDark;
use Andreger\Bootstrap\View\Component\A\AOutlineInfo;
use Andreger\Bootstrap\View\Component\A\AOutlineLight;
use Andreger\Bootstrap\View\Component\A\AOutlinePrimary;
use Andreger\Bootstrap\View\Component\A\AOutlineSecondary;
use Andreger\Bootstrap\View\Component\A\AOutlineSuccess;
use Andreger\Bootstrap\View\Component\A\AOutlineWarning;
use Andreger\Bootstrap\View\Component\A\APrimary;
use Andreger\Bootstrap\View\Component\A\ASecondary;
use Andreger\Bootstrap\View\Component\A\ASuccess;
use Andreger\Bootstrap\View\Component\A\AWarning;
use Andreger\Bootstrap\View\Component\Alert\Alert;
use Andreger\Bootstrap\View\Component\Alert\AlertDanger;
use Andreger\Bootstrap\View\Component\Alert\AlertDark;
use Andreger\Bootstrap\View\Component\Alert\AlertInfo;
use Andreger\Bootstrap\View\Component\Alert\AlertLight;
use Andreger\Bootstrap\View\Component\Alert\AlertPrimary;
use Andreger\Bootstrap\View\Component\Alert\AlertSecondary;
use Andreger\Bootstrap\View\Component\Alert\AlertSuccess;
use Andreger\Bootstrap\View\Component\Alert\AlertWarning;
use Andreger\Bootstrap\View\Component\Badge\Badge;
use Andreger\Bootstrap\View\Component\Badge\BadgeDanger;
use Andreger\Bootstrap\View\Component\Badge\BadgeDark;
use Andreger\Bootstrap\View\Component\Badge\BadgeInfo;
use Andreger\Bootstrap\View\Component\Badge\BadgeLight;
use Andreger\Bootstrap\View\Component\Badge\BadgePrimary;
use Andreger\Bootstrap\View\Component\Badge\BadgeSecondary;
use Andreger\Bootstrap\View\Component\Badge\BadgeSuccess;
use Andreger\Bootstrap\View\Component\Badge\BadgeWarning;
use Andreger\Bootstrap\View\Component\Breadcrumb\Breadcrumb;
use Andreger\Bootstrap\View\Component\Button\Button;
use Andreger\Bootstrap\View\Component\Button\ButtonDanger;
use Andreger\Bootstrap\View\Component\Button\ButtonDark;
use Andreger\Bootstrap\View\Component\Button\ButtonInfo;
use Andreger\Bootstrap\View\Component\Button\ButtonLight;
use Andreger\Bootstrap\View\Component\Button\ButtonOutlineDanger;
use Andreger\Bootstrap\View\Component\Button\ButtonOutlineDark;
use Andreger\Bootstrap\View\Component\Button\ButtonOutlineInfo;
use Andreger\Bootstrap\View\Component\Button\ButtonOutlineLight;
use Andreger\Bootstrap\View\Component\Button\ButtonOutlinePrimary;
use Andreger\Bootstrap\View\Component\Button\ButtonOutlineSecondary;
use Andreger\Bootstrap\View\Component\Button\ButtonOutlineSuccess;
use Andreger\Bootstrap\View\Component\Button\ButtonOutlineWarning;
use Andreger\Bootstrap\View\Component\Button\ButtonPrimary;
use Andreger\Bootstrap\View\Component\Button\ButtonSecondary;
use Andreger\Bootstrap\View\Component\Button\ButtonSuccess;
use Andreger\Bootstrap\View\Component\Button\ButtonWarning;
use Andreger\Bootstrap\View\Component\Card\Card;
use Andreger\Bootstrap\View\Component\Card\CardDanger;
use Andreger\Bootstrap\View\Component\Card\CardDark;
use Andreger\Bootstrap\View\Component\Card\CardInfo;
use Andreger\Bootstrap\View\Component\Card\CardLight;
use Andreger\Bootstrap\View\Component\Card\CardPrimary;
use Andreger\Bootstrap\View\Component\Card\CardSecondary;
use Andreger\Bootstrap\View\Component\Card\CardSuccess;
use Andreger\Bootstrap\View\Component\Card\CardWarning;
use Andreger\Bootstrap\View\Component\Carousel\Carousel;
use Andreger\Bootstrap\View\Component\Carousel\CarouselDark;
use Andreger\Bootstrap\View\Component\Dropdown\Dropdown;
use Andreger\Bootstrap\View\Component\Dropdown\Dropleft;
use Andreger\Bootstrap\View\Component\Dropdown\Dropmenu;
use Andreger\Bootstrap\View\Component\Dropdown\DropmenuDark;
use Andreger\Bootstrap\View\Component\Dropdown\Dropright;
use Andreger\Bootstrap\View\Component\Dropdown\Dropup;
use Andreger\Bootstrap\View\Component\Form\Checkbox;
use Andreger\Bootstrap\View\Component\Form\Password;
use Andreger\Bootstrap\View\Component\Form\Text;
use Andreger\Bootstrap\View\Component\Form\Radio;
use Andreger\Bootstrap\View\Component\Form\Select;
use Andreger\Bootstrap\View\Component\A\A;
use Andreger\Bootstrap\View\Component\Form\Textarea;
use Andreger\Bootstrap\View\Component\Nav\Nav;
use Andreger\Bootstrap\View\Component\Nav\NavPill;
use Andreger\Bootstrap\View\Component\Nav\Tab;
use Andreger\Bootstrap\View\Component\Nav\VerticalNav;
use Andreger\Bootstrap\View\Component\Navbar\Navbar;
use Andreger\Bootstrap\View\Component\Progress\Progress;
use Andreger\Bootstrap\View\Component\Progress\ProgressDanger;
use Andreger\Bootstrap\View\Component\Progress\ProgressDark;
use Andreger\Bootstrap\View\Component\Progress\ProgressInfo;
use Andreger\Bootstrap\View\Component\Progress\ProgressLight;
use Andreger\Bootstrap\View\Component\Progress\ProgressPrimary;
use Andreger\Bootstrap\View\Component\Progress\ProgressSecondary;
use Andreger\Bootstrap\View\Component\Progress\ProgressSuccess;
use Andreger\Bootstrap\View\Component\Progress\ProgressWarning;
use Andreger\Bootstrap\View\Component\Table\Table;
use Andreger\Bootstrap\View\Component\Table\TableDanger;
use Andreger\Bootstrap\View\Component\Table\TableDark;
use Andreger\Bootstrap\View\Component\Table\TableInfo;
use Andreger\Bootstrap\View\Component\Table\TableLight;
use Andreger\Bootstrap\View\Component\Table\TablePrimary;
use Andreger\Bootstrap\View\Component\Table\TableSecondary;
use Andreger\Bootstrap\View\Component\Table\TableSuccess;
use Andreger\Bootstrap\View\Component\Table\TableWarning;

class BootstrapServiceProvider extends ServiceProvider
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
            $this->carousel(),
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

    private function carousel(): array
    {
        return [
            Carousel::class,
            CarouselDark::class,
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
            Color::class,
            Date::class,
            DatePicker::class,
            DatetimeLocal::class,
            Month::class,
            Number::class,
            Password::class,
            Radio::class,
            Range::class,
            Select::class,
            Text::class,
            Textarea::class,
            Time::class,
            Week::class,
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

<?php


namespace LaravelBootstrap\Helpers;


class ThemeColor
{
    public static function getTextColor(string $themeColor)
    {
        switch ($themeColor) {
            case 'danger':
            case 'dark':
            case 'primary':
            case 'secondary':
            case 'success': return 'text-white';
            case 'info':
            case 'light':
            case 'warning': return 'text-dark';
        }

        return null;
    }
}

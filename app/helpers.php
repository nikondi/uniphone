<?php

use App\Models\Settings;
use Illuminate\Support\Facades\Route;


if(!function_exists('active_link')) {
    function active_link(string $name, string $class = 'active'): string
    {
        return Route::is($name) ? $class : '';
    }
}

if(!function_exists('phone_link')) {
    function phone_link(string $phone): string
    {
        return str_replace(['-', ' '], '', $phone);
    }
}

if(!function_exists('settings')) {
    function settings(string $key): string
    {
        return Settings::get($key);
    }
}

if(!function_exists('get_theme')) {
    function get_theme(): ?string
    {
        return $_COOKIE['theme'] ?? null;
    }
}
if(!function_exists('is_theme')) {
    function is_theme(string $name): bool
    {
        return $name == get_theme();
    }
}

if(!function_exists('body_classes')) {
    function body_classes(string|array $additional = []): string
    {
        if(is_array($additional))
            $classes = [...$additional];
        else
            $classes = [$additional];

        $theme = get_theme();
        if(!is_null($theme))
            $classes[] = 'theme-'.$theme;

        if(!empty($classes))
            return ' class="'.implode(' ', $classes).'"';

        return '';
    }
}


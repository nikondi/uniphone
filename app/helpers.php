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


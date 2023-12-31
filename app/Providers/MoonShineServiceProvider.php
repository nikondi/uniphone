<?php

namespace App\Providers;

use App\MoonShine\Resources\FeedbackResource;
use App\MoonShine\Resources\NewsResource;
use App\MoonShine\Resources\SeoResource;
use App\MoonShine\Resources\SettingsResource;
use App\MoonShine\Resources\StaticResource;
use Illuminate\Support\ServiceProvider;
use MoonShine\MoonShine;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;

class MoonShineServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        app(MoonShine::class)->menu([
            MenuItem::make('Новости', new NewsResource())
                ->icon('heroicons.academic-cap'),
            MenuItem::make('Обратная связь', new FeedbackResource())
                ->icon('heroicons.envelope'),

            MenuItem::make('SEO', new SeoResource())
                ->icon('heroicons.chat-bubble-left-ellipsis'),

            MenuItem::make('Настройки', new SettingsResource())
                    ->icon('heroicons.cog-6-tooth'),

            MenuGroup::make('moonshine::ui.resource.system', [
                MenuItem::make('moonshine::ui.resource.admins_title', new MoonShineUserResource())
                    ->translatable()
                    ->icon('users'),
                MenuItem::make('moonshine::ui.resource.role_title', new MoonShineUserRoleResource())
                    ->translatable()
                    ->icon('bookmark'),
            ])->translatable(),



            /*MenuItem::make('Documentation', 'https://laravel.com')
                ->badge(fn() => 'Check'),*/
        ]);
    }
}

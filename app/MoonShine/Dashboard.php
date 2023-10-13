<?php

namespace App\MoonShine;

use App\Models\Feedback;
use MoonShine\Dashboard\DashboardBlock;
use MoonShine\Dashboard\DashboardScreen;
use MoonShine\Metrics\ValueMetric;

class Dashboard extends DashboardScreen
{
	public function blocks(): array
	{
        return [
            DashboardBlock::make([
                ValueMetric::make('Новые заявки')
                    ->value(Feedback::query()->where('viewed', false)->count()),
            ])
        ];
	}
}

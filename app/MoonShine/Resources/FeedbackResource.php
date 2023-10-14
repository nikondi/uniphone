<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Feedback;

use MoonShine\Dashboard\DashboardBlock;
use MoonShine\Fields\Date;
use MoonShine\Fields\SwitchBoolean;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Filters\SwitchBooleanFilter;
use MoonShine\ItemActions\ItemAction;
use MoonShine\Metrics\ValueMetric;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;

class FeedbackResource extends Resource
{
	public static string $model = Feedback::class;

	public static string $title = 'Обратная звязь';

    public static array $activeActions = ['show', 'delete'];

    public static string $orderField = 'created_at';
    public static string $orderType = 'DESC';

    protected bool $showInModal = true;
    protected bool $editInModal = true;

    public function fields(): array
	{
		return [
            ID::make()
                ->hideOnIndex(),
            Text::make('Тема', 'subject')
                ->readonly(),
            Text::make('E-mail', 'email', function($item) {
                return '<a href="mailto:'.$item->email.'">'.$item->email.'</a>';
            })->readonly(),
            Text::make('Телефон', 'phone', function($item) {
                return '<a href="tel:'.$item->phone.'">'.$item->phone.'</a>';
            })->readonly(),
            Date::make('Дата', 'created_at')
                ->format('d.m.Y H:i')
                ->withTime()
                ->sortable()
                ->default(date('d.m.Y H:i'))
                ->readonly(),
            SwitchBoolean::make('Просмотрено', 'viewed')
                ->readonly(),
            Textarea::make('Сообщение', 'message')->readonly()->hideOnIndex(),
        ];
	}

	public function rules(Model $item): array
	{
	    return [];
    }

    public function search(): array
    {
        return ['id'];
    }

    public function filters(): array
    {
        return [
            SwitchBooleanFilter::make('Просмотрено', 'viewed'),
        ];
    }

    public function actions(): array
    {
        return [
            FiltersAction::make(trans('moonshine::ui.filters')),
        ];
    }

    public function metrics(): array
    {
        return [
            ValueMetric::make('Новые заявки')
                ->value(Feedback::query()->where('viewed', false)->count()),
            ValueMetric::make('Заявки')
                ->value(Feedback::all()->count()),
        ];
    }

    public function trClass(Model $item, int $index): string
    {
        if($item->viewed)
            return 'green';
        else
            return 'yellow';
    }

    public function itemActions(): array
    {
        return [
            ItemAction::make('Прочитано', function (Model $item) {
                $item->update(['viewed' => true]);
            }, 'Deactivated')
                ->icon('heroicons.check')
                ->showInLine()
                ->canSee(fn(Model $item) => !$item->viewed) ,
        ];
    }
}

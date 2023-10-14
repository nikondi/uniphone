<?php

namespace App\MoonShine\Resources;

use App\Models\Helpers\MoonshineUserHelper;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Settings;

use Illuminate\Support\Facades\Artisan;
use MoonShine\Fields\SwitchBoolean;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Fields\TinyMce;
use MoonShine\Filters\SwitchBooleanFilter;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;

class SettingsResource extends Resource
{
	public static string $model = Settings::class;

	public static string $title = 'Настройки';

    public static array $activeActions = ['edit'];

    protected bool $editInModal = true;

	public function fields(): array
	{
		return [
		    ID::make()
                ->sortable()
                ->hideOnIndex(),
            Text::make('Имя', 'name'),
            Text::make('Ключ', 'key')
                ->required()
                ->showOnIndex(MoonshineUserHelper::userRole() == 2)
                ->hideOnForm(MoonshineUserHelper::userRole() == 2),
            Text::make('Значение', 'value')
                ->when($this->getItem()?->html, fn(Text $field) => $field->hidden()->disabled()),
            TinyMce::make('Значение', 'value')
                ->when(!$this->getItem()?->html, fn(TinyMce $field) => $field->hidden()->disabled())
                ->hideOnIndex(),
            SwitchBoolean::make('HTML', 'html')
                ->hideOnForm(true),
            SwitchBoolean::make('Для админа', 'admin')
                ->showOnIndex(MoonshineUserHelper::userRole() == 2)
                ->hideOnForm(MoonshineUserHelper::userRole() == 2),
        ];
	}

	public function rules(Model $item): array
	{
	    return [];
    }

    public function search(): array
    {
        return ['key', 'name'];
    }

    public function filters(): array
    {
        if(MoonshineUserHelper::userRole() == 2) {
            return [
                SwitchBooleanFilter::make('Для админов', 'admin'),
            ];
        }
        else
            return [];
    }

    public function actions(): array
    {
        return [
            FiltersAction::make(trans('moonshine::ui.filters')),
        ];
    }

    public function getActiveActions(): array
    {
        if (MoonshineUserHelper::userRole() == 2) {
            return array_merge(static::$activeActions, ['create']);
        }

        return static::$activeActions;
    }

    public function query(): Builder
    {
        if(MoonshineUserHelper::userRole() != 2)
            return parent::query()
                ->where('admin', false);

        return parent::query();
    }

    protected function afterCreated(Model $item)
    {
        Artisan::call('view:clear');
    }
    protected function afterUpdated(Model $item)
    {
        Artisan::call('view:clear');
    }
    protected function afterDeleted(Model $item)
    {
        Artisan::call('view:clear');
    }
}

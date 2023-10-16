<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\News;

use MoonShine\Decorations\Block;
use MoonShine\Decorations\Collapse;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Flex;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\Image;
use MoonShine\Fields\Slug;
use MoonShine\Fields\SwitchBoolean;
use MoonShine\Fields\Textarea;
use MoonShine\Fields\TinyMce;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Fields\Date;
use MoonShine\Fields\Text;
use MoonShine\Actions\FiltersAction;

class NewsResource extends Resource
{
	public static string $model = News::class;

	public static string $title = 'Новости';

    public string $titleField = 'title';

    public static string $orderField = 'published_at';

    protected string $routeAfterSave = 'edit'; // index, show, edit



	public function fields(): array
	{
		return [
		    ID::make()->sortable(),

            Grid::make([
                Column::make([
                    Block::make('Основная информация', [
                        Flex::make([
                            Text::make('Заголовок', 'title')
                                ->required(),
                            Slug::make('Псевдоним', 'slug')
                                ->unique()
                                ->locked()
                                ->from('title'),
                        ]),

                        Flex::make([
                            Date::make('Дата публикации', 'published_at')
                                ->format('d.m.Y H:i')
                                ->withTime()
                                ->sortable()
                                ->default(date('d.m.Y H:i')),
                            SwitchBoolean::make('Опубликовано', 'published')
                                ->default(true),
                        ]),

                        Textarea::make('Краткое содержимое', 'short')
                            ->hideOnIndex()
                            ->required(),
                        TinyMce::make('Содержимое', 'content')
                            ->hideOnIndex()
                            ->required(),
                    ]),
                ])->columnSpan(8),
                Column::make([
                    Block::make('Дополнительная информация', [
                        Collapse::make('Изображения', [
                            Image::make('Обложка', 'thumbnail')
                                ->disk('public')
                                ->dir('news/thumbs')
                                ->removable()
                                ->allowedExtensions(['png', 'jpg', 'webm'])
                                ->hideOnIndex(),
                            Image::make('Большие изображения', 'pictures')
                                ->disk('public')
                                ->dir('news/big')
                                ->removable()
                                ->multiple()
                                ->allowedExtensions(['png', 'jpg', 'webm'])
                                ->hideOnIndex(),
                        ]),

                        Collapse::make('SEO', [
                            Text::make('SEO заголовок', 'seo_title')
                                ->hideOnIndex(),
                            Textarea::make('SEO описание', 'seo_description')
                                ->hideOnIndex(),
                        ]),

                    ]),
                ])->columnSpan(4),
            ]),

        ];
	}

	public function rules(Model $item): array
	{
	    return [];
    }

    public function search(): array
    {
        return ['id', 'title', 'alias'];
    }

    public function filters(): array
    {
        return [];
    }

    public function actions(): array
    {
        return [
            FiltersAction::make(trans('moonshine::ui.filters')),
        ];
    }
}

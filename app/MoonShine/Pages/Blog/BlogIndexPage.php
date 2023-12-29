<?php

declare(strict_types=1);

namespace App\MoonShine\Pages\Blog;

use App\Models\Blog;
use MoonShine\ActionButtons\ActionButton;
use MoonShine\Buttons\CreateButton;
use MoonShine\Components\FormBuilder;
use MoonShine\Pages\Crud\IndexPage;
use MoonShine\Components\TableBuilder;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\ID;
use MoonShine\Fields\Text;

class BlogIndexPage extends IndexPage
{

	protected function table(): array
	{
		return [
			TableBuilder::make()
				->fields([
					ID::make('ID'),
					Text::make('Заголовок', 'title'),
				])
				->items($this->getResource()->items()->toArray()),
		];
	}
}

<?php

declare(strict_types=1);

namespace App\MoonShine\Pages\Blog;

use MoonShine\Fields\Text;
use MoonShine\Pages\Crud\FormPage;

class BlogFormPage extends FormPage
{
	public function fields(): array
	{
		return [
			Text::make('Заголовок', 'title'),
		];
	}

	protected function topLayer(): array
	{
		return [
		];
	}

	protected function mainLayer(): array
	{
		return [
		];
	}

	protected function bottomLayer(): array
	{
		return [
		];
	}
}

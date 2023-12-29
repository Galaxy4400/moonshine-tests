<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;
use App\MoonShine\Pages\Blog\BlogIndexPage;
use App\MoonShine\Pages\Blog\BlogFormPage;
use App\MoonShine\Pages\Blog\BlogDetailPage;

use MoonShine\Resources\ModelResource;

class BlogResource extends ModelResource
{
	protected string $model = Blog::class;

	protected string $title = 'Блог';

	public function pages(): array
	{
		return [
			BlogIndexPage::make($this->title()),
			BlogFormPage::make($this->getItemID() ? 'Редактирование' : 'Создание'),
			BlogDetailPage::make('Просмотр'),
		];
	}

	public function rules(Model $item): array
	{
		return [];
	}
}

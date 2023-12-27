<?php

declare(strict_types=1);

namespace App\Providers;

use MoonShine\Decorations\Block;
use MoonShine\Fields\Text;
use MoonShine\MoonShine;
use MoonShine\Menu\MenuItem;
use MoonShine\Menu\MenuGroup;
use MoonShine\Pages\ViewPage;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;
use MoonShine\Providers\MoonShineApplicationServiceProvider;


class MoonShineServiceProvider extends MoonShineApplicationServiceProvider
{
	protected function resources(): array
	{
		return [];
	}

	protected function pages(): array
	{
		return [];
	}

	protected function menu(): array
	{
		return [
			MenuItem::make(
				'Тестовая страница', 
				ViewPage::make()
					->setTitle('Тестовый заголовок страницы')
			),

			MenuGroup::make('Система', [
				MenuItem::make('Администраторы', new MoonShineUserResource()),
				MenuItem::make('Роли', new MoonShineUserRoleResource()),
			]),
		];
	}

	/**
	 * @return array{css: string, colors: array, darkColors: array}
	 */
	protected function theme(): array
	{
		return [
			'colors' => [
				'primary' => '#2288ed',
				'secondary' => '#e7505a',
				'success-bg' => '#1AA244',
			],
			'darkColors' => [
				'primary' => '#1175dd',
				'secondary' => '#d4222e',
				'success-bg' => '#21a926',
			]
		];
	}


	public function boot(): void
	{
		parent::boot();

		moonShineAssets()->add([
			'assets/admin/admin.css',
		]);
	}
}

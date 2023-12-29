<?php

declare(strict_types=1);

namespace App\MoonShine\Controllers;

use App\MoonShine\Pages\BlogPage;
use MoonShine\MoonShineRequest;
use MoonShine\Http\Controllers\MoonShineController;
use MoonShine\Pages\Page;


final class BlogController extends MoonShineController
{
	public function __invoke(MoonShineRequest $request): Page
	{
		return BlogPage::make();
	}
}

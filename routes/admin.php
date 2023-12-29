<?php

use App\MoonShine\Controllers\BlogController;
use Illuminate\Support\Facades\Route;


Route::get('blog', BlogController::class)->name('blog');

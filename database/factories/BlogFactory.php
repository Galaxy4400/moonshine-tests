<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
	protected $model = Blog::class;

	public function definition(): array
	{
		return [
			'title' => ucfirst($this->faker->words(3, true)),
		];
	}
}

<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
//    private int $counter = 0;
//    private array $parent_ids = [];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->realText,
            'parent_id' => null,
        ];
    }

    public function withParentState() {
        return $this->state(function (array $attributes) {
            return [
                'parent_id' => $this->faker->randomElement(Category::pluck('id'))
            ];
        });
    }
}

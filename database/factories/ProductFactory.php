<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->word;
        return [
            'name' => $name,
            'description' => $this->faker->realText,
            'price' => $this->faker->numberBetween(120, 300),
//            'image_src' => $this->faker->imageUrl(width: 296, height: 444, category: 'wreee'),
            'image_src' => 'https://dummyimage.com/294x444/c5d3d9/242424&text=' . $name,
            'category_id' => $this->faker->randomElement(Category::pluck('id')),
        ];
    }
}

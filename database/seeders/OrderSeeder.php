<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 10 заказов.
        Order::factory(10)->create();

        // В каждом заказе от 1 до 5 продуктов.
        foreach (Order::all() as $order) {
            $numberOfProducts = random_int(1, 5);
            $randomProducts = Product::pluck('id')->random($numberOfProducts);
            foreach ($randomProducts as $product) {
                $order->products()->attach($product, ['quantity' => random_int(1, 5)]);
            }
        }
    }
}

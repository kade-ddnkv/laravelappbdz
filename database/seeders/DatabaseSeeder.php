<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);

        $this->call(UserSeeder::class);

        Category::factory(4)->create();
        Category::factory(4)->withParentState()->create();
        Category::factory(4)->withParentState()->create();

        Product::factory(200)->create();

        $this->call(OrderSeeder::class);
    }
}

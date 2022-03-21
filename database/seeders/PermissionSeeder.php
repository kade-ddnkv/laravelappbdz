<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manageUsers = Permission::create([
            'name' => 'Manage Users',
            'slug' => 'manage-users'
        ]);

        $manageProducts = Permission::create([
            'name' => 'Manage Products',
            'slug' => 'manage-products'
        ]);

        $managePersonalOrders = Permission::create([
            'name' => 'Manage Personal Orders',
            'slug' => 'manage-personal-orders'
        ]);

//        $viewProducts = Permission::create([
//            'name' => 'View Products',
//            'slug' => 'view-products'
//        ]);

        $viewAllOrders = Permission::create([
            'name' => 'View All Orders',
            'slug' => 'view-all-orders'
        ]);
    }
}

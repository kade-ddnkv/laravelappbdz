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
        $permissions = [
            [
                'name' => 'Manage Users',
                'slug' => 'manage-users'
            ],
            [
                'name' => 'Manage Products',
                'slug' => 'manage-products'
            ],
            [
                'name' => 'Manage Personal Orders',
                'slug' => 'manage-personal-orders'
            ],
            [
                'name' => 'View All Orders',
                'slug' => 'view-all-orders'
            ]
        ];

        foreach ($permissions as $permission) {
            Permission::create($permission);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminPermissions = Permission::whereIn('slug', ['manage-users', 'manage-products', 'view-all-orders'])
        ->get();
        $customerPermissions = Permission::whereIn('slug', ['manage-personal-orders'])
        ->get();

        $admin = Role::create([
            'name' => 'Administrator',
            'slug' => 'administrator'
        ]);
        $admin->permissions()->attach($adminPermissions);

        $customer = Role::create([
            'name' => 'Customer',
            'slug' => 'customer'
        ]);
        $customer->permissions()->attach($customerPermissions);
    }
}

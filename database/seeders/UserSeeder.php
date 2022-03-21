<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::whereSlug('administrator')->first();
        $customerRole = Role::whereSlug('customer')->first();

        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@local',
                'password' => bcrypt('secret')
            ],
        ];
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@local',
            'password' => bcrypt('secret')
        ]);
        $admin->roles()->attach($adminRole);

        $customer1 = User::create([
            'name' => 'customer1',
            'email' => 'customer1@local',
            'password' => bcrypt('secret')
        ]);
        $customer1->roles()->attach($customerRole);

        $customer2 = User::create([
            'name' => 'customer2',
            'email' => 'customer2@local',
            'password' => bcrypt('secret')
        ]);
        $customer2->roles()->attach($customerRole);
    }
}

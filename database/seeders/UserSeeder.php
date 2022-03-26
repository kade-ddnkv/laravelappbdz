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
        $roles = [$adminRole, $customerRole];

        // Рандомная генерация.
        User::factory(6)->create();
        foreach (User::all() as $user) {
            $user->roles()->attach($roles[array_rand($roles)]);
        }

        // Генерация хардкод для удобства.
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@local',
            'email_verified_at' => now(),
            'password' => bcrypt('secret')
        ]);
        $admin->roles()->attach($adminRole);

        $customer = User::create([
            'name' => 'customer',
            'email' => 'customer@local',
            'email_verified_at' => now(),
            'password' => bcrypt('secret')
        ]);
        $customer->roles()->attach($customerRole);
    }
}

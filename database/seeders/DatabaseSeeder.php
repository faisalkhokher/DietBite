<?php

namespace Database\Seeders;

use App\Models\User;
use RoleTableSeeder;
use UserTableSeeder;
use PermissionTableSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call([
        //     PermissionSeeder::class,
        //     RoleSeeder::class,
        // ]);
     
        // $users = [
        //     [
        //         'name' => 'Admin',
        //         'email' => 'dietitian@dietbite.ae',
        //         'role' => 'admin',
        //         'password' => 'eW}xu_gpJ_H=2dx:'
        //     ],
        // ];

        // foreach ($users as $user) {
        //     $u = User::updateOrCreate([
        //         'name' => $user['name'],
        //         'email' => $user['email'],
        //         'password' => bcrypt($user['password']),
        //     ]);
        //     if (isset($user['role'])) {
        //         $role = \Spatie\Permission\Models\Role::findByName($user['role']);
        //         $u->assignRole($role);
        //     }

        // }

       
    }
}

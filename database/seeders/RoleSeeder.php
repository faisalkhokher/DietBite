<?php

namespace Database\Seeders;
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
        /*
        $roles = [
            'admin',
            'kitchen'
        ];

        foreach ($roles as $role) {
            $r = \Spatie\Permission\Models\Role::create(['name' => $role]);
            if ($role == 'admin') {
                $permissions = [
                    'role-list',
                    'role-create',
                    'role-edit',
                    'role-delete',
                    'user-list',
                    'user-create',
                    'user-edit',
                    'user-delete',
                    'permission-list',
                    'permission-create',
                    'permission-edit',
                    'permission-delete',
                ];
                foreach ($permissions as $p)
                    $r->givePermissionTo($p);
            }
        }
        */
    }
}

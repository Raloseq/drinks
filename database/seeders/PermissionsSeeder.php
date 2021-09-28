<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'edit drink']);
        Permission::create(['name' => 'delete drink']);
        Permission::create(['name' => 'create drink']);

        $role1 = Role::create(['name' => 'user']);
        $role1->givePermissionTo('edit drink','delete drink','create drink');

        $role2 = Role::create(['name' => 'admin']);
        $role2->givePermissionTo('edit drink','delete drink','create drink');

        $userAdmin = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.pl',
            'password' => bcrypt('admin')
        ]);

        $user = User::create([
            'name' => 'user',
            'email' => 'user@user.pl',
            'password' => bcrypt('user')
        ]);

        $user2 = User::create([
            'name' => 'user2',
            'email' => 'user2@user.pl',
            'password' => bcrypt('user2')
        ]);

        $userAdmin->assignRole($role2);
        $user->assignRole($role1);
        $user2->assignRole($role1);
    }
}

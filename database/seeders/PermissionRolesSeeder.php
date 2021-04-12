<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
class PermissionRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

               // create permissions
        Permission::create(['name' => 'create-esemenyek']);
        Permission::create(['name' => 'create-szekciok']);
        Permission::create(['name' => 'create-moderatorok']);
        Permission::create(['name' => 'create-eloadok']);
        Permission::create(['name' => 'create-jogosultsag']);
        Permission::create(['name' => 'view-loggs']);

        // create roles and assign created permissions
        $moderator = Role::create(['name' => 'moderator']);
        $moderator->givePermissionTo('create-szekciok');
        $moderator->givePermissionTo('create-esemenyek');
      

        $admin = Role::create(['name' => 'admin']);
        $admin->givePermissionTo('create-esemenyek');
        $admin->givePermissionTo('create-moderatorok');
        $admin->givePermissionTo('create-szekciok');
        $admin->givePermissionTo('create-eloadok');

        $super_admin = Role::create(['name' => 'super-admin']);
        $super_admin->givePermissionTo(Permission::all());

        $sadmin           = new User();
        $sadmin->name     = 'kocsislaszlo';
        $sadmin->email    = 'kocsislaszlo633@gmail.com';
        $sadmin->password = bcrypt('valami1234');
        $sadmin->save();
        $sadmin->assignRole($super_admin);

        $rmoderator           = new User();
        $rmoderator->name     = 'valami';
        $rmoderator->email    = 'valami@gmail.com';
        $rmoderator->password = bcrypt('valami12345');
        $rmoderator->save();
        $rmoderator->assignRole($moderator);
    }
}

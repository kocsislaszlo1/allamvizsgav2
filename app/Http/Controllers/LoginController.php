<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
class LoginController extends Controller
{
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

               // create permissions
        Permission::create(['name' => 'create-esemenyek']);
        Permission::create(['name' => 'create-szekciok']);
        Permission::create(['name' => 'create-moderatorok']);
        Permission::create(['name' => 'create-dhtt']);
        Permission::create(['name' => 'create-jogosultsag']);
        Permission::create(['name' => 'view-loggs']);

        // create roles and assign created permissions
        $turavezeto = Role::create(['name' => 'esemenyek']);
        $turavezeto->givePermissionTo('create-esemenyek');

        $admin = Role::create(['name' => 'admin']);
        $admin->givePermissionTo('create-esemenyek');
        $admin->givePermissionTo('create-moderatorok');
        $admin->givePermissionTo('create-szekciok');
        $admin->givePermissionTo('create-dhtt');

        $super_admin = Role::create(['name' => 'super-admin']);
        $super_admin->givePermissionTo(Permission::all());

        $sadmin           = new User();
        $sadmin->name     = 'kocsislaszlo';
        $sadmin->email    = 'kocsislaszlo633@gmail.com';
        $sadmin->password = bcrypt('kocsislaszlo');
        $sadmin->save();
        $sadmin->assignRole($super_admin);
       
    }
}

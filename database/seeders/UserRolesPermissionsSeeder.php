<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admins;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
 
class UserRolesPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Permissions
        Permission::create(['name' => 'view role', 'guard_name' =>'admin']);
        Permission::create(['name' => 'create role', 'guard_name' =>'admin']);
        Permission::create(['name' => 'update role', 'guard_name' =>'admin']);
        Permission::create(['name' => 'delete role', 'guard_name' =>'admin']);

        Permission::create(['name' => 'view permission', 'guard_name' =>'admin']);
        Permission::create(['name' => 'create permission', 'guard_name' =>'admin']);
        Permission::create(['name' => 'update permission', 'guard_name' =>'admin']);
        Permission::create(['name' => 'delete permission', 'guard_name' =>'admin']);

        Permission::create(['name' => 'view admin', 'guard_name' => 'admin']);
        Permission::create(['name' => 'create admin', 'guard_name' =>'admin']);
        Permission::create(['name' => 'update admin', 'guard_name' =>'admin']);
        Permission::create(['name' => 'delete admin', 'guard_name' =>'admin']);

        Permission::create(['name' => 'view user', 'guard_name' =>'admin']);
        Permission::create(['name' => 'update user', 'guard_name' =>'admin']);

        
        Permission::create(['name' => 'view news', 'guard_name' => 'admin']);
        Permission::create(['name' => 'create news', 'guard_name' =>'admin']);
        Permission::create(['name' => 'update news', 'guard_name' =>'admin']);
        Permission::create(['name' => 'delete news', 'guard_name' =>'admin']);

 
 

        // Create Roles
        $superAdminRole = Role::create(['name' => 'super-admin'  , 'guard_name' =>'admin']); //as super-admin
        $adminRole = Role::create(['name' => 'admin', 'guard_name' =>'admin']);
        $staffRole = Role::create(['name' => 'staff'  , 'guard_name' =>'admin']);
        $userRole = Role::create(['name' => 'user' , 'guard_name' =>'admin']);

        // Lets give all permission to super-admin role.
        $allPermissionNames = Permission::pluck('name')->toArray();

        $superAdminRole->givePermissionTo($allPermissionNames);

        // Let's give few permissions to admin role.
        $adminRole->givePermissionTo(['create role', 'view role', 'update role']);
        $adminRole->givePermissionTo(['create permission', 'view permission']);
        $adminRole->givePermissionTo(['create admin', 'view admin', 'update admin']);
        $adminRole->givePermissionTo(['create product', 'view product', 'update product']);


        // Let's Create User and assign Role to it.

        $superAdminUser = Admins::firstOrCreate([
                    'email' => 'superadmin@gmail.com',
                ], [
                    'full_name' => 'Super Admin',
                    'email' => 'superadmin@gmail.com',
                    'password' => Hash::make ('12345678'),
                ]);

        $superAdminUser->assignRole($superAdminRole);


        $adminUser = Admins::firstOrCreate([
                            'email' => 'admin@gmail.com'
                        ], [
                            'full_name' => 'Admin',
                            'email' => 'admin@gmail.com',
                            'password' => Hash::make ('12345678'),
                        ]);

        $adminUser->assignRole($adminRole);


        $staffUser = Admins::firstOrCreate([
                            'email' => 'staff@gmail.com',
                        ], [
                            'full_name' => 'Staff',
                            'email' => 'staff@gmail.com',
                            'password' => Hash::make('12345678'),
                        ]);

        $staffUser->assignRole($staffRole);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'create articles']);
        Permission::create(['name' => 'edit articles']);
        Permission::create(['name' => 'delete articles']);
        Permission::create(['name' => 'view articles']);

        // Buat role (peran) dan tambahkan permission
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'supervisor']);
        $managerRole = Role::create(['name' => 'admincom']);

        // Berikan permission ke role admin
        $adminRole->givePermissionTo(['create articles', 'edit articles', 'delete articles', 'view articles']);

        // Berikan permission tertentu ke role manager
        $managerRole->givePermissionTo(['edit articles', 'view articles']);
    }
}

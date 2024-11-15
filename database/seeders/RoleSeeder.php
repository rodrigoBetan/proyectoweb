<?php

namespace Database\Seeders;

use Illuminate\Console\View\Components\Secret;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roleadmin=Role::create(['name'=>'admin']);
        $roleuser=Role::create(['name'=>'user']);
        Permission::create(['name'=>'ver producto index'])->syncRoles([$roleadmin,$roleuser]);
        Permission::create(['name'=>'crear producto'])->syncRoles([$roleadmin]);
        Permission::create(['name'=>'products.edit'])->syncRoles([$roleadmin]);
        Permission::create(['name'=>'products.destroy'])->syncRoles([$roleadmin]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $role1 =  Role::create(['name' => 'Admin']);
       $role2 =  Role::create(['name' => 'Usuario']);
       Permission::create(['name' => 'categorias.index'])->syncRoles([$role1,$role2]);
       Permission::create(['name' => 'categorias.create'])->assignRole($role1);
       Permission::create(['name' => 'categorias.edit'])->assignRole($role1);
       Permission::create(['name' => 'categorias.show'])->syncRoles([$role1,$role2]);
       Permission::create(['name' => 'categorias.destroy'])->assignRole($role1);
       Permission::create(['name' => 'galerias.index'])->assignRole($role1);
       Permission::create(['name' => 'galerias.create'])->assignRole($role1);
       Permission::create(['name' => 'galerias.edit'])->assignRole($role1);
       Permission::create(['name' => 'galerias.show'])->assignRole($role1);
       Permission::create(['name' => 'galerias.destroy'])->assignRole($role1);
       Permission::create(['name' => 'clientes.index'])->assignRole($role1);
       Permission::create(['name' => 'clientes.create'])->syncRoles([$role1,$role2]);
       Permission::create(['name' => 'clientes.edit'])->assignRole($role1);
       Permission::create(['name' => 'clientes.show'])->assignRole($role1);
       Permission::create(['name' => 'clientes.destroy'])->assignRole($role1);
       Permission::create(['name' => 'reservas.index'])->assignRole($role1);
       Permission::create(['name' => 'reservas.create'])->syncRoles([$role1,$role2]);
       Permission::create(['name' => 'reservas.edit'])->assignRole($role1);
       Permission::create(['name' => 'reservas.show'])->assignRole($role1);
       Permission::create(['name' => 'reservas.destroy'])->assignRole($role1);
    }
}

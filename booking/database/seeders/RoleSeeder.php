<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       Permission::create(['name' => 'categorias.index']);
       Permission::create(['name' => 'categorias.create']);
       Permission::create(['name' => 'categorias.edit']);
       Permission::create(['name' => 'categorias.show']);
       Permission::create(['name' => 'categorias.destroy']);
       Permission::create(['name' => 'galerias.index']);
       Permission::create(['name' => 'galerias.create']);
       Permission::create(['name' => 'galerias.edit']);
       Permission::create(['name' => 'galerias.show']);
       Permission::create(['name' => 'galerias.destroy']);
       Permission::create(['name' => 'clientes.index']);
       Permission::create(['name' => 'clientes.create']);
       Permission::create(['name' => 'clientes.edit']);
       Permission::create(['name' => 'clientes.show']);
       Permission::create(['name' => 'clientes.destroy']);
       Permission::create(['name' => 'reservas.index']);
       Permission::create(['name' => 'reservas.create']);
       Permission::create(['name' => 'reservas.edit']);
       Permission::create(['name' => 'reservas.show']);
       Permission::create(['name' => 'reservas.destroy']);

       $admin = Role::create(['name' => 'Admin']);
       $admin->givePermissionTo([
        'categorias.index',
        'categorias.create',
        'categorias.edit',
        'categorias.show',
        'categorias.destroy',
        'galerias.index',
        'galerias.create',
        'galerias.edit',
        'galerias.show',
        'galerias.destroy',
        'clientes.index',
        'clientes.create',
        'clientes.edit',
        'clientes.show',
        'clientes.destroy',
        'reservas.index',
        'reservas.create',
        'reservas.edit',
        'reservas.show',
        'reservas.destroy'
    ]);
    $guest = Role::create(['name' => 'Guest']);
    $guest->givePermissionTo([
        'categorias.index',
        'categorias.show',
        'clientes.create',
        'reservas.create'
    ]);
    $user = User::find(1);
    $user->assignRole($admin);
    }
}

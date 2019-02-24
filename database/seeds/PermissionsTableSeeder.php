<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
           'name' => 'Navegar usuarios',
            'slug' => 'users.index',
            'description' => 'Listar y navegar todos los usuarios del sistema',
        ]);
        Permission::create([
            'name' => 'Ver detalle de usuario',
            'slug' => 'users.show',
            'description' => 'Ver en detalle cada usuario del sistema',
        ]);
        Permission::create([
            'name' => 'Edicion de usuarios',
            'slug' => 'users.edit',
            'description' => 'Editar cualquier dato de un usuario del sistema',
        ]);
        Permission::create([
            'name' => 'Eliminar usuario',
            'slug' => 'users.destroy',
            'description' => 'Eliminar cualquier usuario del sistema',
        ]);

        //Roles
        Permission::create([
            'name' => 'Navegar roles',
            'slug' => 'roles.index',
            'description' => 'Listar y navegar todos los roles del sistema',
        ]);
        Permission::create([
            'name' => 'Ver detalle de rol',
            'slug' => 'roles.show',
            'description' => 'Ver en detalle cada rol del sistema',
        ]);
        Permission::create([
            'name' => 'Creacion de roles',
            'slug' => 'roles.create',
            'description' => 'Editar cualquier dato de un rol del sistema',
        ]);
        Permission::create([
            'name' => 'Edicion de roles',
            'slug' => 'roles.edit',
            'description' => 'Editar cualquier dato de un rol del sistema',
        ]);
        Permission::create([
            'name' => 'Eliminar usuario',
            'slug' => 'roles.destroy',
            'description' => 'Eliminar cualquier rol del sistema',
        ]);

        //Productos
        Permission::create([
            'name' => 'Navegar productos',
            'slug' => 'products.index',
            'description' => 'Listar y navegar todos los productos del sistema',
        ]);
        Permission::create([
            'name' => 'Ver detalle de producto',
            'slug' => 'products.show',
            'description' => 'Ver en detalle cada producto del sistema',
        ]);
        Permission::create([
            'name' => 'Creacion de productos',
            'slug' => 'products.create',
            'description' => 'Crea un producto del sistema',
        ]);
        Permission::create([
            'name' => 'Edicion de productos',
            'slug' => 'products.edit',
            'description' => 'Editar cualquier dato de un producto del sistema',
        ]);
        Permission::create([
            'name' => 'Eliminar producto',
            'slug' => 'products.destroy',
            'description' => 'Eliminar cualquier producto del sistema',
        ]);
    }
}

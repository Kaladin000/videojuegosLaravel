<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name'=>'Admin']);
        Role::create(['name'=>'Usuario']);
        Role::create(['name'=>'Desarrollador']);
        Role::create(['name'=>'Editor']);

        $admin = Role::findByName('Admin');
        $admin->givePermissionTo(Permission::all());

        $usuario = Role::findByName('Usuario');
        $usuario->givePermissionTo([
            'ver videojuego',
            'ver perfil',
            'crear desarrollador',
            'ver usuario',
            'crear videojuego',
            'editar videojuego',
            'borrar videojuego'
        ]);

        $editor = Role::findByName('Editor');
        $editor->givePermissionTo([
            'ver videojuego',
            'crear videojuego',
            'editar videojuego',
            'borrar videojuego',
            'ver perfil',
            'crear perfil',
            'editar perfil',
            'borrar perfil',
            'ver desarrollador',
            'crear desarrollador',
            'editar desarrollador',
            'borrar desarrollador',
            'ver usuario'
        ]);

        $desarrollador = Role::findByName('Desarrollador');
        $desarrollador->givePermissionTo([
            'ver videojuego',
            'crear videojuego',
            'editar videojuego',
            'borrar videojuego',
            'ver perfil',
            'crear perfil',
            'editar perfil',
            'borrar perfil',
            'ver desarrollador',
            'editar desarrollador',
            'borrar desarrollador',
            'ver usuario',
            'crear usuario',
            'editar usuario',
            'borrar usuario'
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name'=>'ver videojuego']);
        Permission::create(['name'=>'editar videojuego']);
        Permission::create(['name'=>'borrar videojuego']);
        Permission::create(['name'=>'crear videojuego']);

        Permission::create(['name'=>'ver perfil']);
        Permission::create(['name'=>'editar perfil']);
        Permission::create(['name'=>'borrar perfil']);
        Permission::create(['name'=>'crear perfil']);

        Permission::create(['name'=>'ver desarrollador']);
        Permission::create(['name'=>'editar desarrollador']);
        Permission::create(['name'=>'borrar desarrollador']);
        Permission::create(['name'=>'crear desarrollador']);

        Permission::create(['name'=>'ver usuario']);
        Permission::create(['name'=>'editar usuario']);
        Permission::create(['name'=>'borrar usuario']);
        Permission::create(['name'=>'crear usuario']);

        Permission::create(['name'=>'ver editor']);
        Permission::create(['name'=>'editar editor']);
        Permission::create(['name'=>'borrar editor']);
        Permission::create(['name'=>'crear editor']);
    }
}

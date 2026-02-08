<?php

namespace Database\Seeders;

use App\Models\Editor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class EditorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fichero = fopen(Storage::path('editores.csv'), 'r');
        while (($datos=fgetcsv($fichero))!=null) {
            Editor::create([
                "nombre" => $datos[0],
                "pais" => $datos[1],
            ]);
        }
    }
}

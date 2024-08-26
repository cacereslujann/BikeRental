<?php

namespace Database\Seeders;

use App\Models\BicicletaTipo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BicicletaTipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Insertando datos a traves de un modelo laravel
        $bicicletaTipo = new BicicletaTipo;
        $bicicletaTipo->codigo = 'carretera';
        $bicicletaTipo->nombre = 'Bicicletas de Carretera';
        $bicicletaTipo->save();

        //A traves del helper DB puedo escribir codigo
        //que interctue con la base de datos que configuramos en el archivo .env
        // DB::table ('bicicleta_tipo')->insert([
        //     'codigo' => 'carretera',
        //     'nombre' => 'Bicicletas de Carretera'
        // ]);
    }
}

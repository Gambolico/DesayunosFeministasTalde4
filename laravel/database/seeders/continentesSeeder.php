<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class continentesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'Id_Continente'=>'1', 'Nombre_Continente'=>'América del Norte'
            ],
            [
                'Id_Continente'=>'2', 'Nombre_Continente'=>'Sudamérica'
            ],
            [
                'Id_Continente'=>'3', 'Nombre_Continente'=>'Europa'
            ],
            [
                'Id_Continente'=>'4', 'Nombre_Continente'=>'África'
            ],
            [
                'Id_Continente'=>'5', 'Nombre_Continente'=>'Asia'
            ],
            [
                'Id_Continente'=>'6', 'Nombre_Continente'=>'Oceania'
            ],
            [
                'Id_Continente'=>'7', 'Nombre_Continente'=>'Mixto'
            ],
            [
                'Id_Continente'=>'8', 'Nombre_Continente'=>''
            ]
        );
    }
}

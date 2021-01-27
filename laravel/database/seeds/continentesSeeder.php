<?php

use Illuminate\Database\Seeder;

class continentesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $continentes = [
            [
                'Id_Continente'=>'1',
                'Nombre_Continente'=>'América del Norte',
            ],
            [
                'Id_Continente'=>'2',
                'Nombre_Continente'=>'Sudamérica',
            ],
            [
                'Id_Continente'=>'3',
                'Nombre_Continente'=>'Europa',
            ],
            [
                'Id_Continente'=>'4',
                'Nombre_Continente'=>'África',
            ],
            [
                'Id_Continente'=>'5',
                'Nombre_Continente'=>'Asia',
            ],
            [
                'Id_Continente'=>'6',
                'Nombre_Continente'=>'Oceania',
            ],
            [
                'Id_Continente'=>'7',
                'Nombre_Continente'=>'Mixto',
            ],
            [
                'Id_Continente'=>'8',
                'Nombre_Continente'=>'',
            ],
        ];
        foreach ($continentes as $continente) {
            User::create($continente);
        }
    }
}

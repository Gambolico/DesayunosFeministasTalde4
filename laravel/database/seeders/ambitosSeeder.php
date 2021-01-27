<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ambitosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Ceramos los ambitos
        $ambitos = [
            [
                'Id_Ambito'=>'1',
                'Nombre_Ambito'=>'História',
                'Cod_Color'=>'#693d1f',
            ],
            [
                'Id_Ambito'=>'2',
                'Nombre_Ambito'=>'Derecho',
                'Cod_Color'=>'#693d1f',
            ],[
                'Id_Ambito'=>'3',
                'Nombre_Ambito'=>'Antropología',
                'Cod_Color'=>'#693d1f',
            ],[
                'Id_Ambito'=>'4',
                'Nombre_Ambito'=>'Geografía',
                'Cod_Color'=>'#d60000',
            ],[
                'Id_Ambito'=>'5',
                'Nombre_Ambito'=>'Filosofía',
                'Cod_Color'=>'#d60000',
            ],[
                'Id_Ambito'=>'6',
                'Nombre_Ambito'=>'Psicología',
                'Cod_Color'=>'#3877ff',
            ],
            [
                'Id_Ambito'=>'7',
                'Nombre_Ambito'=>'Economía',
                'Cod_Color'=>'#da4ad2',
            ],
            [
                'Id_Ambito'=>'8',
                'Nombre_Ambito'=>'Sociología',
                'Cod_Color'=>'#3877ff',
            ],
            [
                'Id_Ambito'=>'9',
                'Nombre_Ambito'=>'Pedagogía',
                'Cod_Color'=>'#11e223',
            ],
        ];
        foreach ($ambitos as $key ) {
            DB::table('ambitos')->insert($key);
        }
    }
    
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class mujeresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $path = base_path().'\database\seeders\sql\mujeres.sql';
        $path=mb_convert_encoding($path, "UTF-8");
        $sql=file_get_contents($path);
            DB::statement($sql);
            
    }
}

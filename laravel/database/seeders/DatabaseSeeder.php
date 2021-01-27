<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

// use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        // Eloquent::unguard();

        $this->call([
            CreateUsersSeeder::class,
            continentesSeeder::class,
            ambitosSeeder::class
        ]);

        // $path = 'app/developer_docs/countries.sql';
        // DB::unprepared(file_get_contents($path));
        // $this->command->info('Country table seeded!');
    }
}

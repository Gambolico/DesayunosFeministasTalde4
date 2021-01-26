<?php

namespace Database\Seeders;

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
        Eloquent::unguard();

        $this->call('UserTableSeeder');
        $this->command->info('User table seeded!');

        $path = 'app/developer_docs/countries.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Country table seeded!');
    }
}

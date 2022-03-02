<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EdicionSeeder::class);
        $this->call(UnidadSeeder::class);
        $this->call(UserSeeder::class);
    }
}

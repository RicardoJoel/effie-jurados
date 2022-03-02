<?php

use Illuminate\Database\Seeder;
use App\Edicion;

class EdicionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [[
            'anho' => '2020',
        ]];

        foreach ($array as $item)
            Edicion::create($item);
    }
}

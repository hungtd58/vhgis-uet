<?php

use Illuminate\Database\Seeder;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('places')->insert([
            'lat' => 21.02780,
            'long' => 105.83420
        ]);
        DB::table('places')->insert([
            'lat' => 20.1291,
            'long' => 105.3131
        ]);
    }
}

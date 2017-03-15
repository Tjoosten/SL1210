<?php

use Illuminate\Database\Seeder;

class UsMinorOutlyingIslands extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @see    https://github.com/Tjoosten/SL1210/issues/236
     * @return void
     */
    public function run()
    {
        // Divisions
        $divisionData = [
            // ['ISO_3166_2' => 'UM-', 'name' => ''],
            ['ISO_3166_2' => 'UM-81', 'name' => 'Baker Island'],
            ['ISO_3166_2' => 'UM-84', 'name' => 'Howland Island'],
            ['ISO_3166_2' => 'UM-86', 'name' => 'Jarvis Island'],
            ['ISO_3166_2' => 'UM-67', 'name' => 'Johnston Atoll'],
            ['ISO_3166_2' => 'UM-89', 'name' => 'Kingman Reef'],
            ['ISO_3166_2' => 'UM-71', 'name' => 'Midway Islands'],
            ['ISO_3166_2' => 'UM-76', 'name' => 'Navassa Island'],
            ['ISO_3166_2' => 'UM-95', 'name' => 'Palmyra Atoll'],
            ['ISO_3166_2' => 'UM-79', 'name' => 'Wake Island'],
        ];

        $division = DB::table('devisions');
        $division->where('ISO_3166_2', 'LIKE', '%UM-%')->delete();
        $division->insert($divisionData);
    }
}

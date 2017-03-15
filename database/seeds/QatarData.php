<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QatarData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @see    https://en.wikipedia.org/wiki/ISO_3166-2:QA
     * @return void
     */
    public function run()
    {
        // Divisions
        $divisionData = [
            // ['ISO_3166_2' => 'QA-', 'name' => ''],
            ['ISO_3166_2' => 'QA-DA', 'name' => 'Ad Dawhah'],
            ['ISO_3166_2' => 'QA-KH', 'name' => 'Al Khawr wa adh Dhakhirah'],
            ['ISO_3166_2' => 'QA-WA', 'name' => 'Al Wakrah'],
            ['ISO_3166_2' => 'QA-RA', 'name' => 'Ar Rayyan'],
            ['ISO_3166_2' => 'QA-MS', 'name' => 'Ash Shamal'],
            ['ISO_3166_2' => 'QA-ZA', 'name' => 'Az Za ayin'],
            ['ISO_3166_2' => 'QA-US', 'name' => 'Umm Salal'],
        ];

        $division = DB::table('Devisions');
        $division->where('ISO_3166_2', 'LIKE', "%QA-%")->delete();
        $division->insert($divisionData);
    }
}

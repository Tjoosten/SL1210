<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComorosSubdivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Source: https://en.wikipedia.org/wiki/ISO_3166-2:KM

        $divisionData = [
            // ['ISO_3166_2' => 'KM-', 'name' => '']
            ['ISO_3166_2' => 'KM-G', 'name' => 'Grande Comore'],
            ['ISO_3166_2' => 'KM-A', 'name' => 'Anjouan'],
            ['ISO_3166_2' => 'KM-M', 'name' => 'Moheli'],
        ];

        $division = DB::table('devisions');
        $division->where('ISO_3166_2', 'LIKE', '%KM-%')->delete();
        $division->insert($divisionData);
    }
}

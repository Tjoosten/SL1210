<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TongaSubdivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Source: https://en.wikipedia.org/wiki/ISO_3166-2:TO

        $divisionData = [
            // ['ISO_3166_2' => '', 'name' => ''],
            ['ISO_3166_2' => 'TO-01', 'name' => "'Eua'"],
            ['ISO_3166_2' => 'TO-02', 'name' => "Ha'apai"],
            ['ISO_3166_2' => 'TO-03', 'name' => 'Niuas'],
            ['ISO_3166_2' => 'TO-04', 'name' => 'Tongatapu'],
            ['ISO_3166_2' => 'TO-05', 'name' => "Vava'u"],
        ];

        $division = DB::table('devisions');
        $division->where('ISO_3166_2', 'LIKE', '%TO-%')->delete();
        $division->insert($divisionData);
    }
}

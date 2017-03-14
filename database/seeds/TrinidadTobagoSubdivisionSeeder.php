<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrinidadTobagoSubdivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Source: https://en.wikipedia.org/wiki/ISO_3166-2:TT

        $divisionData = [
            // ['ISO_3166_2' => 'TT-', 'name' => ''],
            ['ISO_3166_2' => 'TT-CTT', 'name' => 'Couva-Tabaquite-Talparo'],
            ['ISO_3166_2' => 'TT-DMN', 'name' => 'Diego Martin'],
            ['ISO_3166_2' => 'TT-MRC', 'name' => 'Mayaro-Rio Claro'],
            ['ISO_3166_2' => 'TT-PED', 'name' => 'Penal-Debe'],
            ['ISO_3166_2' => 'TT-PRT', 'name' => 'Princes Town'],
            ['ISO_3166_2' => 'TT-SGE', 'name' => 'Sangre Grande'],
            ['ISO_3166_2' => 'TT-SJL', 'name' => 'San Juan-Laventille'],
            ['ISO_3166_2' => 'TT-SIP', 'name' => 'Siparia'],
            ['ISO_3166_2' => 'TT-TUP', 'name' => 'Tunapuna-Piarco'],
            ['ISO_3166_2' => 'TT-ARI', 'name' => 'Arima'],
            ['ISO_3166_2' => 'TT-CHA', 'name' => 'Chaquanas'],
            ['ISO_3166_2' => 'TT-PTF', 'name' => 'Point Fortin'],
            ['ISO_3166_2' => 'TT-POS', 'name' => 'Port Of Spain'],
            ['ISO_3166_2' => 'TT-SFO', 'name' => 'San Fernando'],
            ['ISO_3166_2' => 'TT-TOB', 'name' => 'Tobago'],
        ];

        $division = DB::table('devisions');
        $division->where('ISO_3166_2', 'LIKE', '%TT-%')->delete();
        $division->insert($divisionData);
    }
}

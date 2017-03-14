<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AfghanistanSubdivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // source: https://en.wikipedia.org/wiki/ISO_3166-2:AF

        $divisionData = [
            // ['ISO_3166_2' => 'AF-', 'name' => ''],
            ['ISO_3166_2' => 'AF-BDS', 'name' => 'Badakhstan'],
            ['ISO_3166_2' => 'AF-BDG', 'name' => 'Badghis'],
            ['ISO_3166_2' => 'AF-BGL', 'name' => 'Baghlan'],
            ['ISO_3166_2' => 'AF-BAL', 'name' => 'Balkh'],
            ['ISO_3166_2' => 'AF-BAM', 'name' => 'Bamyan'],
            ['ISO_3166_2' => 'AF-DAY', 'name' => 'Daykundi'],
            ['ISO_3166_2' => 'AF-FRA', 'name' => 'Farah'],
            ['ISO_3166_2' => 'AF-FYB', 'name' => 'Faryab'],
            ['ISO_3166_2' => 'AF-GHA', 'name' => 'Ghazni'],
            ['ISO_3166_2' => 'AF-GHO', 'name' => 'Ghor'],
            ['ISO_3166_2' => 'AF-HEL', 'name' => 'Helmand'],
            ['ISO_3166_2' => 'AF-HER', 'name' => 'Herat'],
            ['ISO_3166_2' => 'AF-JOW', 'name' => 'Jowzjan'],
            ['ISO_3166_2' => 'AF-KAB', 'name' => 'Kaboul'],
            ['ISO_3166_2' => 'AF-KAN', 'name' => 'Kandahar'],
            ['ISO_3166_2' => 'AF-KAP', 'name' => 'Kapisa'],
            ['ISO_3166_2' => 'AF-KHO', 'name' => 'Khost'],
            ['ISO_3166_2' => 'AF-KNR', 'name' => 'Kunar'],
            ['ISO_3166_2' => 'AF-KDZ', 'name' => 'Kunduz'],
            ['ISO_3166_2' => 'AF-LAG', 'name' => 'Laghman'],
            ['ISO_3166_2' => 'AF-LOG', 'name' => 'Logar'],
            ['ISO_3166_2' => 'AF-NAN', 'name' => 'Nangarhar'],
            ['ISO_3166_2' => 'AF-NIM', 'name' => 'Nimruz'],
            ['ISO_3166_2' => 'AF-NUR', 'name' => 'Nuristan'],
            ['ISO_3166_2' => 'AF-PKA', 'name' => 'Paktika'],
            ['ISO_3166_2' => 'AF-PIA', 'name' => 'Paktia'],
            ['ISO_3166_2' => 'AF-PAN', 'name' => 'Panjshir'],
            ['ISO_3166_2' => 'AF-PAR', 'name' => 'Parwan'],
            ['ISO_3166_2' => 'AF-SAM', 'name' => 'Samangan'],
            ['ISO_3166_2' => 'AF-SAR', 'name' => 'Sar-e Pol'],
            ['ISO_3166_2' => 'AF-TAK', 'name' => 'Takhar'],
            ['ISO_3166_2' => 'AF-URU', 'name' => 'Urozgan'],
            ['ISO_3166_2' => 'AF-WAR', 'name' => 'Maidan Wardak'],
            ['ISO_3166_2' => 'AF-ZAB', 'name' => 'Zabul'],
        ];

        $division = DB::table('devisions');
        $division->where('ISO_3166_2', 'LIKE', '%AF-%')->delete();
        $division->insert($divisionData);
    }
}

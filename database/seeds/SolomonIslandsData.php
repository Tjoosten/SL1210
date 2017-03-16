<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SolomonIslandsData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @see    https://en.wikipedia.org/wiki/ISO_3166-2:SB
     * @return void
     */
    public function run()
    {
        // divisions
        $divisionData = [
            // ['ISO_3166_2' => 'SB-', 'name' => ''],
            ['ISO_3166_2' => 'SB-CI', 'name' => 'Capital Territory (Honiara)'],
            ['ISO_3166_2' => 'SB-CE', 'name' => 'Central'],
            ['ISO_3166_2' => 'SB-CH', 'name' => 'Choiseul'],
            ['ISO_3166_2' => 'SB-GU', 'name' => 'Guadalcanal'],
            ['ISO_3166_2' => 'SB-IS', 'name' => 'Isabel'],
            ['ISO_3166_2' => 'SB-MK', 'name' => 'Makira-Ulawa'],
            ['ISO_3166_2' => 'SB-ML', 'name' => 'Malaita'],
            ['ISO_3166_2' => 'SB-RB', 'name' => 'Renell and Bellona'],
            ['ISO_3166_2' => 'SB-TE', 'name' => 'Temotu'],
            ['ISO_3166_2' => 'SB-WE', 'name' => 'Western'],
        ];

        $division = DB::table('devisions');
        $division->where('ISO_3166_2', 'LIKE', '%SB-%')->delete();
        $division->insert($divisionData);
    }
}

<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PanamaData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @see    https://en.wikipedia.org/wiki/ISO_3166-2:PA#cite_note-1
     * @return void
     */
    public function run()
    {
        // Division
        $divisionData = [
            // ['ISO_3166_2' => 'PA-', 'name' => ''],
            ['ISO_3166_2' => 'PA-1', 'name' => 'Bocal Del Toro'],
            ['ISO_3166_2' => 'PA-10', 'name' => 'Panama Oeste'],
            ['ISO_3166_2' => 'PA-2', 'name' => 'Cocle'],
            ['ISO_3166_2' => 'PA-3', 'name' => 'Colon'],
            ['ISO_3166_2' => 'PA-4', 'name' => 'Chiriqui'],
            ['ISO_3166_2' => 'PA-5', 'name' => 'Darien'],
            ['ISO_3166_2' => 'PA-6', 'name' => 'Herrera'],
            ['ISO_3166_2' => 'PA-7', 'name' => 'Los Santos'],
            ['ISO_3166_2' => 'PA-8', 'name' => 'Panama'],
            ['ISO_3166_2' => 'PA-9', 'name' => 'Veraguas'],
            ['ISO_3166_2' => 'PA-EM', 'name' => 'Embera'],
            ['ISO_3166_2' => 'PA-KY', 'name' => 'Kuna Yala'],
            ['ISO_3166_2' => 'PA-NB', 'name' => 'Ngobe-Bugle'],
        ];

        $division = DB::table('devisions');
        $division->where('ISO_3166_2', 'LIKE', '%PA-%')->delete();
        $division->insert($divisionData);
    }
}

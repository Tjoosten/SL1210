<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TimorLesteData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @see    https://en.wikipedia.org/wiki/ISO_3166-2:TL
     * @return void
     */
    public function run()
    {
        // Divisions
        $divisionData = [
            // ['ISO_3166_2' => 'TL-', 'name' => ''],
            ['ISO_3166_2' => 'TL-AL', 'name' => 'Aileu'],
            ['ISO_3166_2' => 'TL-AN', 'name' => 'Ainaro'],
            ['ISO_3166_2' => 'TL-BA', 'name' => 'Baucau'],
            ['ISO_3166_2' => 'TL-BO', 'name' => 'Bobonaro'],
            ['ISO_3166_2' => 'TL-CO', 'name' => 'Cova Lima'],
            ['ISO_3166_2' => 'TL-DI', 'name' => 'Dili'],
            ['ISO_3166_2' => 'TL-ER', 'name' => 'Ermera'],
            ['ISO_3166_2' => 'TL-LA', 'name' => 'Lautem'],
            ['ISO_3166_2' => 'TL-LI', 'name' => 'Liquica'],
            ['ISO_3166_2' => 'TL-MT', 'name' => 'Manatuto'],
            ['ISO_3166_2' => 'TL-MF', 'name' => 'Manufahi'],
            ['ISO_3166_2' => 'TL-OE', 'name' => 'Oecussi'],
            ['ISO_3166_2' => 'TL-VI', 'name' => 'Viqueque'],
        ];

        $division = DB::table('devisions');
        $division->where('ISO_3166_2', 'LIKE', '%TL-%')->delete();
        $division->insert($divisionData);
    }
}

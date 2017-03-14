<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TunesiaSubdivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Source: https://en.wikipedia.org/wiki/ISO_3166-2:TN

        $divisionData = [
            // ['ISO_3166_2' => 'TN-', 'name' => ''],
            ['ISO_3166_2' => 'TN-11', 'name' => 'Tunis'],
            ['ISO_3166_2' => 'TN-12', 'name' => "L'Ariana"],
            ['ISO_3166_2' => 'TN-13', 'name' => 'Ben Arous'],
            ['ISO_3166_2' => 'TN-14', 'name' => 'La Manouba'],
            ['ISO_3166_2' => 'TN-21', 'name' => 'Nabeul'],
            ['ISO_3166_2' => 'TN-22', 'name' => 'Zaghouan'],
            ['ISO_3166_2' => 'TN-23', 'name' => 'Bizerte'],
            ['ISO_3166_2' => 'TN-31', 'name' => 'Beja'],
            ['ISO_3166_2' => 'TN-32', 'name' => 'Jendouba'],
            ['ISO_3166_2' => 'TN-33', 'name' => 'Le Kef'],
            ['ISO_3166_2' => 'TN-34', 'name' => 'Siliana'],
            ['ISO_3166_2' => 'TN-41', 'name' => 'Kairouan'],
            ['ISO_3166_2' => 'TN-42', 'name' => 'Kasserine'],
            ['ISO_3166_2' => 'TN-43', 'name' => 'Sidi Bouzid'],
            ['ISO_3166_2' => 'TN-51', 'name' => 'Sousse'],
            ['ISO_3166_2' => 'TN-52', 'name' => 'Manostir'],
            ['ISO_3166_2' => 'TN-53', 'name' => 'Mahdia'],
            ['ISO_3166_2' => 'TN-61', 'name' => 'Sfax'],
            ['ISO_3166_2' => 'TN-71', 'name' => 'Gafsa'],
            ['ISO_3166_2' => 'TN-72', 'name' => 'Tozeur'],
            ['ISO_3166_2' => 'TN-73', 'name' => 'Kebili'],
            ['ISO_3166_2' => 'TN-81', 'name' => 'Gabes'],
            ['ISO_3166_2' => 'TN-82', 'name' => 'Medenine'],
            ['ISO_3166_2' => 'TN-83', 'name' => 'Tataouine'],
        ];

        $division = DB::table('devisions');
        $division->where('ISO_3166_2', 'LIKE', '%TN-%')->delete();
        $division->insert($divisionData);
    }
}

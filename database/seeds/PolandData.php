<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PolandData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @see    https://en.wikipedia.org/wiki/ISO_3166-2:PL
     * @return void
     */
    public function run()
    {
        // Division Data
        $divisionData = [
            // ['ISO_3166_2' => 'name' => ''],
            ['ISO_3166_2' => 'PL-DS', 'name' => 'Lower Silesia'],
            ['ISO_3166_2' => 'PL-KP', 'name' => 'Kuyavia-Pomerania'],
            ['ISO_3166_2' => 'PL-LU', 'name' => 'Lublin'],
            ['ISO_3166_2' => 'PL-LB', 'name' => 'Lubusz'],
            ['ISO_3166_2' => 'PL-LD', 'name' => 'Lodz'],
            ['ISO_3166_2' => 'PL-MA', 'name' => 'Lesser Poland'],
            ['ISO_3166_2' => 'PL-MZ', 'name' => 'Mazovia'],
            ['ISO_3166_2' => 'PL-OP', 'name' => 'Opole'],
            ['ISO_3166_2' => 'PL-PK', 'name' => 'Subcarpathia'],
            ['ISO_3166_2' => 'PL-PD', 'name' => 'Podlaskie'],
            ['ISO_3166_2' => 'PL-PM', 'name' => 'Pomerania'],
            ['ISO_3166_2' => 'PL-SL', 'name' => 'Silesia'],
            ['ISO_3166_2' => 'PL-SK', 'name' => 'Holy cross'],
            ['ISO_3166_2' => 'PL-WN', 'name' => 'Warmia-Masuria'],
            ['ISO_3166_2' => 'PL-WP', 'name' => 'Greater Poland'],
            ['ISO_3166_2' => 'PL-ZP', 'name' => 'West Pomerania'],
        ];

        $division = DB::table('devisions');
        $division->where('ISO_3166_2', 'LIKE', '%PL-%')->delete();
        $division->insert($divisionData);
    }
}

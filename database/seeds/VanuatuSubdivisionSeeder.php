<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VanuatuSubdivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Source: https://en.wikipedia.org/wiki/ISO_3166-2:VU

        $divisionData = [
            // ['ISO_3166_2' => 'VU-', 'name' => ''],
            ['ISO_3166_2' => 'VU-MAP', 'name' => 'Malampa'],
            ['ISO_3166_2' => 'VU-PAM', 'name' => 'Penama'],
            ['ISO_3166_2' => 'VU-SAM', 'name' => 'Sanma'],
            ['ISO_3166_2' => 'VU-SEE', 'name' => 'Shefa'],
            ['ISO_3166_2' => 'VU-TAE', 'name' => 'Tafea'],
            ['ISO_3166_2' => 'VU-TOB', 'name' => 'Torba'],
        ];

        $division = DB::table('devisions');
        $division->where('ISO_3166_2', 'LIKE', '%VU-%')->delete();
        $division->insert($divisionData);
    }
}

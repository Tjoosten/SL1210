<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TurkmenistanData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @see    https://en.wikipedia.org/wiki/ISO_3166-2:TM
     * @return void
     */
    public function run()
    {
        // Division
        $divisionData = [
            // ['ISO_3166_2' => 'TM-', 'name' => ''],
            ['ISO_3166_2' => 'TM-A', 'name' => 'Ahal'],
            ['ISO_3166_2' => 'TM-B', 'name' => 'Balkan'],
            ['ISO_3166_2' => 'TM-D', 'name' => 'Dasoguz'],
            ['ISO_3166_2' => 'TM-L', 'name' => 'Lebap'],
            ['ISO_3166_2' => 'TM-M', 'name' => 'Mary'],
            ['ISO_3166_2' => 'TM-S', 'name' => 'Asgabat'],
        ];

        $division = DB::table('devisions');
        $division->where('ISO_3166_2', 'LIKE', '%TM-%')->delete();
        $division->insert($divisionData);
    }
}

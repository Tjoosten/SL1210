<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZambiaSubdivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Source: https://en.wikipedia.org/wiki/ISO_3166-2:ZM

        $divisionData = [
            // ['ISO_3166_2' => 'ZM-', 'name' => ''],
            ['ISO_3166_2' => 'ZM-02', 'name' => 'Central'],
            ['ISO_3166_2' => 'ZM-08', 'name' => 'Copperbelt'],
            ['ISO_3166_2' => 'ZM-03', 'name' => 'Eastern'],
            ['ISO_3166_2' => 'ZM-04', 'name' => 'Luapula'],
            ['ISO_3166_2' => 'ZM-09', 'name' => 'Lusaka'],
            ['ISO_3166_2' => 'ZM-05', 'name' => 'Northern'],
            ['ISO_3166_2' => 'ZM-06', 'name' => 'North-Western'],
            ['ISO_3166_2' => 'ZM-07', 'name' => 'Southern'],
            ['ISO_3166_2' => 'ZM-01', 'name' => 'Western'],
            ['ISO_3166_2' => 'ZM-10', 'name' => 'Muchinga'],
        ];

        $division = DB::table('devisions');
        $division->where('ISO_3166_2', 'LIKE', '%ZM-%')->delete();
        $division->insert($divisionData);
    }
}

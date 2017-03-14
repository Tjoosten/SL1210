<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GranadaSubdivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Source: https://en.wikipedia.org/wiki/ISO_3166-2:GD

        $divisionData = [
            // ['ISO_3166_2' => '', 'name' => ''],
            ['ISO_3166_2' => 'GD-01', 'name' => 'Saint Andrew'],
            ['ISO_3166_2' => 'GD-02', 'name' => 'Saint David'],
            ['ISO_3166_2' => 'GD-03', 'name' => 'Saint George'],
            ['ISO_3166_2' => 'GD-04', 'name' => 'Saint John'],
            ['ISO_3166_2' => 'GD-05', 'name' => 'Saint Mark'],
            ['ISO_3166_2' => 'GD-06', 'name' => 'Saint Patrick'],
            ['ISO_3166_2' => 'GD-10', 'name' => 'Southern Grenadine Islands'],
        ];

        $division = DB::table('devisions');
        $division->where('ISO_3166_2', 'LIKE', '%GD-%')->delete();
        $division->insert($divisionData);
    }
}

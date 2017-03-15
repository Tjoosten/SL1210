<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SwazilandSubdivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Source: https://en.wikipedia.org/wiki/ISO_3166-2:SZ

        $divisionData = [
            // ['ISO_3166_2' => 'SZ-', 'name' => ''],
            ['ISO_3166_2' => 'SZ-HH', 'name' => 'Hhohho'],
            ['ISO_3166_2' => 'SZ-LU', 'name' => 'Lubombo'],
            ['ISO_3166_2' => 'SZ-MA', 'name' => 'Manzini'],
            ['ISO_3166_2' => 'SZ-SH', 'name' => 'Shiselweni'],
        ];

        $division = DB::table('Devisions');
        $division->where('ISO_3166_2', 'LIKE', '%SZ-%')->delete();
        $division->insert($divisionData);
    }
}

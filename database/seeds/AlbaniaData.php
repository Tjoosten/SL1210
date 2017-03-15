<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbaniaData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @see    https://en.wikipedia.org/wiki/ISO_3166-2:AL
     * @return void
     */
    public function run()
    {
        // Divisions
        $divisionData = [
            // ['ISO_3166_2' => 'AL-', 'name' => 'name'],
            ['ISO_3166_2' => 'AL-01', 'name' => 'Berat'],
            ['ISO_3166_2' => 'AL-09', 'name' => 'Diber'],
            ['ISO_3166_2' => 'AL-02', 'name' => 'Durres'],
            ['ISO_3166_2' => 'AL-03', 'name' => 'Elbasan'],
            ['ISO_3166_2' => 'AL-04', 'name' => 'Fier'],
            ['ISO_3166_2' => 'AL-05', 'name' => 'Djirokaster'],
            ['ISO_3166_2' => 'AL-06', 'name' => 'Korce'],
            ['ISO_3166_2' => 'AL-07', 'name' => 'Kukes'],
            ['ISO_3166_2' => 'AL-08', 'name' => 'Lezhe'],
            ['ISO_3166_2' => 'AL-10', 'name' => 'Shkoder'],
            ['ISO_3166_2' => 'AL-11', 'name' => 'Tirane'],
            ['ISO_3166_2' => 'AL-12', 'name' => 'Vlore'],
        ];

        $division = DB::table('devisions');
        $division->where('ISO_3166_2', 'LIKE', '%AL-%')->delete();
        $division->insert($divisionData);
    }
}

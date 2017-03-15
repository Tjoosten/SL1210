<?php

use Illuminate\Database\Seeder;

class WallisFutunaData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @see    https://en.wikipedia.org/wiki/ISO_3166-2:WF
     * @return void
     */
    public function run()
    {
        // Divisions
        $divisionData = [
            // ['ISO_3166_2' => 'WF-', 'name' => ''],
            ['ISO_3166_2' => 'WF-AL', 'name' => 'Alo'],
            ['ISO_3166_2' => 'WF-SG', 'name' => 'Sigave'],
            ['ISO_3166_2' => 'WF-UV', 'name' => 'Uvea'],
        ];

        $division = DB::table('devisions');
        $division->where('ISO_3166_2', 'LIKE', '%WF-%')->delete();
        $division->insert($divisionData);
    }
}

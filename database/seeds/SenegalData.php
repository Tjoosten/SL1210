<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SenegalData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @see https://en.wikipedia.org/wiki/ISO_3166-2:SN
     *
     * @return void
     */
    public function run()
    {

        // Divisions.
        $divisionData = [
            // ['ISO_3166_2' => 'SN-', 'name' => ''],
            ['ISO_3166_2' => 'SN-DK', 'name' => 'Dakar'],
            ['ISO_3166_2' => 'SN-DB', 'name' => 'Diourbel'],
            ['ISO_3166_2' => 'SN-FK', 'name' => 'Fatick'],
            ['ISO_3166_2' => 'SN-KA', 'name' => 'Kaffrine'],
            ['ISO_3166_2' => 'SN-KL', 'name' => 'Kaolack'],
            ['ISO_3166_2' => 'SN-KE', 'name' => 'Kedougou'],
            ['ISO_3166_2' => 'SN-KD', 'name' => 'Kolda'],
            ['ISO_3166_2' => 'SN-LG', 'name' => 'Louga'],
            ['ISO_3166_2' => 'SN-MT', 'name' => 'Matam'],
            ['ISO_3166_2' => 'SN-SL', 'name' => 'Saint-Louis'],
            ['ISO_3166_2' => 'SN-SE', 'name' => 'Sedhiou'],
            ['ISO_3166_2' => 'SN-TC', 'name' => 'Tambacounda'],
            ['ISO_3166_2' => 'SN-TH', 'name' => 'Thies'],
            ['ISO_3166_2' => 'SN-ZG', 'name' => 'Ziguinchor'],
        ];

        $division = DB::table('Devisions');
        $division->where('ISO_3166_2', 'LIKE', '%SN-%')->delete();
        $division->insert($divisionData);
    }
}

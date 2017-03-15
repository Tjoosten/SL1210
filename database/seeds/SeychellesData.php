<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeychellesData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @see    https://en.wikipedia.org/wiki/ISO_3166-2:SC
     * @return void
     */
    public function run()
    {
        // Divisions
        $divisionData = [
            // ['ISO_3166_2' => 'SC-', 'name' => ''],
            ['ISO_3166_2' => 'SC-01', 'name' => 'Anse aux Pins'],
            ['ISO_3166_2' => 'SC-02', 'name' => 'Anse Boileau'],
            ['ISO_3166_2' => 'SC-03', 'name' => 'Anse Etoile'],
            ['ISO_3166_2' => 'SC-04', 'name' => 'Anse Royale'],
            ['ISO_3166_2' => 'SC-05', 'name' => 'Au Cap'],
            ['ISO_3166_2' => 'SC-06', 'name' => 'Baie Lazare'],
            ['ISO_3166_2' => 'SC-07', 'name' => 'Baie Sainte Anne'],
            ['ISO_3166_2' => 'SC-08', 'name' => 'Beau Vallon'],
            ['ISO_3166_2' => 'SC-09', 'name' => 'Bel Air'],
            ['ISO_3166_2' => 'SC-10', 'name' => 'Bel Ombre'],
            ['ISO_3166_2' => 'SC-11', 'name' => 'Cascade'],
            ['ISO_3166_2' => 'SC-12', 'name' => 'Glacis'],
            ['ISO_3166_2' => 'SC-13', 'name' => 'Grand Anse Mahe'],
            ['ISO_3166_2' => 'SC-14', 'name' => 'Grand Anse Praslin'],
            ['ISO_3166_2' => 'SC-15', 'name' => 'La Digue'],
            ['ISO_3166_2' => 'SC-16', 'name' => 'English River'],
            ['ISO_3166_2' => 'SC-24', 'name' => 'Les Mamelles'],
            ['ISO_3166_2' => 'SC-17', 'name' => 'Mont Buxton'],
            ['ISO_3166_2' => 'SC-18', 'name' => 'Mont Fleuri'],
            ['ISO_3166_2' => 'SC-19', 'name' => 'Plaisance'],
            ['ISO_3166_2' => 'SC-20', 'name' => 'Pointe Larue'],
            ['ISO_3166_2' => 'SC-21', 'name' => 'Port Glaud'],
            ['ISO_3166_2' => 'SC-25', 'name' => 'Rouche Caiman'],
            ['ISO_3166_2' => 'SC-22', 'name' => 'Laint Louis'],
            ['ISO_3166_2' => 'SC-23', 'name' => 'Takamaka'],
        ];

        $division = DB::table('devisions');
        $division->where('ISO_3166_2', 'LIKE', '%SC-%')->delete();
        $division->insert($divisionData);
    }
}

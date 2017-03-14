<?php

use Illuminate\Database\Seeder;

class IsraelSubdivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Source: https://en.wikipedia.org/wiki/ISO_3166-2:IL

        $divisionData = [
            // ['ISO_3166_2' => 'IL-', 'name' => ''],
            ['ISO_3166_2' => 'IL-D', 'name' => 'Southern District'],
            ['ISO_3166_2' => 'IL-M', 'name' => 'Central District'],
            ['ISO_3166_2' => 'IL-Z', 'name' => 'Northern Disctrict'],
            ['ISO_3166_2' => 'IL-HA', 'name' => 'Haifa'],
            ['ISO_3166_2' => 'IL-TA', 'name' => 'Tel-Aviv'],
            ['ISO_3166_2' => 'IL-JM', 'name' => 'Jerusalem'],
        ];

        $division = DB::table('devisions');
        $division->where('ISO_3166_2', 'LIKE', '%IL-%')->delete();
        $division->insert($divisionData);
    }
}

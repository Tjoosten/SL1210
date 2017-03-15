<?php

use Illuminate\Database\Seeder;

class ZimbabweSubdivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Source: https://en.wikipedia.org/wiki/ISO_3166-2:ZW

        $divisionData = [
            // ['ISO_3166_2' => 'ZW-', 'name' => ''],
            ['ISO_3166_2' => 'ZW-BU', 'name' => 'Bulawayo'],
            ['ISO_3166_2' => 'ZW-HA', 'name' => 'Harare'],
            ['ISO_3166_2' => 'ZW-MA', 'name' => 'Manicaland'],
            ['ISO_3166_2' => 'ZW-MC', 'name' => 'Mashonaland Central'],
            ['ISO_3166_2' => 'ZW-ME', 'name' => 'Mashonaland East'],
            ['ISO_3166_2' => 'ZW-MW', 'name' => 'Mashonaland West'],
            ['ISO_3166_2' => 'ZW-MV', 'name' => 'Masvingo'],
            ['ISO_3166_2' => 'ZW-MN', 'name' => 'Matabeleland North'],
            ['ISO_3166_2' => 'ZW-MS', 'name' => 'Matabeleland South'],
            ['ISO_3166_2' => 'ZW-MI', 'name' => 'Midlands'],
        ];

        $division = DB::table('devisions');
        $division->where('ISO_3166_2', 'LIKE', '%ZW-%')->delete();
        $division->insert($divisionData);
    }
}

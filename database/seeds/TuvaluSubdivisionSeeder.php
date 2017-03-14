<?php

use Illuminate\Database\Seeder;

class TuvaluSubdivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Source: https://en.wikipedia.org/wiki/ISO_3166-2:TV

        $divisionData = [
            // ['ISO_3166_2' => 'TV-', 'name' => ''],
            ['ISO_3166_2' => 'TV-FUN', 'name' => 'Funafuti'],
            ['ISO_3166_2' => 'TV-NMG', 'name' => 'Nanumanga'],
            ['ISO_3166_2' => 'TV-NMA', 'name' => 'Nanumea'],
            ['ISO_3166_2' => 'TV-NIT', 'name' => 'Niutao'],
            ['ISO_3166_2' => 'TV-NUI', 'name' => 'Nui'],
            ['ISO_3166_2' => 'TV-NKF', 'name' => 'Nukufetau'],
            ['ISO_3166_2' => 'TV-NKL', 'name' => 'Nukulaelae'],
            ['ISO_3166_2' => 'TV-VAI', 'name' => 'Vaitupu'],
        ];

        $division = DB::table('devisions');
        $division->where('ISO_3166_2', 'LIKE', '%TV-%')->delete();
        $division->insert($divisionData);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TogoSubdivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Source: https://en.wikipedia.org/wiki/ISO_3166-2:TG

        $divisionData = [
            // ['ISO_3166_2' => '', 'name' => ''],
            ['ISO_3166_2' => 'TG-C', 'name' => 'Centre'],
            ['ISO_3166_2' => 'TG-K', 'name' => 'Kara'],
            ['ISO_3166_2' => 'TG-M', 'name' => 'Maritime'],
            ['ISO_3166_2' => 'TG-P', 'name' => 'Plateaux'],
            ['ISO_3166_2' => 'TG-S', 'name' => 'Savannes'],
        ];

        $division = DB::table('devisions');
        $division->where('ISO_3166_2', 'LIKE', '%TG-%')->delete();
        $division->insert($divisionData);
    }
}

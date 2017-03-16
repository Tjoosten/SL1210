<?php

use Illuminate\Database\Seeder;

class UzbekistanData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @see    https://en.wikipedia.org/wiki/ISO_3166-2:UZ
     * @return void
     */
    public function run()
    {
        // Divisions
        $divisionData = [
            // ['ISO_3166_2' => 'UZ-', 'name' => ''],
            ['ISO_3166_2' => 'UZ-TK', 'name' => 'Toshkent'],
            ['ISO_3166_2' => 'UZ-AN', 'name' => 'Andijon'],
            ['ISO_3166_2' => 'UZ-BU', 'name' => 'Buxoro'],
            ['ISO_3166_2' => 'UZ-FA', 'name' => "Farg'ona"],
            ['ISO_3166_2' => 'UZ-JI', 'name' => 'Jizzax'],
            ['ISO_3166_2' => 'UZ-NG', 'name' => 'Namangan'],
            ['ISO_3166_2' => 'UZ-NW', 'name' => 'Navoly'],
            ['ISO_3166_2' => 'UZ-QA', 'name' => 'Qashqadoryo'],
            ['ISO_3166_2' => 'UZ-SA', 'name' => 'Samarqand'],
            ['ISO_3166_2' => 'UZ-SI', 'name' => 'Sirdaryo'],
            ['ISO_3166_2' => 'UZ-SU', 'name' => 'Surxondaryo'],
            ['ISO_3166_2' => 'UZ-TO', 'name' => 'Toshkent'],
            ['ISO_3166_2' => 'UZ-XO', 'name' => 'Xorazm'],
            ['ISO_3166_2' => 'UZ-QR', 'name' => "Qoraqalpog'iston Respublikasi"],
        ];

        $division = DB::table('devisions');
        $division->where('ISO_3166_2', 'LIKE', '%UZ-%')->delete();
        $division->insert($divisionData);
    }
}

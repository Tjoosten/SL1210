<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BelguimSubdivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $divisionData = [
            // ['ISO_3166_2' => '', 'name' => ''],
            ['ISO_3166_2' => 'BE-BRU', 'name' => 'Brussels-Capital Region'],
            ['ISO_3166_2' => 'BE-VLG', 'name' => 'Flemish Region'],
            ['ISO_3166_2' => 'BE-WAL', 'name' => 'Walloon Region'],
            ['ISO_3166_2' => 'BE-VAN', 'name' => 'Antwerpen'],
            ['ISO_3166_2' => 'BE-WBR', 'name' => 'Brabant wallon'],
            ['ISO_3166_2' => 'BE-WHT', 'name' => 'Hainaut'],
            ['ISO_3166_2' => 'BE-WLG', 'name' => 'Liege'],
            ['ISO_3166_2' => 'BE-VLI', 'name' => 'Limburg'],
            ['ISO_3166_2' => 'BE-WLX', 'name' => 'Luxembourg'],
            ['ISO_3166_2' => 'BE-WNA', 'name' => 'Namur'],
            ['ISO_3166_2' => 'BE-VOV', 'name' => 'Oost-Vlaanderen'],
            ['ISO_3166_2' => 'BE-VBR', 'name' => 'Vlaams-Brabant'],
            ['ISO_3166_2' => 'BE-VWV', 'name' => 'West-Vlaanderen'],
        ];

        $division = DB::table('devisions');
        $division->where('ISO_3166_2', 'LIKE', '%BE-%')->delete();
        $division->insert($divisionData);
    }
}

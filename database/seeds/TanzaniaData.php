<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TanzaniaData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @see    https://en.wikipedia.org/wiki/ISO_3166-2:TZ
     * @return void
     */
    public function run()
    {
        // Division
        $divisionData = [
            // ['ISO_3166_2' => 'TZ-', 'name' => 'name'],
            ['ISO_3166_2' => 'TZ-01', 'name' => 'Arusha'],
            ['ISO_3166_2' => 'TZ-02', 'name' => 'Dar es Salaam'],
            ['ISO_3166_2' => 'TZ-03', 'name' => 'Dodoma'],
            ['ISO_3166_2' => 'TZ-04', 'name' => 'Iringa'],
            ['ISO_3166_2' => 'TZ-05', 'name' => 'Kagera'],
            ['ISO_3166_2' => 'TZ-06', 'name' => 'Pemba North'],
            ['ISO_3166_2' => 'TZ-07', 'name' => 'Zanzibar North'],
            ['ISO_3166_2' => 'TZ-08', 'name' => 'Kigoma'],
            ['ISO_3166_2' => 'TZ-09', 'name' => 'Kilimanjaro'],
            ['ISO_3166_2' => 'TZ-10', 'name' => 'Pemba South'],
            ['ISO_3166_2' => 'TZ-11', 'name' => 'Zanzibar South'],
            ['ISO_3166_2' => 'TZ-12', 'name' => 'Lindi'],
            ['ISO_3166_2' => 'TZ-13', 'name' => 'Mara'],
            ['ISO_3166_2' => 'TZ-14', 'name' => 'Mbeya'],
            ['ISO_3166_2' => 'TZ-15', 'name' => 'Zanzibar West'],
            ['ISO_3166_2' => 'TZ-16', 'name' => 'Morogoro'],
            ['ISO_3166_2' => 'TZ-17', 'name' => 'Mtwara'],
            ['ISO_3166_2' => 'TZ-18', 'name' => 'Mwanza'],
            ['ISO_3166_2' => 'TZ-19', 'name' => 'Coast'],
            ['ISO_3166_2' => 'TZ-20', 'name' => 'Rukwa'],
            ['ISO_3166_2' => 'TZ-21', 'name' => 'Ruvuma'],
            ['ISO_3166_2' => 'TZ-22', 'name' => 'Shinyanga'],
            ['ISO_3166_2' => 'TZ-23', 'name' => 'Singida'],
            ['ISO_3166_2' => 'TZ-24', 'name' => 'Tabora'],
            ['ISO_3166_2' => 'TZ-25', 'name' => 'Tanga'],
            ['ISO_3166_2' => 'TZ-26', 'name' => 'Manyara'],
            ['ISO_3166_2' => 'TZ-27', 'name' => 'Geita'],
            ['ISO_3166_2' => 'TZ-28', 'name' => 'Katavi'],
            ['ISO_3166_2' => 'TZ-29', 'name' => 'Njombe'],
            ['ISO_3166_2' => 'TZ-30', 'name' => 'Simiyu'],
        ];

        $division = Db::table('devisions');
        $division->where('ISO_3166_2', 'LIKE', '%TZ-%')->delete();
        $division->insert($divisionData);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class YemenSubdivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Source: https://en.wikipedia.org/wiki/ISO_3166-2:YE

        $divisionsData = [
            // ['ISO_3166_2' => 'YE-', 'name' => ''],
            ['ISO_3166_2' => 'YE-SA', 'name' => 'Amanat al Asimah'],
            ['ISO_3166_2' => 'YE-AB', 'name' => 'Abyan'],
            ['ISO_3166_2' => 'YE-AD', 'name' => 'Adan'],
            ['ISO_3166_2' => 'YE-DA', 'name' => 'Ad Dali'],
            ['ISO_3166_2' => 'YE-BA', 'name' => 'Al Bayda'],
            ['ISO_3166_2' => 'YE-HU', 'name' => 'Al Hudaydah'],
            ['ISO_3166_2' => 'YE-JA', 'name' => 'Al Jawf'],
            ['ISO_3166_2' => 'YE-MR', 'name' => 'Al Mahrah'],
            ['ISO_3166_2' => 'YE-MW', 'name' => 'Al Mahwit'],
            ['ISO_3166_2' => 'YE-AM', 'name' => 'Amran'],
            ['ISO_3166_2' => 'YE-SU', 'name' => 'Arkhabil Suqutra'],
            ['ISO_3166_2' => 'YE-DH', 'name' => 'Dhamar'],
            ['ISO_3166_2' => 'YE-HD', 'name' => 'Hadramawt'],
            ['ISO_3166_2' => 'YE-HJ', 'name' => 'Hajjah'],
            ['ISO_3166_2' => 'YE-IB', 'name' => 'Ibb'],
            ['ISO_3166_2' => 'YE-LA', 'name' => 'Lahij'],
            ['ISO_3166_2' => 'YE-MA', 'name' => "Ma'rib"],
            ['ISO_3166_2' => 'YE-RA', 'name' => 'Raymah'],
            ['ISO_3166_2' => 'YE-SD', 'name' => "Sa'dah"],
            ['ISO_3166_2' => 'YE-SN', 'name' => "San'a"],
            ['ISO_3166_2' => 'YE-SH', 'name' => 'Shabwah'],
            ['ISO_3166_2' => 'YE-TA', 'name' => "Ta'izz"],
        ];

        $division = DB::table('devisions');
        $division->where('ISO_3166_2', 'LIKE', '%YE-%')->delete();
        $division->insert($divisionsData);
    }
}

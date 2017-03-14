<?php

use Illuminate\Database\Seeder;

class AngolaSubdivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Source: https://en.wikipedia.org/wiki/ISO_3166-2:AO

        $divisionData = [
            // ['ISO_3166_2' => 'AO-', 'name' => ''],
            ['ISO_3166_2' => 'AO-BGO', 'name' => 'Bengo'],
            ['ISO_3166_2' => 'AO-BGU', 'name' => 'Benguala'],
            ['ISO_3166_2' => 'AO-BIE', 'name' => 'Bie'],
            ['ISO_3166_2' => 'AO-CAB', 'name' => 'Cabinda'],
            ['ISO_3166_2' => 'AO-CNN', 'name' => 'Cunene'],
            ['ISO_3166_2' => 'AO-HUA', 'name' => 'Huambo'],
            ['ISO_3166_2' => 'AO-HUI', 'name' => 'Huila'],
            ['ISO_3166_2' => 'AO-CCU', 'name' => 'Kunado Kubango'],
            ['ISO_3166_2' => 'AO-CNO', 'name' => 'Kwamza Norte'],
            ['ISO_3166_2' => 'AO-CUS', 'name' => 'Kwamza Sul'],
            ['ISO_3166_2' => 'AO-LUA', 'name' => 'Luanda'],
            ['ISO_3166_2' => 'AO-LNO', 'name' => 'Lunda Norte'],
            ['ISO_3166_2' => 'AO-LSU', 'name' => 'Lunda Sul'],
            ['ISO_3166_2' => 'AO-MAL', 'name' => 'Malange'],
            ['ISO_3166_2' => 'AO-MOX', 'name' => 'Moxico'],
            ['ISO_3166_2' => 'AO-NAM', 'name' => 'Namibe'],
            ['ISO_3166_2' => 'AO-UIG', 'name' => 'Uige'],
            ['ISO_3166_2' => 'AO-ZAI', 'name' => 'Zaire'],
        ];

        $division = DB::table('devisions');
        $division->where('ISO_3166_2', 'LIKE', '%AO-%')->delete();
        $division->insert($divisionData);
    }
}

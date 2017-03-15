<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UruguaySubdivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Source: https://en.wikipedia.org/wiki/ISO_3166-2:UY

        $divisionData = [
            // ['ISO_3166_2' => 'UY-', 'name' => ''],
            ['ISO_3166_2' => 'UY-AR', 'name' => 'Artigas'],
            ['ISO_3166_2' => 'UY-CA', 'name' => 'Canelones'],
            ['ISO_3166_2' => 'UY-CL', 'name' => 'Cerro Largo'],
            ['ISO_3166_2' => 'UY-CO', 'name' => 'Colonia'],
            ['ISO_3166_2' => 'UY-DU', 'name' => 'Durazno'],
            ['ISO_3166_2' => 'UY-FS', 'name' => 'Flores'],
            ['ISO_3166_2' => 'UY-FD', 'name' => 'Florida'],
            ['ISO_3166_2' => 'UY-LA', 'name' => 'Lavalleja'],
            ['ISO_3166_2' => 'UY-MA', 'name' => 'Maldonado'],
            ['ISO_3166_2' => 'UY-MO', 'name' => 'Montevideo'],
            ['ISO_3166_2' => 'UY-PA', 'name' => 'Paysandu'],
            ['ISO_3166_2' => 'UY-RN', 'name' => 'Rio Negro'],
            ['ISO_3166_2' => 'UY-RV', 'name' => 'Rivera'],
            ['ISO_3166_2' => 'UY-RO', 'name' => 'Rocha'],
            ['ISO_3166_2' => 'UY-SA', 'name' => 'Salto'],
            ['ISO_3166_2' => 'UY-SJ', 'name' => 'San Jose'],
            ['ISO_3166_2' => 'UY-SO', 'name' => 'Soriano'],
            ['ISO_3166_2' => 'UY-TA', 'name' => 'Tacuarembo'],
            ['ISO_3166_2' => 'UY-IT', 'name' => 'Treinta y Tres'],
        ];

        $division = DB::table('devisions');
        $division->where('ISO_3166_2', 'LIKE', '%UY-%')->delete();
        $division->insert($divisionData);
    }
}

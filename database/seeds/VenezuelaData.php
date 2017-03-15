<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VenezuelaData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @see    https://en.wikipedia.org/wiki/ISO_3166-2:VE
     * @return void
     */
    public function run()
    {
        // Division
        $divisionData = [
            // ['ISO_3166_2' => '', 'name' => ''],
            ['ISO_3166_2' => 'VE-W', 'name' => 'Dependencias Federales'],
            ['ISO_3166_2' => 'VE-A', 'name' => 'Distrito Federal'],
            ['ISO_3166_2' => 'VE-Z', 'name' => 'Amazonas'],
            ['ISO_3166_2' => 'VE-B', 'name' => 'Anzoategui'],
            ['ISO_3166_2' => 'VE-C', 'name' => 'Apure'],
            ['ISO_3166_2' => 'VE-D', 'name' => 'Aragua'],
            ['ISO_3166_2' => 'VE-E', 'name' => 'Barinas'],
            ['ISO_3166_2' => 'VE-F', 'name' => 'Bolivar'],
            ['ISO_3166_2' => 'VE-G', 'name' => 'Carabobo'],
            ['ISO_3166_2' => 'VE-H', 'name' => 'Cojedes'],
            ['ISO_3166_2' => 'VE-Y', 'name' => 'Delta Amacuro'],
            ['ISO_3166_2' => 'VE-I', 'name' => 'Falcon'],
            ['ISO_3166_2' => 'VE-J', 'name' => 'Guarico'],
            ['ISO_3166_2' => 'VE-K', 'name' => 'Lara'],
            ['ISO_3166_2' => 'VE-L', 'name' => 'Merida'],
            ['ISO_3166_2' => 'VE-M', 'name' => 'Miranda'],
            ['ISO_3166_2' => 'VE-N', 'name' => 'Monagas'],
            ['ISO_3166_2' => 'VE-O', 'name' => 'Nueva Esparta'],
            ['ISO_3166_2' => 'VE-P', 'name' => 'Portuguesa'],
            ['ISO_3166_2' => 'VE-R', 'name' => 'Sucre'],
            ['ISO_3166_2' => 'VE-S', 'name' => 'Tachira'],
            ['ISO_3166_2' => 'VE-T', 'name' => 'Trujillo'],
            ['ISO_3166_2' => 'VE-X', 'name' => 'Vargas'],
            ['ISO_3166_2' => 'VE-U', 'name' => 'Yaracuy'],
            ['ISO_3166_2' => 'VE-V', 'name' => 'Zulia'],
        ];

        $division = DB::table('devisions');
        $division->where('ISO_3166_2', 'LIKE', '%YE-%')->delete();
        $division->insert($divisionData);

    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MexicoSubDivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Source = https://en.wikipedia.org/wiki/ISO_3166-2:MX

        $divisionsData = [
            // ['ISO_3166_2' => 'MX-', 'name' => ''],
            ['ISO_3166_2' => 'MX-CMX', 'name' => 'Mexican Federal District'],
            ['ISO_3166_2' => 'MX-AGU', 'name' => 'Aguascalientes'],
            ['ISO_3166_2' => 'MX-BCN', 'name' => 'Baja California'],
            ['ISO_3166_2' => 'MX-BCS', 'name' => 'Baja California Sur'],
            ['ISO_3166_2' => 'MX-CAM', 'name' => 'Campeche'],
            ['ISO_3166_2' => 'MX-COA', 'name' => 'Coahuila'],
            ['ISO_3166_2' => 'MX-COL', 'name' => 'Colima'],
            ['ISO_3166_2' => 'MX-CHP', 'name' => 'Chiapas'],
            ['ISO_3166_2' => 'MX-CHH', 'name' => 'Chihuahua'],
            ['ISO_3166_2' => 'MX-DUR', 'name' => 'Durango'],
            ['ISO_3166_2' => 'MX-GUA', 'name' => 'Guanajuato'],
            ['ISO_3166_2' => 'MX-GRO', 'name' => 'Guerrero'],
            ['ISO_3166_2' => 'MX-HID', 'name' => 'Hidalgo'],
            ['ISO_3166_2' => 'MX-JAL', 'name' => 'Jalisco'],
            ['ISO_3166_2' => 'MX-MEX', 'name' => 'Mexico'],
            ['ISO_3166_2' => 'MX-MIC', 'name' => 'Michoacan'],
            ['ISO_3166_2' => 'MX-MOR', 'name' => 'Morelos'],
            ['ISO_3166_2' => 'MX-NAY', 'name' => 'Nayarit'],
            ['ISO_3166_2' => 'MX-NLE', 'name' => 'Nuevo Leon'],
            ['ISO_3166_2' => 'MX-OAX', 'name' => 'Oaxaca'],
            ['ISO_3166_2' => 'MX-PUE', 'name' => 'Puebla'],
            ['ISO_3166_2' => 'MX-QUE', 'name' => 'Queretaro'],
            ['ISO_3166_2' => 'MX-ROO', 'name' => 'Quintana Roo'],
            ['ISO_3166_2' => 'MX-SLP', 'name' => 'San Luis Potosi'],
            ['ISO_3166_2' => 'MX-SIN', 'name' => 'Sinaloa'],
            ['ISO_3166_2' => 'MX-SON', 'name' => 'Sonora'],
            ['ISO_3166_2' => 'MX-TAB', 'name' => 'Tabasco'],
            ['ISO_3166_2' => 'MX-TAM', 'name' => 'Tamaulipas'],
            ['ISO_3166_2' => 'MX-TLA', 'name' => 'Tlaxcala'],
            ['ISO_3166_2' => 'MX-VER', 'name' => 'Veracruz'],
            ['ISO_3166_2' => 'MX-YUC', 'name' => 'Yucatan'],
            ['ISO_3166_2' => 'MX-ZAC', 'name' => 'Zacatecas'],
        ];

        $devision = DB::table('devisions');
        $devision->where('ISO_3166_2', 'LIKE', '%MX-%')->delete();
        $devision->insert($divisionsData);
    }
}

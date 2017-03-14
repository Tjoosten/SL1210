<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlgeriaSubdivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // source: https://en.wikipedia.org/wiki/ISO_3166-2:DZ

        $divisionData = [
            // ['ISO_3166_2' => 'DZ-', 'name' => ''],
            ['ISO_3166_2' => 'DZ-01', 'name' => 'Adrar'],
            ['ISO_3166_2' => 'DZ-44', 'name' => 'Ain Defla'],
            ['ISO_3166_2' => 'DZ-46', 'name' => 'Ain Temouchent'],
            ['ISO_3166_2' => 'DZ-16', 'name' => 'Alger'],
            ['ISO_3166_2' => 'DZ-23', 'name' => 'Annaba'],
            ['ISO_3166_2' => 'DZ-05', 'name' => 'Batna'],
            ['ISO_3166_2' => 'DZ-06', 'name' => 'Bejaia'],
            ['ISO_3166_2' => 'DZ-07', 'name' => 'Biskra'],
            ['ISO_3166_2' => 'DZ-08', 'name' => 'Bechar'],
            ['ISO_3166_2' => 'DZ-09', 'name' => 'Blida'],
            ['ISO_3166_2' => 'DZ-34', 'name' => 'Bordj Bou Arreridj'],
            ['ISO_3166_2' => 'DZ-10', 'name' => 'Bouira'],
            ['ISO_3166_2' => 'DZ-35', 'name' => 'Boumerdes'],
            ['ISO_3166_2' => 'DZ-02', 'name' => 'Chlef'],
            ['ISO_3166_2' => 'DZ-25', 'name' => 'Constantine'],
            ['ISO_3166_2' => 'DZ-17', 'name' => 'Djelfa'],
            ['ISO_3166_2' => 'DZ-32', 'name' => 'El Bayadh'],
            ['ISO_3166_2' => 'DZ-39', 'name' => 'El Oued'],
            ['ISO_3166_2' => 'DZ-36', 'name' => 'El Tarf'],
            ['ISO_3166_2' => 'DZ-47', 'name' => 'Ghardaia'],
            ['ISO_3166_2' => 'DZ-24', 'name' => 'Guelma'],
            ['ISO_3166_2' => 'DZ-33', 'name' => 'Illizi'],
            ['ISO_3166_2' => 'DZ-18', 'name' => 'jijel'],
            ['ISO_3166_2' => 'DZ-40', 'name' => 'Khenchela'],
            ['ISO_3166_2' => 'DZ-03', 'name' => 'Laghouat'],
            ['ISO_3166_2' => 'DZ-29', 'name' => 'Mascara'],
            ['ISO_3166_2' => 'DZ-26', 'name' => 'Melea'],
            ['ISO_3166_2' => 'DZ-43', 'name' => 'Mila'],
            ['ISO_3166_2' => 'DZ-27', 'name' => 'Mostaganem'],
            ['ISO_3166_2' => 'DZ-28', 'name' => 'Msila'],
            ['ISO_3166_2' => 'DZ-45', 'name' => 'Naama'],
            ['ISO_3166_2' => 'DZ-31', 'name' => 'Oran'],
            ['ISO_3166_2' => 'DZ-30', 'name' => 'Ouargla'],
            ['ISO_3166_2' => 'DZ-04', 'name' => 'Oum el Bouaghi'],
            ['ISO_3166_2' => 'DZ-48', 'name' => 'Relizane'],
            ['ISO_3166_2' => 'DZ-20', 'name' => 'Saida'],
            ['ISO_3166_2' => 'DZ-19', 'name' => 'Setif'],
            ['ISO_3166_2' => 'DZ-22', 'name' => 'Sedi Bel Abbes'],
            ['ISO_3166_2' => 'DZ-21', 'name' => 'Skikda'],
            ['ISO_3166_2' => 'DZ-41', 'name' => 'Souk Ahras'],
            ['ISO_3166_2' => 'DZ-11', 'name' => 'Tamanrasset'],
            ['ISO_3166_2' => 'DZ-12', 'name' => 'Tebessa'],
            ['ISO_3166_2' => 'DZ-14', 'name' => 'Tiaret'],
            ['ISO_3166_2' => 'DZ-37', 'name' => 'Tindouf'],
            ['ISO_3166_2' => 'DZ-42', 'name' => 'Tipaza'],
            ['ISO_3166_2' => 'DZ-38', 'name' => 'Tissemsilt'],
            ['ISO_3166_2' => 'DZ-15', 'name' => 'Tizi Ouzou'],
            ['ISO_3166_2' => 'DZ-13', 'name' => 'Tlemcen'],
        ];

        $division = DB::table('devisions');
        $division->where('ISO_3166_2', 'LIKE', '%DZ-%')->delete();
        $division->insert($divisionData);
    }
}

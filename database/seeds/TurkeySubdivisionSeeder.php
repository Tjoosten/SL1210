<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TurkeySubdivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Source: https://en.wikipedia.org/wiki/ISO_3166-2:TR

        $divisionData = [
            // ['ISO_3166_2' => 'TR-', 'name' => ''],
            ['ISO_3166_2' => 'TR-01', 'name' => 'Adana'],
            ['ISO_3166_2' => 'TR-02', 'name' => 'Adiyaman'],
            ['ISO_3166_2' => 'TR-03', 'name' => 'Afyonkarahisar'],
            ['ISO_3166_2' => 'TR-04', 'name' => 'Agri'],
            ['ISO_3166_2' => 'TR-05', 'name' => 'Amasya'],
            ['ISO_3166_2' => 'TR-06', 'name' => 'Ankara'],
            ['ISO_3166_2' => 'TR-07', 'name' => 'Antalya'],
            ['ISO_3166_2' => 'TR-08', 'name' => 'Artvin'],
            ['ISO_3166_2' => 'TR-09', 'name' => 'Aydin'],
            ['ISO_3166_2' => 'TR-10', 'name' => 'Balikesir'],
            ['ISO_3166_2' => 'TR-11', 'name' => 'Bilecik'],
            ['ISO_3166_2' => 'TR-12', 'name' => 'Bingol'],
            ['ISO_3166_2' => 'TR-13', 'name' => 'Bitlis'],
            ['ISO_3166_2' => 'TR-14', 'name' => 'Bolu'],
            ['ISO_3166_2' => 'TR-15', 'name' => 'Burdur'],
            ['ISO_3166_2' => 'TR-16', 'name' => 'Bursa'],
            ['ISO_3166_2' => 'TR-17', 'name' => 'Canakkale'],
            ['ISO_3166_2' => 'TR-18', 'name' => 'Cankiri'],
            ['ISO_3166_2' => 'TR-19', 'name' => 'Corum'],
            ['ISO_3166_2' => 'TR-20', 'name' => 'Benizli'],
            ['ISO_3166_2' => 'TR-21', 'name' => 'Diyarbakir'],
            ['ISO_3166_2' => 'TR-22', 'name' => 'Edirne'],
            ['ISO_3166_2' => 'TR-23', 'name' => 'Elazig'],
            ['ISO_3166_2' => 'TR-24', 'name' => 'Erzincan'],
            ['ISO_3166_2' => 'TR-25', 'name' => 'Erzurum'],
            ['ISO_3166_2' => 'TR-26', 'name' => 'Eskisehir'],
            ['ISO_3166_2' => 'TR-27', 'name' => 'Gaziantep'],
            ['ISO_3166_2' => 'TR-28', 'name' => 'Giresun'],
            ['ISO_3166_2' => 'TR-29', 'name' => 'Gumushane'],
            ['ISO_3166_2' => 'TR-30', 'name' => 'Hakkari'],
            ['ISO_3166_2' => 'TR-31', 'name' => 'Hatay'],
            ['ISO_3166_2' => 'TR-32', 'name' => 'Isparta'],
            ['ISO_3166_2' => 'TR-33', 'name' => 'Mersin'],
            ['ISO_3166_2' => 'TR-34', 'name' => 'Istanbul'],
            ['ISO_3166_2' => 'TR-35', 'name' => 'Izmir'],
            ['ISO_3166_2' => 'TR-36', 'name' => 'Kars'],
            ['ISO_3166_2' => 'TR-37', 'name' => 'Kastamonu'],
            ['ISO_3166_2' => 'TR-38', 'name' => 'Kayseri'],
            ['ISO_3166_2' => 'TR-39', 'name' => 'Kirklareli'],
            ['ISO_3166_2' => 'TR-40', 'name' => 'Kirsehir'],
            ['ISO_3166_2' => 'TR-41', 'name' => 'Kocaeli'],
            ['ISO_3166_2' => 'TR-42', 'name' => 'Konya'],
            ['ISO_3166_2' => 'TR-43', 'name' => 'Kutahya'],
            ['ISO_3166_2' => 'TR-44', 'name' => 'Malatya'],
            ['ISO_3166_2' => 'TR-45', 'name' => 'Manisa'],
            ['ISO_3166_2' => 'TR-46', 'name' => 'Kahramanmaras'],
            ['ISO_3166_2' => 'TR-47', 'name' => 'Mardin'],
            ['ISO_3166_2' => 'TR-48', 'name' => 'Mugla'],
            ['ISO_3166_2' => 'TR-49', 'name' => 'Mus'],
            ['ISO_3166_2' => 'TR-50', 'name' => 'Nevsehir'],
            ['ISO_3166_2' => 'TR-51', 'name' => 'Nigde'],
            ['ISO_3166_2' => 'TR-52', 'name' => 'Ordu'],
            ['ISO_3166_2' => 'TR-53', 'name' => 'Rize'],
            ['ISO_3166_2' => 'TR-54', 'name' => 'Sakarya'],
            ['ISO_3166_2' => 'TR-55', 'name' => 'Samsun'],
            ['ISO_3166_2' => 'TR-56', 'name' => 'Siirt'],
            ['ISO_3166_2' => 'TR-57', 'name' => 'Sinop'],
            ['ISO_3166_2' => 'TR-58', 'name' => 'Sivas'],
            ['ISO_3166_2' => 'TR-59', 'name' => 'Tekirdag'],
            ['ISO_3166_2' => 'TR-60', 'name' => 'Tokat'],
            ['ISO_3166_2' => 'TR-61', 'name' => 'Trabzon'],
            ['ISO_3166_2' => 'TR-62', 'name' => 'Tunceli'],
            ['ISO_3166_2' => 'TR-63', 'name' => 'Sanliurfa'],
            ['ISO_3166_2' => 'TR-64', 'name' => 'Usak'],
            ['ISO_3166_2' => 'TR-65', 'name' => 'Van'],
            ['ISO_3166_2' => 'TR-66', 'name' => 'Yozgat'],
            ['ISO_3166_2' => 'TR-67', 'name' => 'Zonguldak'],
            ['ISO_3166_2' => 'TR-68', 'name' => 'Aksaray'],
            ['ISO_3166_2' => 'TR-69', 'name' => 'Bayburt'],
            ['ISO_3166_2' => 'TR-70', 'name' => 'Karaman'],
            ['ISO_3166_2' => 'TR-71', 'name' => 'Kirikkale'],
            ['ISO_3166_2' => 'TR-72', 'name' => 'Batman'],
            ['ISO_3166_2' => 'TR-73', 'name' => 'Sirnak'],
            ['ISO_3166_2' => 'TR-74', 'name' => 'Bartin'],
            ['ISO_3166_2' => 'TR-75', 'name' => 'Ardahan'],
            ['ISO_3166_2' => 'TR-76', 'name' => 'Igdir'],
            ['ISO_3166_2' => 'TR-77', 'name' => 'Yalova'],
            ['ISO_3166_2' => 'TR-78', 'name' => 'Karabuk'],
            ['ISO_3166_2' => 'TR-79', 'name' => 'Kilis'],
            ['ISO_3166_2' => 'TR-80', 'name' => 'Osmaniye'],
            ['ISO_3166_2' => 'TR-81', 'name' => 'Duzce'],
        ];

        $division = DB::table('devisions');
        $division->where('ISO_3166_2', 'LIKE', '%TR-%')->delete();
        $division->insert($divisionData);
    }
}

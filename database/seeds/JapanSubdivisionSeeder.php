<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JapanSubdivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Source: https://en.wikipedia.org/wiki/ISO_3166-2:JP

        $divisionData = [
            // ['ISO_3166_2' => 'JA-', 'name' => ''],
            ['ISO_3166_2' => 'JA-01', 'name' => 'Hokkaido'],
            ['ISO_3166_2' => 'JA-02', 'name' => 'Aomori'],
            ['ISO_3166_2' => 'JA-03', 'name' => 'Iwate'],
            ['ISO_3166_2' => 'JA-04', 'name' => 'Miyagi'],
            ['ISO_3166_2' => 'JA-05', 'name' => 'Akita'],
            ['ISO_3166_2' => 'JA-06', 'name' => 'Yamagata'],
            ['ISO_3166_2' => 'JA-07', 'name' => 'Fukushima'],
            ['ISO_3166_2' => 'JA-08', 'name' => 'Ibaraki'],
            ['ISO_3166_2' => 'JA-09', 'name' => 'Tochigi'],
            ['ISO_3166_2' => 'JA-10', 'name' => 'Gunma'],
            ['ISO_3166_2' => 'JA-11', 'name' => 'Saitama'],
            ['ISO_3166_2' => 'JA-12', 'name' => 'Chiba'],
            ['ISO_3166_2' => 'JA-13', 'name' => 'Tokyo'],
            ['ISO_3166_2' => 'JA-14', 'name' => 'Kanagawa'],
            ['ISO_3166_2' => 'JA-15', 'name' => 'Niigata'],
            ['ISO_3166_2' => 'JA-16', 'name' => 'Toyama'],
            ['ISO_3166_2' => 'JA-17', 'name' => 'Ishikawa'],
            ['ISO_3166_2' => 'JA-18', 'name' => 'Fukui'],
            ['ISO_3166_2' => 'JA-19', 'name' => 'Yamanashi'],
            ['ISO_3166_2' => 'JA-20', 'name' => 'Nagano'],
            ['ISO_3166_2' => 'JA-21', 'name' => 'Gifu'],
            ['ISO_3166_2' => 'JA-22', 'name' => 'Shizuoka'],
            ['ISO_3166_2' => 'JA-23', 'name' => 'Aichi'],
            ['ISO_3166_2' => 'JA-24', 'name' => 'Mie'],
            ['ISO_3166_2' => 'JA-25', 'name' => 'Shiga'],
            ['ISO_3166_2' => 'JA-26', 'name' => 'Kyoto'],
            ['ISO_3166_2' => 'JA-27', 'name' => 'Osaka'],
            ['ISO_3166_2' => 'JA-28', 'name' => 'Hyogo'],
            ['ISO_3166_2' => 'JA-29', 'name' => 'Nara'],
            ['ISO_3166_2' => 'JA-30', 'name' => 'Wakayama'],
            ['ISO_3166_2' => 'JA-31', 'name' => 'Tottori'],
            ['ISO_3166_2' => 'JA-32', 'name' => 'Shimane'],
            ['ISO_3166_2' => 'JA-33', 'name' => 'Okayama'],
            ['ISO_3166_2' => 'JA-34', 'name' => 'Hiroshima'],
            ['ISO_3166_2' => 'JA-35', 'name' => 'Yamaguchi'],
            ['ISO_3166_2' => 'JA-36', 'name' => 'Tokushima'],
            ['ISO_3166_2' => 'JA-37', 'name' => 'Kagawa'],
            ['ISO_3166_2' => 'JA-38', 'name' => 'Ehime'],
            ['ISO_3166_2' => 'JA-39', 'name' => 'Kochi'],
            ['ISO_3166_2' => 'JA-40', 'name' => 'Fukuoka'],
            ['ISO_3166_2' => 'JA-41', 'name' => 'Saga'],
            ['ISO_3166_2' => 'JA-42', 'name' => 'Nagasaki'],
            ['ISO_3166_2' => 'JA-43', 'name' => 'Kumamoto'],
            ['ISO_3166_2' => 'JA-44', 'name' => 'Oita'],
            ['ISO_3166_2' => 'JA-45', 'name' => 'Miyazaki'],
            ['ISO_3166_2' => 'JA-46', 'name' => 'Kagoshima'],
            ['ISO_3166_2' => 'JA-47', 'name' => 'Okinawa'],
        ];

        $division = DB::table('devisions');
        $division->where('ISO_3166_2', 'LIKE', '%JA-%')->delete();
        $division->insert($divisionData);
    }
}

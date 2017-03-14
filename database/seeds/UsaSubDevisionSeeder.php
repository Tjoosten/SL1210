<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsaSubDevisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		// Source: https://en.wikipedia.org/wiki/ISO_3166-2:US

        $devisionsData = [
			// ['ISO_3166_2' => 'US-', 'name' => ''],
			['ISO_3166_2' => 'US-AK', 'name' => 'Alaska'],
			['ISO_3166_2' => 'US-AL', 'name' => 'Alabama'],
            ['ISO_3166_2' => 'US AZ', 'name' => 'Arizona'],
			['ISO_3166_2' => 'US-AR', 'name' => 'Arkansas'],
            ['ISO_3166_2' => 'US-CA', 'name' => 'California'],
            ['ISO_3166_2' => 'US-CO', 'name' => 'Colorado'],
            ['ISO_3166_2' => 'US-CT', 'name' => 'Connecticut'],
            ['ISO_3166_2' => 'US-DE', 'name' => 'Delaware'],
            ['ISO_3166_2' => 'US-FL', 'name' => 'Florida'],
            ['ISO_3166_2' => 'US-GA', 'name' => 'Georgia'],
            ['ISO_3166_2' => 'US-HI', 'name' => 'Hawaii'],
            ['ISO_3166_2' => 'US-ID', 'name' => 'Idaho'],
            ['ISO_3166_2' => 'US-IL', 'name' => 'Illinois'],
            ['ISO_3166_2' => 'US-IN', 'name' => 'Indiana'],
            ['ISO_3166_2' => 'US-IA', 'name' => 'Iowa'],
            ['ISO_3166_2' => 'US-KS', 'name' => 'Kansas'],
            ['ISO_3166_2' => 'US-KY', 'name' => 'Kentucky'],
            ['ISO_3166_2' => 'US-LA', 'name' => 'Lousiana'],
            ['ISO_3166_2' => 'US-ME', 'name' => 'Maine'],
            ['ISO_3166_2' => 'US-MD', 'name' => 'Maryland'],
            ['ISO_3166_2' => 'US-MA', 'name' => 'Massachusetts'],
            ['ISO_3166_2' => 'US-MI', 'name' => 'Michigan'],
            ['ISO_3166_2' => 'US-MN', 'name' => 'Minnesota'],
            ['ISO_3166_2' => 'US-MS', 'name' => 'Mississippi'],
            ['ISO_3166_2' => 'US-MO', 'name' => 'Missouri'],
            ['ISO_3166_2' => 'US-MT', 'name' => 'Montana'],
            ['ISO_3166_2' => 'US-NE', 'name' => 'Nebraska'],
            ['ISO_3166_2' => 'US-NV', 'name' => 'Nevada'],
            ['ISO_3166_2' => 'US-NH', 'name' => 'New Hampshire'],
            ['ISO_3166_2' => 'US-NJ', 'name' => 'New Jersey'],
            ['ISO_3166_2' => 'US-NM', 'name' => 'New Mexico'],
            ['ISO_3166_2' => 'US-NY', 'name' => 'New York'],
            ['ISO_3166_2' => 'US-NC', 'name' => 'North Carolina'],
            ['ISO_3166_2' => 'US-ND', 'name' => 'North Dakota'],
            ['ISO_3166_2' => 'US-OH', 'name' => 'Ohio'],
            ['ISO_3166_2' => 'US-OK', 'name' => 'Oklahoma'],
            ['ISO_3166_2' => 'US-OR', 'name' => 'Oregon'],
            ['ISO_3166_2' => 'US-PA', 'name' => 'Pennsylvania'],
            ['ISO_3166_2' => 'US-RI', 'name' => 'Rhode Island'],
            ['ISO_3166_2' => 'US-SC', 'name' => 'South Carolina'],
            ['ISO_3166_2' => 'US-SD', 'name' => 'South Dakota'],
            ['ISO_3166_2' => 'US-TN', 'name' => 'Tennessee'],
            ['ISO_3166_2' => 'US-TX', 'name' => 'Texas'],
            ['ISO_3166_2' => 'US-UT', 'name' => 'Utah'],
            ['ISO_3166_2' => 'US-VT', 'name' => 'Vermont'],
            ['ISO_3166_2' => 'US-VA', 'name' => 'Virginia'],
            ['ISO_3166_2' => 'US-WA', 'name' => 'Washington'],
            ['ISO_3166_2' => 'US-WV', 'name' => 'West Viginia'],
            ['ISO_3166_2' => 'US-WI', 'name' => 'Wisconsin'],
            ['ISO_3166_2' => 'US-WY', 'name' => 'Wyoming'],
            ['ISO_3166_2' => 'US-DC', 'name' => 'District of Columbia'],

            // Subdivisions included in ISO 3166-1
            // -----
            // Besides being included as subdivisions of the United States in ISO 3166-2,
            // the outlying areas are also officially assigned their own country codes in ISO 3166-1.
            ['ISO_3166_2' => 'US-AS', 'name' => 'American Somoa'],
            ['ISO_3166_2' => 'US-GU', 'name' => 'Guam'],
            ['ISO_3166_2' => 'US-MP', 'name' => 'Northern Mariana Islands'],
            ['ISO_3166_2' => 'US-PR', 'name' => 'Puerto Rico'],
            ['ISO_3166_2' => 'US-UM', 'name' => 'United States Minor Outlying Islands'],
            ['ISO_3166_2' => 'US-VI', 'name' => 'Virigin Islands, U.S'],

		];

        $devision = DB::table('devisions');
        $devision->delete();
        $devision->insert($devisionsData);
    }
}

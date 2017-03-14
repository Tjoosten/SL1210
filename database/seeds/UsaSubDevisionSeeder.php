<?php

use Illuminate\Database\Seeder;

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

        $devisions = [
			// ['ISO_3166_2' => '', 'name' => ''],
			['ISO_3166_2' => 'US-AK', 'name' => 'Alaska'],
			['ISO_3166_2' => 'US-AL', 'name' => 'Alabama'],
			['ISO_3166_2' => 'US-AR', 'name' => 'Arkansas'],
		];
    }
}

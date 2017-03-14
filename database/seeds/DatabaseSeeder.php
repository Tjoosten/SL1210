<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		// Subdevision seeds. 
		$this->call(UsaSubDevisionSeeder::class); 
        $this->call(MexicoSubDivisionSeeder::class);

        // $this->call('UsersTableSeeder');
    }
}

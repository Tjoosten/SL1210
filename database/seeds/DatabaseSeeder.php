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
        // Subdivision seeds.
        $this->call(UsaSubDevisionSeeder::class);
        $this->call(MexicoSubDivisionSeeder::class);
        $this->call(IsraelSubdivisionSeeder::class);
        $this->call(AlgeriaSubdivisionSeeder::class);
        $this->call(AfghanistanSubdivisionSeeder::class);
        $this->call(ComorosSubdivisionSeeder::class);
        $this->call(YemenSubdivisionSeeder::class);
        $this->call(TuvaluSubdivisionSeeder::class);
        $this->call(JapanSubdivisionSeeder::class);
        $this->call(BelguimSubdivisionSeeder::class);
        $this->call(GranadaSubdivisionSeeder::class);
        $this->call(TongaSubdivisionSeeder::class);
        $this->call(TurkeySubdivisionSeeder::class);
        $this->call(TogoSubdivisionSeeder::class);
        $this->call(AngolaSubdivisionSeeder::class);
        $this->call(UgandaSubdivisionSeeder::class);

        // $this->call('UsersTableSeeder');
    }
}

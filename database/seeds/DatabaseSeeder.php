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
        $this->call(TunesiaSubdivisionSeeder::class);
        $this->call(TrinidadTobagoSubdivisionSeeder::class);
        $this->call(VanuatuSubdivisionSeeder::class);
        $this->call(ZambiaSubdivisionSeeder::class);
        $this->call(UruguaySubdivisionSeeder::class);
        $this->call(ZimbabweSubdivisionSeeder::class);
        $this->call(SwazilandSubdivisionSeeder::class);
        $this->call(SenegalData::class);
        $this->call(QatarData::class);
        $this->call(PanamaData::class);
        $this->call(PolandData::class);
        $this->call(VenezuelaData::class);
        $this->call(AlbaniaData::class);
        $this->call(SeychellesData::class);
        $this->call(WallisFutunaData::class);
        $this->call(TimorLesteData::class);
        $this->call(UsMinorOutlyingIslands::class);
        $this->call(TurkmenistanData::class);
        $this->call(TanzaniaData::class);
        $this->call(UzbekistanData::class);
        $this->call(SolomonIslandsData::class);

        // $this->call('UsersTableSeeder');
    }
}

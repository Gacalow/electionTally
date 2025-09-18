<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\Bura\BangaleSeeder;
use Database\Seeders\Bura\CheweleSeeder;
use Database\Seeders\Bura\HirimaniSeeder;
use Database\Seeders\Bura\MadogoSeeder;
use Database\Seeders\Bura\SalaSeeder;
use Database\Seeders\Galole\ChewaniSeeder;
use Database\Seeders\Galole\KinakombaSeeder;
use Database\Seeders\Galole\MikinduniSeeder;
use Database\Seeders\Galole\WayuSeeder;
use Database\Seeders\Garsen\GarsenCentralSeeder;
use Database\Seeders\Garsen\GarsenNorthSeeder;
use Database\Seeders\Garsen\GarsenSouthSeeder;
use Database\Seeders\Garsen\GarsenWestSeeder;
use Database\Seeders\Garsen\KipiniEastSeeder;
use Database\Seeders\Garsen\KipiniWestSeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CountySeeder::class,
            ConstituencySeeder::class,
            WardSeeder::class,
            KipiniEastSeeder::class,
            GarsenSouthSeeder::class,
            KipiniWestSeeder::class,
            GarsenCentralSeeder::class,
            GarsenWestSeeder::class,
            GarsenNorthSeeder::class,
            KinakombaSeeder::class,
            MikinduniSeeder::class,
            ChewaniSeeder::class,
            WayuSeeder::class,
            CheweleSeeder::class,
            HirimaniSeeder::class,
            BangaleSeeder::class,
            SalaSeeder::class,
            MadogoSeeder::class,
            PoliticalPartiesSeeder::class,
            PositionsSeeder::class,
            ElectionsSeeder::class,
        ]);
    }
}

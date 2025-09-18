<?php

namespace Database\Seeders\Garsen;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GarsenCentralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pollingStations = [
            // GARSEN CENTRAL Ward (ward_id: 4, constituency_id: 1) - 20 stations
            ['name' => 'IMANI PRIMARY SCHOOL', 'code' => '004018008904501', 'ward_id' => 4, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 519, 'location_description' => 'Located at Imani Primary School in Garsen Central Ward, Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'DUMI NURSERY SCHOOL', 'code' => '004018008904601', 'ward_id' => 4, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 665, 'location_description' => 'Electoral station at Dumi Nursery School, Garsen Central Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'GAMBA PRIMARY SCHOOL', 'code' => '004018008904701', 'ward_id' => 4, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 467, 'location_description' => 'Polling facility at Gamba Primary School in Garsen Central Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'GAMBA PRIMARY SCHOOL', 'code' => '004018008904702', 'ward_id' => 4, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 466, 'location_description' => 'Gamba Primary School serving the Garsen Central Ward area of Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'DANISA PRIMARY SCHOOL', 'code' => '004018008904801', 'ward_id' => 4, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 491, 'location_description' => 'Voting center at Danisa Primary School, Garsen Central Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'DANISA PRIMARY SCHOOL', 'code' => '004018008904802', 'ward_id' => 4, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 491, 'location_description' => 'Located at Danisa Primary School in Garsen Central Ward, Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'ONKOLDE PRIMARY SCHOOL', 'code' => '004018008904901', 'ward_id' => 4, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 502, 'location_description' => 'Electoral station at Onkolde Primary School, Garsen Central Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'KONE MAMO CENTER', 'code' => '004018008905001', 'ward_id' => 4, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 109, 'location_description' => 'Polling facility at Kone Mamo Center in Garsen Central Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'GALILI PRIMARY SCHOOL', 'code' => '004018008905101', 'ward_id' => 4, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 597, 'location_description' => 'Galili Primary School serving the Garsen Central Ward area of Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'GOMESA VILLAGE', 'code' => '004018008905201', 'ward_id' => 4, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 201, 'location_description' => 'Voting center at Gomesa Village, Garsen Central Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'DIBE PRIMARY SCHOOL', 'code' => '004018008905301', 'ward_id' => 4, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 335, 'location_description' => 'Located at Dibe Primary School in Garsen Central Ward, Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'KIPAO PRIMARY SCHOOL', 'code' => '004018008905401', 'ward_id' => 4, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 502, 'location_description' => 'Electoral station at Kipao Primary School, Garsen Central Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'KIPAO PRIMARY SCHOOL', 'code' => '004018008905402', 'ward_id' => 4, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 502, 'location_description' => 'Polling facility at Kipao Primary School in Garsen Central Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'KIPAO PRIMARY SCHOOL', 'code' => '004018008905403', 'ward_id' => 4, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 502, 'location_description' => 'Kipao Primary School serving the Garsen Central Ward area of Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MSWAKINI NURSERY SCHOOL', 'code' => '004018008905501', 'ward_id' => 4, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 426, 'location_description' => 'Voting center at Mswakini Nursery School, Garsen Central Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'WALKON VILLAGE', 'code' => '004018008905601', 'ward_id' => 4, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 62, 'location_description' => 'Located at Walkon Village in Garsen Central Ward, Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'KIPAO SECONDARY SCHOOL', 'code' => '004018008909901', 'ward_id' => 4, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 444, 'location_description' => 'Electoral station at Kipao Secondary School, Garsen Central Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'KIPAO SECONDARY SCHOOL', 'code' => '004018008909902', 'ward_id' => 4, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 443, 'location_description' => 'Polling facility at Kipao Secondary School in Garsen Central Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'KIJO NURSERY SCHOOL', 'code' => '004018008910001', 'ward_id' => 4, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 144, 'location_description' => 'Kijo Nursery School serving the Garsen Central Ward area of Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'BALO NURSERY SCHOOL', 'code' => '004018008910101', 'ward_id' => 4, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 388, 'location_description' => 'Voting center at Balo Nursery School, Garsen Central Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],

        ];

        // Insert all polling stations in batches to avoid memory issues
        $chunks = array_chunk($pollingStations, 50);
        
        foreach ($chunks as $chunk) {
            DB::table('polling_stations')->insert($chunk);
        }

        $this->command->info('Successfully seeded ' . count($pollingStations) . ' polling stations for Tana River County.');
    }
}

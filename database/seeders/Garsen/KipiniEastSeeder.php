<?php

namespace Database\Seeders\Garsen;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KipiniEastSeeder extends Seeder
{
    public function run(): void
    {
        $pollingStations = [
            // KIPINI EAST Ward (ward_id: 1, constituency_id: 1) - 20 stations
            ['name' => 'KIPINI PRIMARY SCHOOL', 'code' => '004018008600101', 'ward_id' => 1, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 588, 'location_description' => 'Located at Kipini Primary School in Kipini East Ward, Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'KIPINI PRIMARY SCHOOL', 'code' => '004018008600102', 'ward_id' => 1, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 587, 'location_description' => 'Polling facility at Kipini Primary School, Kipini East Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'KIPINI PRIMARY SCHOOL', 'code' => '004018008600103', 'ward_id' => 1, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 587, 'location_description' => 'Electoral station at Kipini Primary School in Kipini East Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'ZIWANI PRIMARY SCHOOL', 'code' => '004018008600201', 'ward_id' => 1, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 488, 'location_description' => 'Voting center at Ziwani Primary School, Kipini East Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'ZIWANI PRIMARY SCHOOL', 'code' => '004018008600202', 'ward_id' => 1, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 487, 'location_description' => 'Located at Ziwani Primary School in Kipini East Ward, Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'SHAURI MOYO PRIMARY SCHOOL', 'code' => '004018008600301', 'ward_id' => 1, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 368, 'location_description' => 'Electoral station at Shauri Moyo Primary School, Kipini East Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'KIZUILIYANI NURSERY SCHOOL', 'code' => '004018008600401', 'ward_id' => 1, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 344, 'location_description' => 'Polling facility situated at Kizuiliyani Nursery School in Kipini East Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MCHELELO PRIMARY SCHOOL', 'code' => '004018008600501', 'ward_id' => 1, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 264, 'location_description' => 'Mchelelo Primary School serving the Kipini East Ward area of Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MATANGENI PRIMARY SCHOOL', 'code' => '004018008600601', 'ward_id' => 1, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 658, 'location_description' => 'Voting center at Matangeni Primary School, Kipini East Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'GATUNDU PRIMARY SCHOOL', 'code' => '004018008600701', 'ward_id' => 1, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 432, 'location_description' => 'Located at Gatundu Primary School in Kipini East Ward, Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MAJIWENI PRIMARY SCHOOL', 'code' => '004018008600801', 'ward_id' => 1, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 526, 'location_description' => 'Electoral station at Majiweni Primary School, Kipini East Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MAPUNGA PRIMARY SCHOOL', 'code' => '004018008600901', 'ward_id' => 1, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 621, 'location_description' => 'Polling facility situated at Mapunga Primary School in Kipini East Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'KILELENGWANI PRIMARY SCHOOL', 'code' => '004018008601001', 'ward_id' => 1, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 401, 'location_description' => 'Kilelengwani Primary School serving the Kipini East Ward area of Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'KAU PRIMARY SCHOOL', 'code' => '004018008601101', 'ward_id' => 1, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 173, 'location_description' => 'Voting center at Kau Primary School, Kipini East Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'REKETA PRIMARY SCHOOL', 'code' => '004018008601201', 'ward_id' => 1, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 311, 'location_description' => 'Located at Reketa Primary School in Kipini East Ward, Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'OZI PRIMARY SCHOOL', 'code' => '004018008601301', 'ward_id' => 1, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 514, 'location_description' => 'Electoral station at Ozi Primary School, Kipini East Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MPEKETONI NURSERY SCHOOL', 'code' => '004018008601401', 'ward_id' => 1, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 134, 'location_description' => 'Polling facility situated at Mpeketoni Nursery School in Kipini East Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'KIPINI SECONDARY SCHOOL', 'code' => '004018008608801', 'ward_id' => 1, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 365, 'location_description' => 'Kipini Secondary School serving the Kipini East Ward area of Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'KALOLENI NURSERY SCHOOL', 'code' => '004018008608901', 'ward_id' => 1, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 37, 'location_description' => 'Voting center at Kaloleni Nursery School, Kipini East Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'KIBAONI NURSERY SCHOOL', 'code' => '004018008609001', 'ward_id' => 1, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 13, 'location_description' => 'Located at Kibaoni Nursery School in Kipini East Ward, Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],            
        ];

        // Insert all polling stations in batches to avoid memory issues
        $chunks = array_chunk($pollingStations, 50);
        
        foreach ($chunks as $chunk) {
            DB::table('polling_stations')->insert($chunk);
        }

        $this->command->info('Successfully seeded ' . count($pollingStations) . ' polling stations for Tana River County.');
        $this->command->info('Ward distribution:');
        $this->command->info('- Kipini East (Ward 1): 20 stations');        
    }
}

<?php

namespace Database\Seeders\Garsen;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GarsenSouthSeeder extends Seeder
{
    public function run(): void
    {
        $pollingStations =[
            // GARSEN SOUTH Ward (ward_id: 2, constituency_id: 1) - 24 stations
            ['name' => 'IDSOWE PRIMARY SCHOOL', 'code' => '004018008701501', 'ward_id' => 2, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 683, 'location_description' => 'Electoral station at Idsowe Primary School, Garsen South Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'IDSOWE PRIMARY SCHOOL', 'code' => '004018008701502', 'ward_id' => 2, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 683, 'location_description' => 'Polling facility situated at Idsowe Primary School in Garsen South Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MINJILA NURSERY SCHOOL', 'code' => '004018008701601', 'ward_id' => 2, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 433, 'location_description' => 'Minjila Nursery School serving the Garsen South Ward area of Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MINJILA NURSERY SCHOOL', 'code' => '004018008701602', 'ward_id' => 2, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 432, 'location_description' => 'Voting center at Minjila Nursery School, Garsen South Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'DIDAADE PRIMARY SCHOOL', 'code' => '004018008701701', 'ward_id' => 2, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 569, 'location_description' => 'Located at Didaade Primary School in Garsen South Ward, Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'DIDAADE PRIMARY SCHOOL', 'code' => '004018008701702', 'ward_id' => 2, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 569, 'location_description' => 'Electoral station at Didaade Primary School, Garsen South Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'KIBUSU PRIMARY SCHOOL', 'code' => '004018008701801', 'ward_id' => 2, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 261, 'location_description' => 'Polling facility situated at Kibusu Primary School in Garsen South Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'DALU PRIMARY SCHOOL', 'code' => '004018008701901', 'ward_id' => 2, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 304, 'location_description' => 'Dalu Primary School serving the Garsen South Ward area of Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'TARASAA SECONDARY SCHOOL', 'code' => '004018008702001', 'ward_id' => 2, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 521, 'location_description' => 'Voting center at Tarasaa Secondary School, Garsen South Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'TARASAA PRIMARY SCHOOL', 'code' => '004018008702101', 'ward_id' => 2, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 543, 'location_description' => 'Located at Tarasaa Primary School in Garsen South Ward, Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'TARASAA PRIMARY SCHOOL', 'code' => '004018008702102', 'ward_id' => 2, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 542, 'location_description' => 'Electoral station at Tarasaa Primary School, Garsen South Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'HIARI COMMUNITY HALL', 'code' => '004018008702201', 'ward_id' => 2, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 280, 'location_description' => 'Polling facility at Hiari Community Hall in Garsen South Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'ARAP MOI PRIMARY SCHOOL', 'code' => '004018008702301', 'ward_id' => 2, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 675, 'location_description' => 'Voting center at Arap Moi Primary School, Garsen South Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'NGAO SOCIAL HALL', 'code' => '004018008702401', 'ward_id' => 2, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 683, 'location_description' => 'Located at Ngao Social Hall in Garsen South Ward, Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'GOLBANTI PRIMARY SCHOOL', 'code' => '004018008702501', 'ward_id' => 2, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 475, 'location_description' => 'Electoral station at Golbanti Primary School, Garsen South Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'FURAHA PRIMARY SCHOOL', 'code' => '004018008702601', 'ward_id' => 2, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 458, 'location_description' => 'Polling facility at Furaha Primary School in Garsen South Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'FURAHA PRIMARY SCHOOL', 'code' => '004018008702602', 'ward_id' => 2, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 457, 'location_description' => 'Furaha Primary School serving the Garsen South Ward area of Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'BURA KOFIRA PRIMARY SCHOOL', 'code' => '004018008702701', 'ward_id' => 2, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 379, 'location_description' => 'Voting center at Bura Kofira Primary School, Garsen South Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'ON-WARDEI PRIMARY SCHOOL', 'code' => '004018008702801', 'ward_id' => 2, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 187, 'location_description' => 'Located at On-Wardei Primary School in Garsen South Ward, Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'GUBANI NURSERY SCHOOL', 'code' => '004018008702901', 'ward_id' => 2, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 285, 'location_description' => 'Electoral station at Gubani Nursery School, Garsen South Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'ODA SECONDARY SCHOOL', 'code' => '004018008709101', 'ward_id' => 2, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 126, 'location_description' => 'Polling facility at Oda Secondary School in Garsen South Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'DALU SECONDARY SCHOOL', 'code' => '004018008709201', 'ward_id' => 2, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 11, 'location_description' => 'Dalu Secondary School serving the Garsen South Ward area of Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'USHINDI PRIMARY SCHOOL', 'code' => '004018008709301', 'ward_id' => 2, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 183, 'location_description' => 'Voting center at Ushindi Primary School, Garsen South Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'RAMADA PRIMARY SCHOOL', 'code' => '004018008710601', 'ward_id' => 2, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 251, 'location_description' => 'Located at Ramada Primary School in Garsen South Ward, Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
        ];

        // Insert all polling stations in batches to avoid memory issues
        $chunks = array_chunk($pollingStations, 50);
        
        foreach ($chunks as $chunk) {
            DB::table('polling_stations')->insert($chunk);
        }

        $this->command->info('Successfully seeded ' . count($pollingStations) . ' polling stations for Tana River County.');
        $this->command->info('Ward distribution:');
        $this->command->info('- Garsen South (Ward 2): 24 stations');
    }

}

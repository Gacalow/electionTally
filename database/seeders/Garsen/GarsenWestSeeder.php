<?php

namespace Database\Seeders\Garsen;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GarsenWestSeeder extends Seeder
{
    public function run(): void
    {
        $pollingStations = [
            // GARSEN WEST Ward (ward_id: 5, constituency_id: 1) - 27 stations
            ['name' => 'GARSEN PRIMARY SCHOOL', 'code' => '004018009005701', 'ward_id' => 5, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 672, 'location_description' => 'Located at Garsen Primary School in Garsen West Ward, Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'GARSEN PRIMARY SCHOOL', 'code' => '004018009005702', 'ward_id' => 5, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 672, 'location_description' => 'Electoral station at Garsen Primary School, Garsen West Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'GARSEN PRIMARY SCHOOL', 'code' => '004018009005703', 'ward_id' => 5, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 671, 'location_description' => 'Polling facility at Garsen Primary School in Garsen West Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'GARSEN PRIMARY SCHOOL', 'code' => '004018009005704', 'ward_id' => 5, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 671, 'location_description' => 'Garsen Primary School serving the Garsen West Ward area of Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MAUA PRIMARY SCHOOL', 'code' => '004018009005801', 'ward_id' => 5, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 563, 'location_description' => 'Voting center at Maua Primary School, Garsen West Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MAUA PRIMARY SCHOOL', 'code' => '004018009005802', 'ward_id' => 5, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 562, 'location_description' => 'Located at Maua Primary School in Garsen West Ward, Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MAUA PRIMARY SCHOOL', 'code' => '004018009005803', 'ward_id' => 5, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 562, 'location_description' => 'Electoral station at Maua Primary School, Garsen West Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'SHELI ABE CENTRE', 'code' => '004018009005901', 'ward_id' => 5, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 414, 'location_description' => 'Polling facility at Sheli Abe Centre in Garsen West Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'SHELI ABE CENTRE', 'code' => '004018009005902', 'ward_id' => 5, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 413, 'location_description' => 'Sheli Abe Centre serving the Garsen West Ward area of Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'KONKONA NURSERY SCHOOL', 'code' => '004018009006001', 'ward_id' => 5, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 383, 'location_description' => 'Voting center at Konkona Nursery School, Garsen West Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'BILISA PRIMARY SCHOOL', 'code' => '004018009006101', 'ward_id' => 5, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 633, 'location_description' => 'Located at Bilisa Primary School in Garsen West Ward, Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'KORLABE VILLAGE', 'code' => '004018009006201', 'ward_id' => 5, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 255, 'location_description' => 'Electoral station at Korlabe Village, Garsen West Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'ASSA PRIMARY SCHOOL', 'code' => '004018009006301', 'ward_id' => 5, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 385, 'location_description' => 'Polling facility at Assa Primary School in Garsen West Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'BARIDI CENTRE (MOBILE)', 'code' => '004018009006401', 'ward_id' => 5, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 151, 'location_description' => 'Assa Primary School serving the Garsen West Ward area of Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'ONJILA CENTRE', 'code' => '004018009006501', 'ward_id' => 5, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 86, 'location_description' => 'Voting center at Baridi Centre (Mobile), Garsen West Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'ODOGANDA CENTRE', 'code' => '004018009006601', 'ward_id' => 5, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 230, 'location_description' => 'Located at Onjila Centre in Garsen West Ward, Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'TANK E CENTRE', 'code' => '004018009006701', 'ward_id' => 5, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 351, 'location_description' => 'Electoral station at Odoganda Centre, Garsen West Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'TANK E CENTRE', 'code' => '004018009006702', 'ward_id' => 5, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 350, 'location_description' => 'Polling facility at Tank E Centre in Garsen West Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'IDDI CENTRE', 'code' => '004018009006801', 'ward_id' => 5, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 228, 'location_description' => 'Tank E Centre serving the Garsen West Ward area of Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'KONE PRIMARY SCHOOL (MOBILE)', 'code' => '004018009006901', 'ward_id' => 5, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 615, 'location_description' => 'Voting center at Iddi Centre, Garsen West Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'SHELI PRIMARY SCHOOL', 'code' => '004018009010201', 'ward_id' => 5, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 141, 'location_description' => 'Located at Kone Primary School (Mobile) in Garsen West Ward, Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'SANE GIRLS SECONDSRY SCHOOL', 'code' => '004018009010301', 'ward_id' => 5, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 440, 'location_description' => 'Electoral station at Sheli Primary School, Garsen West Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'SANE GIRLS SECONDSRY SCHOOL', 'code' => '004018009010302', 'ward_id' => 5, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 440, 'location_description' => 'Polling facility at Sane Girls Secondary School in Garsen West Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'TULU NURSERY SCHOOL', 'code' => '004018009010401', 'ward_id' => 5, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 312, 'location_description' => 'Sane Girls Secondary School serving the Garsen West Ward area of Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'GARSEN HIGH SCHOOL', 'code' => '004018009010501', 'ward_id' => 5, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 518, 'location_description' => 'Voting center at Tulu Nursery School, Garsen West Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'RAMADA PRIMARY SCHOOL', 'code' => '004018009010601', 'ward_id' => 5, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 14, 'location_description' => 'Located at Garsen High School in Garsen West Ward, Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'ANANOTU', 'code' => '004018009011001', 'ward_id' => 5, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 267, 'location_description' => 'Electoral station at Ramada Primary School, Garsen West Ward', 'created_at' => now(), 'updated_at' => now()],
        ];

        // Insert all polling stations in batches to avoid memory issues
        $chunks = array_chunk($pollingStations, 50);
        
        foreach ($chunks as $chunk) {
            DB::table('polling_stations')->insert($chunk);
        }

        $this->command->info('Successfully seeded ' . count($pollingStations) . ' polling stations for Tana River County.');
    }
}

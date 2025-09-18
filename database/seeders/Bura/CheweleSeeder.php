<?php

namespace Database\Seeders\Bura;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CheweleSeeder extends Seeder
{
    public function run(): void
    {
        $pollingStations = [
            // CHEWELE Ward (ward_id: 11, constituency_id: 3) - 23 stations
            ['name' => 'CHEWELE PRIMARY SCHOOL', 'code' => '004020009600101', 'ward_id' => 11, 'constituency_id' => 3, 'county_id' => 4, 'registered_voters' => 640, 'location_description' => 'Located at Chewele Primary School in Chewele Ward, Bura Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'SHIKA ADABU PRIMARY SCHOOL', 'code' => '004020009600201', 'ward_id' => 11, 'constituency_id' => 3, 'county_id' => 4, 'registered_voters' => 476, 'location_description' => 'Electoral station at Shika Adabu Primary School, Chewele Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'BILBIL PRIMARY SCHOOL', 'code' => '004020009600301', 'ward_id' => 11, 'constituency_id' => 3, 'county_id' => 4, 'registered_voters' => 562, 'location_description' => 'Polling facility at Bilbil Primary School in Chewele Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'BILBIL PRIMARY SCHOOL', 'code' => '004020009600302', 'ward_id' => 11, 'constituency_id' => 3, 'county_id' => 4, 'registered_voters' => 562, 'location_description' => 'Bilbil Primary School serving the Chewele Ward area of Bura Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'GHAMANO PRIMARY SCHOOL', 'code' => '004020009600401', 'ward_id' => 11, 'constituency_id' => 3, 'county_id' => 4, 'registered_voters' => 287, 'location_description' => 'Voting center at Ghamano Primary School, Chewele Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'NANIGHI PRIMARY SCHOOL', 'code' => '004020009600501', 'ward_id' => 11, 'constituency_id' => 3, 'county_id' => 4, 'registered_voters' => 366, 'location_description' => 'Located at Nanighi Primary School in Chewele Ward, Bura Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'JAJABO PRIMARY SCHOOL', 'code' => '004020009600601', 'ward_id' => 11, 'constituency_id' => 3, 'county_id' => 4, 'registered_voters' => 424, 'location_description' => 'Electoral station at Jajabo Primary School, Chewele Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'BAWAMA NURSERY', 'code' => '004020009600701', 'ward_id' => 11, 'constituency_id' => 3, 'county_id' => 4, 'registered_voters' => 189, 'location_description' => 'Polling facility at Bawama Nursery in Chewele Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'SUBO PRIMARY SCHOOL', 'code' => '004020009600801', 'ward_id' => 11, 'constituency_id' => 3, 'county_id' => 4, 'registered_voters' => 221, 'location_description' => 'Bawama Nursery serving the Chewele Ward area of Bura Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'DUKANOTU PRIMARY SCHOOL', 'code' => '004020009600901', 'ward_id' => 11, 'constituency_id' => 3, 'county_id' => 4, 'registered_voters' => 397, 'location_description' => 'Voting center at Subo Primary School, Chewele Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'WEKOYE PRIMARY SCHOOL', 'code' => '004020009601001', 'ward_id' => 11, 'constituency_id' => 3, 'county_id' => 4, 'registered_voters' => 550, 'location_description' => 'Located at Dukanotu Primary School in Chewele Ward, Bura Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'WEKOYE PRIMARY SCHOOL', 'code' => '004020009601002', 'ward_id' => 11, 'constituency_id' => 3, 'county_id' => 4, 'registered_voters' => 549, 'location_description' => 'Electoral station at Wekoye Primary School, Chewele Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'GELMAD CENTRE - MOBILE', 'code' => '004020009601101', 'ward_id' => 11, 'constituency_id' => 3, 'county_id' => 4, 'registered_voters' => 50, 'location_description' => 'Polling facility at Wekoye Primary School in Chewele Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'WADESA PRIMARY SCHOOL', 'code' => '004020009601201', 'ward_id' => 11, 'constituency_id' => 3, 'county_id' => 4, 'registered_voters' => 585, 'location_description' => 'Wekoye Primary School serving the Chewele Ward area of Bura Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'NGOMENI NURSERY SCHOOL', 'code' => '004020009601301', 'ward_id' => 11, 'constituency_id' => 3, 'county_id' => 4, 'registered_voters' => 334, 'location_description' => 'Voting center at Gelmad Centre - Mobile, Chewele Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'TUNE PRIMARY SCHOOL', 'code' => '004020009601401', 'ward_id' => 11, 'constituency_id' => 3, 'county_id' => 4, 'registered_voters' => 201, 'location_description' => 'Located at Wadesa Primary School in Chewele Ward, Bura Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'SHABAHA NURSERY SCHOOL', 'code' => '004020009601501', 'ward_id' => 11, 'constituency_id' => 3, 'county_id' => 4, 'registered_voters' => 118, 'location_description' => 'Electoral station at Ngomeni Nursery School, Chewele Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'JARIBU MOBILE', 'code' => '004020009601601', 'ward_id' => 11, 'constituency_id' => 3, 'county_id' => 4, 'registered_voters' => 150, 'location_description' => 'Polling facility at Tune Primary School in Chewele Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'GUYO VILLAGE', 'code' => '004020009601701', 'ward_id' => 11, 'constituency_id' => 3, 'county_id' => 4, 'registered_voters' => 92, 'location_description' => 'Tune Primary School serving the Chewele Ward area of Bura Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MATAGALA PRIMARY SCHOOL', 'code' => '004020009601801', 'ward_id' => 11, 'constituency_id' => 3, 'county_id' => 4, 'registered_voters' => 422, 'location_description' => 'Voting center at Shabaha Nursery School, Chewele Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'KOMOR DUKUB - MOBILE', 'code' => '004020009601901', 'ward_id' => 11, 'constituency_id' => 3, 'county_id' => 4, 'registered_voters' => 682, 'location_description' => 'Located at Jaribu Mobile in Chewele Ward, Bura Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'DARIME PRIMARY SCHOOL', 'code' => '004020009602001', 'ward_id' => 11, 'constituency_id' => 3, 'county_id' => 4, 'registered_voters' => 146, 'location_description' => 'Electoral station at Guyo Village, Chewele Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'CHARIDENDE PRIMARY SCHOOL', 'code' => '004020009608501', 'ward_id' => 11, 'constituency_id' => 3, 'county_id' => 4, 'registered_voters' => 106, 'location_description' => 'Polling facility at Matagala Primary School in Chewele Ward', 'created_at' => now(), 'updated_at' => now()],
        ];

        // Insert all polling stations in batches to avoid memory issues
        $chunks = array_chunk($pollingStations, 50);

        foreach ($chunks as $chunk) {
            DB::table('polling_stations')->insert($chunk);
        }

        $this->command->info('Successfully seeded ' . count($pollingStations) . ' polling stations for Tana River County.');
    }
}

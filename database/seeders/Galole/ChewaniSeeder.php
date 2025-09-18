<?php

namespace Database\Seeders\Galole;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChewaniSeeder extends Seeder
{
    public function run(): void
    {
        $pollingStations = [
            // CHEWANI Ward (ward_id: 9, constituency_id: 2) - 36 stations
            ['name' => 'FOREST TRAINING SCHOOL', 'code' => '004019009403001', 'ward_id' => 9, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 348, 'location_description' => 'Located at Forest Training School in Chewani Ward, Galole Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'KIARUKUNGU PRIMARY SCHOOL', 'code' => '004019009403101', 'ward_id' => 9, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 142, 'location_description' => 'Electoral station at Kiarukungu Primary School, Chewani Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'BAHATI PRIMARY SCHOOL', 'code' => '004019009403201', 'ward_id' => 9, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 194, 'location_description' => 'Polling facility at Bahati Primary School in Chewani Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'CHEWANI PRIMARY SCHOOL', 'code' => '004019009403301', 'ward_id' => 9, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 564, 'location_description' => 'Chewani Primary School serving the Chewani Ward area of Galole Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'RIABAI VILLAGE CENTRE', 'code' => '004019009403401', 'ward_id' => 9, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 110, 'location_description' => 'Voting center at Riabai Village Centre, Chewani Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'DAKU PRIMARY SCHOOL', 'code' => '004019009403501', 'ward_id' => 9, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 391, 'location_description' => 'Located at Daku Primary School in Chewani Ward, Galole Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'DAKU NURSERY SCHOOL', 'code' => '004019009403601', 'ward_id' => 9, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 320, 'location_description' => 'Electoral station at Daku Nursery School, Chewani Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'KUMBI PRIMARY SCHOOL', 'code' => '004019009403701', 'ward_id' => 9, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 513, 'location_description' => 'Polling facility at Kumbi Primary School in Chewani Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'RHOKA PRIMARY SCHOOL', 'code' => '004019009403801', 'ward_id' => 9, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 346, 'location_description' => 'Kumbi Primary School serving the Chewani Ward area of Galole Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'HANASA VILLAGE CENTRE', 'code' => '004019009403901', 'ward_id' => 9, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 89, 'location_description' => 'Voting center at Rhoka Primary School, Chewani Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MAKERE PRIMARY SCHOOL', 'code' => '004019009404001', 'ward_id' => 9, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 456, 'location_description' => 'Located at Hanasa Village Centre in Chewani Ward, Galole Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MAKERE PRIMARY SCHOOL', 'code' => '004019009404002', 'ward_id' => 9, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 456, 'location_description' => 'Electoral station at Makere Primary School, Chewani Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'OVO PRI SCHOOL', 'code' => '004019009404101', 'ward_id' => 9, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 459, 'location_description' => 'Polling facility at Makere Primary School in Chewani Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'LAINI PRIMARY SCHOOL', 'code' => '004019009404201', 'ward_id' => 9, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 412, 'location_description' => 'Ovo Primary School serving the Chewani Ward area of Galole Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'LAINI PRIMARY SCHOOL', 'code' => '004019009404202', 'ward_id' => 9, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 412, 'location_description' => 'Voting center at Laini Primary School, Chewani Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'BOHONI PRIMARY SCHOOL', 'code' => '004019009404301', 'ward_id' => 9, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 606, 'location_description' => 'Located at Laini Primary School in Chewani Ward, Galole Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'GHALAMANI PRIMARY SCHOOL', 'code' => '004019009404401', 'ward_id' => 9, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 270, 'location_description' => 'Electoral station at Bohoni Primary School, Chewani Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'NYANGWANI PR.SCH', 'code' => '004019009404501', 'ward_id' => 9, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 226, 'location_description' => 'Polling facility at Ghalamani Primary School in Chewani Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'RAFIKI PRIMARY SCHOOL', 'code' => '004019009404601', 'ward_id' => 9, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 511, 'location_description' => 'Ghalamani Primary School serving the Chewani Ward area of Galole Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'RAFIKI PRIMARY SCHOOL', 'code' => '004019009404602', 'ward_id' => 9, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 510, 'location_description' => 'Voting center at Nyangwani Primary School, Chewani Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MAU MAU SECONDARY SCHOOL', 'code' => '004019009404701', 'ward_id' => 9, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 152, 'location_description' => 'Located at Rafiki Primary School in Chewani Ward, Galole Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'HOLA SECONDARY SCHOOL', 'code' => '004019009404801', 'ward_id' => 9, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 660, 'location_description' => 'Electoral station at Rafiki Primary School, Chewani Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'HOLA SECONDARY SCHOOL', 'code' => '004019009404802', 'ward_id' => 9, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 659, 'location_description' => 'Polling facility at Mau Mau Secondary School in Chewani Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'LAZA PRIMARY SCHOOL', 'code' => '004019009404901', 'ward_id' => 9, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 581, 'location_description' => 'Hola Secondary School serving the Chewani Ward area of Galole Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'LAZA PRIMARY SCHOOL', 'code' => '004019009404902', 'ward_id' => 9, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 581, 'location_description' => 'Voting center at Hola Secondary School, Chewani Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'LAZA PRIMARY SCHOOL', 'code' => '004019009404903', 'ward_id' => 9, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 580, 'location_description' => 'Located at Laza Primary School in Chewani Ward, Galole Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'LAZA PRIMARY SCHOOL', 'code' => '004019009404904', 'ward_id' => 9, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 580, 'location_description' => 'Electoral station at Laza Primary School, Chewani Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'HOLA SCHOOL FOR MENTALLY HANDCAPPED', 'code' => '004019009405001', 'ward_id' => 9, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 381, 'location_description' => 'Polling facility at Laza Primary School in Chewani Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'HOLA SCHOOL FOR MENTALLY HANDCAPPED', 'code' => '004019009405002', 'ward_id' => 9, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 380, 'location_description' => 'Laza Primary School serving the Chewani Ward area of Galole Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'HOLA PRIMARY SCHOOL', 'code' => '004019009405101', 'ward_id' => 9, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 561, 'location_description' => 'Voting center at Hola School for Mentally Handicapped, Chewani Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'HOLA PRIMARY SCHOOL', 'code' => '004019009405102', 'ward_id' => 9, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 561, 'location_description' => 'Located at Hola School for Mentally Handicapped in Chewani Ward, Galole Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'WACHA KONE PRIMARY SCHOOL', 'code' => '004019009405201', 'ward_id' => 9, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 416, 'location_description' => 'Electoral station at Hola Primary School, Chewani Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'LAZA NURSERY SCHOOL', 'code' => '004019009407901', 'ward_id' => 9, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 430, 'location_description' => 'Polling facility at Hola Primary School in Chewani Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'LAZA NURSERY SCHOOL', 'code' => '004019009407902', 'ward_id' => 9, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 429, 'location_description' => 'Wacha Kone Primary School serving the Chewani Ward area of Galole Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'BULA SECONDARY ECD', 'code' => '004019009408201', 'ward_id' => 9, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 37, 'location_description' => 'Voting center at Laza Nursery School, Chewani Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'LAZA NURSERY SCHOOL', 'code' => '004019009411001', 'ward_id' => 9, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 10, 'location_description' => 'Located at Laza Nursery School in Chewani Ward, Galole Constituency', 'created_at' => now(), 'updated_at' => now()],
        ];

        // Insert all polling stations in batches to avoid memory issues
        $chunks = array_chunk($pollingStations, 50);
        
        foreach ($chunks as $chunk) {
            DB::table('polling_stations')->insert($chunk);
        }

        $this->command->info('Successfully seeded ' . count($pollingStations) . ' polling stations for Tana River County.');
    }
}

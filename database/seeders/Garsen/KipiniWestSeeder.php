<?php

namespace Database\Seeders\Garsen;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KipiniWestSeeder extends Seeder
{
    public function run(): void
    {
        $pollingStations = [
            // KIPINI WEST Ward (ward_id: 3) - 24 stations
            ['name' => 'HANDARAKU PRIMARY SCHOOL', 'code' => '004018008803001', 'ward_id' => 3, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 362, 'location_description' => 'Electoral station at Handaraku Primary School, Kipini West Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'HANDARAKU PRIMARY SCHOOL', 'code' => '004018008803002', 'ward_id' => 3, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 361, 'location_description' => 'Polling facility at Handaraku Primary School in Kipini West Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'TARA KOSHORO CENTRE', 'code' => '004018008803101', 'ward_id' => 3, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 386, 'location_description' => 'Tara Koshoro Centre serving the Kipini West Ward area of Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'TARA KOSHORO CENTRE', 'code' => '004018008803102', 'ward_id' => 3, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 386, 'location_description' => 'Voting center at Tara Koshoro Centre, Kipini West Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'KIKOMO PRIMARY SCHOOL', 'code' => '004018008803201', 'ward_id' => 3, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 513, 'location_description' => 'Located at Kikomo Primary School in Kipini West Ward, Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'NDURU PRIMARY SCHOOL', 'code' => '004018008803301', 'ward_id' => 3, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 436, 'location_description' => 'Electoral station at Nduru Primary School, Kipini West Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'SEMIKARO PRIMARY SCHOOL', 'code' => '004018008803401', 'ward_id' => 3, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 445, 'location_description' => 'Polling facility at Semikaro Primary School in Kipini West Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'CHAMWANAMUMA PRIMARY SCHOOL', 'code' => '004018008803501', 'ward_id' => 3, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 575, 'location_description' => 'Chamwanamuma Primary School serving the Kipini West Ward area of Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'SHIRIKISHO PRIMARY SCHOOL', 'code' => '004018008803601', 'ward_id' => 3, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 453, 'location_description' => 'Voting center at Shirikisho Primary School, Kipini West Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'DARGA GALGE NURSERY SCHOOL', 'code' => '004018008803701', 'ward_id' => 3, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 79, 'location_description' => 'Located at Darga Galge Nursery School in Kipini West Ward, Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'ODOLE NURSERY SCHOOL', 'code' => '004018008803801', 'ward_id' => 3, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 574, 'location_description' => 'Electoral station at Odole Nursery School, Kipini West Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MUANJA CENTRE', 'code' => '004018008803901', 'ward_id' => 3, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 210, 'location_description' => 'Polling facility at Muanja Centre in Kipini West Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'REKETA CENTRE', 'code' => '004018008804001', 'ward_id' => 3, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 359, 'location_description' => 'Reketa Centre serving the Kipini West Ward area of Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'TANA SALT NURSERY SCHOOL', 'code' => '004018008804101', 'ward_id' => 3, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 519, 'location_description' => 'Voting center at Tana Salt Nursery School, Kipini West Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'HURARA PRIMARY SCHOOL', 'code' => '004018008804201', 'ward_id' => 3, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 551, 'location_description' => 'Located at Hurara Primary School in Kipini West Ward, Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'HURARA PRIMARY SCHOOL', 'code' => '004018008804202', 'ward_id' => 3, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 551, 'location_description' => 'Electoral station at Hurara Primary School, Kipini West Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'HURARA PRIMARY SCHOOL', 'code' => '004018008804203', 'ward_id' => 3, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 550, 'location_description' => 'Polling facility at Hurara Primary School in Kipini West Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'HURARA PRIMARY SCHOOL', 'code' => '004018008804204', 'ward_id' => 3, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 550, 'location_description' => 'Hurara Primary School serving the Kipini West Ward area of Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'KATSANGANI PRIMARY SCHOOL', 'code' => '004018008804301', 'ward_id' => 3, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 461, 'location_description' => 'Voting center at Katsangani Primary School, Kipini West Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'METICHARAKA PRIMARY SCHOOL', 'code' => '004018008804401', 'ward_id' => 3, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 346, 'location_description' => 'Located at Meticharaka Primary School in Kipini West Ward, Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MNARANI ECD CENTRE', 'code' => '004018008809501', 'ward_id' => 3, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 98, 'location_description' => 'Electoral station at Mnarani ECD Centre, Kipini West Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'HASHAKA SECONDARY SCHOOL', 'code' => '004018008809601', 'ward_id' => 3, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 323, 'location_description' => 'Polling facility at Hashaka Secondary School in Kipini West Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MTO KILIFI ECD CENTRE', 'code' => '004018008809701', 'ward_id' => 3, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 33, 'location_description' => 'Mto Kilifi ECD Centre serving the Kipini West Ward area of Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MSURUJANI ECD CENTRE', 'code' => '004018008809801', 'ward_id' => 3, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 59, 'location_description' => 'Voting center at Msurujani ECD Centre, Kipini West Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
        ];

        // Insert all polling stations in batches to avoid memory issues
        $chunks = array_chunk($pollingStations, 50);
        
        foreach ($chunks as $chunk) {
            DB::table('polling_stations')->insert($chunk);
        }

        $this->command->info('Successfully seeded ' . count($pollingStations) . ' polling stations for Tana River County.');
        $this->command->info('Ward distribution:');
        $this->command->info('- Kipini West (Ward 3): 24 stations');
    }
}

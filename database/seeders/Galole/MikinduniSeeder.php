<?php

namespace Database\Seeders\Galole;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MikinduniSeeder extends Seeder
{
    public function run(): void
    {
        $pollingStations = [
            // MIKINDUNI Ward (ward_id: 8, constituency_id: 2) - 18 stations
            ['name' => 'BONDENI PRIMARY SCHOOL', 'code' => '004019009302101', 'ward_id' => 8, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 612, 'location_description' => 'Voting center at Bondeni Primary School, Mikinduni Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'BONDENI PRIMARY SCHOOL', 'code' => '004019009302102', 'ward_id' => 8, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 611, 'location_description' => 'Located at Bondeni Primary School in Mikinduni Ward, Galole Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'LENDA PRIMARY SCHOOL', 'code' => '004019009302201', 'ward_id' => 8, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 351, 'location_description' => 'Electoral station at Lenda Primary School, Mikinduni Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'LENDA PRIMARY SCHOOL', 'code' => '004019009302202', 'ward_id' => 8, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 351, 'location_description' => 'Polling facility at Lenda Primary School in Mikinduni Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'HANDAMPIA PRIMARY SCHOOL', 'code' => '004019009302301', 'ward_id' => 8, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 390, 'location_description' => 'Lenda Primary School serving the Mikinduni Ward area of Galole Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'HANDAMPIA PRIMARY SCHOOL', 'code' => '004019009302302', 'ward_id' => 8, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 389, 'location_description' => 'Voting center at Handampia Primary School, Mikinduni Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'CHANANI PRIMARY SCHOOL', 'code' => '004019009302401', 'ward_id' => 8, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 499, 'location_description' => 'Located at Handampia Primary School in Mikinduni Ward, Galole Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MIKINDUNI PRIMARY SCHOOL', 'code' => '004019009302501', 'ward_id' => 8, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 539, 'location_description' => 'Electoral station at Chanani Primary School, Mikinduni Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MIKINDUNI PRIMARY SCHOOL', 'code' => '004019009302502', 'ward_id' => 8, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 539, 'location_description' => 'Polling facility at Mikinduni Primary School in Mikinduni Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MIKINDUNI PRIMARY SCHOOL', 'code' => '004019009302503', 'ward_id' => 8, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 538, 'location_description' => 'Mikinduni Primary School serving the Mikinduni Ward area of Galole Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'KONE PRIMARY SCHOOL', 'code' => '004019009302601', 'ward_id' => 8, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 475, 'location_description' => 'Voting center at Mikinduni Primary School, Mikinduni Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'KONE PRIMARY SCHOOL', 'code' => '004019009302602', 'ward_id' => 8, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 474, 'location_description' => 'Located at Kone Primary School in Mikinduni Ward, Galole Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'KALKACHA PRIMARY SCHOOL', 'code' => '004019009302701', 'ward_id' => 8, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 369, 'location_description' => 'Electoral station at Kone Primary School, Mikinduni Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'KALKACHA PRIMARY SCHOOL', 'code' => '004019009302702', 'ward_id' => 8, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 368, 'location_description' => 'Polling facility at Kalkacha Primary School in Mikinduni Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'CHAMARI WELLS MOBILE CENTRE', 'code' => '004019009302801', 'ward_id' => 8, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 272, 'location_description' => 'Kalkacha Primary School serving the Mikinduni Ward area of Galole Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'INGILE MOBILE CENTRE', 'code' => '004019009302901', 'ward_id' => 8, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 279, 'location_description' => 'Voting center at Chamari Wells Mobile Centre, Mikinduni Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'KALKALCHA ECD', 'code' => '004019009308001', 'ward_id' => 8, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 279, 'location_description' => 'Located at Ingile Mobile Centre in Mikinduni Ward, Galole Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'HOLA POLYTECHNIC', 'code' => '004019009308101', 'ward_id' => 8, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 235, 'location_description' => 'Electoral station at Kalkalcha ECD, Mikinduni Ward', 'created_at' => now(), 'updated_at' => now()],
        ];

        // Insert all polling stations in batches to avoid memory issues
        $chunks = array_chunk($pollingStations, 50);
        
        foreach ($chunks as $chunk) {
            DB::table('polling_stations')->insert($chunk);
        }

        $this->command->info('Successfully seeded ' . count($pollingStations) . ' polling stations for Tana River County.');
    }
}

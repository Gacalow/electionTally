<?php

namespace Database\Seeders\Garsen;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GarsenNorthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pollingStations = [
            // GARSEN NORTH Ward (ward_id: 6, constituency_id: 1) - 25 stations  
            ['name' => 'GADENI PRIMARY SCHOOL', 'code' => '004018009107001', 'ward_id' => 6, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 525, 'location_description' => 'Polling facility at Ananotu in Garsen West Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'REUBEN MWEWE PRIMARY SCHOOL', 'code' => '004018009107101', 'ward_id' => 6, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 389, 'location_description' => 'Gadeni Primary School serving the Garsen North Ward area of Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'REUBEN MWEWE PRIMARY SCHOOL', 'code' => '004018009107102', 'ward_id' => 6, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 388, 'location_description' => 'Voting center at Gadeni Primary School, Garsen North Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'KULESA PRIMARY SCHOOL', 'code' => '004018009107201', 'ward_id' => 6, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 650, 'location_description' => 'Located at Reuben Mwewe Primary School in Garsen North Ward, Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MAZIWA PRIMARY SCHOOL', 'code' => '004018009107301', 'ward_id' => 6, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 669, 'location_description' => 'Electoral station at Reuben Mwewe Primary School, Garsen North Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MAREMBO PRIMARY SCHOOL', 'code' => '004018009107401', 'ward_id' => 6, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 321, 'location_description' => 'Polling facility at Kulesa Primary School in Garsen North Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'LAZIMA PRIMARY SCHOOL', 'code' => '004018009107501', 'ward_id' => 6, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 216, 'location_description' => 'Kulesa Primary School serving the Garsen North Ward area of Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'SERA PRIMARY SCHOOL', 'code' => '004018009107601', 'ward_id' => 6, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 409, 'location_description' => 'Voting center at Maziwa Primary School, Garsen North Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'KUROLE CENTRE', 'code' => '004018009107701', 'ward_id' => 6, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 367, 'location_description' => 'Located at Marembo Primary School in Garsen North Ward, Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'KUROLE CENTRE', 'code' => '004018009107702', 'ward_id' => 6, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 367, 'location_description' => 'Electoral station at Kurole Centre, Garsen North Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MWINA PRIMARY SCHOOL', 'code' => '004018009107801', 'ward_id' => 6, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 553, 'location_description' => 'Polling facility at Mwina Primary School in Garsen North Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'NGUMU NURSERY SCHOOL', 'code' => '004018009107901', 'ward_id' => 6, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 335, 'location_description' => 'Ngumu Nursery School serving the Garsen North Ward area of Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'BUBESA PRIMARY SCHOOL', 'code' => '004018009108001', 'ward_id' => 6, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 267, 'location_description' => 'Voting center at Bubesa Primary School, Garsen North Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'KINYADU PRIMARY SCHOOL', 'code' => '004018009108101', 'ward_id' => 6, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 328, 'location_description' => 'Located at Kinyadu Primary School in Garsen North Ward, Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MMBUJI PRIMARY SCHOOL', 'code' => '004018009108201', 'ward_id' => 6, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 168, 'location_description' => 'Electoral station at Mmbuji Primary School, Garsen North Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MNAZINI PRIMARY SCHOOL', 'code' => '004018009108301', 'ward_id' => 6, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 428, 'location_description' => 'Polling facility at Mnazini Primary School in Garsen North Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MNAZINI PRIMARY SCHOOL', 'code' => '004018009108302', 'ward_id' => 6, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 428, 'location_description' => 'Mnazini Primary School serving the Garsen North Ward area of Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MNAZINI SIGN POST CENTRE', 'code' => '004018009108401', 'ward_id' => 6, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 470, 'location_description' => 'Voting center at Mnazini Sign Post Centre, Garsen North Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MNAZINI SIGN POST CENTRE', 'code' => '004018009108402', 'ward_id' => 6, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 469, 'location_description' => 'Located at Mnazini Sign Post Centre in Garsen North Ward, Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'KITERE PRIMARY SCHOOL', 'code' => '004018009108501', 'ward_id' => 6, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 481, 'location_description' => 'Electoral station at Kitere Primary School, Garsen North Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'CHOA NURSERY SCHOOL', 'code' => '004018009108601', 'ward_id' => 6, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 125, 'location_description' => 'Polling facility at Choa Nursery School in Garsen North Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'BAOMO PRIMARY SCHOOL', 'code' => '004018009108701', 'ward_id' => 6, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 263, 'location_description' => 'Baomo Primary School serving the Garsen North Ward area of Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'GALMA PRIMARY SCHOOL', 'code' => '004018009110701', 'ward_id' => 6, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 441, 'location_description' => 'Voting center at Galma Primary School, Garsen North Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'KITERE SECONDARY SCHOOL', 'code' => '004018009110801', 'ward_id' => 6, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 39, 'location_description' => 'Located at Kitere Secondary School in Garsen North Ward, Garsen Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'GADENI SECONDSRY SCHOOL', 'code' => '004018009110901', 'ward_id' => 6, 'constituency_id' => 1, 'county_id' => 4, 'registered_voters' => 34, 'location_description' => 'Electoral station at Gadeni Secondary School, Garsen North Ward', 'created_at' => now(), 'updated_at' => now()],
        ];
                // Insert all polling stations in batches to avoid memory issues
        $chunks = array_chunk($pollingStations, 50);
        
        foreach ($chunks as $chunk) {
            DB::table('polling_stations')->insert($chunk);
        }

        $this->command->info('Successfully seeded ' . count($pollingStations) . ' polling stations for Tana River County.');
    }
}

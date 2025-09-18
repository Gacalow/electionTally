<?php

namespace Database\Seeders\Galole;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KinakombaSeeder extends Seeder
{
    public function run(): void
    {
        $pollingStations = [
            // KINAKOMBA Ward (ward_id: 7, constituency_id: 2) - 24 stations
            ['name' => 'HARORESA PRIMARY SCHOOL', 'code' => '004019009200101', 'ward_id' => 7, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 383, 'location_description' => 'Located at Haroresa Primary School in Kinakomba Ward, Galole Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'JARA MOBILE CENTRE', 'code' => '004019009200201', 'ward_id' => 7, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 305, 'location_description' => 'Electoral station at Jara Mobile Centre, Kinakomba Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'HARA PRIMARY SCHOOL', 'code' => '004019009200301', 'ward_id' => 7, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 383, 'location_description' => 'Polling facility at Hara Primary School in Kinakomba Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'BAKISANO PRIMARY SCHOOL', 'code' => '004019009200401', 'ward_id' => 7, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 165, 'location_description' => 'Bakisano Primary School serving the Kinakomba Ward area of Galole Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MARONI PRIMARY SCHOOL', 'code' => '004019009200501', 'ward_id' => 7, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 483, 'location_description' => 'Voting center at Maroni Primary School, Kinakomba Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'WENJE PRIMARY SCHOOL', 'code' => '004019009200601', 'ward_id' => 7, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 438, 'location_description' => 'Located at Wenje Primary School in Kinakomba Ward, Galole Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'WENJE PRIMARY SCHOOL', 'code' => '004019009200602', 'ward_id' => 7, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 438, 'location_description' => 'Electoral station at Wenje Primary School, Kinakomba Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'VUKONI PRIMARY SCHOOL', 'code' => '004019009200701', 'ward_id' => 7, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 230, 'location_description' => 'Polling facility at Vukoni Primary School in Kinakomba Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'BUBUBU PRIMARY SCHOOL', 'code' => '004019009200801', 'ward_id' => 7, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 350, 'location_description' => 'Bububu Primary School serving the Kinakomba Ward area of Galole Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'DUWAYO PRIMARY SCHOOL', 'code' => '004019009200901', 'ward_id' => 7, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 151, 'location_description' => 'Voting center at Duwayo Primary School, Kinakomba Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'BOJI NURSERY SCHOOL', 'code' => '004019009201001', 'ward_id' => 7, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 50, 'location_description' => 'Located at Boji Nursery School in Kinakomba Ward, Galole Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MAWENI PRIMARY SCHOOL', 'code' => '004019009201101', 'ward_id' => 7, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 294, 'location_description' => 'Electoral station at Maweni Primary School, Kinakomba Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'GAFURU PRIMARY SCHOOL', 'code' => '004019009201201', 'ward_id' => 7, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 400, 'location_description' => 'Polling facility at Gafuru Primary School in Kinakomba Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'GAFURU PRIMARY SCHOOL', 'code' => '004019009201202', 'ward_id' => 7, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 399, 'location_description' => 'Gafuru Primary School serving the Kinakomba Ward area of Galole Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'HARAMBEE MOBILE CENTRE', 'code' => '004019009201301', 'ward_id' => 7, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 325, 'location_description' => 'Voting center at Harambee Mobile Centre, Kinakomba Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MKOMANI PRIMARY SCHOOL', 'code' => '004019009201401', 'ward_id' => 7, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 350, 'location_description' => 'Located at Mkomani Primary School in Kinakomba Ward, Galole Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'FANJUA PRIMARY SCHOOL', 'code' => '004019009201501', 'ward_id' => 7, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 420, 'location_description' => 'Electoral station at Fanjua Primary School, Kinakomba Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MAJENGO PRIMARI SCHOOL', 'code' => '004019009201601', 'ward_id' => 7, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 469, 'location_description' => 'Polling facility at Majengo Primary School in Kinakomba Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MAJENGO PRIMARI SCHOOL', 'code' => '004019009201602', 'ward_id' => 7, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 469, 'location_description' => 'Majengo Primary School serving the Kinakomba Ward area of Galole Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'GUBANI PRIMARY SCHOOL', 'code' => '004019009201701', 'ward_id' => 7, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 392, 'location_description' => 'Voting center at Gubani Primary School, Kinakomba Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'GUBANI PRIMARY SCHOOL', 'code' => '004019009201702', 'ward_id' => 7, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 391, 'location_description' => 'Located at Gubani Primary School in Kinakomba Ward, Galole Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'JARIRODI PRIMARY SCHOOL', 'code' => '004019009201801', 'ward_id' => 7, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 167, 'location_description' => 'Electoral station at Jarirodi Primary School, Kinakomba Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'GUBANI VILLAGE CENTRE', 'code' => '004019009201901', 'ward_id' => 7, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 190, 'location_description' => 'Polling facility at Gubani Village Centre in Kinakomba Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MASALANI PRIMARY SCHOOL', 'code' => '004019009202001', 'ward_id' => 7, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 676, 'location_description' => 'Masalani Primary School serving the Kinakomba Ward area of Galole Constituency', 'created_at' => now(), 'updated_at' => now()],
        ];

        // Insert all polling stations in batches to avoid memory issues
        $chunks = array_chunk($pollingStations, 50);
        
        foreach ($chunks as $chunk) {
            DB::table('polling_stations')->insert($chunk);
        }

        $this->command->info('Successfully seeded ' . count($pollingStations) . ' polling stations for Tana River County.');
    }
}

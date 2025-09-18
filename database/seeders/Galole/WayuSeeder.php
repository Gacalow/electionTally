<?php

namespace Database\Seeders\Galole;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WayuSeeder extends Seeder
{
    public function run(): void
    {
        $pollingStations = [
            // WAYU Ward (ward_id: 10, constituency_id: 2) - 31 stations
            ['name' => 'DAYATE NURSERY SCHOOL', 'code' => '004019009505301', 'ward_id' => 10, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 409, 'location_description' => 'Electoral station at Bula Secondary ECD, Chewani Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'DAYATE NURSERY SCHOOL', 'code' => '004019009505302', 'ward_id' => 10, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 408, 'location_description' => 'Laza Nursery School serving the Chewani Ward area of Galole Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'GURURI PRIMARY SCHOOL', 'code' => '004019009505401', 'ward_id' => 10, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 410, 'location_description' => 'Located at Dayate Nursery School in Wayu Ward, Galole Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MALKA DENDE NURSERY SCHOOL', 'code' => '004019009505501', 'ward_id' => 10, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 254, 'location_description' => 'Electoral station at Dayate Nursery School, Wayu Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'DABA PRIMARY SCHOOL', 'code' => '004019009505601', 'ward_id' => 10, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 313, 'location_description' => 'Polling facility at Gururi Primary School in Wayu Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'GOFISA VILLAGE CENTRE', 'code' => '004019009505701', 'ward_id' => 10, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 165, 'location_description' => 'Gururi Primary School serving the Wayu Ward area of Galole Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'KITOLE DADO MOBILE CENTRE', 'code' => '004019009505801', 'ward_id' => 10, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 306, 'location_description' => 'Voting center at Malka Dende Nursery School, Wayu Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'KOMOLI MOBILE CENTRE', 'code' => '004019009505901', 'ward_id' => 10, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 91, 'location_description' => 'Located at Daba Primary School in Wayu Ward, Galole Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'WAYU BORU PRIMARY SCHOOL', 'code' => '004019009506001', 'ward_id' => 10, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 672, 'location_description' => 'Electoral station at Gofisa Village Centre, Wayu Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'WAYU PRIMARY SCHOOL', 'code' => '004019009506101', 'ward_id' => 10, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 375, 'location_description' => 'Polling facility at Kitole Dado Mobile Centre in Wayu Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'KOTICHA PRIMARY SCHOOL', 'code' => '004019009506201', 'ward_id' => 10, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 214, 'location_description' => 'Kitole Dado Mobile Centre serving the Wayu Ward area of Galole Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'BAKAYE MOBILE CENTRE', 'code' => '004019009506301', 'ward_id' => 10, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 121, 'location_description' => 'Voting center at Komoli Mobile Centre, Wayu Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MOTI BOKA CENTRE (MOBILE)', 'code' => '004019009506401', 'ward_id' => 10, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 134, 'location_description' => 'Located at Wayu Boru Primary School in Wayu Ward, Galole Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'ONGOLA CENTRE (MOBILE)', 'code' => '004019009506501', 'ward_id' => 10, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 294, 'location_description' => 'Electoral station at Wayu Primary School, Wayu Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'TITILA PRIMARY SCHOOL', 'code' => '004019009506601', 'ward_id' => 10, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 572, 'location_description' => 'Polling facility at Koticha Primary School in Wayu Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'KURUNDU CENTRE (MOBILE)', 'code' => '004019009506701', 'ward_id' => 10, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 104, 'location_description' => 'Koticha Primary School serving the Wayu Ward area of Galole Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'CHIFIRI PRIMARY SCHOOL', 'code' => '004019009506801', 'ward_id' => 10, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 466, 'location_description' => 'Voting center at Bakaye Mobile Centre, Wayu Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'HAKOKA PRIMARY SCHOOL', 'code' => '004019009506901', 'ward_id' => 10, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 368, 'location_description' => 'Electoral station at Ongola Centre (Mobile), Wayu Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'KESI NURSERY SCHOOL (MOBILE)', 'code' => '004019009507001', 'ward_id' => 10, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 136, 'location_description' => 'Polling facility at Titila Primary School in Wayu Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'LAKOLE NURSERY SCHOOL', 'code' => '004019009507101', 'ward_id' => 10, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 215, 'location_description' => 'Titila Primary School serving the Wayu Ward area of Galole Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MARO WELLS CENTRE (MOBILE)', 'code' => '004019009507201', 'ward_id' => 10, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 144, 'location_description' => 'Voting center at Kurundu Centre (Mobile), Wayu Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'ABOYE NURSERY SCHOOL (MOBILE)', 'code' => '004019009507301', 'ward_id' => 10, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 323, 'location_description' => 'Located at Chifiri Primary School in Wayu Ward, Galole Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'WALDENA PRIMARY SCHOOL', 'code' => '004019009507401', 'ward_id' => 10, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 632, 'location_description' => 'Electoral station at Hakoka Primary School, Wayu Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'WALDENA PRIMARY SCHOOL', 'code' => '004019009507402', 'ward_id' => 10, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 631, 'location_description' => 'Polling facility at Kesi Nursery School (Mobile) in Wayu Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'SAWARE NURSERY SCHOOL (MOBILE)', 'code' => '004019009507501', 'ward_id' => 10, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 143, 'location_description' => 'Kesi Nursery School (Mobile) serving the Wayu Ward area of Galole Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'ANABU NURSERY SCHOOL (MOBILE)', 'code' => '004019009507601', 'ward_id' => 10, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 320, 'location_description' => 'Voting center at Lakole Nursery School, Wayu Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'KONE KALITI NURSERY SCHOOL (MOBILE)', 'code' => '004019009507701', 'ward_id' => 10, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 510, 'location_description' => 'Located at Maro Wells Centre (Mobile) in Wayu Ward, Galole Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'KONE KALITI NURSERY SCHOOL (MOBILE)', 'code' => '004019009507702', 'ward_id' => 10, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 510, 'location_description' => 'Electoral station at Aboye Nursery School (Mobile), Wayu Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'BULTO MULITU VILLAGE', 'code' => '004019009507801', 'ward_id' => 10, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 189, 'location_description' => 'Polling facility at Waldena Primary School in Wayu Ward', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'EL WACHU NURSERY SCHOOL', 'code' => '004019009508301', 'ward_id' => 10, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 174, 'location_description' => 'Waldena Primary School serving the Wayu Ward area of Galole Constituency', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MATA GALA ECD', 'code' => '004019009508401', 'ward_id' => 10, 'constituency_id' => 2, 'county_id' => 4, 'registered_voters' => 141, 'location_description' => 'Voting center at Saware Nursery School (Mobile), Wayu Ward, Tana River County', 'created_at' => now(), 'updated_at' => now()],
        ];

        // Insert all polling stations in batches to avoid memory issues
        $chunks = array_chunk($pollingStations, 50);
        
        foreach ($chunks as $chunk) {
            DB::table('polling_stations')->insert($chunk);
        }

        $this->command->info('Successfully seeded ' . count($pollingStations) . ' polling stations for Tana River County.');
    }
}

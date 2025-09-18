<?php

namespace Database\Seeders\Bura;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalaSeeder extends Seeder
{
    public function run(): void
    {
        //  Sala Ward Polling Stations - 23 stations (Ward ID: 14, Constituency ID: 3, County ID: 4)
        $pollingStations = [
            [
                'name' => 'MARAMTU PRIMARY SCHOOL',
                'code' => '004020009905101',
                'ward_id' => 14, // Sala
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 528,
                'location_description' => 'Located at MARAMTU PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'MARAMTU PRIMARY SCHOOL',
                'code' => '004020009905102',
                'ward_id' => 14, // Sala
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 528,
                'location_description' => 'Located at MARAMTU PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ABAKIK VILLAGE',
                'code' => '004020009905201',
                'ward_id' => 14, // Sala
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 349,
                'location_description' => 'Located in ABAKIK VILLAGE, serving the local village community and surrounding areas.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'MORORO MADRASA',
                'code' => '004020009905301',
                'ward_id' => 14, // Sala
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 532,
                'location_description' => 'Located at MORORO MADRASA, serving as a religious and educational center for the local community.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'MORORO MADRASA',
                'code' => '004020009905302',
                'ward_id' => 14, // Sala
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 532,
                'location_description' => 'Located at MORORO MADRASA, serving as a religious and educational center for the local community.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'MORORO MADRASA',
                'code' => '004020009905303',
                'ward_id' => 14, // Sala
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 531,
                'location_description' => 'Located at MORORO MADRASA, serving as a religious and educational center for the local community.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ANOLE PRIMARY SCHOOL',
                'code' => '004020009905401',
                'ward_id' => 14, // Sala
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 285,
                'location_description' => 'Located at ANOLE PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ZIWANI NURSERY',
                'code' => '004020009905501',
                'ward_id' => 14, // Sala
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 529,
                'location_description' => 'Located at ZIWANI NURSERY, serving early childhood education and the local community.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'SALA PRIMARY SCHOOL',
                'code' => '004020009905601',
                'ward_id' => 14, // Sala
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 386,
                'location_description' => 'Located at SALA PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'HAMARESA VILLAGE',
                'code' => '004020009905701',
                'ward_id' => 14, // Sala
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 619,
                'location_description' => 'Located in HAMARESA VILLAGE, serving the local village community and surrounding areas.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'SOMBO PRIMARY SCHOOL',
                'code' => '004020009905801',
                'ward_id' => 14, // Sala
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 351,
                'location_description' => 'Located at SOMBO PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'GUBATU CENTRE',
                'code' => '004020009905901',
                'ward_id' => 14, // Sala
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 88,
                'location_description' => 'Community center located at GUBATU CENTRE, serving as a local gathering point and polling station.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'BAKUYU NURSERY',
                'code' => '004020009906001',
                'ward_id' => 14, // Sala
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 370,
                'location_description' => 'Located at BAKUYU NURSERY, serving early childhood education and the local community.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'HATATA PRIMARY SCHOOL',
                'code' => '004020009906101',
                'ward_id' => 14, // Sala
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 505,
                'location_description' => 'Located at HATATA PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'HATATA PRIMARY SCHOOL',
                'code' => '004020009906102',
                'ward_id' => 14, // Sala
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 505,
                'location_description' => 'Located at HATATA PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'HATATA PRIMARY SCHOOL',
                'code' => '004020009906103',
                'ward_id' => 14, // Sala
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 504,
                'location_description' => 'Located at HATATA PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'TALEO NURSERY SCHOOL',
                'code' => '004020009906201',
                'ward_id' => 14, // Sala
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 188,
                'location_description' => 'Located at TALEO NURSERY SCHOOL, serving early childhood education and the local community.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'KAABSO VILLAGE',
                'code' => '004020009908001',
                'ward_id' => 14, // Sala
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 298,
                'location_description' => 'Located in KAABSO VILLAGE, serving the local village community and surrounding areas.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ZIWANI VANGO PRIMARY',
                'code' => '004020009908101',
                'ward_id' => 14, // Sala
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 302,
                'location_description' => 'Located at ZIWANI VANGO PRIMARY, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'DIID VILLAGE DAM',
                'code' => '004020009908201',
                'ward_id' => 14, // Sala
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 232,
                'location_description' => 'Located near DIID VILLAGE DAM, serving the local community and nearby water infrastructure area.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'KAABSO VILLAGE',
                'code' => '004020009911201',
                'ward_id' => 14, // Sala
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 220,
                'location_description' => 'Located in KAABSO VILLAGE, serving the local village community and surrounding areas.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ZIWANI VANGO PRIMARY',
                'code' => '004020009911301',
                'ward_id' => 14, // Sala
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 270,
                'location_description' => 'Located at ZIWANI VANGO PRIMARY, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'DIID VILLAGE DAM',
                'code' => '004020009911401',
                'ward_id' => 14, // Sala
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 154,
                'location_description' => 'Located near DIID VILLAGE DAM, serving the local community and nearby water infrastructure area.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        // Insert all polling stations in batches to avoid memory issues
        $chunks = array_chunk($pollingStations, 50);
        
        foreach ($chunks as $chunk) {
            DB::table('polling_stations')->insert($chunk);
        }

        $this->command->info('Successfully seeded ' . count($pollingStations) . ' polling stations for Tana River County.');
    }
}

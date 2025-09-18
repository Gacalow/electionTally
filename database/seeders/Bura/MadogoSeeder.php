<?php

namespace Database\Seeders\Bura;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MadogoSeeder extends Seeder
{
    public function run(): void
    {
        // Madogo Ward Polling Stations - 23 stations (Ward ID: 15, Constituency ID: 3, County ID: 4)
        $pollingStations = [
            [
                'name' => 'KABA VILLAGE',
                'code' => '004020010006301',
                'ward_id' => 15, // Madogo
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 111,
                'location_description' => 'Located in KABA VILLAGE, serving the local village community and surrounding areas.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'PAMBA NURSERY SCHOOL',
                'code' => '004020010006401',
                'ward_id' => 15, // Madogo
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 163,
                'location_description' => 'Located at PAMBA NURSERY SCHOOL, serving early childhood education and the local community.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ASAKO PRIMARY SCHOOL',
                'code' => '004020010006501',
                'ward_id' => 15, // Madogo
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 449,
                'location_description' => 'Located at ASAKO PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'RUKO PRIMARY SCHOOL',
                'code' => '004020010006601',
                'ward_id' => 15, // Madogo
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 439,
                'location_description' => 'Located at RUKO PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'KORATI PRIMARY SCHOOL',
                'code' => '004020010006701',
                'ward_id' => 15, // Madogo
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 127,
                'location_description' => 'Located at KORATI PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'MALKA MANSA PRIMARY SCHOOL',
                'code' => '004020010006801',
                'ward_id' => 15, // Madogo
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 94,
                'location_description' => 'Located at MALKA MANSA PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'MULANJO PRIMARY SCHOOL',
                'code' => '004020010006901',
                'ward_id' => 15, // Madogo
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 311,
                'location_description' => 'Located at MULANJO PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'KONORAMADHA PRIMARY SCHOOL',
                'code' => '004020010007001',
                'ward_id' => 15, // Madogo
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 378,
                'location_description' => 'Located at KONORAMADHA PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'LAG BADANA NURSERY SCHOOL',
                'code' => '004020010007101',
                'ward_id' => 15, // Madogo
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 219,
                'location_description' => 'Located at LAG BADANA NURSERY SCHOOL, serving early childhood education and the local community.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'MORORO PRIMARY SCHOOL',
                'code' => '004020010007201',
                'ward_id' => 15, // Madogo
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 653,
                'location_description' => 'Located at MORORO PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'MORORO PRIMARY SCHOOL',
                'code' => '004020010007202',
                'ward_id' => 15, // Madogo
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 653,
                'location_description' => 'Located at MORORO PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'MORORO PRIMARY SCHOOL',
                'code' => '004020010007203',
                'ward_id' => 15, // Madogo
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 652,
                'location_description' => 'Located at MORORO PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ADELE PRIMARY SCHOOL',
                'code' => '004020010007301',
                'ward_id' => 15, // Madogo
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 483,
                'location_description' => 'Located at ADELE PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ADELE PRIMARY SCHOOL',
                'code' => '004020010007302',
                'ward_id' => 15, // Madogo
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 483,
                'location_description' => 'Located at ADELE PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ADELE PRIMARY SCHOOL',
                'code' => '004020010007303',
                'ward_id' => 15, // Madogo
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 483,
                'location_description' => 'Located at ADELE PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'BARA NURSERY SCHOOL',
                'code' => '004020010007401',
                'ward_id' => 15, // Madogo
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 128,
                'location_description' => 'Located at BARA NURSERY SCHOOL, serving early childhood education and the local community.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'BUTUMA NURSERY',
                'code' => '004020010007501',
                'ward_id' => 15, // Madogo
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 119,
                'location_description' => 'Located at BUTUMA NURSERY, serving early childhood education and the local community.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'MADERTE CENTRE',
                'code' => '004020010007601',
                'ward_id' => 15, // Madogo
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 118,
                'location_description' => 'Community center located at MADERTE CENTRE, serving as a local gathering point and polling station.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'BOJI NURSERY',
                'code' => '004020010007701',
                'ward_id' => 15, // Madogo
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 628,
                'location_description' => 'Located at BOJI NURSERY, serving early childhood education and the local community.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'BOJI NURSERY',
                'code' => '004020010007702',
                'ward_id' => 15, // Madogo
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 627,
                'location_description' => 'Located at BOJI NURSERY, serving early childhood education and the local community.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'BARAKA VILLAGE',
                'code' => '004020010007801',
                'ward_id' => 15, // Madogo
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 155,
                'location_description' => 'Located in BARAKA VILLAGE, serving the local village community and surrounding areas.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'MADOGO SECONDARI SCHOOL',
                'code' => '004020010008301',
                'ward_id' => 15, // Madogo
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 225,
                'location_description' => 'Located at MADOGO SECONDARI SCHOOL, providing secondary education and serving as a polling center for the surrounding area.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'MADOGO SECONDARI SCHOOL',
                'code' => '004020010011501',
                'ward_id' => 15, // Madogo
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 186,
                'location_description' => 'Located at MADOGO SECONDARI SCHOOL, providing secondary education and serving as a polling center for the surrounding area.',
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

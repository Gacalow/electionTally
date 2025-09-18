<?php

namespace Database\Seeders\Bura;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HirimaniSeeder extends Seeder
{
    public function run(): void
    {
        // Hirimani Ward Polling Stations - 27 stations (Ward ID: 12, Constituency ID: 3, County ID: 4)
        $pollingStations = [
            [
                'name' => 'METI PRIMARY SCHOOL',
                'code' => '004020009702101',
                'ward_id' => 12, // Hirimani
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 351,
                'location_description' => 'Located at METI PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'HURUMA PRIMARY SCHOOL',
                'code' => '004020009702201',
                'ward_id' => 12, // Hirimani
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 628,
                'location_description' => 'Located at HURUMA PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'HURUMA PRIMARY SCHOOL',
                'code' => '004020009702202',
                'ward_id' => 12, // Hirimani
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 627,
                'location_description' => 'Located at HURUMA PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'HURUMA PRIMARY SCHOOL',
                'code' => '004020009702203',
                'ward_id' => 12, // Hirimani
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 627,
                'location_description' => 'Located at HURUMA PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'HIRIMANI SECONDARY SCHOOL',
                'code' => '004020009702301',
                'ward_id' => 12, // Hirimani
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 563,
                'location_description' => 'Located at HIRIMANI SECONDARY SCHOOL, providing secondary education and serving as a polling center for the surrounding area.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'HIRIMANI SECONDARY SCHOOL',
                'code' => '004020009702302',
                'ward_id' => 12, // Hirimani
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 562,
                'location_description' => 'Located at HIRIMANI SECONDARY SCHOOL, providing secondary education and serving as a polling center for the surrounding area.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'SHIRIKISHO PRIMARY SCHOOL',
                'code' => '004020009702401',
                'ward_id' => 12, // Hirimani
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 316,
                'location_description' => 'Located at SHIRIKISHO PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'BARAKA PRIMARY SCHOOL',
                'code' => '004020009702501',
                'ward_id' => 12, // Hirimani
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 295,
                'location_description' => 'Located at BARAKA PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'AMANI PRIMARY SCHOOL',
                'code' => '004020009702601',
                'ward_id' => 12, // Hirimani
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 198,
                'location_description' => 'Located at AMANI PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'FAHARI PRIMARY SCHOOL',
                'code' => '004020009702701',
                'ward_id' => 12, // Hirimani
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 289,
                'location_description' => 'Located at FAHARI PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'KABA WELLS - MOBILE',
                'code' => '004020009702801',
                'ward_id' => 12, // Hirimani
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 135,
                'location_description' => 'Mobile polling station serving remote communities in the KABA WELLS area.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'SABUKIA PRIMARY SCHOOL',
                'code' => '004020009702901',
                'ward_id' => 12, // Hirimani
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 305,
                'location_description' => 'Located at SABUKIA PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'EL TUTU WELLS - MOBILE',
                'code' => '004020009703001',
                'ward_id' => 12, // Hirimani
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 15,
                'location_description' => 'Mobile polling station serving remote communities in the EL TUTU WELLS area.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'WALESORHEA PRIMARY SCHOOL',
                'code' => '004020009703101',
                'ward_id' => 12, // Hirimani
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 523,
                'location_description' => 'Located at WALESORHEA PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'HOSINGO PRIMARY SCHOOL',
                'code' => '004020009703201',
                'ward_id' => 12, // Hirimani
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 463,
                'location_description' => 'Located at HOSINGO PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'BULA RIG PRIMARY SCHOOL',
                'code' => '004020009703301',
                'ward_id' => 12, // Hirimani
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 658,
                'location_description' => 'Located at BULA RIG PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'BULA RIG PRIMARY SCHOOL',
                'code' => '004020009703302',
                'ward_id' => 12, // Hirimani
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 657,
                'location_description' => 'Located at BULA RIG PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'GODIA PRIMARY SCHOOL',
                'code' => '004020009703401',
                'ward_id' => 12, // Hirimani
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 625,
                'location_description' => 'Located at GODIA PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'GODIA PRIMARY SCHOOL',
                'code' => '004020009703402',
                'ward_id' => 12, // Hirimani
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 625,
                'location_description' => 'Located at GODIA PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'MAGURA PRIMARY SCHOOL',
                'code' => '004020009703501',
                'ward_id' => 12, // Hirimani
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 417,
                'location_description' => 'Located at MAGURA PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'MAKINI PRIMARY SCHOOL',
                'code' => '004020009703601',
                'ward_id' => 12, // Hirimani
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 300,
                'location_description' => 'Located at MAKINI PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'VILLAGE FIVE NURSERY SCHOOL',
                'code' => '004020009703701',
                'ward_id' => 12, // Hirimani
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 212,
                'location_description' => 'Located at VILLAGE FIVE NURSERY SCHOOL, serving early childhood education and the local community.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'SHORA GAFO - MOBILE',
                'code' => '004020009703801',
                'ward_id' => 12, // Hirimani
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 311,
                'location_description' => 'Mobile polling station serving remote communities in the SHORA GAFO area.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'WOLES TOKOCHA - MOBILE',
                'code' => '004020009703901',
                'ward_id' => 12, // Hirimani
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 263,
                'location_description' => 'Mobile polling station serving remote communities in the WOLES TOKOCHA area.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'KANIKI CENTRE - MOBILE',
                'code' => '004020009704001',
                'ward_id' => 12, // Hirimani
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 310,
                'location_description' => 'Mobile polling station serving remote communities in the KANIKI CENTRE area.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'FAYYA TECHNICAL INSTITUTE',
                'code' => '004020009707901',
                'ward_id' => 12, // Hirimani
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 238,
                'location_description' => 'Located at FAYYA TECHNICAL INSTITUTE, providing technical education and serving the local community.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'FAYYA TECHNICAL INSTITUTE',
                'code' => '004020009711101',
                'ward_id' => 12, // Hirimani
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 237,
                'location_description' => 'Located at FAYYA TECHNICAL INSTITUTE, providing technical education and serving the local community.',
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

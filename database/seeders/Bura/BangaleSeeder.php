<?php

namespace Database\Seeders\Bura;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BangaleSeeder extends Seeder
{
    public function run(): void
    {
        // Bangale Ward Polling Stations - 22 stations (Ward ID: 13, Constituency ID: 3, County ID: 4)
        $pollingStations = [
            [
                'name' => 'BANGALE PRIMARY SCHOOL',
                'code' => '004020009804101',
                'ward_id' => 13, // Bangale
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 563,
                'location_description' => 'Located at BANGALE PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'BANGALE PRIMARY SCHOOL',
                'code' => '004020009804102',
                'ward_id' => 13, // Bangale
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 562,
                'location_description' => 'Located at BANGALE PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'BANGALE PRIMARY SCHOOL',
                'code' => '004020009804103',
                'ward_id' => 13, // Bangale
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 562,
                'location_description' => 'Located at BANGALE PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'BANGALE PRIMARY SCHOOL',
                'code' => '004020009804104',
                'ward_id' => 13, // Bangale
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 562,
                'location_description' => 'Located at BANGALE PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'MITI BOMA CENTRE - MOBILE',
                'code' => '004020009804201',
                'ward_id' => 13, // Bangale
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 531,
                'location_description' => 'Mobile polling station serving remote communities in the MITI BOMA CENTRE area.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'MITI BOMA CENTRE - MOBILE',
                'code' => '004020009804202',
                'ward_id' => 13, // Bangale
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 531,
                'location_description' => 'Mobile polling station serving remote communities in the MITI BOMA CENTRE area.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'MITI BOMA CENTRE - MOBILE',
                'code' => '004020009804203',
                'ward_id' => 13, // Bangale
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 531,
                'location_description' => 'Mobile polling station serving remote communities in the MITI BOMA CENTRE area.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'MITI BOMA CENTRE - MOBILE',
                'code' => '004020009804204',
                'ward_id' => 13, // Bangale
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 530,
                'location_description' => 'Mobile polling station serving remote communities in the MITI BOMA CENTRE area.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'TULA PRIMARY SCHOOL',
                'code' => '004020009804301',
                'ward_id' => 13, // Bangale
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 562,
                'location_description' => 'Located at TULA PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'EL RAR PRIMARY SCHOOL',
                'code' => '004020009804401',
                'ward_id' => 13, // Bangale
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 365,
                'location_description' => 'Located at EL RAR PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'KAMAGURU PRIMARY SCHOOL',
                'code' => '004020009804501',
                'ward_id' => 13, // Bangale
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 271,
                'location_description' => 'Located at KAMAGURU PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'BOKA PRIMARY SCHOOL',
                'code' => '004020009804601',
                'ward_id' => 13, // Bangale
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 643,
                'location_description' => 'Located at BOKA PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'BOKA PRIMARY SCHOOL',
                'code' => '004020009804602',
                'ward_id' => 13, // Bangale
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 643,
                'location_description' => 'Located at BOKA PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'YAQRIT CENTRE',
                'code' => '004020009804701',
                'ward_id' => 13, // Bangale
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 389,
                'location_description' => 'Community center located at YAQRIT CENTRE, serving as a local gathering point and polling station.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'YAQRIT CENTRE',
                'code' => '004020009804702',
                'ward_id' => 13, // Bangale
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 388,
                'location_description' => 'Community center located at YAQRIT CENTRE, serving as a local gathering point and polling station.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'BASAHARGESA NURSERY SCHOOL',
                'code' => '004020009804801',
                'ward_id' => 13, // Bangale
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 568,
                'location_description' => 'Located at BASAHARGESA NURSERY SCHOOL, serving early childhood education and the local community.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'BULTOBANTA VILLAGE',
                'code' => '004020009804901',
                'ward_id' => 13, // Bangale
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 403,
                'location_description' => 'Located in BULTOBANTA VILLAGE, serving the local village community and surrounding areas.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'BULTOBANTA VILLAGE',
                'code' => '004020009804902',
                'ward_id' => 13, // Bangale
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 403,
                'location_description' => 'Located in BULTOBANTA VILLAGE, serving the local village community and surrounding areas.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'KURITI PRIMARY SCHOOL',
                'code' => '004020009805001',
                'ward_id' => 13, // Bangale
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 391,
                'location_description' => 'Located at KURITI PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'KURITI PRIMARY SCHOOL',
                'code' => '004020009805002',
                'ward_id' => 13, // Bangale
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 391,
                'location_description' => 'Located at KURITI PRIMARY SCHOOL, serving the local community with educational and civic activities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'BANGALE SECONDARY SCHOOL',
                'code' => '004020009808601',
                'ward_id' => 13, // Bangale
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 313,
                'location_description' => 'Located at BANGALE SECONDARY SCHOOL, providing secondary education and serving as a polling center for the surrounding area.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'LABILE PRIMARY SCHOOL',
                'code' => '004020009808701',
                'ward_id' => 13, // Bangale
                'constituency_id' => 3, // Bura
                'county_id' => 4, // Tana River
                'registered_voters' => 27,
                'location_description' => 'Located at LABILE PRIMARY SCHOOL, serving the local community with educational and civic activities.',
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

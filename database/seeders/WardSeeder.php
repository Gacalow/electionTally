<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
   {
        $wards = [
            // Garsen Constituency (IEBC Code: 013, assuming constituency_id: 1)
            [
                'constituency_id' => 1,
                'name' => 'Kipini East',
                'code' => '0056',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'constituency_id' => 1,
                'name' => 'Garsen South',
                'code' => '0057',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'constituency_id' => 1,
                'name' => 'Kipini West',
                'code' => '0058',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'constituency_id' => 1,
                'name' => 'Garsen Central',
                'code' => '0059',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'constituency_id' => 1,
                'name' => 'Garsen West',
                'code' => '0060',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'constituency_id' => 1,
                'name' => 'Garsen North',
                'code' => '0061',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Galole Constituency (IEBC Code: 014, assuming constituency_id: 2)
            [
                'constituency_id' => 2,
                'name' => 'Kinakomba',
                'code' => '0062',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'constituency_id' => 2,
                'name' => 'Mikinduni',
                'code' => '0063',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'constituency_id' => 2,
                'name' => 'Chewani',
                'code' => '0064',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'constituency_id' => 2,
                'name' => 'Wayu',
                'code' => '0065',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Bura Constituency (IEBC Code: 015, assuming constituency_id: 3)
            [
                'constituency_id' => 3,
                'name' => 'Chewele',
                'code' => '0066',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'constituency_id' => 3,
                'name' => 'Hirimani',
                'code' => '0067',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'constituency_id' => 3,
                'name' => 'Bangale',
                'code' => '0068',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'constituency_id' => 3,
                'name' => 'Sala',
                'code' => '0069',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'constituency_id' => 3,
                'name' => 'Madogo',
                'code' => '0070',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('wards')->insert($wards);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConstituencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $constituencies = [
            [
                'county_id' => 4, // Tana River County ID
                'name' => 'Garsen',
                'code' => '013',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'county_id' => 4,
                'name' => 'Galole',
                'code' => '014',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'county_id' => 4,
                'name' => 'Bura',
                'code' => '015',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('constituencies')->insert($constituencies);
    }
}

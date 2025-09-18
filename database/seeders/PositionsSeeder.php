<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * Data sourced from IEBC "A HANDBOOK ON ELECTIVE POSITIONS IN KENYA"
     * Official document: https://www.iebc.or.ke/uploads/resources/wNa7w1TbBm.pdf
     * 
     * According to IEBC, there are six (6) main elective positions in Kenya:
     * 1. President (Republic of Kenya - highest administrative level)
     * 2. Member of National Assembly (Constituency Level)
     * 3. Senator (County Level)
     * 4. County Woman Member of National Assembly (County Level)
     * 5. County Governor (County Level)
     * 6. Member of County Assembly (Ward Level)
     * 
     * Additional positions include nominated members and speakers.
     * 
     * Smart Sort Ordering:
        1-9: Presidential level
        10-39: County level executives
        40-49: Constituency level
        50-99: Ward level
     */
    public function run(): void
    {
        $positions = [
            // HIGHEST ELECTIVE POSITIONS
            [
                'position_name' => 'President',
                'level' => 'national',
                'sort_order' => 1,
            ],

            // COUNTY LEVEL POSITIONS
            [
                'position_name' => 'Governor',
                'level' => 'county',
                'sort_order' => 10,
            ],            
            [
                'position_name' => 'Senator',
                'level' => 'county',
                'sort_order' => 20,
            ],
            [
                'position_name' => 'County Woman Representative',
                'level' => 'county',
                'sort_order' => 30,
            ],

            // CONSTITUENCY LEVEL POSITIONS
            [
                'position_name' => 'Member of Parliament',
                'level' => 'constituency',
                'sort_order' => 40,
            ],

            // WARD LEVEL POSITIONS
            [
                'position_name' => 'Member of County Assembly',
                'level' => 'ward',
                'sort_order' => 50,
            ],                       
        ];

        $timestamp = now();
        
        foreach ($positions as $position) {
            $position['created_at'] = $timestamp;
            $position['updated_at'] = $timestamp;
        }

        DB::table('positions')->insert($positions);
    }
}

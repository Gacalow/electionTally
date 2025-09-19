<?php

namespace Database\Seeders;

use App\Models\ElectionPosition;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ElectionPositionsSeeder extends Seeder
{
    /**
     * Creates election positions for the 2027 Kenya General Election
     * Based on:
     * - Election ID: 1 (2027 Kenya General Election)
     * - County ID: 4 (Tana River County)
     * - Position IDs: As per PositionsSeeder (1=President, 2=Governor, 3=Senator, 4=County Woman Rep, 5=MP, 6=MCA)
     * - Constituency IDs: 1=Garsen, 2=Galole, 3=Bura
     * - Ward IDs: 1-15 (covering all wards in Tana River County)
     */
    public function run(): void
    {
        $electionId = 1; // 2027 Kenya General Election
        $countyId = 4;   // Tana River County
        
        $electionPositions = [];

        // 1. PRESIDENTIAL POSITION (National Level)
        // President position - no constituency or ward 
        $electionPositions[] = [
            'election_id' => $electionId,
            'position_id' => 1, // President
            'constituency_id' => null,
            'ward_id' => null,
            'county_id' => $countyId,
            'is_active' => true,
        ];

        // 2. COUNTY LEVEL POSITIONS
        // Governor position
        $electionPositions[] = [
            'election_id' => $electionId,
            'position_id' => 2, // Governor
            'constituency_id' => null,
            'ward_id' => null,
            'county_id' => $countyId,
            'is_active' => true,
        ];

        // Senator position
        $electionPositions[] = [
            'election_id' => $electionId,
            'position_id' => 3, // Senator
            'constituency_id' => null,
            'ward_id' => null,
            'county_id' => $countyId,
            'is_active' => true,
        ];

        // County Woman Representative position
        $electionPositions[] = [
            'election_id' => $electionId,
            'position_id' => 4, // County Woman Representative
            'constituency_id' => null,
            'ward_id' => null,
            'county_id' => $countyId,
            'is_active' => true,
        ];

        // 3. CONSTITUENCY LEVEL POSITIONS (MPs)
        // Constituency mapping: 1=Garsen, 2=Galole, 3=Bura
        $constituencies = [
            1 => 'Garsen',
            2 => 'Galole', 
            3 => 'Bura'
        ];

        foreach ($constituencies as $constituencyId => $constituencyName) {
            $electionPositions[] = [
                'election_id' => $electionId,
                'position_id' => 5, // Member of Parliament
                'constituency_id' => $constituencyId,
                'ward_id' => null,
                'county_id' => $countyId,
                'is_active' => true,
            ];
        }

        // 4. WARD LEVEL POSITIONS (MCAs)
        // Ward mapping based on the provided ward data
        $wards = [
            // Garsen Constituency (constituency_id: 1)
            1 => ['name' => 'Kipini East', 'constituency_id' => 1],
            2 => ['name' => 'Garsen South', 'constituency_id' => 1],
            3 => ['name' => 'Kipini West', 'constituency_id' => 1],
            4 => ['name' => 'Garsen Central', 'constituency_id' => 1],
            5 => ['name' => 'Garsen West', 'constituency_id' => 1],
            6 => ['name' => 'Garsen North', 'constituency_id' => 1],
            
            // Galole Constituency (constituency_id: 2)
            7 => ['name' => 'Kinakomba', 'constituency_id' => 2],
            8 => ['name' => 'Mikinduni', 'constituency_id' => 2],
            9 => ['name' => 'Chewani', 'constituency_id' => 2],
            10 => ['name' => 'Wayu', 'constituency_id' => 2],
            
            // Bura Constituency (constituency_id: 3)
            11 => ['name' => 'Chewele', 'constituency_id' => 3],
            12 => ['name' => 'Hirimani', 'constituency_id' => 3],
            13 => ['name' => 'Bangale', 'constituency_id' => 3],
            14 => ['name' => 'Sala', 'constituency_id' => 3],
            15 => ['name' => 'Madogo', 'constituency_id' => 3],
        ];

        foreach ($wards as $wardId => $wardInfo) {
            $electionPositions[] = [
                'election_id' => $electionId,
                'position_id' => 6, // Member of County Assembly (MCA)
                'constituency_id' => $wardInfo['constituency_id'],
                'ward_id' => $wardId,
                'county_id' => $countyId,
                'is_active' => true,
            ];
        }

        // Use updateOrCreate for each election position
        $timestamp = Carbon::now();
        
        foreach ($electionPositions as $positionData) {
            ElectionPosition::updateOrCreate(
                [
                    'election_id' => $positionData['election_id'],
                    'position_id' => $positionData['position_id'],
                    'constituency_id' => $positionData['constituency_id'],
                    'ward_id' => $positionData['ward_id'],
                ],
                [
                    'county_id' => $positionData['county_id'],
                    'is_active' => $positionData['is_active'],
                    'created_at' => $timestamp,
                    'updated_at' => $timestamp,
                ]
            );
        }

        // Output summary
        $this->outputSummary();
    }

    private function outputSummary(): void
    {
        $this->command->info('===== Election Positions Summary =====');
        $this->command->info('2027 Kenya General Election - Tana River County');
        $this->command->info('');
        
        // Count positions by type
        $counts = [
            'President' => 1,
            'Governor' => 1,
            'Senator' => 1,
            'County Woman Representative' => 1,
            'Members of Parliament' => 3,
            'Members of County Assembly' => 15
        ];

        $total = 0;
        foreach ($counts as $position => $count) {
            $this->command->info("• {$position}: {$count}");
            $total += $count;
        }

        $this->command->info('');
        $this->command->info("Total Election Positions Created: {$total}");
        $this->command->info('');
        
        // Breakdown by administrative level
        $this->command->info('Breakdown by Administrative Level:');
        $this->command->info('• National Level: 1 (President)');
        $this->command->info('• County Level: 3 (Governor, Senator, Woman Rep)');
        $this->command->info('• Constituency Level: 3 (MPs for Garsen, Galole, Bura)');
        $this->command->info('• Ward Level: 15 (MCAs for all wards)');
        $this->command->info('=====================================');
    }

    /**
     * Get position name by ID for reference
     */
    private function getPositionName(int $positionId): string
    {
        $positions = [
            1 => 'President',
            2 => 'Governor', 
            3 => 'Senator',
            4 => 'County Woman Representative',
            5 => 'Member of Parliament',
            6 => 'Member of County Assembly'
        ];

        return $positions[$positionId] ?? 'Unknown Position';
    }

    /**
     * Get constituency name by ID for reference
     */
    private function getConstituencyName(?int $constituencyId): string
    {
        if (!$constituencyId) return 'N/A';

        $constituencies = [
            1 => 'Garsen',
            2 => 'Galole',
            3 => 'Bura'
        ];

        return $constituencies[$constituencyId] ?? 'Unknown Constituency';
    }

    /**
     * Get ward name by ID for reference
     */
    private function getWardName(?int $wardId): string
    {
        if (!$wardId) return 'N/A';

        $wards = [
            1 => 'Kipini East', 2 => 'Garsen South', 3 => 'Kipini West',
            4 => 'Garsen Central', 5 => 'Garsen West', 6 => 'Garsen North',
            7 => 'Kinakomba', 8 => 'Mikinduni', 9 => 'Chewani', 10 => 'Wayu',
            11 => 'Chewele', 12 => 'Hirimani', 13 => 'Bangale', 14 => 'Sala', 15 => 'Madogo'
        ];

        return $wards[$wardId] ?? 'Unknown Ward';
    }
}

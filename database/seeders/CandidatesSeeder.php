<?php

namespace Database\Seeders;

use App\Models\Candidate;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CandidatesSeeder extends Seeder
{
    /**
     * Based on:
     * - ElectionPositionsSeeder: Election ID 1 (2027 Kenya General Election), Tana River County (county_id: 4)
     * - PoliticalPartiesSeeder: Registered political parties (IDs 1–67)
     * - Ensures at least 2 candidates per election position
     * - Randomizes candidate names, political party affiliations, and ballot positions
     */
    public function run(): void
    {
        // Kenyan names (first and last names for randomization)
        $firstNames = [
            'John', 'Mary', 'Peter', 'Grace', 'James', 'Mercy', 'David', 'Esther', 'Joseph', 'Faith',
            'Paul', 'Jane', 'Samuel', 'Ruth', 'Michael', 'Sarah', 'Daniel', 'Joyce', 'Thomas', 'Lydia',
            'Charles', 'Ann', 'George', 'Nancy', 'Moses', 'Dorothy', 'Stephen', 'Beatrice', 'Isaac', 'Rose',
            'Juma', 'Amina', 'Hassan', 'Fatuma', 'Omar', 'Zainab', 'Ali', 'Halima', 'Abdi', 'Nafisa'
        ];

        $lastNames = [
            'Mwangi', 'Wanjiku', 'Odinga', 'Atieno', 'Wanyama', 'Nekesa', 'Kiprop', 'Chebet', 'Kariuki', 'Njeri',
            'Ochieng', 'Adhiambo', 'Wafula', 'Nasimiyu', 'Kiptoo', 'Jepchirchir', 'Kamau', 'Wambui', 'Okoth', 'Achieng',
            'Barasa', 'Nafula', 'Rotich', 'Chepkoech', 'Maina', 'Nyambura', 'Omondi', 'Anyango', 'Wekesa', 'Naliaka',
            'Hussein', 'Fatuma', 'Mohamed', 'Amina', 'Abdalla', 'Zainab', 'Said', 'Khadija', 'Omar', 'Halima'
        ];

        // Political party IDs from PoliticalPartiesSeeder
        $politicalPartyIds = range(1, 90); // 90 parties
        $politicalPartyIds[] = null; // Allow independent candidates

        // Election positions from ElectionPositionsSeeder
        $electionPositions = [
            // National Level: President (position_id: 1)
            ['id' => 1, 'position_id' => 1, 'constituency_id' => null, 'ward_id' => null],

            // County Level: Governor, Senator, County Woman Representative (position_id: 2–4)
            ['id' => 2, 'position_id' => 2, 'constituency_id' => null, 'ward_id' => null],
            ['id' => 3, 'position_id' => 3, 'constituency_id' => null, 'ward_id' => null],
            ['id' => 4, 'position_id' => 4, 'constituency_id' => null, 'ward_id' => null],

            // Constituency Level: MPs (position_id: 5, constituency_ids: 1–3)
            ['id' => 5, 'position_id' => 5, 'constituency_id' => 1, 'ward_id' => null], // Garsen
            ['id' => 6, 'position_id' => 5, 'constituency_id' => 2, 'ward_id' => null], // Galole
            ['id' => 7, 'position_id' => 5, 'constituency_id' => 3, 'ward_id' => null], // Bura

            // Ward Level: MCAs (position_id: 6, ward_ids: 1–15)
            ['id' => 8, 'position_id' => 6, 'constituency_id' => 1, 'ward_id' => 1], // Kipini East
            ['id' => 9, 'position_id' => 6, 'constituency_id' => 1, 'ward_id' => 2], // Garsen South
            ['id' => 10, 'position_id' => 6, 'constituency_id' => 1, 'ward_id' => 3], // Kipini West
            ['id' => 11, 'position_id' => 6, 'constituency_id' => 1, 'ward_id' => 4], // Garsen Central
            ['id' => 12, 'position_id' => 6, 'constituency_id' => 1, 'ward_id' => 5], // Garsen West
            ['id' => 13, 'position_id' => 6, 'constituency_id' => 1, 'ward_id' => 6], // Garsen North
            ['id' => 14, 'position_id' => 6, 'constituency_id' => 2, 'ward_id' => 7], // Kinakomba
            ['id' => 15, 'position_id' => 6, 'constituency_id' => 2, 'ward_id' => 8], // Mikinduni
            ['id' => 16, 'position_id' => 6, 'constituency_id' => 2, 'ward_id' => 9], // Chewani
            ['id' => 17, 'position_id' => 6, 'constituency_id' => 2, 'ward_id' => 10], // Wayu
            ['id' => 18, 'position_id' => 6, 'constituency_id' => 3, 'ward_id' => 11], // Chewele
            ['id' => 19, 'position_id' => 6, 'constituency_id' => 3, 'ward_id' => 12], // Hirimani
            ['id' => 20, 'position_id' => 6, 'constituency_id' => 3, 'ward_id' => 13], // Bangale
            ['id' => 21, 'position_id' => 6, 'constituency_id' => 3, 'ward_id' => 14], // Sala
            ['id' => 22, 'position_id' => 6, 'constituency_id' => 3, 'ward_id' => 15], // Madogo
        ];

        $candidates = [];
        $timestamp = Carbon::now();

        foreach ($electionPositions as $position) {
            $electionPositionId = $position['id'];
            // Generate 2–4 candidates per position (randomly vary for realism)
            $numCandidates = rand(2, 4);

            for ($i = 1; $i <= $numCandidates; $i++) {
                $firstName = $firstNames[array_rand($firstNames)];
                $lastName = $lastNames[array_rand($lastNames)];
                $fullName = "$firstName $lastName";

                // Ensure name length does not exceed 100 characters
                $fullName = substr($fullName, 0, 100);

                // Randomly assign a political party or independent (20% chance of being independent)
                $politicalPartyId = (rand(1, 100) <= 20) ? null : $politicalPartyIds[array_rand($politicalPartyIds)];

                $candidates[] = [
                    'election_position_id' => $electionPositionId,
                    'name' => $fullName,
                    'political_party_id' => $politicalPartyId,
                    'candidate_number' => $i, // Sequential ballot positions (1, 2, 3, etc.)
                    'is_active' => true,
                    'created_at' => $timestamp,
                    'updated_at' => $timestamp,
                ];
            }
        }

        // Use updateOrCreate to prevent duplicates
        foreach ($candidates as $candidateData) {
            Candidate::updateOrCreate(
                [
                    'election_position_id' => $candidateData['election_position_id'],
                    'candidate_number' => $candidateData['candidate_number'],
                ],
                [
                    'name' => $candidateData['name'],
                    'political_party_id' => $candidateData['political_party_id'],
                    'is_active' => $candidateData['is_active'],
                    'created_at' => $candidateData['created_at'],
                    'updated_at' => $candidateData['updated_at'],
                ]
            );
        }

        // Output summary
        $this->outputSummary($candidates);
    }

    /**
     * Output a summary of seeded candidates
     */
    private function outputSummary(array $candidates): void
    {
        $this->command->info('===== Candidates Seeder Summary =====');
        $this->command->info('2027 Kenya General Election - Tana River County');
        $this->command->info('');

        // Count candidates per position type
        $positionCounts = [
            1 => ['name' => 'President', 'count' => 0],
            2 => ['name' => 'Governor', 'count' => 0],
            3 => ['name' => 'Senator', 'count' => 0],
            4 => ['name' => 'County Woman Representative', 'count' => 0],
            5 => ['name' => 'Member of Parliament', 'count' => 0],
            6 => ['name' => 'Member of County Assembly', 'count' => 0],
        ];

        // Map election_position_id to position_id
        $positionMap = [
            1 => 1, // President
            2 => 2, // Governor
            3 => 3, // Senator
            4 => 4, // County Woman Representative
            5 => 5, 6 => 5, 7 => 5, // MPs (Garsen, Galole, Bura)
            8 => 6, 9 => 6, 10 => 6, 11 => 6, 12 => 6, 13 => 6, // MCAs (Garsen)
            14 => 6, 15 => 6, 16 => 6, 17 => 6, // MCAs (Galole)
            18 => 6, 19 => 6, 20 => 6, 21 => 6, 22 => 6, // MCAs (Bura)
        ];

        foreach ($candidates as $candidate) {
            $positionId = $positionMap[$candidate['election_position_id']] ?? 0;
            if (isset($positionCounts[$positionId])) {
                $positionCounts[$positionId]['count']++;
            }
        }

        $total = 0;
        foreach ($positionCounts as $position) {
            $this->command->info("• {$position['name']}: {$position['count']}");
            $total += $position['count'];
        }

        $this->command->info('');
        $this->command->info("Total Candidates Created: {$total}");
        $this->command->info('=====================================');
    }
}

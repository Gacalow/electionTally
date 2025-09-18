<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Election;
use Illuminate\Support\Facades\DB;

class ElectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * Data sources:
     * - IEBC official announcements (July 2025)
     * - Kenya Constitution Article 101: Elections held on "second Tuesday in August, in every fifth year"
     * - Recent IEBC press briefings and roadmap to 2027
     *
     * Key dates:
     * - 2027 General Election: August 10, 2027 (Second Tuesday)
     */
    public function run(): void
    {
        $elections = [
            // UPCOMING 2027 GENERAL ELECTION
            [
                'election_name' => '2027 Kenya General Election',
                'election_date' => '2027-08-10', // Second Tuesday in August 2027
                'election_type' => 'general',
                'status' => 'upcoming',
            ],

            // FUTURE GENERAL ELECTIONS (Constitutional cycle)
            [
                'election_name' => '2032 Kenya General Election',
                'election_date' => '2032-08-10', // Second Tuesday in August 2032
                'election_type' => 'general',
                'status' => 'upcoming',
            ],
        ];

        // Use updateOrCreate with the Election model
        foreach ($elections as $electionData) {
            Election::updateOrCreate(
                [
                    'election_name' => $electionData['election_name'],
                    'election_date' => $electionData['election_date'],
                ],
                [
                    'election_type' => $electionData['election_type'],
                    'status' => $electionData['status'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}
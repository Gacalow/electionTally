<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('results_submissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('polling_station_id')->constrained('polling_stations')->onDelete('restrict');
            $table->foreignId('election_position_id')->constrained('election_positions')->onDelete('restrict');
            $table->foreignId('agent_id')->constrained('agents')->onDelete('restrict');
            $table->integer('total_registered_voters');
            $table->integer('total_votes_cast');
            $table->integer('valid_votes');
            $table->integer('invalid_votes');
            $table->integer('spoilt_ballots');
            $table->enum('verification_status', ['pending', 'verified', 'rejected'])->default('pending');
            $table->boolean('is_final_result')->default(true);
            $table->timestamp('submitted_at');
            $table->timestamp('verified_at')->nullable();
            $table->foreignId('verified_by')->nullable()->constrained('users')->onDelete('set null');
            $table->text('rejection_reason')->nullable();
            $table->timestamps();
            
            $table->unique(['polling_station_id', 'election_position_id'], 'unique_polling_position_submission');
            $table->index(['polling_station_id', 'election_position_id', 'verification_status'], 'polling_position_status_index');
            $table->index(['agent_id', 'submitted_at']);
            $table->index('verification_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('results_submissions');
    }
};

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
        Schema::create('result_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('submission_id')->constrained('results_submissions')->onDelete('cascade');
            $table->foreignId('candidate_id')->constrained('candidates')->onDelete('restrict');
            $table->integer('votes_received')->default(0);
            $table->decimal('vote_percentage', 5, 2)->default(0.00)->comment('% share of valid votes');
            $table->timestamps();
            
            $table->unique(['submission_id', 'candidate_id'], 'unique_submission_candidate');
            $table->index(['submission_id', 'votes_received']);
            $table->index(['candidate_id', 'vote_percentage']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('result_details');
    }
};

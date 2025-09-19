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
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('election_position_id')->constrained('election_positions')->onDelete('cascade');
            $table->string('name', 100);
            $table->foreignId('political_party_id')->nullable()->constrained('political_parties')->onDelete('set null')->comment('Nullable for independent candidates');
            $table->integer('candidate_number')->comment('Ballot position');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            
            $table->unique(['election_position_id', 'candidate_number'], 'unique_candidate_ballot_position');
            $table->index(['election_position_id', 'candidate_number']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};

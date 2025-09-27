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
        Schema::create('submission_hashes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('submission_id')->unique()->constrained('results_submissions')->onDelete('cascade');
            $table->string('data_hash', 64)->comment('SHA-256 of core submission data');
            $table->string('file_hashes_combined', 64)->nullable()->comment('Combined hash of all files');
            $table->text('digital_signature')->nullable()->comment('Digital signature');
            $table->string('timestamp_signature', 128)->comment('Timestamp-based integrity check');
            $table->timestamps();
            
            $table->index('data_hash');
            $table->index(['submission_id', 'data_hash']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submission_hashes');
    }
};

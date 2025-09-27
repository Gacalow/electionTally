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
        Schema::create('verification_files', function (Blueprint $table) {
            $table->id();
            $table->foreignId('submission_id')->constrained('results_submissions')->onDelete('cascade');
            $table->foreignId('uploaded_by')->constrained('agents')->onDelete('restrict');
            $table->string('file_name', 255);
            $table->string('file_path', 500);
            $table->string('file_hash', 64)->comment('SHA-256 hash for integrity');
            $table->string('file_type', 50)->comment('image/jpeg, image/png, application/pdf');
            $table->integer('file_size')->comment('File size in bytes');
            $table->timestamp('upload_timestamp');
            $table->timestamps();
            
            $table->index(['submission_id', 'upload_timestamp']);            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('verification_files');
    }
};

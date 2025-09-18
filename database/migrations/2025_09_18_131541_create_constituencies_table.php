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
      Schema::create('constituencies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('county_id')->constrained('counties')->onDelete('cascade');
            $table->string('name', 100);
            $table->string('code', 20)->unique()->comment('IEBC constituency code');
            $table->timestamps();
            
            $table->index(['county_id', 'name']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('constituencies');
    }
};

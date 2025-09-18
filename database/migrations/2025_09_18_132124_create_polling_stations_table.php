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
      Schema::create('polling_stations', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('code', 20)->unique()->comment('IEBC polling station code');
            $table->foreignId('ward_id')->constrained('wards')->onDelete('cascade');
            $table->foreignId('constituency_id')->constrained('constituencies')->onDelete('cascade');
            $table->foreignId('county_id')->constrained('counties')->onDelete('cascade');
            $table->integer('registered_voters')->default(0);
            $table->text('location_description')->nullable();
            $table->timestamps();
            
            $table->index(['ward_id', 'name']);
            $table->index(['constituency_id', 'ward_id']);
            $table->index(['county_id', 'constituency_id', 'ward_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('polling_stations');
    }
};

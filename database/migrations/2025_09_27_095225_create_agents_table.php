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
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained('users')->onDelete('cascade');
            $table->foreignId('aspirant_id')->constrained('aspirants')->onDelete('cascade');
            $table->foreignId('polling_station_id')->constrained('polling_stations')->onDelete('restrict');
            $table->string('phone_number', 20);
            $table->string('id_number', 20);
            $table->string('agent_code', 10)->unique()->comment('For authentication');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            
            $table->unique(['aspirant_id', 'polling_station_id'], 'unique_aspirant_polling_station');
            $table->index(['aspirant_id', 'is_active']);
            $table->index('polling_station_id');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agents');
    }
};

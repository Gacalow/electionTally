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
        Schema::create('aspirants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained('users')->onDelete('cascade');
            $table->string('position_contested', 100);
            $table->foreignId('political_party_id')->constrained('political_parties')->onDelete('restrict');
            $table->foreignId('constituency_id')->nullable()->constrained('constituencies')->onDelete('restrict')->comment('Only for MP aspirants');
            $table->foreignId('ward_id')->nullable()->constrained('wards')->onDelete('restrict')->comment('Only for MCA aspirants');
            $table->string('phone_number', 20);
            $table->string('id_number', 20)->unique();
            $table->timestamps();
            
            $table->index(['constituency_id', 'ward_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aspirants');
    }
};

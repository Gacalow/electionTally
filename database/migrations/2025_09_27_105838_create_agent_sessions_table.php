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
        Schema::create('agent_sessions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agent_id')->constrained('agents')->onDelete('cascade');
            $table->string('login_token', 100)->unique()->comment('Session token');
            $table->foreignId('polling_station_id')->constrained('polling_stations')->onDelete('restrict');
            $table->timestamp('login_time');
            $table->timestamp('logout_time')->nullable();
            $table->text('device_info')->nullable()->comment('User agent, device details');
            $table->string('ip_address', 45)->comment('Supports IPv6');
            $table->decimal('latitude', 10, 8)->nullable()->comment('GPS latitude coordinate');
            $table->decimal('longitude', 11, 8)->nullable()->comment('GPS longitude coordinate');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            
            $table->index(['agent_id', 'login_time']);
            $table->index(['login_token']);
            $table->index(['is_active', 'login_time']);            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agent_sessions');
    }
};

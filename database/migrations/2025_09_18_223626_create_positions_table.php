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
       Schema::create('positions', function (Blueprint $table) {
            $table->id();
            $table->string('position_name', 100)->unique()->comment('Governor, Senator, MP, MCA, etc.');
            $table->enum('level', ['national','county', 'constituency', 'ward']);
            $table->integer('sort_order')->default(0)->comment('For display ordering');
            $table->timestamps();
            
            $table->index(['level', 'sort_order']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('positions');
    }
};

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
        Schema::create('italian_cities', function (Blueprint $table) {
            $table->string('id', 4)->primary();
            $table->string('name')->index();
            $table->integer('province_id');
            $table->string('province_name');
            $table->string('province_code', 2);
            $table->string('region_name');
            $table->integer('region_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('italian_cities');
    }
};

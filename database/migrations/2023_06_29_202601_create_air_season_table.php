<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('air_season', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('air_id');
            $table->unsignedBigInteger('season_id');
            $table->timestamps();

            $table->foreign('air_id')->references('id')->on('airs')->onDelete('cascade');
            $table->foreign('season_id')->references('id')->on('seasons')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('air_season');
    }
};

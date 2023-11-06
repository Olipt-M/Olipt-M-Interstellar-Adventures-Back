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
        Schema::create('journeys', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ship_id');
            $table->unsignedBigInteger('planet_id');
            $table->unsignedBigInteger('journey_type_id');
            $table->date('departure_date', 100);
            $table->date('return_date', 100);
            $table->float('price', 100);
            $table->timestamps();

            $table->foreign('ship_id')->references('id')->on('ships')->onDelete('cascade');
            $table->foreign('planet_id')->references('id')->on('planets')->onDelete('cascade');
            $table->foreign('journey_type_id')->references('id')->on('journey_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('journeys');
    }
};

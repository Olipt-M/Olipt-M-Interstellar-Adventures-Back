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
        Schema::create('planets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 30);
            $table->string('picture', 255);
            $table->string('system', 50);
            $table->string('distance_from_earth', 30);
            $table->string('capital', 20)->nullable();
            $table->smallInteger('date_colonization')->unsigned()->nullable();
            $table->string('nb_inhabitants', 30)->nullable();
            $table->unsignedBigInteger('climate_id');

            $table->foreign('climate_id')->references('id')->on('climates');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('planets');
    }
};

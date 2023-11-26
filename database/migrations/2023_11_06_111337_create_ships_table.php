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
        Schema::create('ships', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('journey_type_id');
            $table->string('name', 100)->unique();
            $table->string('picture');
            $table->string('coeff_price');
            $table->timestamps();

            $table->foreign('journey_type_id')->references('id')->on('journey_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ships');
    }
};

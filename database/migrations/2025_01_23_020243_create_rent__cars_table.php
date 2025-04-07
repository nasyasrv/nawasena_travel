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
        Schema::create('rent_cars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('picture');
            $table->unsignedInteger('price');
            $table->integer('seat');
            $table->boolean('car_driver')->default(false);
            $table->boolean('vvip_service')->default(false);
            $table->boolean('flexible')->default(false);
            $table->boolean('private_luxuryclass')->default(false);
            $table->integer('day_service');
            $table->boolean('hotel_travelticket')->default(false);
            $table->boolean('bbm_toll_park_crossing')->default(false);
            $table->text('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rent_cars');
    }
};

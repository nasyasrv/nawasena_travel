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
        Schema::create('rent_cars', function (Blueprint $table) { // Perbaiki nama tabel
            $table->id();
            $table->string('name');
            $table->string('picture');
            $table->unsignedInteger('price'); // Harga tidak boleh negatif
            $table->boolean('include_driver')->default(false);
            $table->boolean('excellent_service')->default(false);
            $table->boolean('include_fuel')->default(false);
            $table->boolean('include_toll')->default(false);
            $table->text('note')->nullable(); // Ubah ke TEXT dan buat nullable
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rent_cars'); // Sesuaikan dengan nama tabel yang benar
    }
};

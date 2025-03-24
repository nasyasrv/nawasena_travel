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
        Schema::create('visitors', function (Blueprint $table) {
            $table->id();
            $table->string('ip_address', 45); // Supports both IPv4 & IPv6
            $table->string('user_agent'); // Stores browser/device info
            $table->date('visit_date')->index(); // Index for faster queries
            $table->integer('count')->default(1); // Stores repeated visits
            $table->timestamps();

            // Prevent duplicate records for the same user per day
            $table->unique(['ip_address', 'user_agent', 'visit_date']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitors');
    }
};

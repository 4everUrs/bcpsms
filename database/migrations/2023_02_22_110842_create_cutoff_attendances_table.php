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
        Schema::create('cutoff_attendances', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('monthly_attendance_id');
            $table->string('start')->unique();
            $table->string('end')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cutoff_attendances');
    }
};

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
        Schema::create('performances', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('employee_id');
            $table->integer('quality')->nullable();
            $table->integer('achievement')->nullable();
            $table->integer('productivity')->nullable();
            $table->integer('initiative')->nullable();
            $table->integer('teamwork')->nullable();
            $table->integer('adaptability')->nullable();
            $table->integer('communication')->nullable();
            $table->integer('performance')->nullable();
            $table->integer('total')->nullable();
            $table->string('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('performances');
    }
};

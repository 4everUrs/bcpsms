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
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            // $table->unsignedInteger('qualifications_id');
            $table->string('position');
            $table->string('quantity');
            $table->bigInteger('salary_min');
            $table->bigInteger('salary_max');
            $table->integer('candidate')->nullable()->default(0);
            $table->integer('hired')->nullable()->default(0);
            $table->string('status')->nullable()->default('Hiring');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacancies');
    }
};

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
        Schema::create('employees', function (Blueprint $table) {
            $table->id()->startingValue(10001);
            $table->unsignedInteger('candidate_id');
            $table->unsignedInteger('vacancy_id');
            $table->unsignedInteger('user_id')->nullable();
            $table->string('name');
            $table->string('email');
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->integer('age');
            $table->string('birthdate');
            $table->string('gender');
            $table->string('address');
            $table->string('phone');
            $table->string('status')->nullable()->default('Active');
            $table->string('sss')->nullable();
            $table->string('schedule')->nullable();
            $table->string('shift')->nullable();
            $table->string('philhealth')->nullable();
            $table->string('pagibig')->nullable();
            $table->string('medical')->nullable();
            $table->string('dental')->nullable();
            $table->string('insurance')->nullable();
            $table->bigInteger('salary')->nullable();
            $table->string('bank_account')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};

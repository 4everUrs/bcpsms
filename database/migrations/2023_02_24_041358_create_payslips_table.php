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
        Schema::create('payslips', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('employee_id');
            $table->unsignedInteger('cutoff_attendance_id');
            $table->integer('total_hours')->nullable()->default(0);
            $table->bigInteger('net_salary')->nullable()->default(0);
            $table->bigInteger('gross_salary')->nullable()->default(0);
            $table->bigInteger('over_time')->nullable()->default(0);
            $table->bigInteger('tax')->nullable()->default(0);
            $table->bigInteger('sss')->nullable()->default(0);
            $table->bigInteger('philhealth')->nullable()->default(0);
            $table->bigInteger('pagibig')->nullable()->default(0);
            $table->bigInteger('medical')->nullable()->default(0);
            $table->bigInteger('insurance')->nullable()->default(0);
            $table->bigInteger('dental')->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payslips');
    }
};

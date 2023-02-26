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
        Schema::create('recruitment_request_lists', function (Blueprint $table) {
            $table->id();
            $table->string('position');
            $table->string('status')->nullable()->default('Pending');
            $table->integer('slot');
            $table->bigInteger('salary_min');
            $table->bigInteger('salary_max');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recruitment_request_lists');
    }
};

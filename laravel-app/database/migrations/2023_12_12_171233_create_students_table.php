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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('code');
            $table->bigInteger('department_id')->references('id')->on('departments')->onDelete('CASCADE');
            $table->bigInteger('section_id')->references('id')->on('sections')->onDelete('CASCADE');
            $table->bigInteger('level_id')->references('id')->on('levels')->onDelete('CASCADE');
            $table->enum('type',['student','applicant']);
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};

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
        Schema::create('classes_tables', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('grade_level', ['Pre-K', 'Kindergarten'])->default('Pre-K');
            $table->string('room_number',10);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classes_tables');
    }
};

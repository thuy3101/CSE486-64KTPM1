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
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('sales_id')->primary();
            $table->integer('medicine_id')->unsigned();
            $table->foreign('medicine_id')->references('medicine_id')->on('medicines');
            $table->integer('quantity');
            $table->dateTime('sale_date');
            $table->string('customer_phone',10);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};

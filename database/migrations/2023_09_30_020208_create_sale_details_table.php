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
        Schema::create('sale_details', function (Blueprint $table) {
            $table->id('sale_detail_id');
            $table->unsignedBigInteger('sale_id');
            $table->unsignedBigInteger('purchase_detail_id');
            $table->integer('quantity');
            $table->decimal('sale_price', 8, 2);
            $table->decimal('discount', 8, 2)->default(0);
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale_details');
    }
};

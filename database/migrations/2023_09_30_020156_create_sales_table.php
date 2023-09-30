<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id('sale_id');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('worker_id');
            $table->date('date');
            $table->string('receipt_type');
            $table->string('series');
            $table->string('correlative');
            $table->decimal('vat', 8, 2);
            $table->string('status');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};

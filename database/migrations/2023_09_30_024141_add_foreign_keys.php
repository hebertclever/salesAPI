<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeys extends Migration
{
    public function up()
    {
        Schema::table('sales', function (Blueprint $table) {
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->foreign('worker_id')->references('id')->on('workers')->onDelete('cascade');
        });

        Schema::table('sale_details', function (Blueprint $table) {
            $table->foreign('sale_id')->references('sale_id')->on('sales')->onDelete('cascade');
            $table->foreign('purchase_detail_id')->references('id')->on('purchase_details')->onDelete('cascade');
        });

        Schema::table('articles', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('presentation_id')->references('id')->on('presentations')->onDelete('cascade');
        });

        Schema::table('purchase_details', function (Blueprint $table) {
            $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('sales', function (Blueprint $table) {
            $table->dropForeign(['client_id', 'worker_id']);
        });

        Schema::table('sale_details', function (Blueprint $table) {
            $table->dropForeign(['sale_id', 'purchase_detail_id']);
        });

        Schema::table('articles', function (Blueprint $table) {
            $table->dropForeign(['category_id', 'presentation_id']);
        });

        Schema::table('purchase_details', function (Blueprint $table) {
            $table->dropForeign(['article_id']);
        });
    }
}


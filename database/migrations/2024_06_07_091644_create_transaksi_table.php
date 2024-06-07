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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->string("no_fak");
            $table->unsignedBigInteger('id_customer'); 
            $table->foreign('id_customer')->references('id')->on('customer');
            $table->unsignedBigInteger('id_barang'); 
            $table->foreign('id_barang')->references('id')->on('barang');
            $table->integer("jlh_trans");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};

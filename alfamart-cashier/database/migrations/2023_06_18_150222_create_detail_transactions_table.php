<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kode_transaksi');
            $table->string('kode_barang');
            $table->integer('jumlah_barang');
            $table->timestamps();

            // Menambahkan foreign key ke tabel transaksi
            $table->foreign('kode_transaksi')->references('id')->on('transactions')->onDelete('cascade');
            
            // Menambahkan foreign key ke tabel barang
            $table->foreign('kode_barang')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_transactions');
    }
};

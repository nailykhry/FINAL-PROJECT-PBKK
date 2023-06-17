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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('id_barang');
            $table->integer('jumlah_barang');
            $table->decimal('ppn', 8, 2);
            $table->string('pembayaran');
            $table->string('no_kartu')->nullable();
            $table->timestamps();
            
            $table->foreign('id_barang')->references('kode_barang')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};

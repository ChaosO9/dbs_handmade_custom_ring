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
        Schema::create('transaksi_pemesanan', function (Blueprint $table) {
            $table->string('id', 20)->primary();
            $table->decimal('total_harga', 12, 3)->nullable();
            $table->decimal('uang_titipan', 12, 3)->nullable();
            $table->decimal('estimasi_pelunasan', 12, 3)->nullable();
            $table->decimal('pembayaran_vendor', 12, 3)->nullable();
            $table->decimal('biaya_ukir_cincin', 12, 3)->nullable();
            $table->decimal('crom_cincin', 12, 3)->nullable();
            $table->decimal('biaya_pengiriman', 12, 3)->nullable();
            $table->decimal('fee_marketing', 12, 3)->nullable();
            $table->decimal('harga_box', 12, 3)->nullable();
            $table->decimal('keuntungan', 12, 3)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi_pemesanan');
    }
};

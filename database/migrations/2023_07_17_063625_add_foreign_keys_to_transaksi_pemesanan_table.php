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
        Schema::table('transaksi_pemesanan', function (Blueprint $table) {
            $table->foreign(['id'], 'transaksi_pemesanan_ibfk_1')->references(['id'])->on('data_pemesanan')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transaksi_pemesanan', function (Blueprint $table) {
            $table->dropForeign('transaksi_pemesanan_ibfk_1');
        });
    }
};

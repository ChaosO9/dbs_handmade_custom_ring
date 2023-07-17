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
        Schema::table('item_pemesanan', function (Blueprint $table) {
            $table->foreign(['id_pesanan'], 'item_pemesanan_ibfk_1')->references(['id'])->on('data_pemesanan')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('item_pemesanan', function (Blueprint $table) {
            $table->dropForeign('item_pemesanan_ibfk_1');
        });
    }
};

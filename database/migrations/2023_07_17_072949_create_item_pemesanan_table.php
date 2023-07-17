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
        Schema::create('item_pemesanan', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('id_pesanan', 20)->index('id_pesanan');
            $table->string('item')->nullable();
            $table->integer('harga_item')->nullable();
            $table->string('bahan')->nullable();
            $table->integer('ukuran')->nullable();
            $table->decimal('berat', 2, 1)->nullable();
            $table->string('ukir_nama', 100)->nullable();
            $table->string('note', 150)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_pemesanan');
    }
};

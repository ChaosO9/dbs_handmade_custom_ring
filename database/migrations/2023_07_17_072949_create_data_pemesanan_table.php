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
        Schema::create('data_pemesanan', function (Blueprint $table) {
            $table->string('id', 20)->primary();
            $table->string('nama_lengkap', 100)->nullable();
            $table->integer('no_telepon')->nullable();
            $table->string('alamat', 100)->nullable();
            $table->string('pekerjaan', 20)->nullable();
            $table->string('sumber_informasi', 20)->nullable();
            $table->decimal('total_harga', 12, 3)->nullable();
            $table->enum('cara_pembayaran', ['Cash', 'Cash Bertahap'])->nullable();
            $table->decimal('downpayment', 12, 3)->nullable();
            $table->string('bank', 20)->nullable();
            $table->string('vendor', 20)->nullable();
            $table->string('status_pembayaran', 10)->nullable();
            $table->date('tanggal_estimasi')->nullable();
            $table->date('tgl_po')->nullable();
            $table->date('deadline_vendor')->nullable();
            $table->date('deadline_customer')->nullable();
            $table->date('tgl_masuk_vendor')->nullable();
            $table->date('tgl_terima_customer')->nullable();
            $table->date('tgl_jadi_dbs')->nullable();
            $table->string('closing_by', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_pemesanan');
    }
};

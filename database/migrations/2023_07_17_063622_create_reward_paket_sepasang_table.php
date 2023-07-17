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
        Schema::create('reward_paket_sepasang', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('min_pemesanan')->nullable();
            $table->integer('max_pemesanan')->nullable();
            $table->decimal('nominal', 12, 3)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reward_paket_sepasang');
    }
};

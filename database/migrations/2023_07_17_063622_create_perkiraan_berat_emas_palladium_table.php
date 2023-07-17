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
        Schema::create('perkiraan_berat_emas_palladium', function (Blueprint $table) {
            $table->integer('id_item')->primary();
            $table->enum('kadar_emas', ['50', '75'])->nullable();
            $table->integer('min_ukuran_jari')->nullable();
            $table->integer('max_ukuran_jari')->nullable();
            $table->decimal('min_berat', 2, 1)->nullable();
            $table->decimal('max_berat', 2, 1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perkiraan_berat_emas_palladium');
    }
};

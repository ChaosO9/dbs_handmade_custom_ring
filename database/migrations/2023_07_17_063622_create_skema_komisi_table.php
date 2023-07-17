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
        Schema::create('skema_komisi', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('bahan_1', 10)->nullable();
            $table->string('bahan_2', 10)->nullable();
            $table->decimal('komisi', 12, 3)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skema_komisi');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanobatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanobat', function (Blueprint $table) {
            $table->integer('idOrder')->primary();
            $table->integer('idObat')->index('fk_pesanobat_idObat');
            $table->integer('idApotek')->index('fk_pesanobat_idApotek');
            $table->integer('idPasien')->index('fk_pesanobat_idPasien');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanobat');
    }
}

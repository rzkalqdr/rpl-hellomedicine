<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKonsulTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konsul', function (Blueprint $table) {
            $table->integer('idKonsul')->primary();
            $table->integer('idPasien')->index('fk_konsul_idPasien');
            $table->integer('idDokter')->index('fk_konsul_idDokter');
            $table->string('kategoriPenyakit', 25);
            $table->text('keluhan');
            $table->date('tanggalKonsul');
            $table->integer('biayaKonsul');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('konsul');
    }
}

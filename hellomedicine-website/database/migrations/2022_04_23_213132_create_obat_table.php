<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obat', function (Blueprint $table) {
            $table->integer('idObat')->primary();
            $table->integer('idApotek')->index('fk_obat_idApotek');
            $table->string('namaObat', 25);
            $table->string('jenisObat', 25);
            $table->integer('hargaObat');
            $table->text('deskripsiObat');
            $table->integer('stokObat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('obat');
    }
}

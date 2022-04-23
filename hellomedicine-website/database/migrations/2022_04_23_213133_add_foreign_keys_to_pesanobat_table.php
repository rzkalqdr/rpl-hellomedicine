<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPesanobatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pesanobat', function (Blueprint $table) {
            $table->foreign(['idObat'], 'fk_pesanobat_idObat')->references(['idObat'])->on('obat');
            $table->foreign(['idApotek'], 'fk_pesanobat_idApotek')->references(['idApotek'])->on('apotek');
            $table->foreign(['idPasien'], 'fk_pesanobat_idPasien')->references(['idPasien'])->on('pasien');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pesanobat', function (Blueprint $table) {
            $table->dropForeign('fk_pesanobat_idObat');
            $table->dropForeign('fk_pesanobat_idApotek');
            $table->dropForeign('fk_pesanobat_idPasien');
        });
    }
}

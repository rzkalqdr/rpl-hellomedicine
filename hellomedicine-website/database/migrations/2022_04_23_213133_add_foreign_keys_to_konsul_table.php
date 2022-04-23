<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToKonsulTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('konsul', function (Blueprint $table) {
            $table->foreign(['idPasien'], 'fk_konsul_idPasien')->references(['idPasien'])->on('pasien');
            $table->foreign(['idDokter'], 'fk_konsul_idDokter')->references(['idDokter'])->on('dokter');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('konsul', function (Blueprint $table) {
            $table->dropForeign('fk_konsul_idPasien');
            $table->dropForeign('fk_konsul_idDokter');
        });
    }
}

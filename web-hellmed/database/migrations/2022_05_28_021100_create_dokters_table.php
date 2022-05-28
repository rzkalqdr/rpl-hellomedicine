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
        Schema::create('dokters', function (Blueprint $table) {
            $table->integer('idDokter')->autoIncrement();
            $table->integer('idUser')->index('fk_dokter_idUser');
            $table->string('namaDokter', 25);
            $table->string('Spesialisasi', 25);
            $table->integer('NomorSTR');
            $table->foreign(['idUser'], 'fk_dokter_idUser')->references(['idUser'])->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dokters');
    }
};

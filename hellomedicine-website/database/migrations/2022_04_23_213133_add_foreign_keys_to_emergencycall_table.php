<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEmergencycallTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emergencycall', function (Blueprint $table) {
            $table->foreign(['idRS'], 'fk_emergencycall_idRS')->references(['idRS'])->on('rumahsakit');
            $table->foreign(['idPasien'], 'fk_emergencycall_idPasien')->references(['idPasien'])->on('pasien');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('emergencycall', function (Blueprint $table) {
            $table->dropForeign('fk_emergencycall_idRS');
            $table->dropForeign('fk_emergencycall_idPasien');
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmergencycallTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emergencycall', function (Blueprint $table) {
            $table->integer('idEmergency')->primary();
            $table->integer('idRS')->index('fk_emergencycall_idRS');
            $table->integer('idPasien')->index('fk_emergencycall_idPasien');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emergencycall');
    }
}

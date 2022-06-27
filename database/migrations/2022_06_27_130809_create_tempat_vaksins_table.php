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
        Schema::create('tempat_vaksins', function (Blueprint $table) {
            $table->integer('idVaksin')->autoIncrement();
            $table->string('namaTempatVaksin', 25);
            $table->text('alamatVaksin');
            $table->string('linkgmaps');
            $table->decimal('latitude', 10, 8)->nullable;
            $table->decimal('longitude', 11, 8)->nullable;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tempat_vaksins');
    }
};

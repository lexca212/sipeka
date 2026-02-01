<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_client', function (Blueprint $table) {
            $table->id();
            $table->integer('nik_client');
            $table->string('nama_client');
            $table->string('tgl_lahir_client');
            $table->string('alamat_client');
            $table->string('no_hp_client');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_client');
    }
}

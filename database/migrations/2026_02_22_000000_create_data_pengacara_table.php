<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPengacaraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pengacara', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pengacara');
            $table->string('alamat_pengacara');
            $table->string('no_hp_pengacara', 20);
            $table->string('spesialisasi_pengacara')->nullable();
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
        Schema::dropIfExists('data_pengacara');
    }
}

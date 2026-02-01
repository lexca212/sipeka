<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPerkaraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_perkara', function (Blueprint $table) {
            $table->id();
            $table->string('judul_perkara')->nullable();
            $table->string('no_perkara_pn')->nullable();
            $table->string('no_perkara_internal')->nullable();
            $table->string('jenis_perkara');//pidana,perdata,wanprestasi
            $table->string('status_perkara');//proses sidang,putusan,selesai
            $table->string('penjelasan_perkara');
            $table->string('file_perkara');
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
        Schema::dropIfExists('data_perkara');
    }
}

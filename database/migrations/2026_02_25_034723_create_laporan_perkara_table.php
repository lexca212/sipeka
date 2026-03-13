<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanPerkaraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_perkara', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_perkara')->constrained('data_perkara')->cascadeOnDelete();
            $table->date('tanggal_laporan');
            $table->string('uraian_laporan');
            $table->string('keterangan');
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
        Schema::dropIfExists('laporan_perkara');
    }
}

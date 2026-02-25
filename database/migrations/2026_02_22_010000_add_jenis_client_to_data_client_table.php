<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJenisClientToDataClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_client', function (Blueprint $table) {
            $table->enum('jenis_client', ['Pribadi', 'Instansi'])->default('Pribadi')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_client', function (Blueprint $table) {
            $table->dropColumn('jenis_client');
        });
    }
}

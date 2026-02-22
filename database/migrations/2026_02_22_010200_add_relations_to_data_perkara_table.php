<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationsToDataPerkaraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_perkara', function (Blueprint $table) {
            $table->foreignId('client_id')->nullable()->after('id')->constrained('data_client')->nullOnDelete();
            $table->foreignId('jenis_perkara_id')->nullable()->after('client_id')->constrained('jenis_perkara')->nullOnDelete();
            $table->string('nomor_perkara_external')->nullable()->after('no_perkara_internal');
            $table->text('uraian_perkara')->nullable()->after('penjelasan_perkara');
            $table->string('penanggung_jawab_perkara')->nullable()->after('file_perkara');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_perkara', function (Blueprint $table) {
            $table->dropConstrainedForeignId('jenis_perkara_id');
            $table->dropConstrainedForeignId('client_id');
            $table->dropColumn(['nomor_perkara_external', 'uraian_perkara', 'penanggung_jawab_perkara']);
        });
    }
}

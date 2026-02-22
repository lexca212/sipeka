<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPerkara extends Model
{
    use HasFactory;

    protected $table = 'data_perkara';

    protected $fillable = [
        'client_id',
        'jenis_perkara_id',
        'judul_perkara',
        'no_perkara_pn',
        'no_perkara_internal',
        'nomor_perkara_external',
        'jenis_perkara',
        'status_perkara',
        'penjelasan_perkara',
        'uraian_perkara',
        'file_perkara',
        'penanggung_jawab_perkara',
    ];

    public function client()
    {
        return $this->belongsTo(DataClient::class, 'client_id');
    }

    public function jenisPerkara()
    {
        return $this->belongsTo(JenisPerkara::class, 'jenis_perkara_id');
    }
}

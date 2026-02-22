<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataClient extends Model
{
    use HasFactory;

    protected $table = 'data_client';

    protected $fillable = [
        'jenis_client',
        'nik_client',
        'nama_client',
        'tgl_lahir_client',
        'alamat_client',
        'no_hp_client',
    ];

    public function perkara()
    {
        return $this->hasMany(DataPerkara::class, 'client_id');
    }
}

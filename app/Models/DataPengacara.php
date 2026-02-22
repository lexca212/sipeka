<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPengacara extends Model
{
    use HasFactory;

    protected $table = 'data_pengacara';

    protected $fillable = [
        'nama_pengacara',
        'alamat_pengacara',
        'no_hp_pengacara',
        'spesialisasi_pengacara',
    ];
}

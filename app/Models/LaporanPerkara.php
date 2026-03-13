<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanPerkara extends Model
{
    use HasFactory;

    protected $table = 'laporan_perkara';

    protected $guarded = ['id'];

    public function perkara()
    {
        return $this->belongsTo(DataPerkara::class,'id_perkara');
    }
}

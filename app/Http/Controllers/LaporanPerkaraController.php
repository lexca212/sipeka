<?php

namespace App\Http\Controllers;

use App\Models\LaporanPerkara;
use App\Models\DataPerkara;
use Illuminate\Http\Request;

class LaporanPerkaraController extends Controller
{
    //
    public function index()
    {
        $laporanperkara = LaporanPerkara::latest()->get();

        return view('perkara.laporan', compact('laporanperkara'));
    }

    public function create()
    {
        $perkara = DataPerkara::orderBy('no_perkara_internal')->get();
        return view('perkara.createlaporan', compact('perkara'));
    }

    public function store() 
    {
    
    }
}

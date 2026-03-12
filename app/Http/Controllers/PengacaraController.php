<?php

namespace App\Http\Controllers;

use App\Models\DataPengacara;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;


class PengacaraController extends Controller
{
    public function index()
    {
        $pengacara = DataPengacara::latest()->get();

        return view('pengacara.index', compact('pengacara'));
    }

    public function create()
    {
        return view('pengacara.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_pengacara'    => 'required|min:3',
            'alamat_pengacara'  =>  'required|min:3',
            'no_hp_pengacara'   => 'required|min:3',
            'spesialisasi_pengacara'    => 'required'
        ]);

        DataPengacara::created($validated);

        return redirect()->route('perkara.index')->with('success', 'Data perkara berhasil ditambahkan.');
    }
}

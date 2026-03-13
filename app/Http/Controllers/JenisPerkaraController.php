<?php

namespace App\Http\Controllers;

use App\Models\JenisPerkara;
use Illuminate\Http\Request;

class JenisPerkaraController extends Controller
{
    //

    public function index()
    {
        $jenisperkara = JenisPerkara::latest()->get();
        
        return view('jenisperkara.index', compact('jenisperkara'));
    
    }

    public function create()
    {
        return view('jenisperkara.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_jenis_perkara'    => 'required|max:50',
            'keterangan'            => 'nullable|max:250',
        ]);

        JenisPerkara::create($validated);

        return redirect()->route('jenisperkara')->with('success', 'Selamat! Data berhsail ditambahkan, Menakjubkan :)');
    }
}

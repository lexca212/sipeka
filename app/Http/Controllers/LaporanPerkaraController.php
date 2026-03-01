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

    public function store(Request $request) 
    {
        $validated = $request->validate([
            'id_perkara'    => 'required',
            'tanggal_laporan'   => 'required|date',
            'uraian_laporan'    => 'min:3',
            'keterangan'        =>  'min:3',
            'file'              => 'nullable|file|mimes:pdf,jpg,jpeg,png,doc,docx|max:4096'
        ]);
        if ($request->hasFile('file')) {
            $validated['file'] = $request->file('file')->store('laporan-perkara', 'public');
        } else {
            $validated['file'] = '-';
        }


        LaporanPerkara::create($validated);

        return redirect()->route('perkara.index')->with('success', 'Laporan berhasil ditambahkan.');
    }
}

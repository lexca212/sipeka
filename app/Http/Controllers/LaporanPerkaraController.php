<?php

namespace App\Http\Controllers;

use App\Models\LaporanPerkara;
use App\Models\DataPerkara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'file'              => 'nullable|file|mimes:pdf,jpg,jpeg,png,doc,docx|max:40960'
        ]);
        if ($request->hasFile('file')) {
            $validated['file'] = $request->file('file')->store('laporan-perkara', 'public');
        } else {
            $validated['file'] = '-';
        }


        LaporanPerkara::create($validated);

        return redirect()->route('laporanperkara')->with('success', 'Laporan berhasil ditambahkan.');
    }

    public function edit(string $id)
    {
        $laporanperkara = LaporanPerkara::findOrfail($id);
        return view('perkara.editlaporan', compact('laporanperkara'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'uraian_laporan'    => 'required',
            'keterangan'        => 'required',
            'file'              =>  'nullable|file|mimes:pdf,jpg,jpeg,png,doc,docx|max:4096'
        ]);

        $laporanperkara = LaporanPerkara::findOrFail($id);
        if ($request->hasFile('file')){
             Storage::disk('public')->delete($laporanperkara->file);
             $validated['file'] = $request->file('file')->store('laporan-perkara', 'public');
        };

        $laporanperkara->update($validated);
        
        return redirect()->route('laporanperkara')->with('succes', 'Data Berhasil Di update');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\DataClient;
use App\Models\DataPerkara;
use App\Models\JenisPerkara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PerkaraController extends Controller
{
    public function index()
    {
        $perkara = DataPerkara::with(['client', 'jenisPerkara'])->latest()->get();

        return view('perkara.index', compact('perkara'));
    }

    public function create()
    {
        $clients = DataClient::orderBy('nama_client')->get();
        $jenisPerkara = JenisPerkara::orderBy('nama_jenis_perkara')->get();

        return view('perkara.create', compact('clients', 'jenisPerkara'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'client_id' => 'required|exists:data_client,id',
            'jenis_perkara_id' => 'nullable|exists:jenis_perkara,id',
            'judul_perkara' => 'required|string|max:255',
            'no_perkara_internal' => 'required|string|max:255',
            'no_perkara_pn' => 'nullable|string|max:255',
            'nomor_perkara_external' => 'nullable|string|max:255',
            'status_perkara' => 'required|string|max:255',
            'uraian_perkara' => 'required|string',
            'penanggung_jawab_perkara' => 'required|string|max:255',
            'file_perkara' => 'nullable|file|mimes:pdf,jpg,jpeg,png,doc,docx|max:4096',
        ]);

        $validated['jenis_perkara'] = optional(JenisPerkara::find($request->jenis_perkara_id))->nama_jenis_perkara ?? 'Lainnya';
        $validated['penjelasan_perkara'] = $validated['uraian_perkara'];

        if ($request->hasFile('file_perkara')) {
            $validated['file_perkara'] = $request->file('file_perkara')->store('perkara-files', 'public');
        } else {
            $validated['file_perkara'] = '-';
        }

        DataPerkara::create($validated);

        return redirect()->route('perkara.index')->with('success', 'Data perkara berhasil ditambahkan.');
    }

    public function edit(DataPerkara $perkara)
    {
        $clients = DataClient::orderBy('nama_client')->get();
        $jenisPerkara = JenisPerkara::orderBy('nama_jenis_perkara')->get();

        return view('perkara.edit', compact('perkara', 'clients', 'jenisPerkara'));
    }

    public function update(Request $request, DataPerkara $perkara)
    {
        $validated = $request->validate([
            'client_id' => 'required|exists:data_client,id',
            'jenis_perkara_id' => 'nullable|exists:jenis_perkara,id',
            'judul_perkara' => 'required|string|max:255',
            'no_perkara_internal' => 'required|string|max:255',
            'no_perkara_pn' => 'nullable|string|max:255',
            'nomor_perkara_external' => 'nullable|string|max:255',
            'status_perkara' => 'required|string|max:255',
            'uraian_perkara' => 'required|string',
            'penanggung_jawab_perkara' => 'required|string|max:255',
            'file_perkara' => 'nullable|file|mimes:pdf,jpg,jpeg,png,doc,docx|max:4096',
        ]);

        $validated['jenis_perkara'] = optional(JenisPerkara::find($request->jenis_perkara_id))->nama_jenis_perkara ?? 'Lainnya';
        $validated['penjelasan_perkara'] = $validated['uraian_perkara'];

        if ($request->hasFile('file_perkara')) {
            if ($perkara->file_perkara && $perkara->file_perkara !== '-') {
                Storage::disk('public')->delete($perkara->file_perkara);
            }
            $validated['file_perkara'] = $request->file('file_perkara')->store('perkara-files', 'public');
        }

        $perkara->update($validated);

        return redirect()->route('perkara.index')->with('success', 'Data perkara berhasil diubah.');
    }

    public function destroy(DataPerkara $perkara)
    {
        if ($perkara->file_perkara && $perkara->file_perkara !== '-') {
            Storage::disk('public')->delete($perkara->file_perkara);
        }

        $perkara->delete();

        return redirect()->route('perkara.index')->with('success', 'Data perkara berhasil dihapus.');
    }
}

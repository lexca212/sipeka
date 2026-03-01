<?php

namespace App\Http\Controllers;

use App\Models\DataClient;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = DataClient::latest()->get();

        return view('client.index', compact('clients'));
    }

    public function create()
    {
        return view('client.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'jenis_client' => 'required|in:Pribadi,Instansi',
            'nik_client' => 'required|string|max:25',
            'nama_client' => 'required|string|max:255',
            'tgl_lahir_client' => 'nullable|date',
            'alamat_client' => 'required|string|max:255',
            'no_hp_client' => 'required|string|max:20',
        ]);

        DataClient::create($validated);

        return redirect()->route('client.index')->with('success', 'Data client berhasil ditambahkan.');
    }

    public function edit(DataClient $client)
    {
        return view('client.edit', compact('client'));
    }

    public function update(Request $request, DataClient $client)
    {
        $validated = $request->validate([
            'jenis_client' => 'required|in:Pribadi,Instansi',
            'nik_client' => 'required|string|max:25',
            'nama_client' => 'required|string|max:255',
            'tgl_lahir_client' => 'nullable|date',
            'alamat_client' => 'required|string|max:255',
            'no_hp_client' => 'required|string|max:20',
        ]);

        $client->update($validated);

        return redirect()->route('client.index')->with('success', 'Data client berhasil diubah.');
    }

    public function destroy(DataClient $client)
    {
        $client->delete();

        return redirect()->route('client.index')->with('danger', 'Data client berhasil dihapus.');
    }
}

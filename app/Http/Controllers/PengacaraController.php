<?php

namespace App\Http\Controllers;

use App\Models\DataPengacara;

class PengacaraController extends Controller
{
    public function index()
    {
        $pengacara = DataPengacara::latest()->get();

        return view('pengacara.index', compact('pengacara'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataClient;
use App\Models\DataPerkara;

class DashboardController extends Controller
{
    //

    public function index()
    {
        $totalClient = DataClient::count();
        $totalPidana = DataPerkara::where('jenis_perkara_id', '1')->count();

        return view('dashboard.index', compact('totalClient', 'totalPidana'));
    }
}

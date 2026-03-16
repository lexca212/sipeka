<?php

namespace App\Http\Controllers;

use App\Models\DataPengacara;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Testing\Fluent\Concerns\Has;
use Illuminate\Support\Facades\Hash;

class DataUserController extends Controller
{
    //

    public function index()
    {
        $user = User::latest()->get();
        return view('user.index', compact('user'));
    }

    public function create()
    {
        $pengacara = DataPengacara::orderBy('nama_pengacara')->get();
        return view('user.create', compact('pengacara'));
    }

    public function store(Request $request)
    {
         $request->validate([
            'name'      => 'required|min:3',
            'email'     => 'required|email|unique:users,email',
            'password'  => 'required|min:3',
            'role'      => 'required'
         ],
        ['email.unique' => 'Email ini sudah terdaftar kawan',
        ]);

        User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
            'role'      => $request->role
        ]);

        return redirect()->route('user.index')->with('success', 'Data user berhasil ditambahkan.');
    }

    public function edit(String $id)
    {
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
        'password_lama' => 'required',
        'password_baru' => 'required|min:6',
    ]);

    $user = $request->user(); // Mengambil user yang sedang login

    // 2. Cek apakah password lama cocok
    if (!Hash::check($request->password_lama, $user->password)) {
        return back()->withErrors(['password_lama' => 'Password lama tidak sesuai.']);
    }

    // 3. Update password baru menggunakan Eloquent
    $user->update([
        'password' => Hash::make($request->password_baru)
    ]);

    Auth::logout();

    return redirect()->route('login')->with('success', 'Password berhasil diperbarui!');
    }
}

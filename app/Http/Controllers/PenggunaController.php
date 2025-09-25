<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pengguna;

class PenggunaController extends Controller
{
    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required'],
        ]);


        // Proses autentikasi manual
        $user = Pengguna::where('Username', $credentials['username'])->first();
        if ($user && $user->Password === $credentials['password']) {
            // Simpan data user ke session
            $request->session()->put('UserId', $user->id);
            $request->session()->put('username', $user->Username);
            $request->session()->put('role', $user->Role);
            return redirect()->intended('/');
        }

        // Jika gagal
        return back()->withErrors([
            'username' => 'Username atau password salah',
        ])->onlyInput('username');
    }
}
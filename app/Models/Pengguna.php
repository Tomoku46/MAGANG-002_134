<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'pengguna';
    protected $primaryKey = 'id'; // sesuaikan jika primary key berbeda
    public $timestamps = false; // sesuaikan jika tabel tidak ada timestamps

    protected $fillable = [
        'Username',
        'Password',
        'Role'
    ];
}

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Menampilkan halaman form login.
     */
    public function showLoginForm()
    {
        return view('login');
    }

    /**
     * Menangani proses login.
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required'],
        ]);

        $user = \App\Models\User::where('Username', $credentials['username'])->first();

        // Bandingkan password secara langsung (plain text)
        if ($user && $user->Password === $credentials['password']) {
            // Login manual
            Auth::login($user);
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with('error', 'Username atau password salah');
    }

    /**
     * Menangani proses logout.
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login');
    }
}
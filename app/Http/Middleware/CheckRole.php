<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    public function handle(Request $request, Closure $next)
    {
        $role = session('role');

        // Jika belum login
        if (!$role) {
            return redirect('/')->with('error', 'Silakan login terlebih dahulu.');
        }

        // Jika viewer, hanya boleh akses dashboard dan masterdata
        if ($role === 'viewer') {
            $allowed = [
                'dashboard',
                'masterdata',
            ];

            // Cek nama route
            $routeName = $request->route()->getName();
            $resourceName = $request->segment(1);

            if (!in_array($resourceName, $allowed)) {
                return redirect('/dashboard')->with('error', 'Akses ditolak.');
            }
        }

        // Jika admin, lanjutkan
        return $next($request);
    }
}
<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Pastikan user sudah login dan role-nya Admin
        if (Auth::check() && Auth::user()->role === 'Admin') {
            return $next($request);
        }

        // Kalau bukan admin, kembalikan ke dashboard biasa
        return redirect('admin.dashboard')->with('error', 'Akses ditolak: Anda bukan admin!');
    }
}

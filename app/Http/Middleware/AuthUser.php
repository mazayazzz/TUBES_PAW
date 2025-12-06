<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthUser
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            // Jika pengguna belum login, redirect ke halaman login
            return redirect()->route('login')->with('error', 'Silahkan login terlebih dahulu!');
        }

        return $next($request);
    }
}

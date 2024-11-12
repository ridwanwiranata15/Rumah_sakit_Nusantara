<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HospitalMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();

        if ($user && $user->role == "admin") {
            return redirect()->route('admin.dokter');
        } elseif ($user && $user->role == "dokter") {
            return redirect()->route('dokter.index');
        } else {
            return redirect()->route('apoteker.obat');
        }
        return $next($request);
    }
}

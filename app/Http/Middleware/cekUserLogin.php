<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\support\Facades\Auth;

class cekUserLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $rules): Response
    {
        $user = Auth::user();

        if (!Auth::check()) {
            return redirect('login');
        }
        if ($user->level == $rules)
            return $next($request);

        return redirect('login')->with('error', 'you have no privildge');
    }
}

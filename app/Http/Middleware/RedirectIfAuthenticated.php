<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            $roles = [
                'admin' => 'admin.dashboard',
                'doctors' => 'admin.dashboard',
                'patient' => 'home',
            ];
            if (array_key_exists(auth()->user()->role, $roles)) {
                return redirect()->route($roles[auth()->user()->role]);
            }
        }
        return $next($request);
    }
}

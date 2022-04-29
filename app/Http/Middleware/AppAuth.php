<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AppAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (!Auth::check()) {

            if ($request->wantsJson()) {

                return response()->json(['Session_error' => 'Session Expired'], 401);
            }

            return redirect('login');
        }

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
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

        $user = $request->user();

        if($user->is_admin === 0) {
            return redirect()->back()->with('error', 'Login met een shiftmanager account om dit aan te kunnen passen.');
        }

        return $next($request);
    }
}

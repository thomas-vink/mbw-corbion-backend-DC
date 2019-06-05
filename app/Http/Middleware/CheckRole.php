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
        //dd($request->user());
        $user = $request->user();

        //dd($user->is_admin);
        if($user->is_admin === 0) {
            return redirect('/home')->with('error', 'Login met een shiftmanager account om dit aan te kunnen passen.');
        }

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;
use Auth;
use App\User;
use Closure;

class CheckApproved
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
        if (!Auth::user()->approved_at) {
            return redirect()->route('approval');
        }

        return $next($request);
    }
}

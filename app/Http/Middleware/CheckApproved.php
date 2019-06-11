<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use App\User;

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
        if (! Auth::user()->approved_at) {
            return redirect()->route('approval');
        }

        return $next($request);
    }
}

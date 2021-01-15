<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class Rule
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$rule)
    {
        if (!Auth()->user()) {
            abort(404);
        }
        if (Auth()->user()->rule->name != $rule ) {
            abort(404);
        }
        return $next($request);
    }
}

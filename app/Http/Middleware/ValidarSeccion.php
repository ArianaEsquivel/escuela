<?php

namespace App\Http\Middleware;

use Closure;

class ValidarSeccion
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
        if ($request->seccion == 'A') {
            return abort(401);
        }
        return $next($request);
    }
}

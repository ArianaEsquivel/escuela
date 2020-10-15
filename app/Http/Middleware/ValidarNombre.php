<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\DB; //para importar la base de datos
use Closure;
use Log;
class ValidarNombre
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $nombre)
    {
        Log::info($nombre);
        //$user = DB::table('alumnos')->where('nombre', $nombre)->first();
        $alumno = \App\alumnos::where('nombre', $nombre)->first();
        Log::info($alumno);
        if (!$alumno) {
            return abort(400);
        }

        return $next($request);
    }
}

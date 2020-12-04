<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EsAlumno
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (\Auth::user()->tipo != 'Alumno') {
            return redirect()->back()
                ->with(['mensaje' => 'No tiene acceso a esta sección', 'alert-type' => 'alert-danger']);
        }

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;

class Middleware1
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
        if ($request->input('token') !== '123') {
             return redirect('danger');
        }
        return $next($request); // artinya jalankan selanjutnya (Closure berikutnya yaitu $nex, dengan parameter $request)
    }
}
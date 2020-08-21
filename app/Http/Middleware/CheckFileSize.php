<?php

namespace App\Http\Middleware;

use Closure;

class CheckFileSize
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
        $request->validate([
            'file' => 'required|max:5000'
            ]);

        //dd($request);
        //return $next($request);
    }


}


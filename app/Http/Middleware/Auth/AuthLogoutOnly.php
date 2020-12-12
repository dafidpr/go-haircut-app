<?php

namespace App\Http\Middleware\Auth;

use Closure;

class AuthLogoutOnly
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
        if ($request->session()->has('user') && $request->session()->get('user')['id']){
            return redirect(config('redirects.redirectIfAuth'));
        }
        return $next($request);
    }
}

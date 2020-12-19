<?php

namespace App\Http\Middleware\Auth;

use Closure;

class AuthLogoutMember
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
        if ($request->session()->has('customer') && $request->session()->get('customer')['id'] ){
            return redirect(config('redirects.redirectIfUnAuthArea'));
        }
        return $next($request);
    }
}

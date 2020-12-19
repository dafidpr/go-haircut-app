<?php

namespace App\Http\Middleware\Auth;

use Closure;

class AuthLoginMember
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
        if ($request->session()->has('member') && $request->session()->get('member')['id']) {
            return $next($request);
        }

        return redirect(config('redirects.redirectIfUnAuthArea'));
    }
}

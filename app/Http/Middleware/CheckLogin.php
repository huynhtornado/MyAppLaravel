<?php

namespace DemoLaravel\Http\Middleware;

use Closure;
use Auth;

class CheckLogin
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
        if(Auth::check()) {
            $user = Auth::user();
            // nếu level =1 (admin), status = 1 (actived) thì cho qua.
            if ($user->email)
            {
                return $next($request);
            }
            else
            {
                Auth::logout();
                return redirect()->route('index');
            }
        }
        return $next($request);
    }
}

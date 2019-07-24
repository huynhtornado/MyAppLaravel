<?php

namespace DemoLaravel\Http\Middleware;

use Closure;
use Auth;

class CheckRegister
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
            if ($user->level == 1 && $user->status == 1 )
            {
                return redirect()->route('home');
            }
            else
            {
                return $next($request);
            }
        }
        return $next($request);
    }
}

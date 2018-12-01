<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class Broadcast
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
        $web = Auth::guard('web')->user();
        dd($web);
        if ($web) {
            
            return response()->json(\Illuminate\Support\Facades\Broadcast::auth($request));
        }

        return response()->json('Unauthorized.', 500);
    }
}

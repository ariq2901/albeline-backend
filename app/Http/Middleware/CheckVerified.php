<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckVerified
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
        if($request->email) {
            $user = \App\Models\User::where("email", $request->email)->first();
            if($user->email_verified_at === null) {
                return response()->json(["error" => "You must verify your email address to login"], 401);
            }
            return $next($request);
        } else {
            return $next($request);
        }
    }
}

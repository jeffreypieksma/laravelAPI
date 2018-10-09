<?php

namespace App\Http\Middleware;

use Closure;

use App\User;

class Api
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next, $guard = null)
    {

        // $api_token = $request->header('api_token');

        // if(!$api_token){
        //     return response('No authorization token provided', 401);
        // }

        // $token = User::where('api_token', $api_token)->get();


        // if(!$token) return response('Invalid authorization token', 403);

        return $next($request);

    }

}
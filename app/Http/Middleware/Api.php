<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Contracts\Auth\Guard;

use Auth;
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
        // if(empty($request->api_token)){
        //     //return response()->json(['code' => '401 UNAUTHORIZED', 'content' => 'No api_token provided']);
        //     return response('Unauthorized.', 401);
        // }

        return $next($request);
    }

}

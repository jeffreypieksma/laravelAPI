<?php

namespace App\Http\Middleware;

use Closure;

class Api
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
        /*
        
        200 = OK 
        401 = Unauthorized
         */

        // if(empty($request->api_token)){
        //     return response()->json(['code' => '401','error' => 'No api_token provided']);
        // }else{

        // }


        return $next($request);
    }
}

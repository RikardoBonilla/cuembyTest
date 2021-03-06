<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ApiKeyValidate
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
        if (!$request->has("api_key")) {
            return response()->json([
              'status' => 401,
              'message' => 'Acceso no autorizado',
            ], 401);
          }
      
          if ($request->has("api_key")) {
            $api_key = "Y3VlbWJ5VGVzdA==";
            if ($request->input("api_key") != $api_key) {
              return response()->json([
                'status' => 401,
                'message' => 'Acceso no autorizado',
              ], 401);
            }
          }
      
          return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use App\Models\Fakultas;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FakultasAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->bearerToken();
        $fakultas = Fakultas::where('api_token', $token)->first();
        if(!$fakultas){
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }
        $request->merge(['authenticated_fakultas' => $fakultas]);
        return $next($request);
    }
}

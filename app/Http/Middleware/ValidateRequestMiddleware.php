<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ValidateRequestMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (! $request->hasHeader('X-Secret-Key')) {
            return response()->json([
                'success' => false,
                'message' => 'Missing X-Secret-Key header',
            ], 401);
        }
        $providedToken = $request->header('X-Secret-Key');
        $correctToken = env('SECRET_KEY', 'fallback_token');
        if ($providedToken !== $correctToken) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid secret token.',
            ], 401);
        }
        if ($request->isMethod('post') && ($request->has('name') && preg_match('/\d/', (string) $request->input('name')))) {
            return response()->json([
                'success' => false,
                'message' => 'Numbers are not allowed in the name field.',
            ], 422);
        }

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RequestResponseLogger
{
    public function handle(Request $request, Closure $next)
    {
        // Request loglama
        Log::info('Incoming Request', [
            'method' => $request->method(),
            'url' => $request->fullUrl(),
            'body' => $request->all(),
            'headers' => $request->headers->all(),
        ]);

        // Request işleniyor
        $response = $next($request);

        // Response loglama
        Log::info('Outgoing Response', [
            'status' => $response->status(),
            'body' => $response->getContent(),
        ]);

        return $response;
    }
}

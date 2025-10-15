<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\VisitorLog;
use Symfony\Component\HttpFoundation\Response;

class LogVisitor
{
    public function handle(Request $request, Closure $next): Response
    {
        // Abaikan asset, admin, API, dll
        if ($request->is(
            'css/*',
            'js/*',
            'images/*',
            'favicon.ico',
            '_debugbar/*',
            'api/*',
            'admin/*',
            'login',
            'logout'
        )) {
            return $next($request);
        }

        VisitorLog::create([
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'page_url' => $request->fullUrl(),
        ]);

        return $next($request);
    }
}
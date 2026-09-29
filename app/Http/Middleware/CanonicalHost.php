<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CanonicalHost
{
    private const HOST = 'balance-s.ru';

    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->isMethod('GET') && !$request->isMethod('HEAD')) {
            return $next($request);
        }

        $host = strtolower($request->getHost());
        $uri = $request->getRequestUri();

        if ($host === 'www.' . self::HOST) {
            return redirect()->to('https://' . self::HOST . $uri, 301);
        }

        if ($host === self::HOST && preg_match('#^/index\.php(?:\?|$)#', $uri)) {
            return redirect()->to('https://' . self::HOST . '/', 301);
        }

        return $next($request);
    }
}

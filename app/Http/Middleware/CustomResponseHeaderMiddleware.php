<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CustomResponseHeaderMiddleware
{
    private const HEADER_NAME = 'x-hello-world';
    private const HEADER_VALUE = 'Vitaly Kustov';

    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        if ($response instanceof Response) {
            $response->headers->add([self::HEADER_NAME => self::HEADER_VALUE]);
        }

        return $response;
    }
}

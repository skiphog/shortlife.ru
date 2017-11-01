<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\HttpFoundation\Cookie;

class SetMemberCookie
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     *
     * @return mixed
     * @throws \InvalidArgumentException
     */
    public function handle($request, Closure $next)
    {
        /** @var \Illuminate\Http\Response $response */
        $response = $next($request);

        if (!$request->hasCookie('member')) {
            $member = str_random(60);

            // Вставка куки в табличку

            $response->headers->setCookie(
                new Cookie('member', $member, 0x7FFFFFFF)
            );
        }

        return $response;
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use App\Member;
use Symfony\Component\HttpFoundation\Cookie;

class SetMemberCookie
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->hasCookie('token') && $this->verifyToken($request->cookie('token'))) {
            return $next($request);
        }

        return $this->setToken($next($request));
    }

    /**
     * Set token to the response cookies.
     *
     * @param  \Symfony\Component\HttpFoundation\Response $response
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    protected function setToken($response)
    {
        $member = Member::create([
            'token' => str_random(60),
        ]);

        $config = config('session');

        $response->headers->setCookie(
            new Cookie(
                'token',
                $member->token,
                0x7FFFFFFF,
                $config['path'],
                $config['domain'],
                $config['secure']
            )
        );

        return $response;
    }

    /**
     * Check exists member
     *
     * @param mixed $token
     *
     * @return bool
     */
    protected function verifyToken($token): bool
    {
        return (bool)Member::where('token', $token)->count();
    }
}

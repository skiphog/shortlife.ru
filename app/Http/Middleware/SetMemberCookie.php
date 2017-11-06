<?php

namespace App\Http\Middleware;

use Closure;
use App\Member;

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
        if (!$this->verifyToken($request)) {
            return $this->redirectWithToken();
        }

        return $next($request);
    }

    /**
     * Set cookie and redirect
     *
     * @return mixed
     */
    protected function redirectWithToken()
    {
        $member = Member::create([
            'token' => str_random(60),
        ]);

        return redirect()
            ->route('/')
            ->cookie('token', $member->token, 20160);
    }


    /**
     * Check correct token
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return bool
     */
    protected function verifyToken($request): bool
    {
        return $request->hasCookie('token') && Member::where('token', $request->cookie('token'))->count();
    }
}

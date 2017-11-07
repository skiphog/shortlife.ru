<?php

namespace App\Http\Middleware;

use Closure;
use App\Member;

class RedirectNoFinish
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
        $member = Member::where('token', $request->cookie('token'))->firstOrFail();

        if ($member->isFinished() && !$member->isLogin()) {
            return redirect()->route('login');
        }

        if (!$member->isFinished()) {
            return redirect()->route('/');
        }

        return $next($request);
    }
}

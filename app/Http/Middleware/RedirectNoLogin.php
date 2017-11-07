<?php

namespace App\Http\Middleware;

use Closure;
use App\Member;

class RedirectNoLogin
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
        $member = app()->make(Member::class);

        if ($member->isLogin()) {
            return redirect()->route('finish');
        }

        if (!$member->isFinished()) {
            return redirect()->route('/');
        }

        return $next($request);
    }
}

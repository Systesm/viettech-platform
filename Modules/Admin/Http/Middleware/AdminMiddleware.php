<?php
namespace Modules\Admin\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $levels = [0,1])
    {
        $user = Auth::user();

        if (!Auth::check() || !$user->isLevel($levels)) { //Dang sua
            return redirect(config('admin.fallbackLogin'));
        }
        return $next($request);
    }
}

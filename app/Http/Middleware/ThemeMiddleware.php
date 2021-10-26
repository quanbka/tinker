<?php

namespace App\Http\Middleware;

use Closure;
use Theme;

class ThemeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        Theme::set('tinker');
        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use View;
use App\Models\Parameter;

class LayoutMiddleware
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
        $this->initMenu();
        return $next($request);
    }

    public function initMenu() {
        $menu = Parameter::select('value2')->where('key2', 'frontend.menu')->first();
        $menu = json_decode($menu->value2);
        View::share('menu', $menu);
    }
}

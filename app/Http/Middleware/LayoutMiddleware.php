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
        $this->initHeader();
        $this->initMenu();
        $this->initFooter();
        return $next($request);
    }

    public function initHeader() {
        $menu = ['1', '2', '3'];
        View::share('menu', $menu);
    }

    public function initMenu() {
        $menu = ['1', '2', '3'];
        View::share('menu', $menu);
    }

    public function initFooter() {
        $menu = ['1', '2', '3'];
        View::share('menu', $menu);
    }
}

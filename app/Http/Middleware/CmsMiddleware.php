<?php

namespace App\Http\Middleware;

use App\Http\Controllers\MenuController;
use App\Models\SiteSetting;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CmsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $siteSettings = SiteSetting::pluck('value', 'key');
        view()->share('siteSettings', $siteSettings);
        $mainMenu = app(MenuController::class)->getMenu('main');
        $footerMenu = app(MenuController::class)->getMenu('footer');

        view()->share('mainMenu', $mainMenu);
        view()->share('footerMenu', $footerMenu);

        return $next($request);
    }
}

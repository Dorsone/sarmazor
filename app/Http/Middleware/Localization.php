<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpFoundation\Response;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = strtolower($request->route()->parameter('locale'));
        $request->route()->forgetParameter('locale');

        if (!in_array($locale, array_keys(config('app.available_locales')))) {
            return redirect(app()->getLocale());
        }

        app()->setLocale($locale);
        app()->setFallbackLocale($locale);

        URL::defaults(['locale' => $locale]);

        return $next($request);
    }
}

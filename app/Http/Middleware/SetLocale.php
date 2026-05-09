<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    public function handle(Request $request, Closure $next): Response
    {
        $supported = array_keys(config('site.locales', ['en' => 'English']));
        $fallback = config('site.fallback_locale', 'en');

        $locale = $request->session()->get('locale');

        if (! in_array($locale, $supported, true)) {
            $locale = $fallback;
        }

        App::setLocale($locale);

        return $next($request);
    }
}

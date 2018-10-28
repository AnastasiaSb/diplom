<?php

namespace App\Http\Middleware;

use Closure;

class LocaleMiddleware
{
    public static $mainLang = 'ru';
    public static $langs = ['en', 'uk'];
    public static function getLocale(){   //1изм
        $uri = \Request::path();
        $uri = explode('/', $uri);

        if( !empty($uri[0]) && in_array($uri[0], self::$langs))
        {
            if($uri[0] != self::$mainLang) return $uri[0];
        }
        return null;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) 
    {
        // 2 изм
        $locale = self::getLocale();
        if($locale) \App::setLocale($locale);
        else \App::setlocale(self::$mainLang);
        return $next($request);
    }
}
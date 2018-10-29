<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
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
        if( !$request->user()->hasRole('admin')) //1изм  если роль не админ то редирект на главную страницу сайта
        {
            return redirect('/');
        }
        return $next($request);
    }

}

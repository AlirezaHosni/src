<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Session;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function handle($request, Closure $next, ...$guards)
    {
        $user = $request->user();
        if (empty($user)){
            return app(CheckUserAuthenticated::class)->handle($request, function ($request) use ($next) {

                return $next($request);
            });
        }else{
            if ($user->is_admin == 1){
                return app(CheckAdminAuthenticated::class)->handle($request, function ($request) use ($next) {

                    return $next($request);
                });
            }elseif ($user->is_seller == 1){
                return app(CheckSellerAuthenticated::class)->handle($request, function ($request) use ($next) {

                    return $next($request);
                });
            }else{
                return app(CheckUserAuthenticated::class)->handle($request, function ($request) use ($next) {

                    return $next($request);
                });
            }
        }
    }
}

<?php

namespace App\Http\Middleware;

use GuzzleHttp\Psr7\Request;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;
class Authenticate
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    // protected function redirectTo($request)
    // {
    //     if (! $request->expectsJson()) {
    //         return route('lognin');
    //     }
    // }
    private $auth;
    public function __construct() {

    }
    public function handle(  $request,  $next, $guard='auth')
    {
        if (Auth::guard($guard)->check()){
        return $next($request);
        }
        return redirect()->route('showsignin')->with('error', 'Vui lòng đăng nhập');
    }
}

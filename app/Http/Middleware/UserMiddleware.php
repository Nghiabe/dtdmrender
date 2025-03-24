<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
{
    private $auths;
    public function __construct() {

    }
    public function handle( $request, Closure $next, $guard='auths')
    {
        if (Auth::grard($guard)->check()){
        return $next($request);
        }
        return redirect()->route('lognin')->with('error', 'Vui lòng đăng nhập');
    }
}

<?php
declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Factory;

class AdminCheckMiddleware
{
    protected Factory $auth;

    public function __construct(Factory $auth)
    {
        $this->auth = $auth;
    }

    public function handle(Request $request, Closure $next): mixed
    {
//        return $next($request);
        if ($this->auth->guard()->check()) {
            return $next($request);
        }

        return redirect('/');
    }
}

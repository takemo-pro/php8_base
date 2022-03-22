<?php

namespace App\Http\Middleware;

use App\Enums\ApiMode;
use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Log;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson() && !$request->is('api/*')) {
            return route('login');
        }
    }

    public function handle($request, Closure $next, ...$guards)
    {
        //ApiMock環境は認証強制させない
        if(in_array('api',$guards,true) &&
            config("app.api_mode") === ApiMode::Mock->value
        ){
            return $next($request);
        }
        return parent::handle($request, $next, ...$guards); // TODO: Change the autogenerated stub
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use PhpParser\Node\Scalar\MagicConst\Dir;

class IpCheck
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
            return $next($request);


    }
    public function terminate($req,$res)
    {
        file_put_contents(__DIR__.'abc.txt','hello world from terminate');
    }
}

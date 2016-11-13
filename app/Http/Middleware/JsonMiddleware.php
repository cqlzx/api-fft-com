<?php
/**
 * Created by PhpStorm.
 * User: long
 * Date: 11/13/16
 * Time: 1:06 PM
 */

namespace App\Http\Middleware;


use App\Exceptions\JSONHandler;
use Illuminate\Contracts\Debug\ExceptionHandler;
use Laravel\Lumen\Routing\Closure;

class JSONMiddleware
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \Closure|Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $json = ['error' => 0];

        app()->singleton(ExceptionHandler::class, JSONHandler::class);

        /** @var \Illuminate\Http\Response $response */
        $response = $next($request);

        if ($response->original !== null) {
            $json['data'] = $response->original;
        }

        return response()->json($json);
    }
}
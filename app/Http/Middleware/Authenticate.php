<?php

namespace App\Http\Middleware;

use App\Enums\ResponseCode;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

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
        if (!$request->expectsJson()) {
            return abort(response([
                'success' => false,
                'message' => __('auth.failed'),
            ], ResponseCode::UNAUTHORIZE));
        }
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check() && auth()->user()->isAdmin()) {
            return $next($request);
        }

        return redirect()->route('login'); // Redirect to login if not authenticated or not an admin.
    }
    
}

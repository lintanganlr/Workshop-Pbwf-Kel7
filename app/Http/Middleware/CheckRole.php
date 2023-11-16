<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    public function handle($request, Closure $next, $role)
    {
        // Check if the user is logged in
        if (auth()->check()) {
            // Check if the user has the specified role
            if (auth()->user()->role === $role) {
                // If user has the specified role, proceed to the next middleware or route
                return $next($request);
            }
        }

        // For other users or guests, redirect to home
        return redirect('/');
    }
}

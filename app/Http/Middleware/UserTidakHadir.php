<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserTidakHadir
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->guest()) {
            return redirect("login_user");
        } else if (auth()->user()->role == 1) {
            return redirect("/dashboard");
        } else if (auth()->user()->hadir == "hadir") {
            return redirect("/sudahMemilih");
        }
        return $next($request);
    }
}

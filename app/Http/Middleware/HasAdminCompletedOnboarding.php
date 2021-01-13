<?php

namespace App\Http\Middleware;

use App\Models\AdminsOnboarded;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HasAdminCompletedOnboarding
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (! Auth::check()) {
            return redirect(route('login'));
        }

        if (! Auth::user()->hasRole('admin')) {
            abort(403);
        }

        if (! AdminsOnboarded::find(Auth::id())) {
            return redirect(route('admin.complete-onboarding'));
        }
        return $next($request);
    }
}

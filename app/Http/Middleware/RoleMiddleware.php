<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $roles, $permission = null)
    {
        if (auth()->user() === null) {
            abort(404);
        }
        $rolesExploded = array_map(function ($str) {
            return trim($str);
        }, explode('|', $roles));

        // Если подходит хоть одна роль из предложенных в $roles, то middleware проходит.
        $pass = false;
        foreach ($rolesExploded as $role) {
            $pass |= auth()->user()->hasRole($role);
        }
        if (!$pass) {
            abort(404);
        }
        if($permission !== null && !auth()->user()->can($permission)) {
            abort(404);
        }
        return $next($request);
    }
}

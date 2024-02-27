<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,$permission): Response
    {
        if(Auth::check()){
            $permissions = Cache::remember('permissions-'.Auth::id(), $seconds = 86400, function ()  {
                return Auth::user()->role->permissions()->pluck('name');
            });
             
            $role = Cache::remember('role-'.Auth::id(), $seconds = 86400, function ()  {
                return Auth::user()->role()->pluck('name');
            });
        }
        
        // forgetRolePermissionsCache(Auth::id());
        abort_if(! hasPermission($permission),403,"Access Denied");

        return $next($request);
    }
}

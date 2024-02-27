<?php

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

/**
 * @param integer id
 * @return Collection 
 */
if(!function_exists('getCachedPermissions')){
    function getCachedPermissions(int $id) : ?Collection{
        return Cache::tags('RandP')->get('permissions-'.$id) ?? null;
    }
}

/**
 *  * @param integer id
 * @return Collection 
 */
if(!function_exists('getCachedRole')){
    function getCachedRole(int $id) : ?Collection{
        return Cache::tags('RandP')->get('role-'.$id) ?? null;
    }
}

/**
 * @return boolean 
 */
if(!function_exists('forgetUserRolePermissionsCache')){
    function forgetUserRolePermissionsCache(int $id) : bool{
               Cache::tags('RandP')->forget('role-'.$id);
        return Cache::tags('RandP')->forget('permissions-'.$id);
    }
}

/**
 * @return boolean 
 */
if(!function_exists('forgetAllRolePermissionsCache')){
    function forgetAllRolePermissionsCache() : bool{
        return Cache::tags('RandP')->flush();
    }
}


/**
 * @param string $permission
 * @return boolean 
 */
if(!function_exists('hasPermission')){
    function hasPermission(string $permission) : bool{
        if(auth()->check()){
            $user = auth()->user();
            $hasPermission = getCachedPermissions($user->id) ? 
                             getCachedPermissions($user->id)->contains($permission) :
                             $user->role->permissions()->where('name',$permission)->exists();
            // dd(!empty(getCachedPermissions($user->id)?->contains($permission)));
            return $hasPermission;
        }
        return false;
    }
}

/**
 * @param array $permissions
 * @return boolean 
 */
if(!function_exists('hasAnyPermission')){
    function hasAnyPermission(array $permissions) : bool{
        if(auth()->check()){
            $user = auth()->user();
            return  getCachedPermissions($user->id) ?
                    getCachedPermissions($user->id)->intersect($permissions)->isNotEmpty() :
                    $user->role->permissions()->whereIn('name',$permissions)->exists();
        }
        return false;
    }
}

/**
 * @param string $role
 * @return boolean 
 */
if(!function_exists('hasRole')){
    function hasRole(string $role) : bool{
        if(auth()->check()){
            $user = auth()->user();
            return  getCachedRole($user->id) ?
                    getCachedRole($user->id)->contains($role) :
                    $user->role()->where('name',$role)->exists();
        }
        return false;
    }
}

/** 
 * @param array $roles
 * @return boolean 
 */
if(!function_exists('hasAnyRole')){
    function hasAnyRole(array $roles) : bool{
        if(auth()->check()){
            $user = auth()->user();
            return  getCachedRole($user->id) ? 
                    getCachedRole($user->id)->intersect($roles)->isNotEmpty() :
                    $user->role()->whereIn('name',$roles)->exists();
        }
        return false;
    }
}

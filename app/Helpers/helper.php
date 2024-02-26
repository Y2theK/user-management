<?php

/**
 * @param string $permission
 * @return boolean 
 */
if(!function_exists('hasPermission')){
    function hasPermission(string $permission) : bool{
        if(auth()->check()){
            $user = auth()->user();
            return $user->role->permissions()->where('name',$permission)->exists();
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
            return !empty(array_intersect($user->role->permissions()->pluck('name')->toArray(),$permissions));
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
            return $user->role()->where('name',$role)->exists();
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
            return !empty(array_intersect($user->role()->pluck('name')->toArray(),$roles));
        }
        return false;
    }
}

<?php

use App\Models\User;

/**
 * @param string $permission
 * @return boolean 
 */
if(!function_exists('hasPermission')){
    function hasPermission(string $permission){
        if(auth()->check()){
            $user = auth()->user();
            return $user->role->permissions()->where('name',$permission)->exists();
        }
        return false;
    }
}
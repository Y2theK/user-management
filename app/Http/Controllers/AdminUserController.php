<?php

namespace App\Http\Controllers;

use App\Models\AdminUser;
use App\Models\Role;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index(){
        
        $users = AdminUser::paginate();
        return view('users.index', compact('users'));
    }

    public function create(){

        $roles = Role::all();
        return view('users.create',compact('roles'));
    }
}

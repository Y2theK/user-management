<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\AdminUser;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;

class AdminUserController extends Controller
{
    public function index(){
        
        $users = AdminUser::with('role:id,name')->paginate();
        
        return view('users.index', compact('users'));
    }

    public function create(){

        $roles = Role::all();

        return view('users.create',compact('roles'));
    }

    public function store(UserRequest $request) {

        AdminUser::create($request->validated());

        return redirect()->route('admin-users.index')->with(["success" => "User Created Successfully."]);
    }

    public function edit(AdminUser $admin_user){

        $roles = Role::all();

        return view('users.edit',compact('roles','admin_user'));
    }

    public function update(UserUpdateRequest $request,AdminUser $admin_user) {

        $admin_user->update($request->validated());

        return redirect()->route('admin-users.index')->with(["success" => "User Updated Successfully."]);
    }

    public function destroy(AdminUser $admin_user){
        
        $admin_user->delete();

        return redirect()->route('admin-users.index')->with(["success" => "User Deleted Successfully."]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Feature;
use Illuminate\Http\Request;
use App\Http\Requests\RoleRequest;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:role_view')->only(['index','show']);
        $this->middleware('permission:role_create')->only(['create','store']);
        $this->middleware('permission:role_edit')->only(['edit','update']);
        $this->middleware('permission:role_delete')->only(['destroy']);
    }

    public function index(){

        $roles = Role::with('permissions:id,name')->get(['id','name','created_at']);
        
        return view('roles.index',compact('roles'));
    }

    public function create(){

        $features = Feature::with('permissions')->get(['id','name']);
        return view('roles.create',compact('features'));
    }

    public function store(RoleRequest $request){

        $role = Role::create($request->validated());

        $role->permissions()->attach($request->validated('permissions'));

        return redirect()->route('roles.index')->with(['success' => 'Role Created Successfully']);
    }

    public function edit(Role $role){
        $features = Feature::with('permissions')->get(['id','name']);
        return view('roles.edit',compact('role','features'));
    }

    public function update(RoleRequest $request,Role $role){

        $role->update($request->validated());

        $role->permissions()->sync($request->validated('permissions'));

        return redirect()->route('roles.index')->with(['success' => 'Role Updated Successfully']);
    }

    public function destroy(Role $role){
        try {
            $role->delete();
            return back()->with(['success' => 'Role Deleted Successfully']);
        } catch (\Throwable $th) {
            return back()->with(['fail' => 'Something went wrong! ' . $th->getMessage()]);
        }
      
    }
}

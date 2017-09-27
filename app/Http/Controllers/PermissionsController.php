<?php

namespace App\Http\Controllers;

use App\Role;
use App\Permission;
use Illuminate\Http\Request;

class PermissionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function addPermission(Request $request)
    {
        $role = Role::find($request->role_id);
        $role->permissions()->attach($request->permission);
        session()->flash('message', 'Successfully Added!!!');

        return back();
    }

    public function search(Request $request)
    {
        $roles = Role::where('display_name', 'like', "%$request->key%")
            ->orderBy('display_name')
            ->paginate(12);

        return view('permissions.index', compact('roles'));
    }

    public function index()
    {
        $roles = Role::orderBy('display_name')
            ->paginate('12');

        return view('permissions.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        $permissions = Permission::orderBy('parent_module')
            ->get();
        return view('permissions.show', compact('role' , 'permissions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role, Permission $permission)
    {
        $role->permissions()->detach($permission->id);
        session()->flash('message', 'Successfully Deleted!!!');

        return back();
    }
}

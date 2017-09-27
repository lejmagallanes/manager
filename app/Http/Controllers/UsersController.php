<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use App\Permission;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function search(Request $request)
    {
        $users = User::where('name', 'like', "%$request->key%")
            ->orWhere('email', 'like', "%$request->key%")
            ->orWhere('role', 'like', "%$request->key%")
            ->orderBy('name')
            ->paginate(12);

        if (sizeof($users) == 0) {
            $noResults = " Sorry, no matches found";
            return view('users.index', compact('noResults'));
        }

        return view('users.index', compact('users'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::orderBy('name')->paginate(12);

        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.   
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::orderBy('display_name')->get();

        return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'role' => 'required',
        ]);

        $role = Role::find(request('role'));

        $user = User::firstOrCreate([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'role' => $role->name,
        ]);

        $role->users()->attach($user->id);

        session()->flash('message', 'Successfully Added!!!');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user)
    {
        $user = User::find($user);
        $permissions = Permission::orderBy('name')->get();
        return view('users.show', compact('user', 'permissions'));
        // $roles = Role::orderBy('display_name')->get();
        // return view('users.show', compact('roles', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($user)
    {
        $users = User::find($user);

        $roles = Role::orderBy('display_name')->get();

        return view('users.edit', compact('users', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'role' => 'required',
        ]);

        $role = Role::find(request('role'));

        User::where('id', $id)->update([
            'name' => request('name'),
            'role' => $role->name,
            'email' => request('email'),
        ]);

        $user = User::find($id);

        if (count($user->roles)) {
            $user->roles()->detach();
        }
        $role->users()->attach($user->id);

        session()->flash('message', 'Successfully Modified!!!');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

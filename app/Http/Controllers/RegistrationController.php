<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
        $roles = Role::orderBy('display_name')->get();
        return view('registration.create', compact('roles'));
    }

    public function store(Request $request)
    {
        // $form->persist();

        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'role' => 'required',
        ]);

        $user = User::firstOrCreate([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'role' => request('role'),
        ]);

        auth()->login($user);

        return redirect()->home();
    }
}

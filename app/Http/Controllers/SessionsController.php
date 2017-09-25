<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (! auth()->attempt(request(['email', 'password']))) {     
            return back()->withErrors([

                'message' => 'Please check your credentials and try again.'

            ]);
        }
        // else {
        // 	// $role = \Auth::user()->role;
        // 	return redirect('/');
        // }
        session()->flash('message', "You are successfully signed in");
        return redirect()->home();
    }

    public function destroy()
    {
        auth()->logout();
        return redirect()->home();
    }
}

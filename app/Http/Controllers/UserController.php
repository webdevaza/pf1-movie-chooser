<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // register page
    public function create () 
    {
        return view('user.register');
    }

    // store user in DB
    public function store(Request $request)
    {
        $form = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => ['required', 'email', Rule::unique('users','email')],
            'password' => 'required|confirmed|min:4'
        ]);

        $form['password'] = bcrypt($form['password']);

        $user = User::create($form);

        auth()->login($user);

        return redirect('/')->with('message', 'User registered and logged in!');
    }
    // login page
    public function login()
    {
        return view('user.login');
    }

    // authenticate user
    public function authenticate(Request $request)
    {
        $form = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(auth()->attempt($form)) {
            $request->session()->regenerate();

            return redirect('/')->with('message','You have logged in!');
        }
        return back()->withErrors(['error'=>'Invalid email or password']);
    }

    // log user out
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have logged out!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //show 'register.blade'
    public function create () 
    {
        return view('user.register');
    }

    //store user in DB
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
}

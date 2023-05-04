<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        dd('haha');
    }
}

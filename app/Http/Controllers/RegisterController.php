<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('admin.register', [
            'title' => 'Registrasi',
        ]);

    }

    public function store(Request $request)
    {

        $register = new Register;

        $register->name = $request->input('name');
        $register->username = $request->input('username');
        $register->email = $request->input('email');
        $register->pass = $request->input('pass');

        $register = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required|min:3|max:12|unique:admins'],
            'email' => 'required|email:dns|unique:admins',
            'pass' => 'required|min:5|max:8',
        ]);

        $register['pass'] = bcrypt($register['pass']);

        Admin::create($register);

        $register->save();
        return redirect()->route('login');

    }

    public function create()
    {
        return view('front.contact');
    }
}

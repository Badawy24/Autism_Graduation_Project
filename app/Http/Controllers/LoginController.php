<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('pages.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $email = $request->get('email');
        $password = $request->get('password');
        $user = DB::select('select * from users where email = ?', [$email]);
        if ($user) {
            if (Hash::check($password, $user[0]->password)) {
                session()->regenerate();
                session(['Logged_In' => True]);
                session(['user_id' => $user[0]->id]);
                session(['user' => $user[0]]);
                session(['type' => $user[0]->type]);

                if ($user[0]->type == 'admin') {
                    return redirect('/index');
                } elseif ($user[0]->type == 'user') {
                    return redirect('/home');
                } else {
                    return view('errors.404');
                }


                return redirect('/home');
            } else {
                return back()->with(['cantLogin' => "Invalied Email or Password"]);
            }
        } else {
            return back()->with(['cantLogin' => "Invalied Email or Password"]);
        }
    }
    public function logout()
    {
        session()->invalidate();
        return redirect('/');
    }
}

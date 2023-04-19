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
                session(['Logged_In' => True]);
                session(['user_id' => $user[0]->id]);
                return redirect('/home');
            } else {
                return back()->with(['cantLogin' => "Invalied Email or Password"]);
            }
        } else {
            return back()->with(['cantLogin' => "Invalied Email or Password"]);
        }
    }
}

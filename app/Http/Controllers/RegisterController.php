<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegister()
    {
        return view('pages.register');
    }
    public function registration(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'password_confirmation' => 'required_with:password|same:password',
        ]);
        $password = Hash::make($request->password);
        $user = DB::insert(
            'insert into users(
                firstName,
                lastName,
                email,
                password,
                type
            ) values (?,?,?,?,?)',
            [
                $request->first_name,
                $request->last_name,
                $request->email,
                $password,
                'user'
            ]
        );
        if ($user) {
            session(['Logged_In' => True]);
            $user_id = DB::select('select id from users where email = ?', [$request->email]);
            session(['user_id' => $user_id[0]->id]);
            return redirect('/home');
        } else {
            return back()->with('fail', 'Something wrong');
        }
    }
}

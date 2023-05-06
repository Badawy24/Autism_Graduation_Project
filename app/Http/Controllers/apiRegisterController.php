<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class apiRegisterController extends Controller
{
    public function registration(Request $request)
    {

        // validating the required paramters
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);


        // check if email is unique
        $check_email = DB::table('users')->where('email', $request->email)->exists();
        if ($check_email) {
            return [
                'message' => 'email already exists'
            ];
        }

        // check if email is passord is less than 8 chars
        $check_password_len = strlen($request->password);
        if ($check_password_len < 8) {
            return [
                'message' => 'password must be at least 8 characters long'
            ];
        }

        // hashing password
        $password = Hash::make($request->password);

        // inserting the user data
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
            return [
                'message' => 'successful registeration'
            ];
        } else {
                return [
                    'message' => 'error, unsuccessful registeration'
                ];
        }
    }
}

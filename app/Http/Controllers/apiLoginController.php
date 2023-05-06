<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Helpers\MyTokenManager;

class apiLoginController extends Controller
{
    //
    public function Login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $users = DB::select('select * from users where email = ?', [$email]);

        // if patient exist [correct email and password ]
        if ($users) {
            // because the result is a list of only one element, we store that element in patient variable
            if (Hash::check($password, $users[0]->password)) {
                $token = MyTokenManager::createPatientToken($users[0]->id);

                // return token like  [3|dkjfbvjfkbvdfkjbv89yrhfb]
                return [
                    'message' => 'logged In successfully',
                    'token' => $token,
                ];
            } else {
                return [
                    'message' => 'wrong email or password'
                ];
            }
        } else {
            return [
                'message' => 'wrong email or password'
            ];
        }
    }
}

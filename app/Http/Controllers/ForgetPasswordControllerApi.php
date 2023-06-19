<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Mail\forgetPasswordMail;


class ForgetPasswordControllerApi extends Controller
{
    public function showResetPassForm(Request $request)
    {
        $request->validate([
            'email-reset' => 'required'
        ]);
        $check = DB::select('select id from users where email = ?', [$request->get('email-reset')]);
        if ($check == null) {
            return ['notfound' => "This Email Address does not exist"];
        } else {
            if ($this->checkInternet()) {
                $email_reset = $request->get('email-reset');
                $code = rand(100000, 999999);
                session(['email-reset' => $email_reset, 'code' => $code, 'email-sent' => 'Code Sent Successfully, Please Check your Email']);
                Mail::to($email_reset)->send(new forgetPasswordMail());
                return [
                    "message" => "sent successfully",
                    "code" => $code
                ];
            } else {
                return ['error' => 'Internet'];
            }
        }
    }

    public function checkInternet($site = "https://google.com/") //************************************************************* */
    {
        if (@fopen($site, "r")) {
            return true;
        } else {
            return false;
        }
    }

    public function resetPassword(Request $request)
    {

        $request->validate([
            'user_code' => 'required',
            'password' => 'required|min:8',
        ]);

        $_code = $request->get('user_code');
        $pass = Hash::make($request->get('password'));
        $email_reset = $request->get('email-reset');
        $email_code = $request->get('email_code');

        // return [
        //     'message' => ".$_code.  .$pass .$email_reset. .$email_code."
        // ];
        if ($_code == $request->get('email_code')) {
            $update = DB::update('
            update users set password = ? where email = ?', [$pass, $email_reset]);
            
            if ($update) {
                return [
                    "message" => "Updated successfully"
                ];
            } else {
                return [
                    "message" => "something wrong"
                ];
            }
        } else {
            return [
                "message" => "code does not match"
            ];;
        }
    }
}

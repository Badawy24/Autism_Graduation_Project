<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\forgetPasswordMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class ForgetPasswordController extends Controller
{
    public function showForgetPasswordForm()
    {
        return view('pages.email-forget-password');
    }

    public function showResetPassForm(Request $request)
    {
        session()->forget('success-pass');
        session()->forget('fail-pass');
        session()->forget('codeNotMatch');
        $request->validate([
            'email-reset' => 'required|email'
        ]);
        $check = DB::select('select id from users where email = ?', [$request->get('email-reset')]);
        if ($check == null) {
            return redirect()->back()->with(['notfound' => "This Email Address does not exist"]);
        } else {
            if ($this->checkInternet()) {
                $email_reset = $request->get('email-reset');
                $code = rand(100000, 999999);
                session(['email-reset' => $email_reset, 'code' => $code, 'email-sent' => 'Code Sent Successfully, Please Check your Email']);
                Mail::to($email_reset)->send(new forgetPasswordMail());
                return view('pages.forget-pass');
            } else {
                return redirect()->back()->withInput()->with('error', 'Check Your Internet Connection');
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
        session()->forget('success-pass');
        session()->forget('fail-pass');
        session()->forget('codeNotMatch');
        $request->validate([
            'code' => 'required',
            'password' => 'required|min:8',
            'password_confirmation' => 'required_with:password|same:password'
        ]);
        $_code = $request->get('code');
        $pass = Hash::make($request->get('password'));
        if ($_code == session('code')) {
            $update = DB::update('
            update users set password = ? where email = ?', [$pass, session('email-reset')]);
            if ($update) {
                session(['success-pass' => "Password Reset Successfully"]);
                return view('pages.forget-pass');
                session()->forget('code');
            } else {
                session(['fail-pass' => "Something Wrong"]);
                return view('pages.forget-pass');
            }
        } else {
            session(['codeNotMatch' => "Code Entered Don't Match Code Send to You"]);
            return view('pages.forget-pass');
        }
    }
}

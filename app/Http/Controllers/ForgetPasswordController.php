<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ForgetPasswordController extends Controller
{
    public function showForgetPasswordForm()
    {
        return view('pages.email-forget-password');
    }

    public function showResetPassForm(Request $request)
    {
        $request->validate([
            'email-reset' => 'required|email'
        ]);
        session(['email-reset' => $request->get('email-request')]);
        return view('pages.forget-pass');
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'password' => 'required|min:8',
            'password_confirmation' => 'required_with:password|same:password'
        ]);
        return back()->with(['success' => "Password Reset Successfully"]);
    }
}

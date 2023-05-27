<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact_u;
use App\Models\User;
use App\Mail\contactMail;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    public function messages()
    {
        // $admins = User::where('type', 'admin')->get();
        // $messages = Contact_u::leftjoin('users', 'contact_us.adminId', '=', 'users.id')
        //     ->select('contact_us.*', 'users.id as admin_id', 'users.firstName', 'users.lastName')
        //     ->get();
        $messages = Contact_u::leftJoin('users', 'contact_us.adminId', '=', 'users.id')
            ->select('contact_us.*', 'users.id as admin_id', 'users.firstName', 'users.lastName')
            ->orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'asc')
            ->get();
        $note = Contact_u::whereNull('replay')->count();
        if ($note == null) {
            $note = 0;
        }
        session(['note' => $note]);
        // return $messages;
        return view('admin.messages', compact('messages'));
    }

    public function replaymsg(Request $request)
    {
        $request->validate([
            'msg_replay' => 'required',
        ]);

        $admin_id = session('user_id');
        // return $admin_id;
        $to_user = $request->user_email;
        if ($this->checkInternet()) {
            $nameContact = 'Hayah Support';
            $subjectContact = $request->get('msg_subject');
            $emailContact = 'hayah.contact@gmail.com';
            $messageContact = $request->get('msg_replay');
            session(['email-con' => $emailContact, 'name-con' => $nameContact, 'subject-con' => $subjectContact, 'msg-con' => $messageContact]);
            $mail = Mail::to($to_user)->send(new contactMail());
            if ($mail) {
                Contact_u::where('id', $request->id)->update([
                    'replay' => $request->msg_replay,
                    'adminId' => $admin_id
                ]);
                return redirect()->back()->with('succes', 'Message Sent Succesfully!');
            } else {
                return back()->with(['succes' => 'Somthing Error!']);
            }
        } else {
            return redirect()->back()->withInput()->with('error', 'Internet');
        }
    }
    public function checkInternet($site = "https://google.com/")
    {
        if (@fopen($site, "r")) {
            return true;
        } else {
            return false;
        }
    }
}

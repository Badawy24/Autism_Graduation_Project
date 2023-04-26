<?php

namespace App\Http\Controllers;
use App\Mail\contactMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class contactController extends Controller
{
    public function contact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'subject' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);
        $nameContact = $request->get('name');
        $subjectContact = $request->get('subject');
        $emailContact = $request->get('email');
        $messageContact = $request->get('message');
        session(['email-con'=>$emailContact, 'name-con'=>$nameContact, 'subject-con'=>$subjectContact, 'msg-con'=>$messageContact]);
        $mail = Mail::to('hayah.contact@gmail.com')->send(new contactMail());
        if($mail){
            $data = DB::insert(' insert into contact_us (name, subject, email, message) values(?,?,?,?)', 
            [
                $nameContact, $subjectContact, $emailContact, $messageContact
            ]);
            return back()->with(['success'=>'Email send Successfully']);
        } else {
            return back()->with(['fail'=>'Something Wrong !!']);
        }
        
    }
}

<?php

namespace App\Http\Controllers;

use App\Mail\contactMail;
use App\Http\Controllers\Controller;
use App\Models\Contact_u;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class contactControllerApi extends Controller
{
    //
    public function contact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'subject' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        if ($this->checkInternet()) {
            $nameContact = $request->get('name');
            $subjectContact = $request->get('subject');
            $emailContact = $request->get('email');
            $messageContact = $request->get('message');
            session(['email-con' => $emailContact, 'name-con' => $nameContact, 'subject-con' => $subjectContact, 'msg-con' => $messageContact]);
            $mail = Mail::to('hayah.contact@gmail.com')->send(new contactMail());
            if ($mail) {
                // $data = DB::insert(
                //     ' insert into contact_us (name, subject, email, message) values(?,?,?,?)',
                //     [
                //         $nameContact, $subjectContact, $emailContact, $messageContact
                //     ]
                // );
                $data = Contact_u::create([
                    'name' => $nameContact,
                    'subject' => $subjectContact,
                    'email' => $emailContact,
                    'message' => $messageContact,
                ]);
                return ['message' => 'Successfully'];
            } else {
                return ['message' => 'Wrong'];
            }
        } else {
            return ['message', 'Internet eroor'];
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
}

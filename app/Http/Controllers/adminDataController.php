<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class adminDataController extends Controller
{
    public function adminShow()
    {
        $admins = User::Where('type', 'admin')->get();

        return view('admin.admins', compact('admins'));

        //   return view($id);
    }

    public function addAdmin(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        User::create([
            'type' => $request->type,
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'password' => $request->password
        ]);
        return redirect()->back()->with('succes', 'Course Added Succedfully!');
        //   return view($id);
    }
    public function editAdmin(Request $request)
    {
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
        ]);
        $admin = User::find($request->id);
        $admin->update([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
        ]);

        return redirect()->back()->with('succes', 'Course Updated Succedfully!');

        // return $request;
    }
    public function deleteAdmin(Request $request)
    {
        $admin = User::find($request->id);


        // Delete the course record from the database
        $admin->delete();

        return redirect()->back()->with('succes', 'Course deleted successfully!');
    }
}

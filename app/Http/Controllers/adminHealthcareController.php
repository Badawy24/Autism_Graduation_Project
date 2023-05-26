<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Healthcare;
use Illuminate\Http\Request;

class adminHealthcareController extends Controller
{
    public function healthcareShow()
    {
        $allHealthcare = Healthcare::all();

        return view('admin.healthcare', compact('allHealthcare'));

        //   return view($id);
    }

    public function addHealthcare(Request $request)
    {
        $request->validate([
            'healthcarName' => 'required',
            'healthcarAddress' => 'required',
            'healthcarPhone' => 'required',
            'healthcarWebSite' => 'required',
        ]);


        Healthcare::create([
            'healthcarName' => $request->healthcarName,
            'healthcarAddress' => $request->healthcarAddress,
            'healthcarPhone' => $request->healthcarPhone,
            'healthcarWebSite' => $request->healthcarWebSite,
        ]);


        return redirect()->back()->with('succes', 'Course Added Succedfully!');

        //   return view($id);
    }

    public function editHealthcare(Request $request)
    {
        $request->validate([
            'healthcarName' => 'required',
            'healthcarAddress' => 'required',
            'healthcarPhone' => 'required',
            'healthcarWebSite' => 'required',
        ]);
        $healthcare = Healthcare::find($request->id);

        $healthcare->update([
            'healthcarName' => $request->healthcarName,
            'healthcarAddress' => $request->healthcarAddress,
            'healthcarPhone' => $request->healthcarPhone,
            'healthcarWebSite' => $request->healthcarWebSite,
            
        ]);

        return redirect()->back()->with('succes', 'Course Updated Succedfully!');

        // return $request;
    }

    public function deleteHealthcare(Request $request)
    {
        $healthCare = Healthcare::find($request->id);
        // Delete the course record from the database
        $healthCare->delete();

        return redirect()->back()->with('succes', 'Course deleted successfully!');
    }

}

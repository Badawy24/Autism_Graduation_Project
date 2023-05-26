<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Doctors;
use Illuminate\Http\Request;

class adminDoctorController extends Controller
{
    public function doctorsShow()
    {
        $doctors = Doctors::all();

        return view('admin.doctors', compact('doctors'));
        //   return view($id);
    }

    public function addDoctor(Request $request)
    {
        $request->validate([
            'docImage' => 'image',
            'firstName' => 'required',
            'lastName' => 'required',
        ]);
        if ($image = $request->file('docImage')) {
            $destinationFolder = 'images/doc_images/';
            $newImageName = date('YmdHis') . "_doctor." . $image->getClientOriginalExtension();
            $image->move($destinationFolder, $newImageName);
        } else {
            return redirect()->back()->with('errorimg', 'Somthing error, please Try Again');
        }
        Doctors::create([
            'docImage' => $newImageName,
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'doctorAddress' => $request->docAddress,
            'doctorPhone' => $request->docPhone,
            'doctorHospital' => $request->docHospital,
            'doctorDesc' => $request->docDesc,

        ]);

        return redirect()->back()->with('succes', 'Doctor Added Succedfully!');
    }

    public function editDoctor(Request $request)
    {
        $request->validate([
            'docImage' => 'image',
            'firstName' => 'required',
            'lastName' => 'required',
        ]);
        $doctor = Doctors::find($request->id);
        $newImageName = $doctor->docImage;
        if ($image = $request->file('docImage')) {
            $destinationFolder = 'images/doc_images/';
            $imagePath = 'images/doc_images/' . $doctor->docImage;
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            $newImageName = date('YmdHis') . "_doc." . $image->getClientOriginalExtension();
            $image->move($destinationFolder, $newImageName);
        } else {
            $newImageName = $doctor->docImage;
        }

        $doctor->update([
            'docImage' => $newImageName,
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'doctorAddress' => $request->docAddress,
            'doctorPhone' => $request->docPhone,
            'doctorHospital' => $request->docHospital,
            'doctorDesc' => $request->docDesc,
        ]);

        return redirect()->back()->with('succes', 'Doctor Updated Succedfully!');

        // return $request;
    }

    public function deleteDoctor(Request $request)
    {
        $doctor = Doctors::find($request->id);

        // Delete the course image file from the server (assuming it's stored in the 'images/courses_images' folder)
        if ($doctor->docImage) {
            $imagePath = 'images/doc_images/' . $doctor->docImage;
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Delete the course record from the database
        $doctor->delete();

        return redirect()->back()->with('succes', 'Doctor deleted successfully!');
    }
}

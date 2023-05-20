<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tests;
use App\Models\Childs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DiagImgController extends Controller
{
    public function showRes($id)
    {
        $data = Tests::where('childId', $id)->latest()->first();
        return view('pages.result', compact('data'));
    }

    public function index($id)
    {

        $child_id = Childs::where('id', $id)->first();

        return view('pages.diog_img', compact('child_id'));
    }
    public function create(Request $request, $id)
    {
        $request->validate([
            'diagImg' => 'required|image'
        ]);

        $child_data = Childs::where('id', $id)->first();
        $childID = $child_data['id'];

        if ($image = $request->file('diagImg')) {
            $destinationFolder = 'images/diagnosis_images/';
            $diagImageName = date('YmdHis') . "_" . $childID . "." . $image->getClientOriginalExtension();
            $image->move($destinationFolder, $diagImageName);
        } else {
            return redirect()->back()->with('noimage', 'You Must Choose Image');
        }


        // $response = Http::asForm()->post(
        //     'http://127.0.0.1:5501/diagmodelimg',
        //     [
        //         'img' => $request->diagmodelimg,
        //     ]
        // );

        // $data = $response->json();

        Tests::create([
            'childId' => $childID,
            'testImage' => $diagImageName,
            // 'testResult' => $data['res'],
            'testResult' => 1,
        ]);


        return redirect("/res/$childID");
    }
}
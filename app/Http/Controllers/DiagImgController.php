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
        return view('pages.result_img', compact('data'));
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

        $json = file_get_contents('site_settings/head.json');
        $data = json_decode($json, true);
        $url_site = $data['website_canonical'];
        $url_model = $data['url_model_img'];
        $path_img = $url_site . $destinationFolder . $diagImageName;

        $response = Http::asform()->post(
            $url_model,
            [
                'path' => $path_img,
            ]
        );
        $responseData = $response->json();

        $result_round = number_format($responseData['prob_autistic'] * 100, 2);


        if ($responseData['result_code'] == 1) {

            Tests::create([
                'childId' => $childID,
                'testImage' => $diagImageName,
                'testResult' => $result_round,
            ]);
        } else {
            return $responseData['result'];
        }

        $childID = $child_data['id'];
        return redirect("/res_img/$childID");
    }
}
// {
//     "prob_autistic": 0.2479320466518402,
//     "prob_non_autistic": 0.7520679533481598,
//     "result": "face detected",
//     "result_code": 1
// }

// {
//     "prob_autistic": 0.0,
//     "prob_non_autistic": 0.0,
//     "result": "the image is not valid or no face detected",
//     "result_code": 0
// }
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
        // $request->validate([
        //     'diagImg' => 'required|image'
        // ]);

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

        $response = Http::post(
            'http://127.0.0.1:9865/img_class',
            [
                // 'path' => $url_site . $diagImageName,
                'path' => $request->diagImg,
            ]
        );
        $responseData = $response->json();

        // Tests::create([
        //     'childId' => $childID,
        //     'testImage' => $diagImageName,
        //     // 'testResult' => $data['res'],
        //     'testResult' => 1,
        // ]);
        return $path_img;
        // return $data['result_code'] . $data['result'] . $data['prob_autistic'] . $data['prob_non_autistic'];
        // return redirect("/res/$childID");
    }
}

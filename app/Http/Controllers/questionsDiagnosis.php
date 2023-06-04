<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Childs;
use App\Models\Tests;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class questionsDiagnosis extends Controller
{

    

    //
    public function create(Request $request, $id)
    {
        $request->validate([
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required',
            'q4' => 'required',
            'q5' => 'required',
            'q6' => 'required',
            'q7' => 'required',
            'q8' => 'required',
            'q9' => 'required',
            'q10' => 'required',
            'q11' => 'required',
            'q12' => 'required',
        ]);

        $child_data = Childs::where('id', $id)->first();

        $birthdate = Carbon::parse($child_data->birthDate);
        $now = Carbon::today();
        $age_in_months = $birthdate->diffInMonths($now);
        $age = $age_in_months;
        $http_model = '';

        if ($age_in_months <= 36) {  // 12-36
            $http_model = 'http://127.0.0.1:5501/autism_toddler'; //MONTH
        } elseif ($age_in_months > 36 && $age_in_months <= 132) {
            $http_model = 'http://127.0.0.1:5502/autism_child'; // YEARS
            $age = $birthdate->diffInYears($now);
        } elseif ($age_in_months > 132 && $age_in_months <= 192) {
            $http_model = 'http://127.0.0.1:5503/autism_adolecent';
            $age = $birthdate->diffInYears($now);
        } elseif ($age_in_months > 192) {
            $http_model = 'http://127.0.0.1:5504/autism_adult';
            $age = $birthdate->diffInYears($now);
        } else {
            return redirect()->back()->with('nomodel', 'Not Found Link Of Model');
        }

        $q1to9 = ['q1', 'q2', 'q3', 'q4', 'q5', 'q6', 'q7', 'q8', 'q9'];

        foreach ($q1to9 as $q) {
            switch (strtolower($request->$q)) {
                case 'always':
                case 'usually':
                case 'sometimes':
                    $request->$q = 1;
                    break;
                case 'rarely':
                case 'never':
                    $request->$q = 0;
                    break;
                default:
                    break;
            }
        }
        $q10 = '';
        if (strtolower($request->q10) == 'always' || strtolower($request->q10) == 'usually' || strtolower($request->q10) == 'sometimes') {
            $q10 = 0;
        } elseif (strtolower($request->q10) == 'rarely' || strtolower($request->q10) == 'never') {
            $q10 = 1;
        } else {
            return redirect()->back()->with('nomodel', 'Not Found Link Of Model');
        }

        $sex = $child_data['gender'];
        if ($child_data['gender'] == 'male' || $child_data['gender'] == 'm') {
            $sex = 'm';
        } elseif ($child_data['gender'] == 'female' || $child_data['gender'] == 'f') {
            $sex = 'f';
        }

        $response = Http::asForm()->post(
            $http_model,
            [
                'a1' => $request->q1,
                'a2' => $request->q2,
                'a3' => $request->q3,
                'a4' => $request->q4,
                'a5' => $request->q5,
                'a6' => $request->q6,
                'a7' => $request->q7,
                'a8' => $request->q8,
                'a9' => $request->q9,
                'a10' => $q10,
                'age' => $age,
                'sex' => $sex,
                'ethnicity' => $child_data['childEthnicity'],
                'Jaundice' => $child_data['childJaundice'],
                'Family_mem_with_ASD' => $request->q12,
                'Who_completed_the_test' => $request->q11,
            ]
        );

        $data = $response->json();

        Tests::create([
            'a1' => $request->q1,
            'a2' => $request->q2,
            'a3' => $request->q3,
            'a4' => $request->q4,
            'a5' => $request->q5,
            'a6' => $request->q6,
            'a7' => $request->q7,
            'a8' => $request->q8,
            'a9' => $request->q9,
            'a10' => $q10,
            'whoCompletesTheTest' => $request->q11,
            'childId' => $child_data['id'],
            'testResult' => $data['res'],
            'userFamilyMemberWith' => $request->q12,
        ]);
        $childID = $child_data['id'];
        return $data;
    }

    public function showTests(Request $request)
    {

        $childId = $request->id;

        $tests = DB::select("sELECT * FROM `tests` WHERE childId = ?",[$childId]);

        // declare $data array
        $data = [];

        // for loop in every element and store its features values [test_id, test_name, test_fee] and store in $data [associative array]
        foreach ($tests as $childCat) {
            $data[] =
                [
                    
                    'childId' =>  "$childCat->childId",
                    'whoCompletesTheTest' => "$childCat->whoCompletesTheTest",
                    'created_at' => "$childCat->created_at",
                    'testResult' => $childCat->testResult == 1 ? "Autistic" : "Non-autistic"
                ];
        }
        return $data;
    }

}

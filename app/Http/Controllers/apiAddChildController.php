<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Childs;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Helpers\MyTokenManager;

class apiAddChildController extends Controller
{
    //
    public function addChild(Request $request)
    {
        $user = MyTokenManager::currentPatient($request);
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'date' => 'required',
            'gender' => 'required',
            'ethnicity' => 'required',
            'Jaundice' => 'required',
            'withASD' => 'required'
        ]);
        $userId = $user[0]->id;
        if ($request->Jaundice == 'yes') {
            $Jaundice = 1;
        } else {
            $Jaundice = 0;
        }
        if ($request->withASD == 'yes') {
            $withASD = 1;
        } else {
            $withASD = 0;
        }
        $addChild = DB::insert(
            'insert into childs
                                (firstName,
                                lastName,
                                childImage,
                                birthDate,
                                gender,
                                childEthnicity,
                                childJaundice,
                                numberOfTests,
                                familyWithASD,
                                userId)
                        Values (?,?,?,?,?,?,?,?,?,?)',
            [
                $request->fname,
                $request->lname,
                NULL,
                $request->date,
                $request->gender,
                $request->ethnicity,
                $Jaundice,
                0,
                $withASD,
                $userId,
            ]
        );
        if ($addChild) {
            return [
                'message' => 'Child Added Successfully'
            ];
        } else {
            return [
                'message' => 'Something Wrong !!'
            ];
        }
    }



    public function showChildren(Request $request){

        $userId = MyTokenManager::currentPatient($request)[0]->id;

        $result = DB::select('select * from childs where userId = ?',[$userId]);

        // declare $data array
        $data = [];

        // for loop in every element and store its features values [test_id, test_name, test_fee] and store in $data [associative array]
        foreach ($result as $childCat) {
            $data[] =
                [
                    'id' => $childCat->id,
                    'fullName' =>  "$childCat->firstName $childCat->lastName!",
                ];
        }
        return $data;
    }

    public function childProfile(Request $request){
        $userId = MyTokenManager::currentPatient($request)[0]->id;

        $childData = DB::select("select * FROM childs WHERE id = ? and userId = ?",[$request->id,$userId]);

        // declare $data array
        $data = [];

        $birthdate = Carbon::parse($childData[0]->birthDate);
        $now = Carbon::today();
        // $age = $birthdate->diffInDays($today);
        $age = Carbon::parse($childData[0]->birthDate)->diff(Carbon::today())->format('%y Y - %m M - %d D');


        // for loop in every element and store its features values [test_id, test_name, test_fee] and store in $data [associative array]
        foreach ($childData as $childCat) {
            $data[] =
                [
                    "id"=> $childCat->id,
                    "firstName"=> $childCat->firstName,
                    "lastName"=> $childCat->lastName,
                    "childImage"=> null,
                    "birthDate"=> $age,
                    "gender" => $childCat->gender,
                    "childEthnicity"=> $childCat->childEthnicity,
                    "childJaundice"=> $childCat->childJaundice,
                    "numberOfTests"=> $childCat->numberOfTests,
                    "familyWithASD"=> $childCat->familyWithASD,
                    "userId"=> $childCat->userId,
                ];
        }
        return $data;

        return[
            'msg' => $childData,
        ];
    }

}

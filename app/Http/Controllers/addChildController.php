<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Childs;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class addChildController extends Controller
{
    public function addChild(Request $request, $id)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'date' => 'required',
            'gender' => 'required',
            'ethnicity' => 'required',
            'Jaundice' => 'required',
            'withASD' => 'required'
        ]);
        $userId = $id;
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
            return back()->with(['success-add' => 'Child Added Successfully']);
        } else {
            return back()->with(['fail-add' => 'Something Wrong !!']);
        }
    }

    public function showChildProfile($id)
    {
        $child = Childs::where(['id' => $id])->first();

        $birthdate = Carbon::parse($child->birthDate);
        $now = Carbon::today();
        // $age = $birthdate->diffInDays($today);
        $age = $birthdate->diff($now)->format('%y Y - %m M - %d D');


        return view('pages.child-profile', compact('child', 'age'));
    }
}
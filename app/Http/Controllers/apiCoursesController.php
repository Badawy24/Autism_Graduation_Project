<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use App\Models\User_courses;
use App\Models\Videos;
use Illuminate\Http\Request;
use App\Helpers\MyTokenManager;
use Illuminate\Support\Facades\DB;

class apiCoursesController extends Controller
{
    //
    public function show_courses(Request $request)
    {

        $userId = MyTokenManager::currentPatient($request)[0]->id;
        // $courses = Courses::all();

        // $courses = Courses::leftJoin('user_courses', function ($join) use ($userId) {
        //     $join->on('courses.id', '=', 'user_courses.courseId')
        //         ->where('user_courses.userId', '=', $userId);
        // })
        //     ->orderByRaw('user_courses.id DESC')
        //     ->select('courses.*')
        //     ->get();
        $courses = DB::select("select * from courses");

        
        // declare $data array
        $data = [];

        // for loop in every element and store its features values [test_id, test_name, test_fee] and store in $data [associative array]
        foreach ($courses as $childCat) {
            $data[] =
                [
                    'id' => $childCat->id,
                    'courseTitleEn' =>  "$childCat->courseTitleEn",
                ];
        }
        return $data;
    }
}

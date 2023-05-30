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

        $courses = DB::select("select * from courses");

        
        // declare $data array
        $data = [];

        // for loop in every element and store its features values [test_id, test_name, test_fee] and store in $data [associative array]
        foreach ($courses as $childCat) {
            $data[] =
                [
                    'id' => $childCat->id,
                    'courseTitleEn' =>  "$childCat->courseTitleEn",
                    'courseTitleAr' => "$childCat->courseTitleAr",
                    'courseDescriptionEn' => "$childCat->courseDescriptionEn",
                    'courseDescriptionAr' => "$childCat->courseDescriptionAr",
                    'courseImage' => "$childCat->courseImage",

                ];
        }
        return $data;
    }

    public function show_videos(Request $request){

        $videos = DB::select("select * from videos where courseId = ?",[$request->id]);

        
        // declare $data array
        $data = [];

        // for loop in every element and store its features values [test_id, test_name, test_fee] and store in $data [associative array]
        foreach ($videos as $childCat) {
            $data[] =
                [
                    'id' => $childCat->id,
                    'videoTitleEn' =>  "$childCat->videoTitleEn",
                    'videoTitleAr' => "$childCat->videoTitleAr",
                    'videoApi' => "$childCat->videoApi",
                ];
        }
        return $data;
    }
    
    
}

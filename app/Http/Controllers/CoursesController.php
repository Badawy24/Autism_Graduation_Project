<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use App\Models\User_courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function show_courses()
    {

        $userId = session('user_id');
        // $courses = Courses::all();

        $courses = Courses::leftJoin('user_courses', function ($join) use ($userId) {
            $join->on('courses.id', '=', 'user_courses.courseId')
                ->where('user_courses.userId', '=', $userId);
        })
            ->orderByRaw('user_courses.id DESC')
            ->select('courses.*')
            ->get();

        $fav_courses = User_courses::where('userId', $userId)->pluck('courseId');

        return view('pages.courses', compact(['courses', 'fav_courses']));
    }

    public function add_favorite($id)
    {
        $userId = session('user_id');

        $fav_toggle = User_courses::where(['courseId' => $id, 'userId' => $userId])->exists();

        if ($fav_toggle) {
            User_courses::where(['courseId' => $id, 'userId' => $userId])->delete();
            return redirect()->back();
        } else {
            User_courses::create([
                'courseId' => $id,
                'userId' => $userId
            ]);

            return redirect()->back();
        }
    }
}
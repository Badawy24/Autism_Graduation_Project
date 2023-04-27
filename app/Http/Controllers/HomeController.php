<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use App\Models\User_courses;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showHome()
    {
        $userId = session('user_id');
        // $courses = Courses::all();

        $userId = session('user_id');

        $courses = Courses::join('user_courses', 'courses.id', '=', 'user_courses.courseId')
            ->where('user_courses.userId', '=', $userId)
            ->get();

        $fav_courses = User_courses::where('userId', $userId)->pluck('courseId');
        // echo '<pre>';

        // echo $courses;

        // echo '</pre>';
        // echo '<pre>';
        // echo $fav_courses;
        // echo '</pre>';

        return view('pages.home', compact('courses', 'fav_courses'));
    }
}
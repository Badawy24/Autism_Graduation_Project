<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use App\Models\Videos;
use Illuminate\Http\Request;

class AdminVideoController extends Controller
{
    public function videosShow()
    {

        $courses = Courses::all();
        $videos = Videos::join('courses', 'videos.courseId', '=', 'courses.id')
            ->select('videos.*', 'courses.id as course_id', 'courses.courseTitleEn', 'courses.courseTitleAr')
            ->get();

        // return $videos;
        return view('admin.videos', compact('videos', 'courses'));
    }

    public function addvideo(Request $request)
    {
        $request->validate([
            'course_name' => 'required',
            'TitleAr' => 'required',
            'TitleEn' => 'required',
            'url' => 'required',
        ]);

        Videos::create([
            'courseId' => $request->course_name,
            'videoTitleAr' => $request->TitleAr,
            'videoTitleEn' => $request->TitleEn,
            'videoApi' => $request->url
        ]);


        return redirect()->back()->with('succes', 'Video Added successfully!');
    }
    public function editvideo(Request $request)
    {
        $request->validate([
            'course_name' => 'required',
            'TitleAr' => 'required',
            'TitleEn' => 'required',
            'url' => 'required',
        ]);
        $video = Videos::find($request->id);

        $video->update([
            'courseId' => $request->course_name,
            'videoTitleAr' => $request->TitleAr,
            'videoTitleEn' => $request->TitleEn,
            'videoApi' => $request->url,
        ]);

        return redirect()->back()->with('succes', 'Course Updated successfully!');

        // return $request;
    }
    public function deletevideo(Request $request)
    {
        $video = Videos::find($request->id);

        // Delete the course record from the database
        $video->delete();

        return redirect()->back()->with('succes', 'Course deleted successfully!');
    }
}

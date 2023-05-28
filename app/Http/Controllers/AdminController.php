<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Doctors;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard');

        //   return view($id);
    }

    public function adminShow()
    {
        $admins = User::Where('type', 'admin')->get();

        return view('admin.admins', compact('admins'));

        //   return view($id);
    }
    public function usersShow()
    {
        return view('admin.users');

        //   return view($id);
    }
    public function childsShow()
    {
        return view('admin.childs');

        //   return view($id);
    }
    // Course Functions
    public function coursesShow()
    {
        $courses = Courses::all();

        return view('admin.courses', compact('courses'));

        //   return view($id);
    }

    public function addcourse(Request $request)
    {
        $request->validate([
            'courseImg' => 'required|image',
            'TitleAr' => 'required',
            'TitleEn' => 'required',
            'DescAr' => 'required',
            'DescEn' => 'required',
            'type' => 'required',
        ]);

        if ($image = $request->file('courseImg')) {
            $destinationFolder = 'images/courses_images/';
            $newImageName = date('YmdHis') . "_course." . $image->getClientOriginalExtension();
            $image->move($destinationFolder, $newImageName);
        } else {
            return redirect()->back()->with('errorimg', 'Somthing error, please Try Again');
        }

        Courses::create([
            'courseImage' => $newImageName,
            'courseTitleAr' => $request->TitleAr,
            'courseTitleEn' => $request->TitleEn,
            'courseDescriptionAr' => $request->DescAr,
            'courseDescriptionEn' => $request->DescEn,
            'courseType' => $request->type
        ]);


        return redirect()->back()->with('succes', 'Course Added Succedfully!');

        //   return view($id);
    }
    public function editcourse(Request $request)
    {
        $request->validate([
            //     // 'courseImg' => 'required|image',
            'TitleAr' => 'required',
            'TitleEn' => 'required',
            'DescAr' => 'required',
            'DescEn' => 'required',
            'type' => 'required',
        ]);
        $course = Courses::find($request->id);
        $newImageName = $course->courseImage;
        if ($image = $request->file('courseImg')) {
            $destinationFolder = 'images/courses_images/';
            $imagePath = 'images/courses_images/' . $course->courseImage;
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            $newImageName = date('YmdHis') . "_course." . $image->getClientOriginalExtension();
            $image->move($destinationFolder, $newImageName);
        } else {
            $newImageName = $course->courseImage;
        }

        $course->update([
            'courseImage' => $newImageName,
            'courseTitleAr' => $request->TitleAr,
            'courseTitleEn' => $request->TitleEn,
            'courseDescriptionAr' => $request->DescAr,
            'courseDescriptionEn' => $request->DescEn,
            'courseType' => $request->type
        ]);

        return redirect()->back()->with('succes', 'Course Updated Succedfully!');

        // return $request;
    }
    public function deleteCourse(Request $request)
    {
        $course = Courses::find($request->id);

        // Delete the course image file from the server (assuming it's stored in the 'images/courses_images' folder)
        if ($course->courseImage) {
            $imagePath = 'images/courses_images/' . $course->courseImage;
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Delete the course record from the database
        $course->delete();

        return redirect()->back()->with('succes', 'Course deleted successfully!');
    }



    // Course Functions
    public function videosShow()
    {

        return view('admin.videos');

        //   return view($id);
    }



    public function healthcareShow()
    {
        return view('admin.healthcare');

        //   return view($id);
    }

    public function siteShow()
    {
        return view('admin.site');

        //   return view($id);
    }
    public function sitesetting(Request $request)
    {
        $json = file_get_contents('site_settings/head.json');
        $data = json_decode($json, true);

        // Set data
        $data['website_name_en'] = $request->website_name_en;
        $data['website_name_ar'] = $request->website_name_ar;
        $data['website_description_en'] = $request->website_description_en;
        $data['website_description_ar'] = $request->website_description_ar;
        $data['website_keywords'] = $request->website_keywords;
        $data['website_canonical'] = $request->website_canonical;
        $data['contact_phone'] = $request->contact_phone;
        $data['contact_email'] = $request->contact_email;

        // Encode the updated data back to JSON
        $updatedJson = json_encode($data);

        // Save the updated JSON back to the file
        file_put_contents('site_settings/head.json', $updatedJson);


        return redirect('/siteShow')->with('success', 'Data updated successfully');

        //   return view($id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

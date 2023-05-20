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
            'image' => 'image',
            'fname' => 'required',
            'lname' => 'required',
            'date' => 'required',
            'gender' => 'required',
            'ethnicity' => 'required',
            'Jaundice' => 'required',
        ]);
        $userId = $id;
        if ($request->Jaundice == 'yes') {
            $Jaundice = 1;
        } else {
            $Jaundice = 0;
        }
        if ($image = $request->file('image')) {
            $destinationFolder = 'images/child_images/';
            $newImageName = date('YmdHis') . "_" . $userId . "." . $image->getClientOriginalExtension();
            $image->move($destinationFolder, $newImageName);
        } else {
            $newImageName = 'child-img.png';
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
                                userId)
                        values (?,?,?,?,?,?,?,?)',
            [
                $request->fname,
                $request->lname,
                $newImageName,
                $request->date,
                $request->gender,
                $request->ethnicity,
                $Jaundice,
                $userId,
            ]
        );
        if ($addChild) {
            return back()->with(['success-add' => 'success-add']);
        } else {
            return back()->with(['fail' => 'fail']);
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

    public function deleteChild($id){
        /** To delete Old Image**/
        $oldChildImage = DB::select('select * from childs where id = ?', [$id]);
        $imagePath = 'images/child_images/' . $oldChildImage[0]->childImage;
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        $delete = DB::delete('delete from childs where id = ?', [$id]);
        if($delete){
            return redirect('/home')->with(['childDel'=>'Child Deleted Successfully.']);
        } else {
            return redirect()->back()->with(['child-not-del'=>'Something Wrong.']);
        }
    }

    public function editChild(Request $request, $id){
        $request->validate([
            'image' => 'image',
            'fname' => 'required',
            'lname' => 'required',
            'date' => 'required',
            'gender' => 'required',
            'ethnicity' => 'required',
            'Jaundice' => 'required',
        ]);
        $userId = DB::select('select * from childs where id = ?',[$id]);
        if ($request->Jaundice == 'yes') {
            $Jaundice = 1;
        } else {
            $Jaundice = 0;
        }
        if ($image = $request->file('image')) {
            /** To delete Old Image**/
            $oldChildImage = DB::select('select * from childs where id = ?', [$id]);
            $imagePath = 'images/child_images/' . $oldChildImage[0]->childImage;
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            /** To Add New Image **/
            $destinationFolder = 'images/child_images/';
            $newImageName = date('YmdHis') . "_" . $userId[0]->userId . "." . $image->getClientOriginalExtension();
            $image->move($destinationFolder, $newImageName);
        } else {
            $childImage = DB::select('select * from childs where id = ?', [$id]);
            $newImageName = $childImage[0]->childImage;
        }
        $updateChild = DB::update(
        'update childs set
                firstName = ?,
                lastName = ?,
                childImage = ?,
                birthDate = ?,
                gender = ?,
                childEthnicity = ?,
                childJaundice = ?
                where id = ?',
        [
            $request->fname,
            $request->lname,
            $newImageName,
            $request->date,
            $request->gender,
            $request->ethnicity,
            $Jaundice,
            $id ]
        );
        if ($updateChild) {
            return back()->with(['success-edit' => 'Data Changed Successfully']);
        } else {
            return back()->with(['fail-edit' => 'fail']);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminQuController extends Controller
{
    public function QaShowToddler()
    {
        return view('admin.QaToddler');
    }
    public function updateQuToddleren(Request $request)
    {
        $json = file_get_contents('site_settings/QA.json');
        $data = json_decode($json, true);

        // Set data
        $data['question_toddler_en'][0] = $request->q0;
        $data['question_toddler_en'][1] = $request->q1;
        $data['question_toddler_en'][2] = $request->q2;
        $data['question_toddler_en'][3] = $request->q3;
        $data['question_toddler_en'][4] = $request->q4;
        $data['question_toddler_en'][5] = $request->q5;
        $data['question_toddler_en'][6] = $request->q6;
        $data['question_toddler_en'][7] = $request->q7;
        $data['question_toddler_en'][8] = $request->q8;
        $data['question_toddler_en'][9] = $request->q9;

        // Encode the updated data back to JSON
        $updatedJson = json_encode($data);

        // Save the updated JSON back to the file
        file_put_contents('site_settings/QA.json', $updatedJson);

        return redirect('/QaShowToddler')->with('success', 'Data updated successfully');

        //   return view($id);
    }
    public function updateQuToddlerar(Request $request)
    {
        $json = file_get_contents('site_settings/QA.json');
        $data = json_decode($json, true);

        // Set data
        $data['question_toddler_ar'][0] = $request->q0;
        $data['question_toddler_ar'][1] = $request->q1;
        $data['question_toddler_ar'][2] = $request->q2;
        $data['question_toddler_ar'][3] = $request->q3;
        $data['question_toddler_ar'][4] = $request->q4;
        $data['question_toddler_ar'][5] = $request->q5;
        $data['question_toddler_ar'][6] = $request->q6;
        $data['question_toddler_ar'][7] = $request->q7;
        $data['question_toddler_ar'][8] = $request->q8;
        $data['question_toddler_ar'][9] = $request->q9;

        // Encode the updated data back to JSON
        $updatedJson = json_encode($data);

        // Save the updated JSON back to the file
        file_put_contents('site_settings/QA.json', $updatedJson);

        return redirect('/QaShowToddler')->with('success', 'Data updated successfully');

        //   return view($id);
    }
    // ---------------------------------------------------------
    public function QaShowChild()
    {
        return view('admin.QaChild');
    }
    public function updateQuChilden(Request $request)
    {
        $json = file_get_contents('site_settings/QA.json');
        $data = json_decode($json, true);

        // Set data
        $data['question_child_en'][0] = $request->q0;
        $data['question_child_en'][1] = $request->q1;
        $data['question_child_en'][2] = $request->q2;
        $data['question_child_en'][3] = $request->q3;
        $data['question_child_en'][4] = $request->q4;
        $data['question_child_en'][5] = $request->q5;
        $data['question_child_en'][6] = $request->q6;
        $data['question_child_en'][7] = $request->q7;
        $data['question_child_en'][8] = $request->q8;
        $data['question_child_en'][9] = $request->q9;

        // Encode the updated data back to JSON
        $updatedJson = json_encode($data);

        // Save the updated JSON back to the file
        file_put_contents('site_settings/QA.json', $updatedJson);

        return redirect('/QaShowChild')->with('success', 'Data updated successfully');

        //   return view($id);
    }
    public function updateQuChildar(Request $request)
    {
        $json = file_get_contents('site_settings/QA.json');
        $data = json_decode($json, true);

        // Set data
        $data['question_child_ar'][0] = $request->q0;
        $data['question_child_ar'][1] = $request->q1;
        $data['question_child_ar'][2] = $request->q2;
        $data['question_child_ar'][3] = $request->q3;
        $data['question_child_ar'][4] = $request->q4;
        $data['question_child_ar'][5] = $request->q5;
        $data['question_child_ar'][6] = $request->q6;
        $data['question_child_ar'][7] = $request->q7;
        $data['question_child_ar'][8] = $request->q8;
        $data['question_child_ar'][9] = $request->q9;

        // Encode the updated data back to JSON
        $updatedJson = json_encode($data);

        // Save the updated JSON back to the file
        file_put_contents('site_settings/QA.json', $updatedJson);

        return redirect('/QaShowChild')->with('success', 'Data updated successfully');

        //   return view($id);
    }
    // ---------------------------------------------------------
    public function QaShowAdolecent()
    {
        return view('admin.QaAdolecent');
    }
    public function updateQuAdolecenten(Request $request)
    {
        $json = file_get_contents('site_settings/QA.json');
        $data = json_decode($json, true);

        // Set data
        $data['question_adolecent_en'][0] = $request->q0;
        $data['question_adolecent_en'][1] = $request->q1;
        $data['question_adolecent_en'][2] = $request->q2;
        $data['question_adolecent_en'][3] = $request->q3;
        $data['question_adolecent_en'][4] = $request->q4;
        $data['question_adolecent_en'][5] = $request->q5;
        $data['question_adolecent_en'][6] = $request->q6;
        $data['question_adolecent_en'][7] = $request->q7;
        $data['question_adolecent_en'][8] = $request->q8;
        $data['question_adolecent_en'][9] = $request->q9;

        // Encode the updated data back to JSON
        $updatedJson = json_encode($data);

        // Save the updated JSON back to the file
        file_put_contents('site_settings/QA.json', $updatedJson);

        return redirect('/QaShowAdolecent')->with('success', 'Data updated successfully');

        //   return view($id);
    }
    public function updateQuAdolecentar(Request $request)
    {
        $json = file_get_contents('site_settings/QA.json');
        $data = json_decode($json, true);

        // Set data
        $data['question_adolecent_ar'][0] = $request->q0;
        $data['question_adolecent_ar'][1] = $request->q1;
        $data['question_adolecent_ar'][2] = $request->q2;
        $data['question_adolecent_ar'][3] = $request->q3;
        $data['question_adolecent_ar'][4] = $request->q4;
        $data['question_adolecent_ar'][5] = $request->q5;
        $data['question_adolecent_ar'][6] = $request->q6;
        $data['question_adolecent_ar'][7] = $request->q7;
        $data['question_adolecent_ar'][8] = $request->q8;
        $data['question_adolecent_ar'][9] = $request->q9;

        // Encode the updated data back to JSON
        $updatedJson = json_encode($data);

        // Save the updated JSON back to the file
        file_put_contents('site_settings/QA.json', $updatedJson);

        return redirect('/QaShowAdolecent')->with('success', 'Data updated successfully');

        //   return view($id);
    }

    // ---------------------------------------------------------
    public function QaShowAdult()
    {
        return view('admin.QaAdult');
    }
    public function updateQuAdulten(Request $request)
    {
        $json = file_get_contents('site_settings/QA.json');
        $data = json_decode($json, true);

        // Set data
        $data['question_adult_en'][0] = $request->q0;
        $data['question_adult_en'][1] = $request->q1;
        $data['question_adult_en'][2] = $request->q2;
        $data['question_adult_en'][3] = $request->q3;
        $data['question_adult_en'][4] = $request->q4;
        $data['question_adult_en'][5] = $request->q5;
        $data['question_adult_en'][6] = $request->q6;
        $data['question_adult_en'][7] = $request->q7;
        $data['question_adult_en'][8] = $request->q8;
        $data['question_adult_en'][9] = $request->q9;

        // Encode the updated data back to JSON
        $updatedJson = json_encode($data);

        // Save the updated JSON back to the file
        file_put_contents('site_settings/QA.json', $updatedJson);

        return redirect('/QaShowAdult')->with('success', 'Data updated successfully');

        //   return view($id);
    }
    public function updateQuAdultar(Request $request)
    {
        $json = file_get_contents('site_settings/QA.json');
        $data = json_decode($json, true);

        // Set data
        $data['question_adult_ar'][0] = $request->q0;
        $data['question_adult_ar'][1] = $request->q1;
        $data['question_adult_ar'][2] = $request->q2;
        $data['question_adult_ar'][3] = $request->q3;
        $data['question_adult_ar'][4] = $request->q4;
        $data['question_adult_ar'][5] = $request->q5;
        $data['question_adult_ar'][6] = $request->q6;
        $data['question_adult_ar'][7] = $request->q7;
        $data['question_adult_ar'][8] = $request->q8;
        $data['question_adult_ar'][9] = $request->q9;

        // Encode the updated data back to JSON
        $updatedJson = json_encode($data);

        // Save the updated JSON back to the file
        file_put_contents('site_settings/QA.json', $updatedJson);

        return redirect('/QaShowAdult')->with('success', 'Data updated successfully');

        //   return view($id);
    }
}

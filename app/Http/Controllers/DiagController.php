<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Childs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DiagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $child_id = Childs::where('id', $id)->first();
        return view('pages.diog', compact('child_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
        $request->validate([
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required',
            'q4' => 'required',
            'q5' => 'required',
            'q6' => 'required',
            'q7' => 'required',
            'q8' => 'required',
            'q9' => 'required',
            'q10' => 'required',
        ]);

        $response = Http::asForm()->post(

            'http://127.0.0.1:5504/autism_adult',

            [
                'a1' => $request->q1,
                'a2' => $request->q2,
                'a3' => $request->q3,
                'a4' => $request->q4,
                'a5' => $request->q5,
                'a6' => $request->q6,
                'a7' => $request->q7,
                'a8' => $request->q8,
                'a9' => $request->q9,
                'a10' => $request->q10,
                'age' => '28',                     // Calculate From Birth Date
                'sex' => 'f',                     // From Database
                'ethnicity' => 'middle eastern', // From Database
                'Jaundice' => 'yes',            // From Database
                'Family_mem_with_ASD' => 'no', // From Database
                'Who_completed_the_test' => 'family member'
            ]
        );
        $data = $response->json();

        return view('pages.result', compact('data'));
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
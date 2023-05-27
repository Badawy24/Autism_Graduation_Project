<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class recommendController extends Controller
{
    public function doc_health_recommend()
    {
        $doctors = DB::select('select * from doctors');
        $healthcare = DB::select('select * from healthcares');
        return view('pages.recommendation')->with(['doctors' => $doctors, 'healthcare' => $healthcare]);
    }
}

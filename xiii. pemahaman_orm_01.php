<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\School;

class SchoolController extends Controller
{

    public function index()
    {
        $schools = School::all();
        return view('filter.filter', compact('schools'));
    }

    public function filterpost(Request $request)
    {
        $schools = School::where('inaugurated_date','>=',$request->start_date)
                                    ->where('inaugurated_date','<=',$request->end_date)
                                    ->get();
       
        return view('filter.filter', compact('schools'));
    }
}

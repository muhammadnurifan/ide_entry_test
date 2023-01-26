<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\School;

class SchoolController extends Controller
{
    public function getInauguratedSchool()
    {
        $school = DB::table('school')
                ->select('id', 'school_name', 'inaugurated_date')
                ->get();

        return response()->json([
            'status' => (bool) $school,
            'message' => 'Data has been retrieved successfully',
            'data' => $school
        ], 200);
    }

    
}

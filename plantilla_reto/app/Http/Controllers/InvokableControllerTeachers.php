<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class InvokableControllerTeachers extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $teachers = DB::table('teachers')->get();

        return view('partials.activitie',['teachers' =>$teachers]);
    }
}

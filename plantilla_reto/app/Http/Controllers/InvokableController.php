<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class InvokableController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $activities = DB::table('activities')->get();

        return view('pages.index',['activities' =>$activities]);
    }
}


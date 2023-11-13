<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class InvocableController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $mountains = DB::table('mountains')->get();

        return view('mountains',['mountains' =>$mountains]);
    }
}

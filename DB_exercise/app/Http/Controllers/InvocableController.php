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


        $mountains0 = DB::table('mountains') ->get();


        $mountains1 = DB::table('mountains')
        ->where('belongsToRange', true)
        ->where ('firstClimbDate','>',"2000-01-01")
        ->where('continent', 'Europe')
        ->get();

        $mountains2  =  DB::table('mountains')
        ->where('height' , '>=', 1500)
        ->orWhere(function ($query){
            $query->where('belongsToRange', false)
                    ->where('name','NOT  RE GEXP','[aeiou]$');
        } )->get();


       return view('mountains',['mountains0' =>$mountains0, 'mountains1' =>$mountains1, 'mountains2'=>$mountains2]);
        }
    }


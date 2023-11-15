<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class taskController extends Controller
{
    public function insertData(Request $request){
        $name = $request['name'];




        return redirect()->route('index');
    }

    public function delateData(){
        return view();
    }





}


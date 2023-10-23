<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{



    public function showEdadform(Request $request){
        $name = $request['name'];
        $subname = $request['subname'];
        if($name==""){
            $name="Anonymus name";
        }
        return view('edadform',['name'=>$name, 'subname'=>$subname]);
    }



       
    public function showNameform(){
        return view('nameform');
    }




    public function showinfo(Request  $request){
        $edad = $request['edad'];

        return view('showinfo',['edad'=>$edad]);
    }
}


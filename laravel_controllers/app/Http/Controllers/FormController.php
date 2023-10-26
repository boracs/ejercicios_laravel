<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{


    public function showEdadform(Request $request)
    {
        {
            $name = $request['name'];
            $surbname = $request['surbname'];
            if($name==""){
                $name="Anonymus name";
            }
            if($surbname==""){
                $surbname="Anonymus surbane";
            }
            return view('edadform',['name'=>$name, 'surbname'=>$surbname]);
        } 
    }

    public function showNameform()
    {
        return view('nameform');
    }


    public function showinfo(Request  $request ,$name ,$surbname){
        $edad = $request['age'];
        $name = $name;
        $surbname = $surbname;
        return view('showinfo',['edad'=>$edad , 'name'=>$name ,'surbname'=>$surbname]);
    }


    public function showIndex()
    {
        return view('index');
    }


}


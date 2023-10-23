<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showEdadform(){
        return view('edadform');
    }
    public function showNameform(){
        return view('nameform');
    }
}

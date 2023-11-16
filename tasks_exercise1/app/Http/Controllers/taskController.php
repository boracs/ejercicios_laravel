<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Task;

class taskController extends Controller
{
    
    
    
    public function showData(){
        $tasks = Task::all();
        return view('pages.index',['tasks'=>$tasks]);
    }

    
    
    public function insertData(Request $request){
        $task = Task::create([
            'name' => $request['name'],
        ]);
        return redirect()->route('show');
    }

    public function delateData(){
        return view();
    }





}


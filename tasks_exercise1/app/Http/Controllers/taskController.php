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

        if($request['name']!=""){
            $task = Task::create([
            'name' => $request['name'],
            ]);
            return view('pages.create');
        }else{
            $vacio="formulario_vacio";
            return view('pages.create',['vacio'=>$vacio]);
        }
    }
    

    public function deleteData($id){
        $tarea = Task::find($id);
        $tarea->delete();
        return redirect()->route('show')->with('success', 'Tarea eliminada exitosamente.');;
    }


    public function searchData(){

      return view("pages.search");

    }


    public function searchData2(Request $request){

        $textoBuscado =  $request['busqueda'];
        $tasks= Task::where('name','like', '%'.$textoBuscado. "%")->get();
        return view('pages.search',['tasks'=>$tasks]);

    }
}


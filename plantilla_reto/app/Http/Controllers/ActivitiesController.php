<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activitie;

class ActivitiesController extends Controller
{



    public function showInicio(){
        $activities = Activitie::all();
        return view('pages.index',['activities'=>$activities]);
    }





    public function showAddActivitie(){
        $activities = Activitie::all();
        return view('pages.addActivitie');
    }






    public function AddActivitie(Request $request){
        $creada = "la lista fue creada exitosamente";
        $error = "faltan campos por rellenar";

         if($request['nombre']=="" || $request['lugar']==""||$request['precio'] =="" ||  $request['imagen']==""|| $request['descripcion']==""){
            $error = "faltan campos por rellenar";
            //return redirect()->route('showAddActivitie')->with('error', $error);
            return view('pages.addActivitie')->with('error', $error);
        }else{
        $numero_aleatorio = rand(1, 5);
        Activitie::create([
            'nombre'=> $request['nombre'],
            'lugar'=> $request['lugar'],
            'precio'=> $request['precio'],
            'imagen'=> $request['imagen'],
            'descripcion'=> $request['descripcion'],
            'valoracion'=> $numero_aleatorio,
            'comentarios'=> "Comentario",
        ]);
            $creada = "la lista fue creada exitosamente";
            return view('pages.addActivitie')->with('error', $creada);
             //return redirect()->route('showAddActivitie')->with('creada', $creada);
        }
    }


    public function showActivitiesManager(){
        $activities = Activitie::all();
        return view('pages.activitiesManager')->with('activities',$activities);
    }

    public function showActivitiesManagerSearch(Request $request){
        $texto_de_busqueda = $request['search'];
        $activities = Activitie::where('nombre','like','%'.$texto_de_busqueda.'%')->get();
        return view('pages.activitiesManager')->with('activities',$activities);
    }


    public function deleteActivitie(Request $request, $id){
        $activitie = Activitie::findOrFail($id);
        $activitie->delete();
        return redirect()->route('showActivitiesManager');
    }
    

    public function showEditActivitie(Request $request, $id){
        $activitie = Activitie::findOrFail($id);
        return view('pages.editActivitie',['activitie'=>$activitie]);
    }
    
    public function ditActivitie(Request $request, $id){
        $activitie = Activitie::findOrFail($id);
        $activitie->nombre = $resquest['nombre'];
        $activitie->lugar = $resquest['lugar'];
        $activitie->precio = $resquest['precio'];
        $activitie->imagen = $resquest['imagen'];
        $activitie->descripcion = $resquest['descripcion'];

        $activitie->save();


        return redirect()->route('showActivitiesManager')->with('mensajeDeEdicionExito', 'Editado con exito');
    }


}

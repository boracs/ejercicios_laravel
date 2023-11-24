<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    

public function showUsuarios(){

    $usuarios = DB::table('usuarios')->get(); 
    return view('index',['usuarios'=> $usuarios]);

}

public function deleteUsuarios($id){
    $usuario = Usuario::findOrFail($id);
    $usuario->delete();
 
    return redirect(route('showUsuarios'));

}

public function addUsuario(Request $request){

    $usuario = new Usuario;
    $usuario->name = $request['name'];
    $usuario->email = $request['email'];
    $usuario->card = $request['card'];
    $usuario->save();

    return redirect(route('showUsuarios'));

}



public function showUpdateUsuario($id){

    $usuario = Usuario::find($id);
    return view('editUsuario',['usuario'=>$usuario]);
}



public function UpdateUsuario(Request $request, $id){

    $usuario = Usuario::find($id);
    $usuario->name = $request['name'];
    $usuario->email = $request['email'];
    $usuario->card = $request['card'];
    $usuario->save();

    return redirect(route('showUsuarios'));
}

}

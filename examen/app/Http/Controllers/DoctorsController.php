<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorsController extends Controller
{
    

public function showDoctors (){
$doctors = Doctor::all();
return view('pages.Doctors',['doctors'=>$doctors]);
}

public function deleteDoctor($id){
    $doctor = Doctor::find($id);
    $doctor->delete();
    /*
    $pacientes = Patient::where('id_doctor',$id);
    foreach($pacientes as $paciente){
        $paciente->id_doctor = "";
    }
    */
   return  redirect(route('showDoctors'));
}

public function edditDoctor($id){

    $doctor = Doctor::find($id);
    return view('pages.Doctor',['doctor'=> $doctor]);
}


public function edditDoctorChange(Request $request, $id){
    $doctor =  Doctor::find($id);
    $doctor->name = $request['name'];
    $doctor->apellidos = $request['apellidos'];
    $doctor->numero_pacientes = $request['numero_pacientes'];
    $doctor->save();
    
    return redirect(route('showDoctors'));
}


}

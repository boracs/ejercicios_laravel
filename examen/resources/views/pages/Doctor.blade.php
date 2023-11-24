@extends('layouts.layout')


@section('content')


<h3 class="text-center m-5">Editando doctor con id : {{ $doctor->id }} y nombre{{ $doctor->nomobre }} </h3>

<form action="{{ route('edditDoctorChange',['id'=> $doctor->id ] ) }} " method="post">
                @csrf
                <label for="">nombre</label>
                <input name="name" value="{{ $doctor->name }} "  type="text">

                <label for="">apellidos</label>
                <input name="apellidos" value="{{ $doctor->apellidos }} "  type="text">

                <label for="">numero_pacientes</label>
                <input name="numero_pacientes" value="{{ $doctor->numero_pacientes }} "  type="text">

                <button type="submit">Editar</button>
             
            </form>






@endsection
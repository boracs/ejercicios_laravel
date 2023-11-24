@extends('layouts.layout')




@section('content')

<div class="m-5 d-flex" style="flex-wrap:wrap;">
@forelse ($doctors as $doctor)

<div class="card m-3" style="width:300px;">
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><strong>{{ $doctor->name }}</strong> </li>
        <li class="list-group-item">{{ $doctor->apellidos }}</li>
        <li class="list-group-item">{{ $doctor->numero_pacientes }}</li>
    </ul>
    <div class="d-flex justify-content-around">
            <form action=" {{ route('deleteDoctor',['id'=> $doctor->id]) }} " method="post">
                @csrf
                @method('delete')
                <button class=" m-1 btn btn-success"> Delete</button>
            </form>
            <button class="m-1 btn btn-success"><a class="text-white" href="{{ route ( 'edditDoctor',['id'=>$doctor->id] ) }}">Eddit</a></button>
    </div>
 </div>

@empty
   NO hay doctores en la DB
@endforelse
</div>




@endsection
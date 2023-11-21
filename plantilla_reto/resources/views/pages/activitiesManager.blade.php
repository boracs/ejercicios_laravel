@extends('layouts.layout')




@section('content')
    @include('partials.title',['titulo'=>'Act. Manager'])

    <div class="w-full d-flex justify-content-center m-5">
    <form  action="{{ route('showActivitiesManagerSearch') }}" method="get"    class="d-flex mt-3 " role="search" style="width:300px;">
            @csrf
            <input name="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success" type="submit">Buscar</button>
    </form>
    </div>

   @if(isset($mensajeDeEdicionExito))
   <div class="d-flex justify-content-center">
        <p>Actividad editada correctamente</p>
   </div>

    @endif

    <div id="contenedor_carteles">
    @foreach($activities as $activitie)
          @include('partials.activitieAdmin',['activitie'=> $activitie])
    @endforeach
    </div>
@endsection
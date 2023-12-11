@extends("layouts.layout")

@section('content')

@include('partials.title',['titulo'=>'Edit.Act.'])


<h3 class="text-center m-5">EDITANDO  ACTIVIDAD CON ID :{{ $activitie->id }} </h3>
<div class="text-light container contenedor_formulario bg-dark p-5 mt-5 mb-5">
        
        <h3>AÑADIR NUEVA ATIVIDAD</h3>
        <form action="{{ route('edditActivitie',['id'=>$activitie['id']]) }}" method ="post">
          @CSRF
          @method('PUT')
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nombre: </label>
            <input name="nombre" value="{{ $activitie->nombre }}" type="text" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1"  class="form-label">Lugar: </label>
            <input name="lugar" type="text" value="{{ $activitie->lugar }}" class="form-control" id="exampleFormControlInput1" >
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1"   class="form-label">Precio: </label>
            <input name="precio" type="text"  value="{{ $activitie->precio }}" class="form-control" id="exampleFormControlInput1" >
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1"  class="form-label">Imagen: </label>
            <input name="imagen" type="text" value="{{ $activitie->imagen }}" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlTextarea1"  class="sform-label"> Descripcion</label>
            <textarea name="descripcion" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $activitie->descripcion }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">
              Añadir Cambios
            </button>
        </form>

    </div>



@endsection
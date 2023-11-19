@extends("layouts.layout")


@section('content')

@include('partials.title',['titulo'=> 'Add Act.'])



<div class="text-light container contenedor_formulario bg-dark p-5 mt-5 mb-5">
        
        <h3>AÑADIR NUEVA ATIVIDAD</h3>
        <form action="{{ route('addActivitie') }}" method ="post">
          @CSRF
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nombre: </label>
            <input name="nombre" type="text" class="form-control" id="exampleFormControlInput1" placeholder="name...">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Lugar: </label>
            <input name="lugar" type="text" class="form-control" id="exampleFormControlInput1" placeholder="lugar...">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Precio: </label>
            <input name="precio" type="text" class="form-control" id="exampleFormControlInput1" placeholder="precio...">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Imagen: </label>
            <input name="imagen" type="text" class="form-control" id="exampleFormControlInput1" placeholder="nombre de la imagen">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label"> Descripcion</label>
            <textarea name="descripcion" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">
              Añadir actividad
            </button>
        </form>
            

        @if ( isset($creada) )
        <div class="form_crear_act_alerta mt-2"><p>{{ $creada }}</p></div>
        @endif
        @if (isset($error))
            <div class="form_crear_act_alerta mt-2"><p>{{ $error }}</p></div>
        @endif

    </div>


@endsection

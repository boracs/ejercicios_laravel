@extends("layouts.layout")



@section('content')

<div><h1 class="text-center">formulario para añadir ropa</h1></div>
<div id="divform" class="mt-5">
<form method = "post" action="" class="p-5">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre Articulo</label>
        <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Precio</label>
        <input name="precio" type="text" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Marca</label>
        <input name="marca" type="text" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Agregar</button>
</form>

</div>


<h3 class="text-center">Articulos</h3>
<div class="contenedor_articulos">

@include('partials.articulo')


</div>

@endsection

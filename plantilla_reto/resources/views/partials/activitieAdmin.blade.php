
  <div class="cont_cartel">
      <img class="img_principal_cartel" src="{{ $activitie->imagen }}" alt="">
      <h5>{{ $activitie->nombre }}</h5>
      <div class="cont_descripcion_cartel">
        <p> <strong>Id = </strong> {{ $activitie->id }}</p>
      </div>
      <div class="d-flex justify-content-between cont_precios_valoraciones align-items-center ">
        <img class="img_cartel_valoracion" src='{{ asset("assets/images/{$activitie->valoracion}e.png") }}' alt="">
        <p class="mt-3 al precio_cartel">Precio: <strong>{{ $activitie->precio }}</strong>€</p>
      </div>
        <div class="d-flex justify-content-around">

            <form action="{{ route('deleteActivitie',['id'=> $activitie['id']]) }}"method="post">
                @csrf
                @method('DELETE')
                <button class=" boton_cartel btn btn-success btn_cartel" type="submit">Eliminar </button>
             </form>

             <form action="{{ route ('edirtActivitie',['id'=>$activitie['id']]) }}" method="get">
                @csrf
                <button class=" boton_cartel btn btn-success btn_cartel" type="submit">Editar </button>
             </form>
        </div>
    </div>
 
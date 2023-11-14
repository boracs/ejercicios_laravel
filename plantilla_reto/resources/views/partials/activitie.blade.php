
@foreach ( $activities as $activitie)
<div class="cont_cartel">
<img src="{{ asset ('imagenes/about-2.jpg') }} " alt="">
  <h5>     {{ $activitie->name }} </h5>
  <div class="cont_descripcion_cartel">
    <p> <strong>Descripcion</strong> {{ $activitie->description }}  </p>
  </div>
  <button class=" boton_cartel btn btn-success btn_cartel" type="button" data-bs-toggle="offcanvas"
    data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Ver detalles</button>

  <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
    aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-header">
      <h4 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">{{ $activitie->name }} </h4>

    </div>
    <div class="offcanvas-body">
      <p>DESCRIPCION: {{ $activitie->description }} .</p>
      <div class="comentarios_cartel">
        <h5>Nombre del comentarista</h5>
        <p>Comentario Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, iure.</p>
      </div>
    </div>
  </div>
</div>
  @endforeach


  <!-- CARDS-->
 <div class="cont_cartel">
      <img class="img_principal_cartel" src="{{ $activitie->imagen }}" alt="">
      <h5>{{ $activitie->nombre }}</h5>
      <div class="cont_descripcion_cartel">
        <p> <strong>Descripcion</strong> {{ $activitie->descripcion }}</p>
      </div>
      <div class="d-flex justify-content-between cont_precios_valoraciones align-items-center ">
        <img class="img_cartel_valoracion" src='{{ asset("assets/images/{$activitie->valoracion}e.png") }}' alt="">
        <p class="mt-3 al precio_cartel">Precio: <strong>{{ $activitie->precio }}</strong>€</p>
      </div>
      <button class=" boton_cartel btn btn-success btn_cartel" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Ver detalles</button>
    </div>
    <!--      of canvas   -->
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
      aria-labelledby="offcanvasWithBothOptionsLabel">
      <div class="offcanvas-header">
        <h4 class="text-center offcanvas-title" id="offcanvasWithBothOptionsLabel">{{ $activitie->nombre }}</h4>
      </div>
      <div class="offcanvas-body">
        <p>DESCRIPCION: {{ $activitie->descripcion }}.</p>
        <div class="comentarios_cartel">
          <h5>COMENTARIOS</h5>
          <!---------------------comentaios-------------------->
          <div class="card mt-3 mb-3">
            <div class="card-body justify-content-center">
              <h6 class="card-title text-center">Alexandra Yovanick</h6>
              <div class="d-flex">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <img class="img_comentario_offcanvas" src="imagenes/about.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="card ">
            <div class="card-body justify-content-center">
              <h6 class="card-title text-center">Alexandra Yovanick</h6>
              <div class="d-flex">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <img class="img_comentario_offcanvas" src="imagenes/about.jpg" alt="">
              </div>
            </div>
          </div>
          <!--Comentariso formulario offcanvas-->
          <div class="formulario_canvas">
            <form action="">
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Deja tu comentario...</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <button type="button" class="btn btn-dark">Comentar</button>

            </form>
          </div>
          <button class="mt-3 boton_cartel btn btn-success btn_offcanvas" type="button">Ver actividad</button>
          <!----------fin-comentaio-------------------->
          <!--   fin    of canvas   -->
        </div>
      </div>
    </div>

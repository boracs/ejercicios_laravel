<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('assets/css/css.css') }}">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!--importante meter lso estilos.css despues de bootstrap pok seran los ultimos que aplique-->
  <link rel="stylesheet" href="estilos.css">
</head>

<body>
  <nav class="navbar navbar-dark bg-black fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="@"><img class="img_logo" src="{{ asset('assets/images/logo.jpeg') }}" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
        aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
        aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"> HOP UP</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="{{ route('showIndex') }}">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('showAddActivitie') }}">ADD ACTIVITIE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('showActivitiesManager') }}">Activities Manager</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                ACTIVITIES
              </a>
              <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item" href="#">MOUNTAINS</a></li>
                <li><a class="dropdown-item" href="#">XTREM</a></li>
                <li><a class="dropdown-item" href="#">SWIMINGPOOL</a></li>
                <li><a class="dropdown-item" href="#">BEACH</a></li>
                <li><a class="dropdown-item" href="#">ANIMALS</a></li>
                <li><a class="dropdown-item" href="#">VEHICLES</a></li>
                <li><a class="dropdown-item" href="#">ROUTES</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">ALL ACTIVITIES</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success" type="submit">Search</button>
          </form>
          <div class="dropdown mt-3">
            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
              aria-expanded="false" data-bs-auto-close="outside">
              Log-in
            </button>
            <form class="dropdown-menu p-4">
              <div class="mb-3">
                <label for="exampleDropdownFormEmail2" class="form-label">Usuarios:</label>
                <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@example.com">
              </div>
              <div class="mb-3">
                <label for="exampleDropdownFormPassword2" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password">
              </div>
              <div class="mb-3">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="dropdownCheck2">
                  <label class="form-check-label" for="dropdownCheck2">
                    Remember me
                  </label>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Iniciar sesion</button>
            </form>

          </div>
        </div>
      </div>
  </nav>
  <div class="" id="aux_navegador">
  </div>





@yield('content')




  <!-- FOOTER -->
  <footer class="w-100 py-4 flex-shrink-0">
    <div class="container py-4">
      <div class="row gy-4 gx-5">
        <div class="col-lg-4 col-md-6">
          <h5 class="h1 text-white">PARA NAHIKARI</h5>
          <p class="small  text-white">Lorem ipsum dolor sit amet.</p>
          <p class="small  text-white mb-0">&copy; Copyrights. All rights reserved. <a class=" text-white"
              href="#">Borja Bolado</a></p>
        </div>
        <div class="col-lg-2 col-md-6">
          <h5 class="text-white mb-3">Quick links</h5>
          <ul class="list-unstyled  text-white">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Get started</a></li>
            <li><a href="#">FAQ</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6">
          <h5 class="text-white mb-3">Quick links</h5>
          <ul class="list-unstyled  text-white">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Get started</a></li>
            <li><a href="#">FAQ</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6">
          <h5 class="text-white mb-3">Newsletter</h5>
          <p class="small  text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt.</p>
          <form action="#">
            <div class="input-group mb-3">
              <input class="form-control text-white" type="text" placeholder="Recipient username"
                aria-label="Recipient username" aria-describedby="button-addon2">
              <button class="btn btn-primary" id="button-addon2" type="button"><i
                  class="fas fa-paper-plane"></i></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </footer>


</body>
</html>
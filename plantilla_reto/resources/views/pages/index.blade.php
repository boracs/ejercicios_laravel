@extends('layouts.app')

@section('content')

  <div id="contenedor_titulo" class=" bg-dark w-100 flex-column">
      <h1 id="titulo" class="text-uppercase text-white text-center">hop up</h1>
    </div>


  <div id="contenedor_carteles">
    @include('partials.activitie')
  </div>

<h4 class="text-center">NUESTRO EQUIPO</h4>
  <div id="contenedor_carteles">

      @foreach ($teachers as $teacher)
      <div>
              <h5>PROFESORes: {{ $teacher->name }} </h5>
              <p>TITULOS: {{ $teacher->titles }}</p>
              <img src="{{ $teacher->img }}" alt="">
      </div>
      @endforeach
  </div>


  @include('partials.form')
  
@endsection




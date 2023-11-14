@extends('layouts.app')

@section('content')

  <div id="contenedor_titulo" class=" bg-dark w-100 flex-column">
      <h1 id="titulo" class="text-uppercase text-white text-center">hop up</h1>
    </div>


  <div id="contenedor_carteles">
    @include('partials.activitie')
  </div>


  @include('partials.form')

@endsection




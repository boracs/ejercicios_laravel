@extends('layouts.layout')




@section('content')


    @include('partials.title',['titulo'=>'Hop Up'])
    <div id="contenedor_carteles">
    @foreach($activities as $activitie)
          @include('partials.activitie',['activitie' => $activitie])
    @endforeach
    </div>


    @include("partials.form")

    
@endsection

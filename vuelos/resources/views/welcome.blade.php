<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h1>VUELOS</h1>

@forelse ($flights as $flight)
<div style="border:1px solid black;">
<p>    {{ $flight->name }} </p>
<p> {{ $flight->fecha_salida }}</p>
<p> {{ $flight->origen }}</p>
<p> {{ $flight->destino }}</p>
</div>
<form action="{{ route('deleteFlight',['id' => $flight->id ]) }}" method ="POST">
    @csrf
    @method('delete')
    <button type="submit">Eliminar</button>
</form>



@empty
    No flights.
@endforelse




    
</body>
</html>
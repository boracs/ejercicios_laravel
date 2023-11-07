@extends('layouts.plantilla1')

@section ('seccion_principal')

<h1>Eventos proximos:</h1>
<table>
@forelse( $noticias as $key => $value)

        <tr>
            <td> {{ $key }}</td>
            <td> {{ $value }}</td>
        </tr>

    @empty
        <p>No hay noticias lo siento</p>

@endforelse
</table>

@endsection
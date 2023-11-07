
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titulo: @yield('title','HomePage')  </title>
</head>
<body>

@section('header')
    @include('partials.header')
@show

@section ('nav')
    @include('partials.nav')
@show
 
@section('seccion_principal')
@show

@section ('footer')
    @include('partials.footer')
@show

</body>
</html>
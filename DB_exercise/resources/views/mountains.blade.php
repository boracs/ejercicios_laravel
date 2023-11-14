<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>LISTA DE MONTES</h1>


@foreach ( $mountains0 as $monte)
    <p>{{ $monte->name }}</p>
@endforeach
    
<br><hr><br>



@foreach ( $mountains1  as $monte)
    <p>{{ $monte->name }}</p>
@endforeach
    
<br><hr><br>

@foreach ( $mountains2  as $monte)
    <p>{{ $monte->name }}</p>
@endforeach


</body>
</html>
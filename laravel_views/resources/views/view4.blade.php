<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


    @if($id%2==0)
    <p style="background-color:red"> {{ $valor }}</p>
    @else
        <p>{{ $valor }}</p>
    @endif




</body>
</html>
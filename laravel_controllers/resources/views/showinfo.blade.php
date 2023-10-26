<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello {{ $name }}  {{ $surbname }}  </h1>
    <p>Your age is : {{ $edad }} </p>
    <button><a href="{{ config('app.url')}}/">Back</a></button>


</body>
</html>
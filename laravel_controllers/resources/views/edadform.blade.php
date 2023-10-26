<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Hello {{ $name }} {{ $surbname }}</h1>
    <hr>
    <form action="{{ config('app.url')}}/showinfo/{{ $name }}/{{ $surbname }}" method = 'post'>
    @csrf
    <label for="Age">Edad</label>
    <input type="text" name="age">
    <br>
    <input type="submit">
    </form>


</body>
</html>
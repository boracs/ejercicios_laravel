<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Hello   {{ $name }} {{ $subname }}</h1>
    <hr>
    <form action="{{ config('app.url')}}/showinfo" method = 'post'>
    @csrf
    <label for="Age"></label>
    <input type="text" name="age">
    <br>
    <input type="submit">
    </form>

</body>
</html>
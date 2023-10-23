<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Hello rellena los campos </h1>
    <hr>
    <form action="{{ config('app.url')}}/showinfo">
    <label for="Age"></label>
    <input type="text" name="age">
    <br>
    <input type="submit">
    </form>

</body>
</html>
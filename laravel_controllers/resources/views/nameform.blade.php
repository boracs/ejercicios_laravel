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
    <form action="{{ config('app.url')}}/edadform" method="post">
    @csrf
    <label for="Age">Name</label>
    <input type="text" name="name">
    <label for="Name">Surbname</label>
    <input type="text" name="surbname">
    <br>
    <input type="submit">
    </form>

</body>
</html>
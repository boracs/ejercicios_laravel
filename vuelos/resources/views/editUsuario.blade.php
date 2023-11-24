<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="{{ route('updateUsuario',['id'=> $usuario->id]) }}" method="post">
            @csrf
            <label for="">name</label>
            <input value="{{ $usuario->name }} " type="text" name="name">
            <label  for="">email</label>
            <input value="{{ $usuario->email }} " type="text" name="email">
            <label for="">card</label>
            <input  value=" {{ $usuario->card }}" type="text" name="card">
            <button type="submit">Enviar</button>
        </form>









</body>
</html>
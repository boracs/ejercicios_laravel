<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <h1>TODOS LOS USUARIOS</h1>

    <div>



    @forelse ($usuarios as $usuario)
        <div style="border:1px solid black; width:400px; background-color:blue; color:white;">
            <p>{{ $usuario->name }} </p>
            <p>{{ $usuario->email }} </p>
            <p>{{ $usuario->card }} </p>

            <form action="{{ route('deleteUsuarios',['id'=>$usuario->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <button>Eliminar</button>
            </form>

            <form action="{{ route('showUpdateUsuario',['id'=>$usuario->id]) }}" method="get">
                @csrf
                <button>ditar</button>
            </form>
        </div>
    @empty
         No  hay usuarios.
    @endforelse


    <div style="  border:1px solid black; width:800px; background-color:red; color:white;">

        <form action="{{ route('addUsuario') }}" method="POST">
            @csrf
            <label for="">name</label>
            <input type="text" name="name">
            <label for="">email</label>
            <input type="text" name="email">
            <label for="">card</label>
            <input type="text" name="card">
            <button type="submit">Enviar</button>
        </form>

    </div>
   

    </div>



</body>
</html>
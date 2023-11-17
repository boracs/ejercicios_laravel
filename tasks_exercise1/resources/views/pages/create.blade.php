@extends('layouts.layout')


@section('content')
    <main id="contMain">
        <div class="card " style="width: 18rem;">
                <div class="card-header ">
                        New task
                </div>
                <div class="mb-3 m-3">
                        <form action="{{ route('insert') }} " method ="GET">
                            @csrf
                            <label for="exampleFormControlInput1" class="form-label">New Task</label>
                            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Introduce la tarea...">
                           
                            @if(isset($vacio))
                            <div class=" d-flex m-2 bg-danger-subtle div_advertencia_campo_vacio">
                                <label for="exampleFormControlInput1" class="form-label">EL campo debe estar lleno</label>
                            </div>  
                            @endif
                            <button type="submit" class="btn btn-light mt-2 ">Add</button> 
                        
                        </form>
                </div>

        </div>
    </main>
    
@endsection

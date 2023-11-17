@extends('layouts.layout')


@section('content')
<form action="">
    <div class="input-group flex-nowrap">
    <span class="input-group-text" id="addon-wrapping">@</span>
    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
    </div>
</form>




<main id="contMain">
        <div class="card " style="width: 28rem;">
                <div class="card-header ">
                        Search Task
                </div>
                <div class="mb-3 m-3">
                <form action="{{ route('searchData') }} " method = "POST">
                     @csrf
                     <div class="input-group flex-nowrap">
                         <span class="input-group-text" id="addon-wrapping">Task name:</span>
                         <input  name ="busqueda" type="text" class="form-control" placeholder="taks name..." aria-label="Username" aria-describedby="addon-wrapping">
                         <button type="submit" class="btn btn-light m-2 ">Search</button> 
                        </div>
                </form>
            <div class="d-flex flex-column" >
                    <h5 class="m-2">Coincidencias: </h5>
                    @if(isset($tasks))
                        <ul>
                            @foreach( $tasks as $task)
                                <div>
                                    <li>{{ $task->name }}</li>
                                </div>


                            @endforeach
                        </ul>
                    @endif
            </div>
                        
                </div>

        </div>
    </main>
@endsection
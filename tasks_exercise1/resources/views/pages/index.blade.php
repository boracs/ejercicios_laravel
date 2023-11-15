@extends('layouts.layout')


@section('content')
    <main id="contMain">
            <div class="card" style="width: 18rem;">
            <div class="card-header">
                New task
            </div>
            <div class="mb-3 m-3">
                <form action="">
                    @csrf
                    <label for="exampleFormControlInput1" class="form-label">New Task</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Introduce la tarea...">
                    <button type="button" class="btn btn-light mt-2 ">Add</button> 

                </form>
            </div>
         <hr>
            <div class="card" style="width: 18rem;">
            <div class="card-header">
                New task
            </div>
                <div class="d-flex align-items-center justify-content-around">
                <li class=" m-3 list-group-item">task1</li>
                <form action="" method="POST">
                     @csrf
                    <button type="button" class="btn btn-danger m-3">Danger</button> 
                </form>
            </div>
            </div>
    </main>
@endsection
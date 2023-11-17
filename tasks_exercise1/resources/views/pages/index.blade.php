@extends('layouts.layout')


@section('content')
    <main id="contMain">
            <div class="card" style="width: 18rem;">
            <div class="card-header">
                New task
            </div>
            <div class="mb-3 m-3">
                <form action="{{ route('insert') }} " method ="POST">
                    @csrf
                    <label for="exampleFormControlInput1" class="form-label">New Task</label>
                    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Introduce la tarea...">
                    <button type="submit" class="btn btn-light mt-2 ">Add</button> 
                </form>
            </div>
         <hr>
            <div class="card" style="width: 18rem;">
            <div class="card-header">
                New task
            </div>
                <div class="d-flex flex-column  justify-content-around">
                    @foreach ($tasks as $task)

                        <div class="d-flex flex-row justify-content-between  align-items-center">
                            <li class="m-3 list-group-item">{{ $task->name }}</li>
                            <form action=" {{ route('delete',['id' =>$task->id]) }} " method="POST">
                                    @csrf
                                 <button type="submite" class="btn btn-danger m-3">Danger</button> 
                             </form>
                        </div>

                    @endforeach
                </div>
            </div>
    </main>
@endsection

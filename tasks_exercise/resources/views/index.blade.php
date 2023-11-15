@extends('layouts.layout')


@section('content')

<hr>


<div class=" container" style="border: 1px solid black;">
  <div class="mb-3">
    <h3>task</h3>
    <form action="" method="POST">
        @csrf
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder=" Task name...">
    </form>
</div>
  <button type="button" class="btn btn-light">Add task</button>

</div>


<hr>


<div class=" container" style="border: 1px solid black;">
    <h3>current tasks</h3>
    <div class="m-1 p-1 d-flex justify-content-around align-items-center">
        <p class="m-0">task1</p>
        <form action="" method="POST">
            @csrf
             <button type="button" class="btn btn-danger">Delete</button>
        </form>
    </div>
  </div>
 

@endsection
@extends('layouts.layout')


@section('content')
    <main id="contMain">
           
        <div class="card" style="width: 28rem;">
             <div class="card-header">
                New tasks
                </div>
                    <div class="d-flex flex-column  justify-content-around">
                        @foreach ($tasks as $task)
                            <div class="d-flex flex-row justify-content-between  align-items-center">
                                <li class="m-3 list-group-item">{{ $task->name }}</li>
                                        @include('partials.buttonDelate')
                             
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@extends('layout')
@section('title')
    Todolist
@endsection
@section('content')
    <div class="container">
        <h2 class="text-center">Todo List</h2>
        <div>
            <a class="btn btn-success" id="addTask" href="/todos/create"><i class="fa fa-plus-circle"
                    aria-hidden="true"></i> Add
                Task</a>
        </div>
        <div class="mt-3 todoContainer">
            <ul class="list-group">
                @foreach ($todos as $todo)
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-10"><label>{{ $todo->todo }}</label></div>
                            <div class="col-md-1"><a href="/todos/{{ $todo->id }}/edit" class="btn btn-warning"><i
                                        class="fa fa-pencil-square-o" aria-hidden="true"></i></a></div>
                            <div class="col-md-1">
                                <form action="/todos/{{ $todo->id }}" method="POST">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"
                                            aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
